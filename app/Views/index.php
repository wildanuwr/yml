<!DOCTYPE html>
<html lang="en">
  <!-- Header -->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/css/pagedone.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/js/pagedone.js"></script>
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="src/js/index.js"></script>
    <style>
        /* Menetapkan posisi fixed untuk preloader agar selalu di atas layar 
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            z-index: 9999; /* Agar tetap di depan konten lain 
        }

         Preloader gif centering 
        #preloader img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);*/
        }
    </style>
    <title>YAMALUBE OLI ASLI DARI YAMAHA</title>
    <nav class="bg-black dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-black">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-6 md:justify-between">
            <!-- Logo -->
            <a href="#" class="flex items-center mx-auto md:mx-0 space-x-3 rtl:space-x-reverse">
                <img src="https://www.yamalubepromo.com/static/media/logo.260e7d11.svg" 
                     class="h-14" alt="Yamalube Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
            </a>
            <!-- Button -->
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button  onclick="openModal()" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-4 text-center dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hidden w-full md:flex md:w-auto md:order-1">Masuk / Daftar</button>
            </div>
            <!-- Navbar -->
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-bold md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-black dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="index.php" class="block py-2 px-3 text-lg text-white bg-red rounded md:bg-transparent md:text-red-700 md:p-0 md:dark:text-red-500" aria-current="page">HOME</a>
                    </li>
                    <li>
                        <a href="shop.php" class="block py-2 px-3 text-lg text-white md:hover:bg-transparent md:hover:text-red-700 md:p-0 md:dark:hover:text-red-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">OUR PRODUCT</a>
                    </li>
                    <li>
                        <a href="tos.php" class="block py-2 px-3 text-lg text-white  md:hover:bg-transparent md:hover:text-red-700 md:p-0 md:dark:hover:text-red-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">TERMS & CONDITION</a>
                    </li>
                    <li>
                        <a href="faq.php" class="block py-2 px-3 text-lg text-white  md:hover:bg-transparent md:hover:text-red-700 md:p-0 md:dark:hover:text-red-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>
  <body class="bg-black">
  <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <!-- Konten Modal -->
    <div class="relative bg-white w-full sm:mx-4 sm:max-w-sm md:max-w-md lg:max-w-lg rounded-lg shadow-lg overflow-hidden">
        <!-- Background Atas -->
        <div 
            class="h-20 w-full bg-cover" 
            style="background-image: url('/asset/batik/pattern7.png');">
        </div>
        
        <!-- Konten Modal -->
        <div class="p-6 relative z-10">
            <!-- Header -->
            <h2 class="text-xl uppercase font-semibold mb-4 text-center md:text-left">INFORMASI</h2>
            
            <!-- Isi Modal -->
            <p class="text-gray-600 mb-6 text-center">
                Untuk akses fitur ini silahkan akses 
                <a href="https://yamalubepromo.com" target="_blank" class="text-red-500 underline">
                    yamalubepromo.com
                </a>
                melalui smartphone anda.
            </p>

            <!-- Tombol Aksi di Tengah -->
            <div class="flex justify-center">
                <button 
                    onclick="closeModal()" 
                    class="bg-[#0e1ec7] text-white px-4 py-2 rounded-md hover:bg-gray-400 transition">
                    OK
                </button>
            </div>
        </div>

        <!-- Background Bawah -->
        <div 
            class="h-12 w-full bg-cover bg-center" 
            style="background-image: url('/asset/batik/pattern6.png');">
        </div>
    </div>
</div>

    <!-- Preloader -->
    <div id="preloader">
      <!--  <img class="h-64" src="asset/loading.gif" alt="Loading..."> -->
    </div>
  <div role="status" class="w-full bg-black">
    <div class="justify-center w-full">
            <a href="#" class="flex items-center">
                  <img src="asset/batik/bg_wave_2.png" class="w-full" alt="FlowBite Logo" />
              </a>
    </div>
    <div class="w-full bg-black">
    </div>
    <span class="sr-only">Loading...</span>
</div>
<div role="status" class="space-y-8 mt-5 md:space-y-0 md:space-x-8 rtl:space-x-reverse md:flex md:items-center">

    <div class="w-full bg-black">
    <div class="mb-6 md:mb-0">
              <a href="#" class="flex items-center">
                  <img src="asset/batik/pattern5.png" class="w-full" alt="FlowBite Logo" />
              </a>
          </div>
    </div>
    <span class="sr-only">Loading...</span>
</div>

<!--- Navigator Mobile Menu  -->

