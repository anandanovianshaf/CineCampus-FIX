<?php
session_start();
include 'connect.php';  // Menggunakan koneksi dari connect.php

// Ambil last movie ID dari session
$movie_id = isset($_SESSION['last_movie_id']) ? $_SESSION['last_movie_id'] : 0;

// Ambil nama film berdasarkan ID terakhir
$sql = "SELECT name FROM movies WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $movie_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $movie = $result->fetch_assoc();
    $lastMovieName = $movie['name'];
} else {
    $lastMovieName = "Unknown Movie";
}

// Ambil komentar-komentar untuk film tersebut
$sql = "SELECT d.id, d.discussion_text, u.nama as username, d.created_at 
        FROM discussions d 
        JOIN users u ON d.user_id = u.id
        WHERE d.movie_id = ? AND d.parent_id IS NULL
        ORDER BY d.created_at DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $movie_id);
$stmt->execute();
$result = $stmt->get_result();
$comments = [];
while ($row = $result->fetch_assoc()) {
    $comments[] = $row;
}

// Ambil balasan untuk setiap komentar
foreach ($comments as &$comment) {
    $comment_id = $comment['id'];
    $sql_replies = "SELECT d.id, d.discussion_text, u.nama as username, d.created_at 
                    FROM discussions d 
                    JOIN users u ON d.user_id = u.id
                    WHERE d.parent_id = ? 
                    ORDER BY d.created_at ASC";
    $stmt_replies = $conn->prepare($sql_replies);
    $stmt_replies->bind_param("i", $comment_id);
    $stmt_replies->execute();
    $replies_result = $stmt_replies->get_result();
    $replies = [];
    while ($reply = $replies_result->fetch_assoc()) {
        $replies[] = $reply;
    }
    $comment['replies'] = $replies;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineCampus</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-gradient-to-b from-bg_red via-bg_red to-bg_red_2 text-white flex flex-col min-h-screen">
    <div class="flex-1">
        <?php include 'header.php'; ?>

        <div class="max-w-4xl mx-auto p-8">
            <div class="text-center flex flex-row gap-8 mb-8">
                <h1 class="text-3xl font-bold mb-6">Discussion Forum</h1>
                <p class="text-lg mt-2 font-semibold"><?php echo htmlspecialchars($lastMovieName); ?></p>
            </div>

            <!-- Discussion Comments -->
            <div class="space-y-6" id="commentContainer">
                <?php if (count($comments) == 0): ?>
                    <p id="noCommentsMessage" class="text-center text-white">We don't have any discussion yet.</p>
                <?php else: ?>
                    <?php foreach ($comments as $comment): ?>
                        <div class="flex flex-col md:flex-row items-start mb-6 space-y-4 md:space-y-0 md:space-x-4">
                            <div class="bg-gray-500 rounded-full w-12 h-12 flex items-center justify-center">
                                <i class='bx bxs-user text-2xl text-white'></i>
                            </div>
                            <div class="bg-gray-800 p-6 rounded-lg flex-1 text-sm">
                                <p><strong><?php echo htmlspecialchars($comment['username']); ?>:</strong> <?php echo htmlspecialchars($comment['discussion_text']); ?></p>
                                <div class=" bg-black bg-opacity-30 backdrop-blur-md mt-4 w-fit p-3 rounded-lg inline-block text-xs text-white px-2 py-1">
                                    <p><?php echo date('d M Y', strtotime($comment['created_at'])); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <!-- Comment Input -->
            <div class="flex items-center space-x-4 mt-8">
                <i class='bx bxs-user-circle text-4xl'></i>
                <form id="commentForm">
                    <input id="discussionText" class="flex-1 bg-gray-700 text-white rounded-full px-4 py-2 text-sm" name="discussion_text" placeholder="Type Here" required>
                    <button type="submit" class="text-white bg-gray-700 px-4 py-2 rounded-lg text-sm">Send</button>
                </form>
            </div>
            <p id="errorMessage" class="text-red-500 mt-2 hidden"></p>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        const commentForm = document.getElementById('commentForm');
        const discussionText = document.getElementById('discussionText');
        const commentContainer = document.getElementById('commentContainer');
        const errorMessage = document.getElementById('errorMessage');
        const noCommentsMessage = document.getElementById('noCommentsMessage');

        commentForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const commentText = discussionText.value.trim();
            if (commentText === '') {
                errorMessage.textContent = 'Please write a comment before submitting.';
                errorMessage.classList.remove('hidden');
                return;
            }

            const formData = new FormData();
            formData.append('discussion_text', commentText);

            fetch('add_comment.php', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const newComment = `
                        <div class="flex items-start mb-6 space-x-4">
                            <div class="bg-gray-500 rounded-full w-12 h-12 flex items-center justify-center">
                                <i class='bx bxs-user text-2xl text-white'></i>
                            </div>
                            <div class="bg-gray-800 p-4 rounded-lg flex-1 text-sm">
                                <p><strong>${data.username}:</strong> ${data.comment_text}</p>
                            </div>
                        </div>`;
                    commentContainer.innerHTML += newComment;

                    if (noCommentsMessage) {
                        noCommentsMessage.remove();
                    }
                    discussionText.value = '';
                } else {
                    errorMessage.textContent = data.message || 'your comment has been submitted, refresh to get newer discuss';
                    errorMessage.classList.remove('hidden');
                }
            })
            .catch(() => {
                errorMessage.textContent = 'An error occurred. Please try again.';
                errorMessage.classList.remove('hidden');
            });
        });
    </script>
</body>
</html>
