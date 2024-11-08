<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CineCampus</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
  </head>
  <body>
  <div class="w-full h-auto min-h-screen flex flex-col">
            <!-- Header Section -->
             
            <?php include 'header-movie.php'; ?>
          
            <!-- Banner Session -->
            <div class ="w-full h-[560px] flex flex-col absolute bg-black">
            <!-- Banner Data -->
            <div class="flex flex-row items-center w-full h-full absolute ">
                <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/183/2024/06/24/The-Godfather-3130724179.png" alt="Title" class="absolute w-full h-full object-cover">
                <!-- Overlay Bg -->
                <div class="w-full h-full absolute bg-black bg-opacity-30"></div>
                <!-- Description -->
                <div class="w-10/12 flex flex-col ml-28 z-10 p-4">
                    <span class="font-bold font-istok mt-16 text-4xl text-white w-1/2">TITLE</span>
                    <span class="font-inter mt-5 text-xl text-white w-1/2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, doloribus.
                    </span>
                <div class="w-10/12 flex flex-row gap-x-4 mt-5">
                    <a href="/movie/rating" 
                    class="w-fit bg-black bg-opacity-30 text-white px-4 py-2 rounded-full text-sm font-inter hover:drop-shadow-lg duration-200">
                        9.9
                    </a>
                    <a href="/movie/year" 
                    class="w-fit bg-black bg-opacity-30 text-white px-4 py-2 rounded-full text-sm font-inter hover:drop-shadow-lg duration-200">
                        2023
                    </a>
                    <a href="/movie/hour" 
                    class="w-fit bg-black bg-opacity-30 text-white px-4 py-2 rounded-full text-sm font-inter hover:drop-shadow-lg duration-200">
                        2j 1m
                    </a>
                </div>
                <a href="/movie/rating" 
                    class="w-fit bg-[#FFC65D] text-white px-4 py-2 mt-14 bg-radius-20 text-sm font-inter hover:drop-shadow-lg duration-200">
                        PLAY TRAILER
                    </a>
                    <div class="w-10/12 flex flex-row gap-x-4 mt-5">
                    <a href="/ratings"
                    class="w-fit text-white mt-14 px-4 py-2 rounded-full text-sm font-inter hover:drop-shadow-lg duration-200">
                        ULASAN
                    </a>
                    <a href="ratings" 
                    class="w-fit text-white mt-14 px-4 py-2 rounded-full text-sm font-inter hover:drop-shadow-lg duration-200">
                        FORUM DISKUSI
                    </a>

                </div>
            </div>

         </div>
</div>
    </div>

    <div class="relative min-h-screen overflow-hidden m-0 p-10 w-full flex flex-row gap-6 bg-gradient-to-b from-bg_red via-bg_red to-bg_red_2 text-white">
    <!-- Poster Section -->
    <div class="poster w-1/4 flex flex-col items-center">
        <img src="https://sinopsisfilm.id/wp-content/uploads/2024/05/13-Bom-di-Jakarta-2023.webp" alt="13 BOM DI JAKARTA" class="w-full rounded-lg mb-4">
        <p class="text-lg font-semibold mt-2">13 BOM DI JAKARTA</p>
        <p class="text-sm text-gray-300">ACTION, CRIME, THRILLER</p>
        <p class="text-lg font-bold">17+</p>
    </div>

    <!-- Detail Section -->
    <div class="details w-2/4 bg-black bg-opacity-40 rounded-lg p-6">
        <div class="icons flex gap-8 mb-6">
            <div class="flex flex-col items-center">
                <i class="fas fa-comment text-3xl mb-2"></i>
                <p class="text-sm font-semibold">REVIEWER</p>
                <p class="text-sm">89 Reviews</p>
            </div>
            <div class="flex flex-col items-center">
                <i class="fas fa-thumbs-up text-3xl mb-2"></i>
                <p class="text-sm font-semibold">RATINGS</p>
                <p class="text-sm">1000+ Ratings</p>
            </div>
        </div>
        
        <div class="detail-info mb-6">
            <h3 class="text-xl font-semibold mb-2">DETAILS</h3>
            <p>Director: Angga Dwimas Sasongko</p>
            <p>Writer: Angga Dwimas Sasongko, Mohamad Irfan Ramly</p>
            <p>Actors: Ardhito Pramono, Lutesha, Chicco Kurniawan</p>
            <p>Genre: Action, Crime, Thriller</p>
            <p>Certificate: 17+</p>
        </div>
        
        <div class="synopsis">
            <h3 class="text-xl font-semibold mb-2">SINOPSIS</h3>
            <p>Sekelompok teroris berusaha memporak-porandakan Jakarta, ibukota Indonesia, dengan serangan bom di tiga belas titik berbeda. Pihak keamanan yang mengetahui rencana tersebut, berusaha bertindak cepat agar tidak ada korban jiwa.</p>
        </div>
    </div>

    <!-- Platform Section -->
    <div class="platform w-1/4 flex flex-col items-center gap-4">
        <h3 class="text-lg font-semibold mb-4">WHERE TO WATCH?</h3>
        <a href="https://netflix.com" target="_blank">
            <img src="img/netflix.png" alt="Netflix" class="h-10">
        </a>
        <a href="https://primevideo.com" target="_blank">
            <img src="img/amazon.png" alt="Prime Video" class="h-12">
        </a>
        <a href="https://hotstar.com" target="_blank">
            <img src="img/disney.png" alt="Disney Hotstar" class="h-12">
        </a>
        <a href="https://hulu.com" target="_blank">
            <img src="img/hulu.png" alt="Hulu" class="h-10">
        </a>
    </div>

    <!-- Side Text Section -->
    <div class="side-text absolute right-10 text-vertical">
        <p class="tracking-widest">CINECAMPUS</p>
    </div>
</div>

<div class="footer bg-black flex justify-between items-center py-6 px-10 text-gray-400 text-sm">
    <div class="footer-links flex gap-8">
        <a href="#" class="hover:text-white">GIVE RATING</a>
        <a href="#" class="hover:text-white">GIVE REVIEW</a>
        <a href="#" class="hover:text-white">DISCUSSION FORUM</a>
    </div>
    <div class="social-links flex gap-4">
        <a href="https://instagram.com" target="_blank" class="hover:text-white"><i class='bx bxl-instagram text-2xl'></i></a>
        <a href="https://facebook.com" target="_blank"  class="hover:text-white"> <i class='bx bxl-facebook text-2xl'></i></a>
        <a href="https://youtube.com" target="_blank"  class="hover:text-white"><i class='bx bxl-youtube text-2xl'></i></a>
    </div>
</div>


<!-- 
    
<div class ="container-detail w-full h-[555] flex flex-col absolute bg-gradient-to-b from-bg_red via-bg_red to-bg_red_2">


</div>
-->

            </div>
  </body>
</html>