<div class="fixed bottom-0 left-0 z-50 w-full h-16 bg-[#e11e25] border-t border-[#e11e25] md:hidden">
    <div class="grid h-full max-w-lg grid-cols-5 mx-auto font-medium">
        <a href="index.php" class="inline-flex flex-col items-center justify-center px-5 border-x border-[#e11e25] bg-[#cab28b] group">
            <!-- Ganti ikon SVG dengan URL gambar -->
            <img  src="asset/svg/icon_home_new.svg" alt="Home Icon" class="w-5 h-5 mb-2 class="class="w-6 h-6 filter invert sepia saturate-500 hue-rotate-180">
            <span class="text-m text-black">Home</span>
        </a>
        <a href="shop.php" class="inline-flex flex-col items-center justify-center px-5 border-x border-[#e11e25] hover:bg-[#cab28b] group">
            <img src="asset/svg/Icon Products.svg" alt="Search Icon" class="w-5 h-5 mb-2">
            <span class="text-m text-white group-hover:text-gray-200">Product</span>
        </a>
        <a href="tos.php" class="inline-flex flex-col items-center justify-center px-5 border-x border-[#e11e25] hover:bg-[#cab28b] group">
            <img src="asset/svg/Icon T&C.svg" alt="Notification Icon" class="w-5 h-5 mb-2">
            <span class="text-m text-white group-hover:text-gray-200">T&C</span>
        </a>
        <a href="faq.php" class="inline-flex flex-col items-center justify-center px-5 border-x border-[#e11e25] hover:bg-[#cab28b] group">
            <img src="asset/svg/Icon FAQ.svg" alt="Wallet Icon" class="w-5 h-5 mb-2">
            <span class="text-m text-white group-hover:text-gray-200 uppercase">F&Q</span>
        </a>
        <a href="#" class="inline-flex flex-col items-center justify-center px-5 border-x border-[#e11e25] hover:bg-[#cab28b] group">
            <img src="asset/svg/Icon Daftar_Masuk.svg" alt="Settings Icon" class="w-5 h-5 mb-2">
            <span class="text-m text-white group-hover:text-gray-200">Daftar</span>
        </a>
    </div>
</div>


<!--Akhir Navigator -->
<script>
        window.onload = () => {
            // Setelah halaman selesai dimuat, tunggu 7 detik untuk menyembunyikan preloader
            setTimeout(() => {
                const preloader = document.getElementById('preloader');
                preloader.style.display = 'none'; // Menghilangkan preloader setelah 7 detik
            }, 4000); // Delay 7 detik (7000ms)
        }
        function openModal() {
    document.getElementById('modal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('modal').classList.add('hidden');
}

    </script>
  </body>

<!--Footer -->
<footer class="bg-black dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-6 lg:py-8">
        <!-- Main Grid -->
        <div class="grid gap-8 md:grid-cols-4">
            <!-- Logo Section -->
            <div>
                <a href="#" class="flex items-center">
                    <img src="https://www.yamalubepromo.com/static/media/logo.260e7d11.svg" class="h-12" alt="Yamalube Logo" />
                </a>
            </div>

            <!-- Download Section -->
            <div>
                <h2 class="mb-3 text-sm font-bold uppercase text-white">Download My Yamaha</h2>
                <div class="flex items-center mb-4">
                    <a href="#m" target="_blank">
                        <img alt="Yamaha logo" class="w-full max-w-[220px]" src="https://www.yamalubepromo.com/assets/images/logo_app_yamaha_resize.png" />
                    </a>
                </div>
                <p class="mb-2 text-sm font-bold text-white">IZIN UNDIAN GRATIS BERHADIAH (UGB):</p>
                <p class="mb-6 text-sm text-white">NOMOR: 284/5.5/PI.02/03/2024</p>
            </div>

            <!-- Contact Section -->
            <div>
                <h2 class="mb-6 text-lg font-bold text-white">Contact Us</h2>
                <ul class="space-y-2 text-sm text-white">
                    <li>YAMAHA INDONESIA MOTOR MANUFACTURING</li>
                    <li>JL. DR KRT RADJIMAN WIDYODININGRAT</li>
                    <li>CAKUNG JAKARTA TIMUR 13920 INDONESIA</li>
                    <li class="flex items-center space-x-2">
    <!-- Ikon Telepon -->
    <a href="tel:08111080090" class="flex items-center space-x-2 hover:underline">
        <img src="asset/svg/icon_phone_new.svg" alt="Phone Icon" class="w-5 h-5">
        <span>08111080090</span>
    </a>
</li>
<li class="flex items-center space-x-2">
    <!-- Ikon Email -->
    <a href="mailto:contact_center@yamaha-motor.co.id" class="flex items-center space-x-2 hover:underline">
        <img src="asset/svg/icon email.svg" alt="Email Icon" class="w-5 h-5">
        <span>contact_center@yamaha-motor.co.id</span>
    </a>
</li>

                </ul>
            </div>

            <!-- Quick Links Section -->
            <div>
                <h2 class="mb-6 text-lg font-bold text-white">Quick Links</h2>
                <ul class="space-y-2 text-sm text-white">
                    <li><a href="#" class="hover:underline">Home</a></li>
                    <li><a href="#" class="hover:underline">Our Products</a></li>
                    <li><a href="#" class="hover:underline">Terms & Condition</a></li>
                    <li><a href="#" class="hover:underline">FAQ</a></li>
                </ul>
            </div>
        </div>

        <!-- Separator -->
        <hr class="my-8 border-gray-700" />

        <!-- Footer Bottom Section -->
        <div class="flex flex-col items-center justify-between text-center text-sm text-white sm:flex-row">
            <span>© 2024 All Rights Reserved by Yamaha Motor Indonesia</span>
        </div>
    </div>
</footer>



</html>