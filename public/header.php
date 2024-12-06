<?php
    include("connect.php");
?>

<div class="w-full bg-black h-[94px] flex items-center px-5 md:px-10">
    <!-- Bagian Logo dan Menu -->
    <div class="flex w-1/2 items-center">
        <a href="home.php" class="uppercase text-lg font-inter">
            <span class="text-bg_red_2 text-2xl">CINE</span>
            <span class="text-white text-2xl">CAMPUS</span>
        </a>
        <nav class="hidden md:flex ml-5 space-x-3" id="nav-menu">
            <a href="home.php" class="uppercase text-sm text-white font-inter">Home</a>
            <a href="home.php#trending" class="uppercase text-sm text-white font-inter">Trending</a>
            <a href="home.php#premier" class="uppercase text-sm text-white font-inter">Premier</a>
            <a href="home.php#genres" class="uppercase text-sm text-white font-inter">Genres</a>
        </nav>
    </div>

    <!-- Search & Menu Toggle (Mobile) -->
    <div class="flex w-1/2 justify-end items-center">
        <!-- Search Button -->
        <a href="search.php" class="ml-4 text-white hover:text-red-500 transition duration-500">
            <i class='bx bx-search text-2xl'></i>
        </a>
        
        <!-- Logo Home (Mobile) -->
        <a href="home.php" class="block md:hidden text-white">
            <i class='bx bx-home text-2xl ml-4'></i>
        </a>

        <!-- Logout Button -->
        <a href="#" onclick="confirmLogout(event)" class="ml-4 mr-3 pr-4 text-white hover:text-red-500 transition duration-500">
            <i class='bx bx-log-out-circle text-2xl'></i>
        </a>
    </div>
</div>

<!-- Sidebar Menu -->
<div id="sidebar-menu" class="absolute z-100 bg-black m-20 p-8 h-1/2 w-full bg-opacity-100 hidden">
    <div class="flex justify-end p-4">
        <button id="close-menu" class="text-white">
            <i class='bx bx-x text-2xl'></i>
        </button>
    </div>
    <nav class="flex flex-col items-center mt-10">
        <a href="home.php" class="uppercase text-lg text-white font-inter mb-4">Home</a>
        <a href="home.php#trending" class="uppercase text-lg text-white font-inter mb-4">Trending</a>
        <a href="home.php#premier" class="uppercase text-lg text-white font-inter mb-4">Premier</a>
        <a href="home.php#genres" class="uppercase text-lg text-white font-inter mb-4">Genres</a>
    </nav>
</div>

<!-- JavaScript for Logout Confirmation -->
<script>
    function confirmLogout(event) {
        event.preventDefault(); // Menghentikan default action (pengalihan halaman)

        // Menampilkan konfirmasi logout
        const confirmation = confirm("Are you sure you want to logout?");
        
        if (confirmation) {
            // Jika memilih 'Yes', mengarahkan ke logout.php
            window.location.href = 'logout.php'; 
        }
    }
</script>