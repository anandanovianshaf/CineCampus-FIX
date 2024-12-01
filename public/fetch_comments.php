<?php
session_start();
include 'connect.php';

// Ambil movie_id dari session atau query string
$movie_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($movie_id <= 0) {
    echo json_encode([]); // Jika movie_id invalid, kirimkan array kosong
    exit;
}

// Ambil komentar untuk movie_id tertentu
$sql = "SELECT c.id, c.comment_text, u.username FROM comments c
        JOIN users u ON c.user_id = u.id
        WHERE c.movie_id = ?
        ORDER BY c.created_at DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $movie_id);
$stmt->execute();
$result = $stmt->get_result();

$comments = [];
while ($row = $result->fetch_assoc()) {
    $comments[] = $row;
}

echo json_encode($comments);
?>
