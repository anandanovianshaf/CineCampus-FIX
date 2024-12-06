<?php
// Memulai sesi
session_start();

// Mengecek apakah sesi 'nim' ada, jika tidak, redirect ke login
if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit();
}

// Menyimpan data sesi ke dalam variabel
$nim = $_SESSION['nim'];
$nama = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> CINECAMPUS </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* untuk test gunakan 
        * { border: 1px solid red;}*/
    
        /* Styling untuk banner */
        .banner {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
            width: 100%;
            height: 100vh;
            
}

.content h1 {
    font-size: 2.25rem; /* Default: 4xl */
    margin-bottom: 1rem;
}

.content p {
    font-size: 1.125rem; /* Default: lg */
    line-height: 1.75rem;
    margin-bottom: 1.5rem;
}


        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        .banner .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7); /* Overlay hitam dengan transparansi */
            z-index: 1;
        }

        .banner .content {
            padding-left: 7rem; /* Jarak dari kiri */
            padding-right: 1rem; /* Jarak dari kanan */
            color: white;
            max-width: 60%; /* Lebar maksimal konten */
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 768px) {
            
            .poster {
                width: 60%;
            }

            .content h1 {
        font-size: 1.875rem; /* 3xl */
    }
    .content p {
        font-size: 1rem; /* base */
    }
    .content a {
        font-size: 1rem; /* base */
        padding: 0.625rem 1.25rem; /* px-5 py-2 */
    }
            .banner .content {
                padding-left: 2rem;
                padding-right: 2rem;
                max-width: 90%;
            }
        }
        
        @media (max-width: 480px) {
            .footer .sosmed {
                visibility:hidden;
            }

            .genre-item {
            width: 60px; /* Lebar lebih kecil */
            font-size: 2px; /* Ukuran font lebih kecil */
            padding: 0; /* Padding lebih kecil */
            margin: 2px; /* Jarak antar item lebih kecil */
        }
        .movie-item {
            width: 15%;
            height :auto;
            padding :0;
            margin-right :40px;
        }
        .movie-item img {
            width: 60%;
        }
        .movie-item p {
            font-size :0.5rem;
            visibility :hidden;
        }
        .movie-container {
            gap: 35px;
        }

        .movie-item .poster {
            width: 30%;
            font-size: 0.6rem;
            padding: 2px;
            margin-right :3rem;
        }

    .content h1 {
        font-size: 1.5rem; /* 2xl */
    }
    .content p {
        font-size: 0.875rem; /* sm */
        line-height: 1.5rem;
    }
    .content a {
        font-size: 0.875rem; /* sm */
        padding: 0.5rem 1rem; /* px-4 py-2 */
    }
}
    </style>
</head>
<body>
    <div class="w-full h-full min-h-screen flex flex-col bg-gradient-to-b from-background1 via-background1 to-background2">
        <!-- Header Section -->
        <?php include 'header-home.php'; ?>
        
<!-- Banner Section -->
<div class="banner w-full min-h-screen flex flex-col relative bg-black">
    <!-- Background Image -->
    <img src="img/landing_page.jpg" class="absolute w-full h-full object-cover z-0" />
    <!-- Overlay -->
    <div class="absolute w-full h-full bg-black bg-opacity-70 z-10"></div>
    
    <!-- Content -->
    <div class="relative content flex flex-col  text-white z-20 w-10/12 mx-auto">
        <h1 class="font-bold font-inter text-4xl mb-4 leading-tight md:text-3xl sm:text-2xl">13 Bom di Jakarta</h1>
        <p class="font-inter text-lg leading-relaxed mb-6 w-3/4 md:text-base sm:text-sm sm:leading-normal">
            Film 13 Bom di Jakarta menceritakan tentang teror serangan bom yang terjadi di Jakarta. 
            Oscar dan William, dua pengusaha muda yang berkecimpung di bidang mata uang digital 
            diduga terlibat dalam aksi tersebut...
        </p>
        <a href="movie.php?id=1" class="w-fit bg-background2 text-white pl-7 pr-7 py-2 mt-5 text-inter text-xl flex flex-row rounded-full items-center hover:drop-shadow-lg duration-200">
                        Detail
                        </a>
    </div>
