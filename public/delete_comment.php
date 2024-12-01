<?php
session_start();
include 'connect.php';

// Pastikan user sudah login
if (!isset($_SESSION['user_id'])) {
    echo "User belum login!";
    exit;
}

// Ambil id komentar yang akan dihapus
$comment_id = isset($_POST['id']) ? intval($_POST['id']) : 0;

if ($comment_id <= 0) {
    echo "Komentar tidak valid!";
    exit;
}

// Cek apakah komentar ini milik user yang sedang login
$user_id = $_SESSION['user_id'];
$sql = "SELECT user_id FROM comments WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $comment_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "Komentar tidak ditemukan!";
    exit;
}

$row = $result->fetch_assoc();
if ($row['user_id'] !== $user_id) {
    echo "Anda tidak memiliki izin untuk menghapus komentar ini!";
    exit;
}

// Hapus komentar dari database
$sql_delete = "DELETE FROM comments WHERE id = ?";
$stmt_delete = $conn->prepare($sql_delete);
$stmt_delete->bind_param("i", $comment_id);
$stmt_delete->execute();

echo "Komentar berhasil dihapus!";
?>
