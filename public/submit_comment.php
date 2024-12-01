<?php
session_start();
include 'connect.php';

// Pastikan user sudah login
if (!isset($_SESSION['user_id'])) {
    echo "User belum login!";
    exit;
}

// Ambil data input
$user_id = $_SESSION['user_id'];
$movie_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$comment_text = isset($_POST['comment']) ? $_POST['comment'] : '';

if ($movie_id <= 0 || empty($comment_text)) {
    echo "Komentar tidak valid!";
    exit;
}

// Masukkan komentar ke database
$sql = "INSERT INTO comments (movie_id, user_id, comment_text, created_at) VALUES (?, ?, ?, NOW())";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iis", $movie_id, $user_id, $comment_text);
$stmt->execute();

echo "Komentar berhasil ditambahkan!";
?>
