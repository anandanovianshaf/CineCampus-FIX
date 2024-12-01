<?php
session_start();
include 'connect.php'; // Gunakan koneksi dari connect.php

// Pastikan movie_id tersimpan dalam session
if (!isset($_SESSION['last_movie_id']) || empty($_SESSION['last_movie_id'])) {
    die("Error: No movie selected. Please select a movie first.");
}

$lastMovieId = $_SESSION['last_movie_id'];

// Ambil nama film berdasarkan movie_id terakhir
$sql = "SELECT name FROM movies WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $lastMovieId);
$stmt->execute();
$result = $stmt->get_result();

// Validasi jika nama film ditemukan
if ($result->num_rows > 0) {
    $movie = $result->fetch_assoc();
    $lastMovieName = $movie['name'];
} else {
    $lastMovieName = "Unknown Movie"; // Jika ID tidak valid
}

// Tangani pengiriman review
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['review'])) {
    $reviewText = htmlspecialchars($_POST['review']);
    $userId = $_SESSION['user_id']; // Ambil user_id dari session
    $createdAt = date('Y-m-d H:i:s'); // Timestamp saat ini

    // Simpan review ke database
    $sql = "INSERT INTO reviews (movie_id, user_id, review_text, created_at) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiss", $lastMovieId, $userId, $reviewText, $createdAt);

    if ($stmt->execute()) {
        $successMessage = "Review submitted successfully!";
    } else {
        $errorMessage = "Failed to submit review. Please try again.";
    }
}

// Ambil semua review untuk film saat ini, termasuk username
$sql = "SELECT reviews.review_text, reviews.created_at, users.nama 
        FROM reviews 
        JOIN users ON reviews.user_id = users.id 
        WHERE reviews.movie_id = ? 
        ORDER BY reviews.created_at DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $lastMovieId);
$stmt->execute();
$reviews = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CineCampus</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <style>
        html {
            scroll-behavior: smooth; /* Smooth scrolling */
        }
    </style>
</head>
<body class="bg-gradient-to-b from-bg_red via-bg_red to-bg_red_2 text-white">
    <!-- Header Section -->
    <?php include 'header.php'; ?>

    <!-- Review Section -->
    <div class="flex flex-col items-center justify-center min-h-screen">
        <h1 class="text-4xl font-istok font-bold text-white mt-10">REVIEWS</h1>
        <p class="text-lg font-istok text-gray-300 mt-2">WRITE YOUR REVIEW ABOUT THIS MOVIE HERE</p>

        <?php if (isset($successMessage)): ?>
            <p class="text-green-500"><?php echo $successMessage; ?></p>
        <?php elseif (isset($errorMessage)): ?>
            <p class="text-red-500"><?php echo $errorMessage; ?></p>
        <?php endif; ?>

        <form action="reviews.php#all_reviews" method="POST" class="w-10/12 md:w-8/12 lg:w-6/12 mt-4 bg-[#402020] rounded-lg p-8 shadow-md">
            <p class="text-gray-300 mb-4">TO: <?php echo htmlspecialchars($lastMovieName); ?></p>

            <!-- Input Review -->
            <textarea name="review" class="w-full h-64 p-4 text-gray-300 bg-[#2b1a1a] rounded-lg resize-none placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#FFC65D]" placeholder="WRITE HERE" required></textarea>

            <!-- Submit Button -->
            <button type="submit" class="mt-6 bg-white text-black px-6 py-2 rounded hover:bg-gray-300 transition duration-200">SUBMIT</button>
        </form>

        <h2 id="all_reviews" class="text-3xl font-istok font-bold text-white mt-12">All Reviews for <?php echo htmlspecialchars($lastMovieName); ?></h2>

        <?php if ($reviews->num_rows > 0): ?>
            <?php while ($review = $reviews->fetch_assoc()): ?>
                <div class="w-10/12 md:w-8/12 lg:w-6/12 mt-4 bg-[#402020] rounded-lg p-8 shadow-md">
                    <p class="text-gray-300"><?php echo htmlspecialchars($review['review_text']); ?></p>
                    <p class="text-gray-400 text-sm mt-2">
                        Posted by: <?php echo htmlspecialchars($review['nama']); ?> - <?php echo $review['created_at']; ?>
                    </p>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="text-gray-300 mt-4">No reviews yet. Be the first to submit a review!</p>
        <?php endif; ?>
    </div>

    <!-- Footer Section --> 
    <?php include 'footer.php'; ?>
</body>
</html>
