<?php
session_start();
include 'connect.php';

// Periksa apakah user sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Tangkap user_id dan last_movie_id dari session
$user_id = $_SESSION['user_id'];
$movie_id = $_SESSION['last_movie_id'] ?? 0;

if ($movie_id <= 0) {
    die("Invalid movie ID.");
}

// Fetch detail film
$sql = "SELECT * FROM movies WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $movie_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $movie = $result->fetch_assoc(); // Ambil data film
} else {
    die("Film tidak ditemukan.");
}

// Cek apakah rating sudah ada
$existingRating = null;
$checkSql = "SELECT rating FROM ratings WHERE movie_id = ? AND user_id = ?";
$checkStmt = $conn->prepare($checkSql);
$checkStmt->bind_param("ii", $movie_id, $user_id);
$checkStmt->execute();
$checkResult = $checkStmt->get_result();

if ($checkResult->num_rows > 0) {
    $existingRating = $checkResult->fetch_assoc()['rating'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['enable_rating'])) {
        // Aktifkan input rating kembali (hanya reset tampilan)
        $existingRating = null;
    } elseif (isset($_POST['rating'])) {
        $rating = floatval($_POST['rating']);

        // Validasi rating
        if ($rating < 1 || $rating > 10) {
            die("Rating harus antara 1 dan 10.");
        }

        if ($existingRating !== null) {
            // Update rating
            $updateSql = "UPDATE ratings SET rating = ? WHERE movie_id = ? AND user_id = ?";
            $updateStmt = $conn->prepare($updateSql);
            $updateStmt->bind_param("dii", $rating, $movie_id, $user_id);
            $updateStmt->execute();
            $existingRating = $rating;
            echo "<script>alert('Rating berhasil diperbarui.');</script>";
        } else {
            // Masukkan rating baru
            $insertSql = "INSERT INTO ratings (movie_id, user_id, rating) VALUES (?, ?, ?)";
            $insertStmt = $conn->prepare($insertSql);
            $insertStmt->bind_param("iid", $movie_id, $user_id, $rating);
            $insertStmt->execute();
            $existingRating = $rating;
            echo "<script>alert('Rating berhasil ditambahkan.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CineCampus - Rating</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    
</head>
<body class="bg-gradient-to-b from-bg_red via-bg_red to-bg_red_2 text-white relative">
    <!-- Header Section -->
    <?php include 'header.php'; ?>

    <!-- Rating Section -->
     <!-- Back Button -->
     <a href="movie.php?id=<?php echo $movie_id; ?>" class="absolute ml-10 mt-4 text-white text-2xl hover:text-gray-300 focus:outline-none p-2">
    <i class='bx bx-arrow-back'></i>
</a>

     
    <div class="w-full min-h-screen flex flex-col items-center py-10 px-5 text-center">
        
        <h1 class="text-4xl font-istok font-bold">RATINGS</h1>
        <p class="text-lg mt-3 font-istok">Place your rating about this movie here</p>

        <!-- Movie Poster and Rating Options -->
        <div class="flex flex-col md:flex-row items-center mt-8 space-y-5 md:space-y-0 md:space-x-10">
            <!-- Movie Poster -->
            <div class="w-52 h-72  bg-black overflow-hidden">
                <img src="<?php echo $movie['poster']; ?>" alt="<?php echo htmlspecialchars($movie['name']); ?>" class="w-full h-full object-cover drop-shadow-2xl shadow-2xl">
                <p class="mt-2 font-bold text-lg"><?php echo htmlspecialchars($movie['name']); ?></p>
            </div>

            <!-- Rating Options -->
            <div class="flex flex-col items-center">
                <form method="POST" action="">
                    <!-- Numeric Rating Input -->
                    <p class="text-lg mt-4">Tell us your score!</p>
                    <div class="w-20 h-16 bg-transparent border border-sky-200 rounded-full flex items-center justify-center mt-2 text-2xl">
                        <input type="number" id="numericRating" name="rating" min="1" max="10" step="0.1" placeholder="0.0" 
                               class="bg-transparent text-center text-white w-full h-full rounded-full focus:outline-none"
                               value="<?php echo $existingRating ?? ''; ?>" 
                               <?php echo $existingRating ? 'readonly' : ''; ?>>
                    </div>
                    <?php if ($existingRating !== null): ?>
                        <button type="submit" name="enable_rating" class="mt-4 px-6 py-2 bg-blue-500 text-white rounded-lg font-istok">Change your rating?</button>
                    <?php else: ?>
                        <button type="submit" class="mt-4 px-6 py-2 bg-white text-black rounded-lg font-semibold">Submit Rating</button>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <?php include 'footer.php'; ?>
</body>
</html>