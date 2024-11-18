<?php
// Include koneksi database
include 'connect.php';

// Ambil data input dari form
$movie_name = isset($_POST['movie_name']) ? trim($_POST['movie_name']) : '';

// Query ke database untuk mencari film berdasarkan nama (case-insensitive)
$query = "SELECT id, poster, name, age_certificate, duration, actors 
          FROM movies 
          WHERE LOWER(name) LIKE LOWER(?)";
$stmt = $conn->prepare($query);
$search_term = "%" . $movie_name . "%";
$stmt->bind_param("s", $search_term);
$stmt->execute();
$result = $stmt->get_result();

// Mengecek apakah film ditemukan
$movies = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $movies[] = $row; // Simpan hasil ke array
    }
} else {
    $error_message = "MOVIE NOT FOUND!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineCampus - Search Results</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <script>
        // Redirect jika film tidak ditemukan
        <?php if (isset($error_message)): ?>
            setTimeout(function() {
                window.location.href = "search.php"; // Kembali ke halaman search setelah 5 detik
            }, 5000);
        <?php endif; ?>
    </script>
</head>
<body class="bg-gradient-to-b from-bg_red via-bg_red to-bg_red_2 text-white">
    <!-- Header Section -->
    <?php include 'header.php'; ?>

    <!-- Main Content Section -->
    <main class="flex flex-col items-center py-8">
        <div class="w-full min-h-screen">
            <h1 class="text-3xl font-bold mt-6 tracking-wider text-center">SEARCH RESULTS</h1>
            <p class="text-lg mt-2 text-center">
                <?php echo isset($movie_name) ? "Search Results for \"$movie_name\"" : ""; ?>
            </p>

            <!-- Search Results List -->
            <div class="mt-8 space-y-6">
                <?php if (!empty($movies)): ?>
                    <?php foreach ($movies as $movie): ?>
                        <div class="movie-container flex bg-white bg-opacity-10 rounded-lg shadow-md p-4">
                            <!-- Movie Poster -->
                            <img src="<?php echo htmlspecialchars($movie['poster']); ?>" alt="<?php echo htmlspecialchars($movie['name']); ?> Poster" class="w-24 h-36 object-cover rounded-md mr-4">
                            <!-- Movie Details -->
                            <div>
                                <h2 class="ml-4 text-xl font-bold"><?php echo htmlspecialchars($movie['name']); ?></h2>
                                <p class="ml-4 text-sm mt-1 text-gray-300"><?php echo htmlspecialchars($movie['age_certificate']); ?> | <?php echo htmlspecialchars($movie['duration']); ?></p>
                                <p class="ml-4 mb-6 text-sm mt-1 text-gray-300">Actors: <?php echo htmlspecialchars($movie['actors']); ?></p>
                                <a href="movie.php?id=<?php echo $movie['id']; ?>" class="bg-background2 text-xs ml-4 text-white py-2 px-4 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300">Detail</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                      <!-- Tampilkan pesan error jika tidak ada hasil -->
                      <p class="text-center text-xl text-gray-300 mt-6">
                        <?php echo $error_message; ?>
                    </p>
                    <p class="text-center text-1rem mt-10 mb-12 text-yellow-400">
                        You will be redirected to search page in 5 sec.
                    </p>
                   <?php endif; ?>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <?php include 'footer.php'; ?>
</body>
</html>
