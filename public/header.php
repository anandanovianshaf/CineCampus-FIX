<div class="w-full bg-black h-[94px] flex items-center px-5 md:px-10">
    <!-- Bagian Logo dan Menu -->
    <div class="flex w-1/2 items-center">
        <a href="#" class="uppercase text-lg font-inter">
            <span class="text-bg_red_2 text-2xl">CINE</span>
            <span class="text-white text-2xl">CAMPUS</span>
        </a>
        <nav class="hidden md:flex ml-5 space-x-3" id="nav-menu">
            <a href="#home" class="uppercase text-sm text-white font-inter">Home</a>
            <a href="#trending" class="uppercase text-sm text-white font-inter">Trending</a>
            <a href="#premier" class="uppercase text-sm text-white font-inter">Premier</a>
            <a href="#genres" class="uppercase text-sm text-white font-inter">Genres</a>
        </nav>
    </div>

    <!-- Search & Menu Toggle (Mobile) -->
    <div class="flex w-1/2 justify-end items-center">
        <!-- Search Button -->
        <a href="/search" class="hidden md:block">
            <!-- SVG Search Icon -->
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 17a7 7 0 100-14 7 7 0 000 14zM21 21l-5.2-5.2" stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
        
        <!-- Mobile Menu Toggle -->
        <button id="mobile-menu-button" class="block md:hidden text-white">
            <!-- SVG Icon for Mobile Menu Toggle -->
            <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- User Button -->
        <a href="/user" class="ml-4 text-white">User</a>
    </div>
</div>

<!-- JavaScript for Hamburger Menu -->
<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const navMenu = document.getElementById('nav-menu');

    mobileMenuButton.addEventListener('click', () => {
        navMenu.classList.toggle('hidden');
    });
</script>
