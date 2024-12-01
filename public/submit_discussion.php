<?php
session_start();
include 'connect.php';  // Menghubungkan ke database

// Mengambil data yang dikirimkan
$comment = isset($_POST['comment']) ? $_POST['comment'] : '';
$parent_id = isset($_POST['parent_id']) ? $_POST['parent_id'] : 0;
$movie_id = isset($_POST['movie_id']) ? $_POST['movie_id'] : 0;
$user_id = $_SESSION['user_id']; // Mengambil user_id dari session

// Validasi input
if ($comment !== '' && $movie_id > 0 && $user_id > 0) {
    // Menyimpan diskusi baru atau balasan
    $sql = "INSERT INTO discussions (movie_id, user_id, discussion_text, parent_id, created_at) 
            VALUES (?, ?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iisi", $movie_id, $user_id, $comment, $parent_id);

    if ($stmt->execute()) {
        echo "Discussion added successfully.";
    } else {
        echo "Error adding discussion.";
    }
}
?>