</div>


        <!-- Content Section -->
        <!-- Premier Section -->
        <div class="flex flex-col bg-gradient-to-b from-background1 via-background1 to-background2">
            <div class="h-fit flex flex-col mx-14 my-20 z-10">
                <h1 class="font-bold font-inter text-2xl text-white" id="premier">Premier</h1>
                <div class="movie-container flex justify-center gap-x-20 gap-y-20 mt-10 flex-wrap">
                    <!-- Movie Item 1 -->
                    <div class="movie-item text-center w-36">
                        <div class="relative group w-36 h-auto">
                            <img src="img/jatuh_cinta.jpg" alt="Jatuh Cinta Seperti di Film-film" class="w-36 h-auto rounded-lg shadow-lg">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                                <a href="movie.php?id=2" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    Detail
                                </a>
                            </div>
                        </div>
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Jatuh Cinta Seperti di Film-film</p>
                    </div>
                    
                    <!-- Movie Item 2 -->
                    <div class="movie-item text-center">
                        <div class="test relative group w-36 h-auto">
                            <img src="img/raden_saleh.jpg" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                                <a href="movie.php?id=3" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    Detail
                                </a>
                            </div>
                        </div>
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Mencuri Raden Saleh</p>
                    </div>
                    
                    <!-- Movie Item 3 -->
                    <div class="movie-item text-center">
                        <div class="test relative group w-36 h-auto">
                            <img src="img/sherina_2.jpg" alt="Sherina 2" class="w-36 h-auto rounded-lg shadow-lg">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                                <a href="movie.php?id=4" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    Detail
                                </a>
                            </div>
                        </div>
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Sherina 2</p>
                    </div>
                    
                    <div class="movie-item text-center">
                        <div class="relative group w-36 h-auto">
                            <img src="img/exhuma.jpg" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">

                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                                <a href="movie.php?id=5" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    Detail
                                </a>
                            </div>
                        </div>
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Exhuma</p>
                    </div>

                    <div class="movie-item text-center pb-10">
                        <div class="relative group w-36 h-auto">
                            <img src="img/agak_laen.jpg" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">

                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                                <a href="movie.php?id=6" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    Detail
                                </a>
                            </div>
                        </div>
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Agak Laen</p>
                    </div>
                </div>
            </div>
        </div>

        <!--Must Watch -->
        <div class="w-full h-fit  flex flex-col bg-gradient-to-b from-background1 via-background1 to-background2">
    <div class="flex flex-col mx-14 my-20 z-10">
        <h1 class="font-bold font-inter text-2xl text-white">Must Watch</h1>
        <div class="flex flex-wrap justify-center gap-x-20 gap-y-8 mt-10">
            
            <!-- Movie Item 1 -->
            <div class="movie-item text-center w-36">
                <div class="relative group w-36 h-auto">
                    <img src="img/star_wars.jpg" alt="Star Wars" class="w-36 h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                        <a href="movie.php?id=7" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Detail
                        </a>
                    </div>
                </div>
                <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter hover:text-red-900 transition-colors duration-300">Star Wars</p>
            </div>

            <!-- Movie Item 2 -->
            <div class="movie-item text-center w-36">
                <div class="relative group w-36 h-auto">
                    <img src="img/vandenwijck.jpg" alt="Tenggelamnya Kapal Van Der Wijck" class="w-36 h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                        <a href="movie.php?id=8" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Detail
                        </a>
                    </div>
                </div>
                <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Tenggelamnya Kapal Van Der Wijck</p>
            </div>

            <!-- Movie Item 3 -->
            <div class="movie-item text-center w-36">
                <div class="relative group w-36 h-auto">
                    <img src="img/5cm.jpg" alt="5 CM" class="w-36 h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                        <a href="movie.php?id=9" class="poster poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Detail
                        </a>
                    </div>
                </div>
                <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">5 CM</p>
            </div>

            <!-- Movie Item 4 -->
            <div class="movie-item text-center w-36">
                <div class="relative group w-36 h-auto">
                    <img src="img/filosofi_kopi.jpg" alt="Filosofi Kopi" class="w-36 h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                        <a href="movie.php?id=10" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Detail
                        </a>
                    </div>
                </div>
                <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Filosofi Kopi</p>
            </div>

            <!-- Movie Item 5 -->
            <div class="movie-item text-center w-36 pb-10">
                <div class="relative group w-36 h-auto">
                    <img src="img/us.jpg" alt="Us" class="w-36 h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                        <a href="movie.php?id=11" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Detail
                        </a>
                    </div>
                </div>
                <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Us</p>
            </div>
        </div>
    </div>
