<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CineCampus</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
  </head>
  <body class="bg-gradient-to-b from-bg_red via-bg_red to-bg_red_2 min-h-screen flex items-center justify-center">

    <!-- Include Header -->
    <?php include 'header-login.php'; ?>

    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover bg-center opacity-30 z-0" style="background-image: url('https://wallpapers.com/images/high/movie-poster-background-xw72c00uspkdklqq.webp');"></div>
    
    <!-- Login Section -->
    <div class="relative mt-12 z-10 p-8 bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-lg shadow-lg w-80">
        <h1 class="text-white text-center font-semibold mb-4">HI, STUDENT OF UIN, SEARCHING MOVIES TO WATCH?</h1>

        <!-- Login Form -->
        <form action="login-process.php" method="POST">
        
            <!-- Input NIM -->
            <div class="relative mb-4">
                <input type="text" name="nim" placeholder="NIM" class="w-full p-3 rounded bg-white bg-opacity-30 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-red-500" required>
                <i class='bx bxs-user-circle absolute right-3 top-3 text-white'></i>
            </div>

            <!-- Input Password -->
            <div class="relative mb-4">
                <input type="password" name="password" placeholder="PASSWORD" class="w-full p-3 rounded bg-white bg-opacity-30 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-red-500" required>
                <i class='bx bxs-key absolute right-3 top-3 text-white'></i>
            </div>

            <!-- Login Button -->
            <button type="submit" class="w-full py-3 mt-3 bg-red-600 text-white rounded hover:bg-red-700 transition duration-200">Login</button>
        </form>

        <!-- Sign Up Link -->
        <h1 class="text-white text-center mt-4"><a href="sign-up.php" class="hover:underline">HAVEN'T MADE AN ACCOUNT?</a></h1>
        
        <!-- Sign Up Button -->
        <button class="w-full py-3 mt-2 bg-white bg-opacity-30 text-white rounded hover:bg-opacity-50 transition duration-200">Sign Up</button>
    </div>
    
  </body>
</html>
