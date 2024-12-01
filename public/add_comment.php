<?php
session_start();
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $discussion_text = trim($_POST['discussion_text']);
    $movie_id = $_SESSION['last_movie_id'];
    $user_id = $_SESSION['user_id'];

    if (!empty($discussion_text)) {
        $sql = "INSERT INTO discussions (movie_id, user_id, discussion_text, created_at) 
                VALUES (?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iis", $movie_id, $user_id, $discussion_text);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $comment_id = $stmt->insert_id;
            $sql = "SELECT d.id, d.discussion_text, u.nama as username, d.created_at 
                    FROM discussions d 
                    JOIN users u ON d.user_id = u.id
                    WHERE d.id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $comment_id);
            $stmt->execute();
            $result = $stmt->get_result();
            $comment = $result->fetch_assoc();

            echo json_encode($comment); // Kirim data komentar dalam bentuk JSON
        }
    }
}
