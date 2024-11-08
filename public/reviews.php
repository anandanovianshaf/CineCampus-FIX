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
    <!-- Header Section -->
    <?php include 'header.php' ?>

    <!-- Review Section -->
    <div class="flex flex-col items-center justify-center min-h-screen">
        <h1 class="text-4xl font-istok font-bold text-white mt-10">REVIEWS</h1>
        <p class="text-lg font-istok text-gray-300 mt-2">WRITE YOUR REVIEW ABOUT THIS MOVIE HERE</p>

        <div class="w-10/12 md:w-8/12 lg:w-6/12 mt-4 bg-[#402020] rounded-lg p-8 shadow-md">
            <p class="text-gray-300 mb-4">TO: 13 BOM DI JAKARTA</p>
            <textarea class="w-full h-64 p-4 text-gray-300 bg-[#2b1a1a] rounded-lg resize-none placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#FFC65D]" placeholder="WRITE HERE"></textarea>
            
            <button class="mt-6 bg-white text-black px-6 py-2 rounded hover:bg-gray-300 transition duration-200">SUBMIT</button>
        </div>
    </div>

    <!-- Footer Section -->
   <?php include 'footer.php' ?>
</body>
</html>
