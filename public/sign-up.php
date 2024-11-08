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

    <!-- Sign Up Section -->
    <div class="relative mt-16 z-10 p-8 bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-lg shadow-lg w-full max-w-sm">
      <h1 class="text-white text-center font-semibold mb-4">CREATE YOUR ACCOUNT</h1>
      
      <!-- Sign Up Form -->
      <form action="sign-up-process.php" method="POST">
        <!-- Full Name -->
        <div class="relative mb-4">
          <input type="text" name="full_name" placeholder="Enter your full name" class="w-full p-3 rounded bg-white bg-opacity-30 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-red-500" required>
          <i class='bx bxs-user-circle absolute right-3 top-3 text-white'></i>
        </div>

        <!-- NIM -->
        <div class="relative mb-4">
          <input type="text" name="nim" placeholder="Enter your NIM" class="w-full p-3 rounded bg-white bg-opacity-30 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-red-500" required>
          <i class='bx bxs-id-card absolute right-3 top-3 text-white'></i>
        </div>

        <!-- Password -->
        <div class="relative mb-4">
          <input type="password" name="password" placeholder="Enter your password" class="w-full p-3 rounded bg-white bg-opacity-30 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-red-500" required>
          <i class='bx bxs-key absolute right-3 top-3 text-white'></i>
        </div>

        <!-- Confirm Password -->
        <div class="relative mb-4">
          <input type="password" name="confirm_password" placeholder="Confirm your password" class="w-full p-3 rounded bg-white bg-opacity-30 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-red-500" required>
          <i class='bx bxs-lock absolute right-3 top-3 text-white'></i>
        </div>

        <!-- Sign Up Button -->
        <button type="submit" class="w-full py-3 mt-3 bg-red-600 text-white rounded hover:bg-red-700 transition duration-200">Sign Up</button>
      </form>

      <!-- Already have an account? -->
      <h1 class="text-white text-center mt-4"><a href="login.php" class="hover:underline">Already have an account? Login</a></h1>
    </div>
    
  </body>
</html>
