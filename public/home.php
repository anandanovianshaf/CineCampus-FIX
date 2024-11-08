<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> CINECAMPUS </title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css"/>
        
  </head>
  <body>
    <div class="w-full h-auto min-h-screen flex flex-col bg-gradient-to-b from-background1 via-background1 to-background2">
            <!-- Header Section -->
            <?php include 'header.php'; ?>
            <!-- Banner Section -->
            <div class="w-full h-[550px] flex flex-col relative bg-black">
                <!-- Banner Data -->
                <div class="flex flex-row items-center w-full h-full relative slide">
                    <!-- Image -->
                    <img src="img/landing_page.jpg" class="absolute w-full h-full object-cover z-0" />
                    <!-- overlay -->
                    <div class="absolute w-full h-full bg-black bg-opacity-70 z-10"></div>

                    <div class="w-10/12 flex flex-col ml-28 z-10">
                        <span class="font-bold font-inter text-4xl text-white">13 Bom di Jakarta</span>
                        <span class="font-inter text-5sm text-white w-1/2">Film 13 Bom di Jakarta menceritakan tentang teror serangan bom yang terjadi di Jakarta. Oscar dan William, dua pengusaha muda yang berkecimpung di bidang mata uang digital diduga terlibat dalam aksi tersebut...</span>
                        <a href="/detail" class="w-fit bg-background2 text-white pl-7 pr-7 py-2 mt-5 text-inter text-xl flex flex-row rounded-full items-center hover:drop-shadow-lg duration-200">
                        Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full h-[400px]  flex flex-col bg-gradient-to-b from-background1 via-background1 to-background2">
            <div class="w-full flex flex-col ml-28 mr-28 28 mt-10 z-10">
                <h1 class="font-bold font-inter text-2xl text-white" id="premier">Premier</h1>
                <div class="flex justity-center gap-[95px] mt-10">
                    <div class="movie-item text-center">
                        <img src="img/jatuh_cinta.jpg" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Jatuh Cinta Seperti di Film-film</p>
                    </div>

                    <div class="movie-item text-center">
                        <img src="{{ asset('img/raden_saleh.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Mencari Raden Saleh</p>
                    </div>

                    <div class="movie-item text-center">
                        <img src="{{ asset('img/sherina_2.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Sherina 2</p>
                    </div>

                    <div class="movie-item text-center">
                        <img src="{{ asset('img/exhuma.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Exhuma</p>
                    </div>

                    <div class="movie-item text-center">
                        <img src="{{ asset('img/agak_laen.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Agak Laen</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="w-full h-[750px] min-h-screen flex flex-col bg-gradient-to-b from-background1 via-background1 to-background2">
            <div class="w-full flex flex-col ml-28 mr-28 28 mt-10 z-10">
                <h1 class="font-bold font-inter text-2xl text-white">Must Watch</h1>
                <div class="flex justity-center gap-[95px] mt-10">
                    <div class="movie-item text-center">
                        <img src="{{ asset('img/star_wars.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Star Wars</p>
                    </div>

                    <div class="movie-item text-center">
                        <img src="{{ asset('img/vandenwijck.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Tenggelamnya Kapal Van Der Wijck</p>
                    </div>

                    <div class="movie-item text-center">
                        <img src="{{ asset('img/5cm.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">5 CM</p>
                    </div>

                    <div class="movie-item text-center">
                        <img src="{{ asset('img/filosofi_kopi.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Filosofi Kopi</p>
                    </div>

                    <div class="movie-item text-center">
                        <img src="{{ asset('img/us.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Us</p>
                    </div>
                </div>
            </div>

            <div class="w-full flex flex-col ml-28 mr-28 mt-10 z-10">
                <h1 class="font-bold font-inter text-2xl text-white" id="trending">Trending</h1>
                <div class="flex justity-center gap-[95px] mt-10">
                    <div class="movie-item text-center">
                        <img src="{{ asset('img/pengabdisetan2.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Pengabdi Setan 2</p>
                    </div>

                    <div class="movie-item text-center">
                        <img src="{{ asset('img/home_sweet_loan.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Home Sweet Loan</p>
                    </div>

                    <div class="movie-item text-center">
                        <img src="{{ asset('img/jalanjauh.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Jalan yang Jauh Jangan Lupa Pulang</p>
                    </div>

                    <div class="movie-item text-center">
                        <img src="{{ asset('img/vina.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Vina - Sebelum 7 hari</p>
                    </div>

                    <div class="movie-item text-center">
                        <img src="{{ asset('img/kkn.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">KKN di Desa Penari</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full h-[400px]  flex flex-col bg-background1">
            <div class="w-full text-center flex flex-col mt-10 z-10">
                <h1 class="font-bold font-inter text-2xl text-white">COMING SOON</h1>
                <div class="flex justity-center gap-[95px] ml-28 mr-28 mt-10">
                    <div class="movie-item text-center">
                        <img src="{{ asset('img/bolehkah.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Bolehkah Sekali Saja Kumenangis</p>
                    </div>

                <div class="movie-item text-center">
                        <img src="{{ asset('img/bila_esok_ibu_tiada.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Bila Esok Ibu Tiada</p>
                    </div>

                    <div class="movie-item text-center">
                        <img src="{{ asset('img/it_ends_with_us.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">It Ends With Us</p>
                    </div>

                    <div class="movie-item text-center">
                        <img src="{{ asset('img/temurun.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Temurun</p>
                    </div>

                    <div class="movie-item text-center">
                        <img src="{{ asset('img/dilan_1983.jpg') }}" alt="Mencari Raden Saleh" class="w-36 h-auto rounded-lg shadow-lg">
                        <p class="mt-2 text-sm text-white text-center mx-auto w-36 font-inter">Dilan 1983</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full h-[600px] flex flex-col bg-gradient-to-b from-background1 via-background1 to-background2 px-28">
            <div class="w-full flex flex-row ">
                <h1 class="font-bold font-inter text-3xl text-white mt-20" id="genres">GENRES</h1>
                <p class="font-inter text-2lg text-white mt-[91px] ml-10">WHAT GENRE YOU LIKE TO WATCH?</p>
            </div>

            <div class="flex justity-center gap-[85px] w-full flex-row mt-10">
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Action - Adventures</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Animation</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Anime</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Biography</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Crime</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Comedy</a>
            </div>

            <div class="flex justity-center gap-[107px] w-full flex-row mt-10">
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Documentary</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Drama</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Epic</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Family</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Fantasy</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">History</a>
            </div>

            <div class="flex justity-center gap-[105px] w-full flex-row mt-10">
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Horror</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Indonesian</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Korean</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Music</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Mystery</a>
                <a href="/detail" class="w-fit b    g-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Romance</a>
            </div>

            <div class="flex justity-center gap-[120px] w-full flex-row mt-10">
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">SCI-FI</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Sports</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Spy's</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Thriller</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">WAR</a>
                <a href="/detail" class="w-fit bg-white text-black pl-5 pr-5 py-2 mt-5 text-inter text-3sm flex flex-row rounded-[10px] items-center hover:drop-shadow-lg duration-200">Zombie</a>
            </div>
        </div>

        <?php include 'footer.php'; ?>

  </body>
</html>