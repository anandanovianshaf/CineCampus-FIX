<?php
session_start();
// Connection to the database
$servername = "localhost";  
$username = "root";
$password = ""; // Adjust if necessary
$dbname = "login"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get movie ID from URL
$movie_id = isset($_GET['id']) ? $_GET['id'] : 0;

// Store movie ID in session for use in other pages
$_SESSION['last_movie_id'] = $movie_id;

// Fetch the movie based on the ID
$sql = "SELECT id, name, poster, genre, year, duration, short_synopsis, synopsis, director, writer, actors, age_certificate, trailer_link FROM movies WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $movie_id);
$stmt->execute();
$result = $stmt->get_result();

// Handle connection from search-results.php
if ($result->num_rows === 0) {
    echo "<p class='text-center text-white'>Film tidak ditemukan.</p>";
    exit;
}

// Fetch the number of reviews for the movie
$sql_reviews = "SELECT COUNT(*) as total_reviews FROM reviews WHERE movie_id = ?";
$stmt_reviews = $conn->prepare($sql_reviews);
$stmt_reviews->bind_param("i", $movie_id);
$stmt_reviews->execute();
$result_reviews = $stmt_reviews->get_result();
$row_reviews = $result_reviews->fetch_assoc();
$total_reviews = $row_reviews['total_reviews'];