</div>

    <!-- Trending Section -->
    <div class="w-full h-fit flex flex-col bg-gradient-to-b from-background1 via-background1 to-background2">
    <div class="flex flex-col mx-14 my-20 z-10">
        <h1 class="font-bold font-inter text-2xl text-white" id="trending">Trending</h1>
        <div class="flex flex-wrap justify-center gap-x-20 gap-y-8 mt-10">
            <!-- Movie Item 1 -->
            <div class="movie-item text-center w-36">
                <div class="relative group w-36 h-auto">
                    <img src="img/pengabdisetan2.jpg" alt="Pengabdi Setan 2" class="w-36 h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                        <a href="movie.php?id=12" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Detail
                        </a>
                    </div>
                </div>
                <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Pengabdi Setan 2</p>
            </div>

            <!-- Movie Item 2 -->
            <div class="movie-item text-center w-36">
                <div class="relative group w-36 h-auto">
                    <img src="img/home_sweet_loan.jpg" alt="Home Sweet Loan" class="w-36 h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                        <a href="movie.php?id=13" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Detail
                        </a>
                    </div>
                </div>
                <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Home Sweet Loan</p>
            </div>

            <!-- Movie Item 3 -->
            <div class="movie-item text-center w-36">
                <div class="relative group w-36 h-auto">
                    <img src="img/jalanjauh.jpg" alt="Jalan yang Jauh Jangan Lupa Pulang" class="w-36 h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                        <a href="movie.php?id=14" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Detail
                        </a>
                    </div>
                </div>
                <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Jalan yang Jauh Jangan Lupa Pulang</p>
            </div>

            <!-- Movie Item 4 -->
            <div class="movie-item text-center w-36">
                <div class="relative group w-36 h-auto">
                    <img src="img/vina.jpg" alt="Vina - Sebelum 7 Hari" class="w-36 h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                        <a href="movie.php?id=15" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Detail
                        </a>
                    </div>
                </div>
                <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Vina - Sebelum 7 Hari</p>
            </div>

            <!-- Movie Item 5 -->
            <div class="movie-item text-center w-36 pb-10">
                <div class="relative group w-36 h-auto">
                    <img src="img/kkn.jpg" alt="KKN di Desa Penari" class="w-36 h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                        <a href="movie.php?id=16" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Detail
                        </a>
                    </div>
                </div>
                <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">KKN di Desa Penari</p>
            </div>
</div>
        </div>  
    </div>
       <!-- Coming Soon -->
    <div class="w-full h-fit flex flex-col bg-background1">
    <div class="w-full  flex flex-col my-20 z-10">
        <h1 class="font-bold font-inter ml-28 text-2xl  text-white">COMING SOON</h1>
        <div class="flex justify-center flex-wrap gap-x-20 gap-y-8 ml-20 mr-20 mt-10"> <!-- Menggunakan flex-wrap dan gap yang lebih kecil -->
            
            <!-- Movie Item 1 -->
            <div class="movie-item text-center">
                <div class="relative group w-36 h-auto">
                    <img src="img/bolehkah.jpg" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                        <a href="movie.php?id=17" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Detail
                        </a>
                    </div>
                </div>
                <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Bolehkah Sekali Saja Kumenangis</p>
            </div>

            <!-- Movie Item 2 -->
            <div class="movie-item text-center">
                <div class="relative group w-36 h-auto">
                    <img src="img/bila_esok_ibu_tiada.jpg" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                        <a href="movie.php?id=18" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Detail
                        </a>
                    </div>
                </div> 
                <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Bila Esok Ibu Tiada</p>
            </div>

            <!-- Movie Item 3 -->
            <div class="movie-item text-center">
                <div class="relative group w-36 h-auto">
                    <img src="img/it_ends_with_us.jpg" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                        <a href="movie.php?id=19" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Detail
                        </a>
                    </div>
                </div> 
                <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">It Ends With Us</p>
            </div>

            <!-- Movie Item 4 -->
            <div class="movie-item text-center">
                <div class="relative group w-36 h-auto">
                    <img src="img/temurun.jpg" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                        <a href="movie.php?id=20" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Detail
                        </a>
                    </div>
                </div> 
                <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Temurun</p>
            </div>

            <!-- Movie Item 5 -->
            <div class="movie-item text-center mb-10">
                <div class="relative group w-36 h-auto">
                    <img src="img/dilan_1983.jpg" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-70 flex items-center justify-center rounded-lg transition duration-300">
                        <a href="movie.php?id=21" class="poster bg-background2 text-white py-2 px-4 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Detail
                        </a>
                    </div>
                </div> 
                <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Dilan 1983</p>
            </div>
        </div>
    </div>
