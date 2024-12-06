<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineCampus - Search</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <style>
        /* Overwrite custom styles */
        @media (max-width: 480px) {
            .footer .sosmed {
                visibility:hidden;
            }
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        main {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 1rem;
        }

        input[type="text"] {
            max-width: 500px; /* Batas maksimal agar input lebih pendek */
            width: 100%; /* Responsif */
        }
    </style>
</head>
<body class="bg-gradient-to-b from-bg_red via-bg_red to-bg_red_2 text-white">
    <!-- Header Section -->
    <?php include 'header.php'; ?>

    <!-- Main Content Section -->
    <main>
        <div class="w-full max-w-md">
            <h1 class="text-4xl font-bold tracking-wider">SEARCH</h1>
            <p class="text-lg mt-2">What movie do you want to search?</p>
            <form action="search-results.php" method="POST"> <!-- Mengarahkan ke search-results -->
                <div class="mt-6">
                    <input
                        type="text"
                        name="movie_name"
                        placeholder="Title of the movie"
                        class="px-4 py-2 rounded-lg text-black focus:outline-none shadow-lg"
                        required
                    >
                </div>
                <!-- Submit Button -->
                <button type="submit" class="mt-8 text-xs bg-white text-black px-4 py-2 rounded hover:bg-gray-300 transition duration-200">Search</button>
            </form>
            <div class ="mt-12 text-xs text-white">
                <p>Can't find the movie? <a href="https://forms.gle/6uDUu3U9PZHVMDY46" target="_blank" class="bg-white bg-opacity-30 rounded px-3 text-black hover:text-white transition duration-300">Submit here</a> to request a movie!</p>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <?php include 'footer-home.php'; ?>
</body>
</html>