// Fetch the number of ratings for the movie
$sql_ratings = "SELECT COUNT(*) as total_ratings FROM ratings WHERE movie_id = ?";
$stmt_ratings = $conn->prepare($sql_ratings);
$stmt_ratings->bind_param("i", $movie_id);
$stmt_ratings->execute();
$result_ratings = $stmt_ratings->get_result();
$row_ratings = $result_ratings->fetch_assoc();
$total_ratings = $row_ratings['total_ratings'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineCampus</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
    <style>
  
        @media (max-width: 480px) {
            .banner .title {
                font-size:2rem;
            }
            .banner .text {
                font-size:0.7rem;
            }
            .banner .text-syn {
                font-size:1.1rem;
            }
        }
    </style>
</head>

<body>
    <div class="w-full h-full min-h-screen flex flex-col">
        <!-- Header Section -->
        <?php include 'header.php'; ?>

        <?php if ($result->num_rows > 0): ?>
            <?php $movie = $result->fetch_assoc(); ?>
            <div class="w-full h-[550px] flex flex-col relative bg-black">
                <div class="flex flex-row items-center w-full h-full">
                <img src="<?php echo $movie['poster']; ?>" alt="<?php echo $movie['name']; ?>" class="absolute w-full h-full object-cover z-0">
                    <div class="absolute w-full h-full bg-black bg-opacity-70 z-0"></div>

                    <div class="banner w-10/12 flex flex-col mx-auto z-10 p-4">
                        <span class="title font-bold font-istok mt-16 text-4xl text-white"><?php echo $movie['name']; ?></span>
                        <span class="text-syn font-inter mt-5 text-xl text-white"><?php echo $movie['short_synopsis']; ?></span>

                        <div class="flex flex-wrap gap-4 mt-5">
                            <a href="#" class="bg-black bg-opacity-30 text-white px-4 py-2 rounded-full text-sm font-inter hover:drop-shadow-lg duration-200">
                                <?php echo $movie ['age_certificate']; ?>
                            </a>
                            <a href="#" class="bg-black bg-opacity-30 text-white px-4 py-2 rounded-full text-sm font-inter hover:drop-shadow-lg duration-200">
                                <?php echo $movie['year']; ?>
                            </a>
                            <a href="#" class="bg-black bg-opacity-30 text-white px-4 py-2 rounded-full text-sm font-inter hover:drop-shadow-lg duration-200">
                                <?php echo $movie['duration']; ?>
                            </a>
                        </div>
                        <a href="<?php echo $movie['trailer_link']; ?>" target="_blank" class=" text w-fit bg-[#FFC65D] text-white px-4 py-2 mt-14 rounded-full text-sm font-inter hover:drop-shadow-lg duration-200">
                            PLAY TRAILER
                        </a>
                        <div class="flex flex-wrap gap-4 mt-5">
                            <a href="ratings.php?id=<?php echo $_GET['id']; ?>" class="text text-white mt-14 px-4 py-2 rounded-full text-sm font-inter hover:drop-shadow-lg duration-200">ULASAN</a>
                            <a href="discuss.php" class="text text-white mt-14 px-4 py-2 rounded-full text-sm font-inter hover:drop-shadow-lg duration-200">FORUM DISKUSI</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative min-h-screen overflow-hidden m-0 p-10 w-full flex flex-col md:flex-row gap-6 bg-gradient-to-b from-bg_red via-bg_red to-bg_red_2 text-white">
                <!-- Poster Section -->
                <div class="poster w-full md:w-1/4 flex flex-col items-center mb-6">
                    <img src="<?php echo $movie['poster']; ?>" alt="<?php echo $movie['name']; ?>" class="w-[50%] rounded-lg mb-4">
                    <p class="text-lg font-semibold mt-2"><?php echo $movie['name']; ?></p>
                    <p class="text-sm text-gray-300"><?php echo $movie['genre']; ?></p>
                    <p class="text-lg font-bold"><?php echo $movie['age_certificate']; ?></p>
                </div>

                <!-- Detail Section -->
                <div class="details w-full md:w-2/4 bg-black bg-opacity-40 rounded-lg p-6">
                    <div class="icons flex gap-8 mb-6">
                        <div class="flex flex-col items-center">
                            <i class="fas fa-comment text-3xl mb-2"></i>
                            <p class="text-sm font-semibold">REVIEWER</p>
                            <p class="text-sm"><?php echo $total_reviews; ?> Reviews</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <i class="fas fa-thumbs-up text-3xl mb-2"></i>
                            <p class="text-sm font-semibold">RATINGS</p>
                            <p class="text-sm"><?php echo $total_ratings; ?> Ratings</p>
                        </div>
                    </div>
            
                    <div class="detail-info mb-6">
                        <h3 class="text-xl font-semibold mb-2">DETAILS</h3>
                        <p>Director: <?php echo $movie['director']; ?></p>
                        <p>Writer: <?php echo $movie['writer']; ?></p>
                        <p>Actors: <?php echo $movie['actors']; ?></p>
                        <p>Genre: <?php echo $movie['genre']; ?></p>
                        <p>Certificate: <?php echo $movie['age_certificate']; ?></p>
                    </div>
            
                    <div class="synopsis">
                        <h3 class="text-xl font-semibold mb-2">SINOPSIS</h3>
                        <p><?php echo $movie['synopsis']; ?></p>
                    </div>
                </div>

                <!-- Platform Section -->
                <div class="platform w-full md:w-1/4 flex flex-col items-center gap-4">
                    <h3 class="text-lg font-semibold mb-4">WHERE TO WATCH?</h3>
                    <a href="https://netflix.com" target="_blank">
                        <img src="img/netflix.png" alt="Netflix" class="h-10">
                    </a>
                    <a href="https://primevideo.com" target="_blank">
                        <img src="img/amazon.png" alt="Prime Video" class="h-12">
                    </a>
                    <a href="https://hotstar.com" target="_blank">
                        <img src="img/disney.png" alt="Disney Hotstar " class="h-12">
                    </a>
                    <a href="https://hulu.com" target="_blank">
                        <img src="img/hulu.png" alt="Hulu" class="h-10">
                    </a>
                </div>
            </div>
        <?php else: ?>
            <p class="text-center text-white">Film tidak ditemukan.</p>
        <?php endif; ?>

        <div class="footer bg-black flex justify-between items-center py-2 px-10 text-gray-400 text-sm">
            <div class="footer-links flex gap-8">
                <!-- Footer links can go here -->
            </div>
            <?php include 'footer.php'; ?>
        </div>
    </div>
</body>
<style>
    .poster img {
        width: 100%; /* Mengatur lebar poster menjadi 100% dari kontainer */
        height: auto; /* Memastikan tinggi poster proporsional */
    }

    .details h3 {
        font-size: 1.5rem; /* Ukuran font untuk judul detail */
    }

    .details p {
        font-size: 1rem; /* Ukuran font untuk teks detail */
    }

    @media (max-width: 768px) {
        .poster img {
        width: 50%; /* Mengatur lebar poster menjadi 100% dari kontainer */
        height: auto; /* Memastikan tinggi poster proporsional */
    }
        .details h3 {
            font-size: 1.25rem; /* Ukuran font untuk judul detail di tablet */
        }

        .details p {
            font-size: 0.9rem; /* Ukuran font untuk teks detail di tablet */
        }
    }

    @media (max-width: 480px) {
        .poster img {
        width: 50%; /* Mengatur lebar poster menjadi 100% dari kontainer */
        height: auto; /* Memastikan tinggi poster proporsional */
    }
        .details h3 {
            font-size: 1rem; /* Ukuran font untuk judul detail di mobile */
        }

        .details p {
            font-size: 0.8rem; /* Ukuran font untuk teks detail di mobile */
        }
    }
</style>
</html>

<?php 
// Close connection
$conn->close(); 
?>