</div>

   <!-- Genres -->
   <div class="genre w-full h-fit flex flex-col bg-gradient-to-b from-background1 via-background1 to-background2">
    <div class="flex flex-col px-14 ">
        <div class="w-full flex mt-20 flex-row">
            <h1 class="font-bold font-inter text-3xl text-white" id="genres">GENRES</h1>
            <p class="font-inter text-lg text-white ml-10">WHAT GENRE YOU LIKE TO WATCH?</p>
        </div>

        <div class="flex flex-wrap justify-center gap-x-20 gap-y-8 mt-10 mb-20">
            <!-- Genre Item -->
            <a href="genre.php?genre=Action" class="genre-item">Action</a>
            <a href="genre.php?genre=Adventure" class="genre-item">Adventure</a>
            <a href="genre.php?genre=Animation" class="genre-item">Animation</a>
            <a href="genre.php?genre=Anime" class="genre-item">Anime</a>
            <a href="genre.php?genre=Biography" class="genre-item">Biography</a>
            <a href="genre.php?genre=Crime" class="genre-item">Crime</a>
            <a href="genre.php?genre=Comedy" class="genre-item">Comedy</a>
            <a href="genre.php?genre=Documentary" class="genre-item">Documentary</a>
            <a href="genre.php?genre=Drama" class="genre-item">Drama</a>
            <a href="genre.php?genre=Family" class="genre-item">Family</a>
            <a href="genre.php?genre=Fantasy" class="genre-item">Fantasy</a>
            <a href="genre.php?genre=History" class="genre-item">History</a>
            <a href="genre.php?genre=Horror" class="genre-item">Horror</a>
            <a href="genre.php?genre=Indonesian" class="genre-item">Indonesian</a>
            <a href="genre.php?genre=Korean" class="genre-item">Korean</a>
            <a href="genre.php?genre=Music" class="genre-item">Music</a>
            <a href="genre.php?genre=Mystery" class="genre-item">Mystery</a>
            <a href="genre.php?genre=Romance" class="genre-item">Romance</a>
            <a href="genre.php?genre=SCI-FI" class="genre-item">SCI-FI</a>
            <a href="genre.php?genre=Sports" class="genre-item">Sports</a>
            <a href="genre.php?genre=Spy" class="genre-item">Spy</a>
            <a href="genre.php?genre=Thriller" class="genre-item">Thriller</a>
            <a href="genre.php?genre=War" class="genre-item">War</a>
            <a href="genre.php?genre=Zombie" class="genre-item">Zombie</a>
        </div>
    </div>
</div>
<?php include 'footer-home.php'; ?>
<style>
    .genre h1  {
        font-size: 1.5rem;
    }
    .genre p {
        font-size:1rem;
    }

    .genre-item {
        width: fit-content;
        background-color: white;
        color: black;
        padding: 0.5rem 1rem;
        margin-top: 1rem;
        font-family: 'Inter', sans-serif;
        font-size: 0.875rem; /* text-sm */
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        transition: all 0.2s ease;
    }

    .genre-item:hover {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>



</div>

    </div>
</body>
</html>
