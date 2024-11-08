<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CineCampus</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
  </head>
  <body class="bg-gradient-to-b from-bg_red via-bg_red to-bg_red_2 text-white">
    <div class="min-h-screen bg-gradient-to-b from-bg_red via-bg_red to-bg_red_2 text-white flex flex-col items-center">
    <!-- Header Section -->
    <?php include 'header.php' ?>
    <!-- Rating Section -->
    <div class="w-full flex flex-col items-center py-10 px-5 text-center">
        <h1 class="text-4xl font-istok font-bold">RATINGS</h1>
        <p class="text-lg mt-3 font-istok">Place your rating about this movie here</p>
        
        <!-- Movie Poster and Rating Options -->
        <div class="flex flex-col md:flex-row items-center mt-8 space-y-5 md:space-y-0 md:space-x-10">
            <!-- Movie Poster -->
            <div class="w-52 h-72 bg-black overflow-hidden">
                <img src="https://sinopsisfilm.id/wp-content/uploads/2024/05/13-Bom-di-Jakarta-2023.webp" alt="13 Bom di Jakarta" class="w-full h-full object-cover drop-shadow-2xl shadow-2xl">
                <p class="mt-2 font-bold text-lg">13 BOM DI JAKARTA</p>
            </div>
            
            <!-- Rating Options -->
            <div class="flex flex-col items-center">
                <p class="text-lg mb-4">How much stars for the movie?</p>
                <div class="flex space-x-2" id="starRating">
                    <!-- Star Icons with inline JavaScript interaction -->
                    <svg onclick="setRating(1)" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="cursor-pointer star">
                        <polygon points="12 2 15 8 22 9 17 14 18 21 12 17 6 21 7 14 2 9 9 8 12 2"></polygon>
                    </svg>
                    <svg onclick="setRating(2)" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="cursor-pointer star">
                        <polygon points="12 2 15 8 22 9 17 14 18 21 12 17 6 21 7 14 2 9 9 8 12 2"></polygon>
                    </svg>
                    <svg onclick="setRating(3)" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="cursor-pointer star">
                        <polygon points="12 2 15 8 22 9 17 14 18 21 12 17 6 21 7 14 2 9 9 8 12 2"></polygon>
                    </svg>
                    <svg onclick="setRating(4)" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="cursor-pointer star">
                        <polygon points="12 2 15 8 22 9 17 14 18 21 12 17 6 21 7 14 2 9 9 8 12 2"></polygon>
                    </svg>
                    <svg onclick="setRating(5)" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="cursor-pointer star">
                        <polygon points="12 2 15 8 22 9 17 14 18 21 12 17 6 21 7 14 2 9 9 8 12 2"></polygon>
                    </svg>
                </div>

                <p class="text-lg mt-4">OR</p>
                <p class="text-lg mt-4">Tell us your score!</p>
                <div class="w-16 h-16 bg-transparent border border-sky-200 rounded-full flex items-center justify-center mt-2 text-2xl">
                <input type="number" min="0" max="10" step="0.1" placeholder="0.0" class="bg-transparent text-center text-white w-full h-full rounded-full focus:outline-none" />
                </div>
            </div>
        </div>
        <script>
            function setRating(rating) {
                const stars = document.querySelectorAll("#starRating .star");
                stars.forEach((star, index) => {
                    // Fill the star if its index is less than the selected rating
                    if (index < rating) {
                        star.setAttribute("fill", "white");  // filled for selected stars
                    } else {
                        star.setAttribute("fill", "none");   // empty for unselected stars
                    }
                });
            }
        </script>
        <!-- Submit Button -->
        <button class="mt-10 px-6 py-2 bg-white text-black rounded-lg font-semibold">SUBMIT</button>
    </div>
        </div>
    <!-- Footer Section -->
   <?php include 'footer.php'; ?>
</body>
</html>
