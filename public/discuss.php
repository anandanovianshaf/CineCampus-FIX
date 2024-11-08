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

    <!-- ISI KONTEN DISCUSSION PAGE -->
    <div class="max-w-4xl mx-auto p-8">
        <!-- Title Section -->
        <div class="text-center flex flex-row gap-8 mb-8">
            <h1 class="text-3xl font-bold mb-6">Discussion Forum</h1>
            <p class="text-lg mt-2 font-semibold ">13 BOM DI JAKARTA</p>
        </div>

        <!-- Discussion Comments -->
        <div class="space-y-6">
            <!-- Comment 1 -->
            <div class="flex items-start mb-6 space-x-4">
                <div class="bg-gray-500 rounded-full w-12 h-12 flex items-center justify-center">
                    <i class='bx bxs-user text-2xl text-white'></i>
                </div>
                <div class="bg-gray-800 p-4 rounded-lg flex-1 text-sm">
                    <p>menurutku, alur filmnya sangat intens. Setiap menitnya selalu menegangkan, terutama karena bomnya tersebar di berbagai lokasi penting. Aku suka gimana film ini menggambarkan sisi sosial dan politik dengan realistis, seolah-olah benar-benar terjadi di Jakarta.</p>
                    <div class="flex space-x-4 mt-2 text-gray-400">
                        <button class="hover:text-red-500">
                            <i class='bx bx-heart'></i>
                        </button>
                        <button class="hover:text-blue-500">
                            <i class='bx bx-share-alt'></i>
                        </button>
                        <button class="hover:text-green-500">
                            <i class='bx bx-edit'></i>
                        </button>
                        <button class="hover:text-white px-3 py-1 rounded-lg text-xs">Reply</button>
                    </div>
                </div>
              
            </div>

            <!-- Comment 2 -->
            <div class="flex items-start space-x-4">
        
                <div class="bg-gray-800 p-4 rounded-lg flex-1 text-sm">
                    <p>Aku setuju. Tapi menurutku ada beberapa momen yang terasa agak berlebihan, terutama pas karakter utama berhasil menjinakkan beberapa bom dengan cara yang terlalu dramatis. Kelihatannya seperti kurang masuk akal kalau dibanding dengan situasi di dunia nyata. Tapi tetep sih, ketegangannya dapet banget.</p>
                    <div class="flex space-x-4 mt-2 text-gray-400">
                        <button class="hover:text-red-500">
                            <i class='bx bx-heart'></i>
                        </button>
                        <button class="hover:text-blue-500">
                            <i class='bx bx-share-alt'></i>
                        </button>
                        <button class="hover:text-green-500">
                            <i class='bx bx-edit'></i>
                        </button>
                        <button class="hover:text-white px-3 py-1 rounded-lg text-xs">Reply</button>
                    </div>
                </div>
                <div class="bg-gray-500 rounded-full w-12 h-12 flex flex-row-reverse items-center justify-center">
                    <i class='bx bxs-user text-2xl text-white'></i>
                </div>
            </div>
        </div>

        <!-- Comment Input -->
        <div class="flex items-center space-x-4 mt-8">
            <i class='bx bxs-user-circle text-4xl'></i>
            <input class="flex-1 bg-gray-700 text-white rounded-full px-4 py-2 text-sm" placeholder="Type Here">
            <button class="text-white bg-gray-700 px-4 py-2 rounded-lg text-sm">Send</button>
        </div>
    </div>
</div>

    <!-- Footer Section -->
    <?php include 'footer.php'; ?>

</body>
</html>
