<!DOCTYPE html>
<html lang="en">
<!-- Header -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/bootstrap-icons.svg" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/css/pagedone.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/js/pagedone.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="<?= base_url('asset/js/index.js'); ?>"></script>
    <link rel="stylesheet" href="<?= base_url('css/tailwind.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/yamalube.css'); ?>">
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
                <button onclick="openModal()" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-4 text-center dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hidden w-full md:flex md:w-auto md:order-1">Masuk / Daftar</button>
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
<!-- Preloader -->

<body class="bg-black font-segoe">
    <div id="preloader">
        <img src="<?= base_url('asset/loading.gif'); ?>" alt="Loading...">
    </div>

    <div class="flex flex-col justify-center mt-24">
        <!-- Teks di Sebelah Kiri (1/3) -->
        <div class="w-full md:w-1/3 flex flex-col items-center justify-center bg-[url('/asset/batik/pattern3.png')] bg-cover md:bg-amber-400/30 text-white p-6 order-2 md:order-1">
            <h1 class="text-4xl font-bold font-segoe">
                VALIDASI KE<span class="text-red-500 text-4xl font-bold text-shadow-white">ASLI</span>AN KODE UNIK
            </h1>
            <p class="text-lg text-amber-200 mt-2">
                Scan QR Code dibalik sobekan label Yamalube dan pastikan keASLIan olinya
            </p>
            <?= $this->include('includes/C_Modal.php') ?>
            <!-- Field Input -->
            <input
                type="text"
                placeholder="XXXX-XXXX-XXXX"
                class="h-[90px] w-[400px] md:h-[45px] md:w-[100px] mt-3 border border-gray-300 rounded-md text-center text-gray-500 bg-gray-100 cursor-not-allowed text-3xl"
                readonly
                onclick="openModal()" />

            <!-- Tombol di Bawah -->
            <div class="flex justify-center w-[400px] md:w-[200px] mt-6 gap-2">
                <!-- Tombol Kiri -->
                <button class="w-1/2 h-14 md:h-10 bg-blue-600 text-white  hover:bg-blue-500">
                    Klik Untuk Scan QR
                </button>

                <!-- Tombol Kanan -->
                <button class="w-1/2 h-14 md:h-10 bg-red-600 text-white hover:bg-red-500">
                    Cek Validasi
                </button>
            </div>
        </div>

        <!-- Slider di Sebelah Kanan (2/3) -->
        <div class="w-full md:w-2/3 order-1 md:order-2">
            <div id="slider" style="overflow: hidden;">
                <!-- Container Slider -->
                <div id="slider-track" style="display: flex; transition: transform 0.5s ease-in-out;">
                    <!-- Gambar Slide 1 -->
                    <img src="<?= base_url('asset/dasboard1.jpg'); ?>" alt="Slide 1" class="w-full h-full">
                    <!-- Gambar Slide 2 -->
                    <img src="<?= base_url('asset/dasboard2.jpg'); ?>" alt="Slide 2" class="w-full h-full">
                    <!-- Gambar Slide 3 -->
                    <img src="<?= base_url('asset/dasboard3.jpg'); ?>" alt="Slide 3" class="w-full h-full">
                    <!-- Duplikasi Gambar Slide 1 untuk Transisi -->
                    <img src="<?= base_url('asset/dasboard1.jpg'); ?>" alt="Slide 1" class="w-full h-full">
                </div>
            </div>
        </div>
    </div>

    <div class="w-full order-1 mt-10 md:order-2">
        <div class="relative">
            <!-- Gambar 1 dengan border atas -->
            <div class="w-full">
                <img src="<?= base_url('asset/batik/pattern2.png'); ?>" alt="Slide 1" class="w-full h-auto object-cover">
            </div>

            <!-- Box Transparan dengan gambar 3 sebagai background dan latar belakang putih transparan -->
            <div class="flex justify-between mt-[30px] h-[1000px] gap-3 w-full bg-[url('/asset/batik/bg-mekanisme.png')]">
                <!-- Box Kiri -->
                <div class="w-1/2 ml-4 bg-cover bg-center h-[1000px] relative flex items-center justify-center">
                    <div class="absolute inset-0 bg-white bg-opacity-50 ">
                        <div class="text-black text-5xl font-segoe font-bold mt-[30px] ml-5">
                            MEKANISME PROMO
                        </div>
                        <div class="relative flex items-center justify-center mt-[50px]">
                            <img src="<?= base_url('asset/sobek.png'); ?>" alt="Slide 1" class="w-[120px] h-[120px] object-cover justify-center items-center">
                        </div>
                        <div class="font-segoe text-xl font-bold text-black mt-[30px] flex justify-center items-center">
                            Scan QRCode dibalik sobekan label Yamalube
                        </div>
                        <div class="p-6 font-bold shadow-md">
                            <!-- Mekanik Section -->
                            <div class="mb-4 pl-4">
                                <div class="flex items-center">
                                    <button
                                        class="text-2xl text-black transition-transform"
                                        onclick="toggleContent('mekanik-content', this)">
                                        <i class="bi bi-dash-square-fill text-[24px]"></i>
                                    </button>
                                    <h2 class="text-4xl font-bold m-5 text-black">POINT UNTUK MEKANIK</h2>
                                </div>
                                <div id="mekanik-content" class="mt-2 text-slate-800">
                                    <ol class="list-decimal pl-6 ml-10 text-2xl">
                                        <li>Sobek Label pada kemasan botol.</li>
                                        <li>Scan QRCode Label Berhadiah dibalik sobekan label.</li>
                                        <li>Validasi Kode Unik.</li>
                                        <li>
                                            Lengkapi dan pastikan dengan benar data diri pada saat registrasi
                                            (untuk yang belum memiliki akun) & jika sudah memiliki akun silahkan
                                            langsung login dengan user anda.
                                        </li>
                                        <li>
                                            Kumpulkan poin dari setiap sobekan label dan tukarkan dengan uang digital.
                                        </li>
                                        <li>Cek Email secara berkala untuk informasi terbaru.</li>
                                    </ol>
                                </div>
                            </div>

                            <!-- Konsumen Section -->
                            <div class="mb-4 pl-4">
                                <div class="flex items-center">
                                    <button
                                        class="text-2xl text-black transition-transform"
                                        onclick="toggleContent('konsumen-content', this)">
                                        <i class="bi bi-dash-square-fill text-[24px]"></i>
                                    </button>
                                    <h2 class="text-4xl font-bold m-5 text-black">HADIAH LANGSUNG UNTUK KONSUMEN</h2>
                                </div>
                                <div id="konsumen-content" class="mt-2 text-gray-700">
                                    <ol class="list-decimal pl-6 ml-10 text-2xl">
                                        <li>Sobek Label pada kemasan botol.</li>
                                        <li>Scan QRCode Label Berhadiah dibalik sobekan label.</li>
                                        <li>Validasi Kode Unik.</li>
                                        <li>
                                            Lengkapi dan pastikan dengan benar data diri pada saat registrasi
                                            (untuk yang belum memiliki akun) & jika sudah memiliki akun silahkan
                                            langsung login dengan user anda.
                                        </li>
                                        <li>
                                            Dapatkan hadiah 10 unit motor Yamaha, 10 iPhone 15, 5 Konsol Box PS 5,
                                            50 Logam Mulia 1 gram dan ratusan juta uang digital bagi konsumen beruntung.
                                        </li>
                                        <li>Cek Email secara berkala untuk informasi terbaru.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Box Kanan -->
                <div class="w-1/2 mr-4 bg-cover bg-center h-[1000px] relative flex items-center justify-center">
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-white bg-opacity-50">
                        <!-- Judul -->
                        <div class="text-black text-5xl font-bold mt-[30px] ml-5">
                            PEMENANG HADIAH LANGSUNG
                        </div>
                        <!-- Tabel -->
                        <div class="w-full p-4 mx-auto mt-10 font-segoe text-3xl font-bold shadow-lg overflow-hidden">
                            <table class="w-full border-collapse">
                                <thead>
                                    <tr class="bg-black border-b-4 border-white text-white">
                                        <th class="py-8 px-4 text-left uppercase font-segoe text-3xl font-bold">Pemenang</th>
                                        <th class="py-8 px-4 text-left uppercase font-segoe text-3xl font-bold">Hadiah</th>
                                    </tr>
                                </thead>
                                <tbody class="text-black">
                                    <tr class="">
                                        <td class="py-7 px-4">ismails*******@gmail.com</td>
                                        <td class="py-7 px-4">UANG DIGITAL RP 25.000</td>
                                    </tr>
                                    <tr class="bg-slate-50 bg-opacity-50 ">
                                        <td class="py-7 px-4">soro****@gmail.com</td>
                                        <td class="py-7 px-4">UANG DIGITAL RP 25.000</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-7 px-4">masbro******@gmail.com</td>
                                        <td class="py-7 px-4">UANG DIGITAL RP 25.000</td>
                                    </tr>
                                    <tr class="bg-slate-50 bg-opacity-50">
                                        <td class="py-7 px-4">nurmus******@gmail.com</td>
                                        <td class="py-7 px-4">UANG DIGITAL RP 25.000</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-7 px-4">deriya******@gmail.com</td>
                                        <td class="py-7 px-4">UANG DIGITAL RP 25.000</td>
                                    </tr>
                                    <tr class="bg-slate-50 bg-opacity-50">
                                        <td class="py-7 px-4">rahman******@gmail.com</td>
                                        <td class="py-7 px-4">UANG DIGITAL RP 25.000</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-7 px-4">ismails*******@gmail.com</td>
                                        <td class="py-7 px-4">UANG DIGITAL RP 25.000</td>
                                    </tr>
                                    <tr class="bg-slate-50 bg-opacity-50 ">
                                        <td class="py-7 px-4">soro****@gmail.com</td>
                                        <td class="py-7 px-4">UANG DIGITAL RP 25.000</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-7 px-4">masbro******@gmail.com</td>
                                        <td class="py-7 px-4">UANG DIGITAL RP 25.000</td>
                                    </tr>
                                    <tr class="bg-slate-50 bg-opacity-50">
                                        <td class="py-7 px-4">nurmus******@gmail.com</td>
                                        <td class="py-7 px-4">UANG DIGITAL RP 25.000</td>
                                    </tr>
                                    <tr class="">
                                        <td class="py-7 px-4">deriya******@gmail.com</td>
                                        <td class="py-7 px-4">UANG DIGITAL RP 25.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gambar 2 dengan border bawah -->
            <div class="w-full mt-[30px]">
                <img src="<?= base_url('asset/batik/pattern1.png'); ?>" alt="Slide 2" class="w-full h-auto object-cover">
            </div>
        </div>
    </div>
    <div class="bg-[url('/asset/batik/pattern5.png')] bg-no-repeat bg-bottom w-full">
        <div class="bg-[url('/asset/batik/bg_wave_2.png')]">
            <div class="flex items-center mt-[60px]">
                <div class=" w-1/2 text-white ml-[100px] text-4xl font-segoe font-bold">
                    <h2>PRODUK YAMALUBE</h2>
                </div>
                <div class="w-1/2 flex mr-[100px] justify-end">
                    <button class="py-4 px-6 rounded text-black bg-orange-200 font-segoe font-bold">Lihat Semua</button>
                </div>
            </div>

            <div class="flex items-center justify-center mt-7">
                <!-- Slider -->
                <div class="swiper w-3/4">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <img src="<?= base_url('asset/botol/botol1.png'); ?>" alt="Slide 1" class="max-w-[100px]">
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <img src="<?= base_url('asset/botol/botol2.png'); ?>" alt="Slide 2" class="max-w-[100px]">
                        </div>
                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <img src="<?= base_url('asset/botol/botol3.png'); ?>" alt="Slide 3" class="max-w-[100px]">
                        </div>
                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <img src="<?= base_url('asset/botol/botol4.png'); ?>" alt="Slide 4" class="max-w-[100px]">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= base_url('asset/botol/botol5.png'); ?>" alt="Slide 5" class="max-w-[100px]">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= base_url('asset/botol/botol6.png'); ?>" alt="Slide 6" class="max-w-[100px]">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= base_url('asset/botol/botol7.png'); ?>" alt="Slide 7" class="max-w-[100px]">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= base_url('asset/botol/botol8.png'); ?>" alt="Slide 8" class="max-w-[100px]">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= base_url('asset/botol/botol9.png'); ?>" alt="Slide 9" class="max-w-[100px]">
                        </div>
                    </div>
                    <!-- Tombol Navigasi -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <!-- banner Diskon -->
            <div class="flex items-center justify-center mt-7 h-[400px]">
                <div class="w-full bg-[url('/asset/batik/bg-voucher.png')]">
                    <div class="flex items-center mt-[30px]">
                        <div class=" w-1/2 text-white ml-[100px] text-4xl font-segoe font-bold">
                            <h2>VOUCHER PROMO</h2>
                        </div>
                        <div class="w-1/2 flex mr-[100px] justify-end">
                            <button class="py-4 px-6 rounded text-black bg-orange-200 font-segoe font-bold">Lihat Semua</button>
                        </div>
                    </div>
                    <div class="w-full flex justify-center p-10 gap-4 items-center">
                        <div class="w-1/2 flex justify-center items-center">
                            <img src="<?= base_url('asset/disc1.png'); ?>" alt="Voucher 1" class="w-[80%]">
                        </div>
                        <div class="w-1/2 flex justify-center items-center">
                            <img src="<?= base_url('asset/disc2.png'); ?>" alt="Voucher 2" class="w-[80%]">
                        </div>
                    </div>
                </div>
            </div>

            <!-- banner info -->
            <div class="w-full">
                <div class="flex items-center">
                    <div class=" w-1/2 text-white ml-[100px] text-4xl font-segoe font-bold">
                        <h2>INFO DAN BERITA</h2>
                    </div>
                    <div class="w-1/2 flex mr-[100px] justify-end">
                        <button class="py-4 px-6 rounded text-black bg-orange-200 font-segoe font-bold">Lihat Semua</button>
                    </div>
                </div>
                <div class="w-full flex justify-center p-10 gap-4 items-center">
                    <div class="w-1/2 relative h-[500px] flex flex-col items-center justify-center box">
                        <div class="box-content w-full flex flex-col items-center">
                            <img src="<?= base_url('asset/svg/banner_t&c.jpeg'); ?>" alt="Voucher 1" class="w-full max-h-[300px] object-contain">
                            <div class="absolute inset-0 bg-black opacity-50"></div>
                            <div class="ml-5 mt-[-40px] self-start relative z-10">
                                <p class="text-sm font-bold text-white">2024-02-22</p>
                                <h3 class="text-lg font-bold text-white mb-4">
                                    Tampil Lebih Futuristik, Yamaha Luncurkan Oli Yamalube dengan Desain Botol Baru
                                </h3>
                                <button class="py-2 h-[50px] px-6 rounded text-black bg-orange-200 font-bold">
                                    Lihat Semua
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="w-1/2 h-[500px] flex flex-col gap-4 items-center">
                        <div class="h-1/2 border border-gray-300 flex justify-center">
                            <div class="w-1/2 h-full flex ">
                                <img src="<?= base_url('asset/disc1.png'); ?>" alt="Voucher 2" class="w-full">
                            </div>
                            <div class="w-1/2 bg-white relative flex flex-col items-start p-6">
                                <!-- Teks -->
                                <p class="text-sm font-bold text-black">2024-02-22</p>
                                <h3 class="text-lg font-bold text-black mb-4">
                                    Tampil Lebih Futuristik, Yamaha Luncurkan Oli Yamalube dengan Desain Botol Baru
                                </h3>
                                <!-- Tombol -->
                                <button class="py-2 h-[50px] ml-5 px-6 rounded text-black bg-orange-200 font-bold">
                                    Read More
                                </button>
                                <!-- Batik Background -->
                                <div class="absolute inset-x-0 bottom-0 h-20 bg-[url('/asset/batik/pattern6.png')] bg-repeat bg-center"></div>
                            </div>
                        </div>
                        <div class="h-1/2 border border-gray-300 flex justify-center">
                            <div class="w-1/2 h-full flex ">
                                <img src="<?= base_url('asset/disc1.png'); ?>" alt="Voucher 2" class="w-full">
                            </div>
                            <div class="w-1/2 bg-white relative flex flex-col items-start p-6">
                                <!-- Teks -->
                                <p class="text-sm font-bold text-black">2024-02-22</p>
                                <h3 class="text-lg font-bold text-black mb-4">
                                    Ini Dia Pemenang Hadiah Motor Sobek Label Yamalube!
                                </h3>
                                <!-- Tombol -->
                                <button class="py-2 h-[50px] ml-5 px-6 rounded text-black bg-orange-200 font-bold">
                                    Read More
                                </button>
                                <!-- Batik Background -->
                                <div class="absolute inset-x-0 bottom-0 h-20 bg-[url('/asset/batik/pattern6.png')] bg-repeat bg-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SOSIAL MEDIA -->
            <div class="h-[500px] font-segoe flex flex-col justify-center items-center w-full text-center gap-4">
                <h1 class="text-4xl text-white font-bold ">TETAP TERKONEKSI DENGAN KAMI</h1>
                <h3 class="text-2xl text-white font-bold m-5">MEDIA SOSIAL</h3>
                <div class="flex gap-4">
                    <img class="w-[80px] h-[80px]" src="<?= site_url('asset/social/ic_instagram.png'); ?>" alt="instagram">
                    <img class="w-[80px] h-[80px]" src="<?= base_url('asset/social/ic_facebook.png'); ?>" alt="facebook">
                    <img class="w-[80px] h-[80px]" src="<?= base_url('asset/social/ic_twitter.png'); ?>" alt="twitter">
                    <img class="w-[80px] h-[80px]" src="<?= base_url('asset/social/ic_youtube.png'); ?>" alt="youtube">
                </div>
                <h2 class="text-2xl m-5 text-white font-bold">YAMAHA MOTOR GENUIN OFFICIAL STORE</h2>
                <div class="flex gap-6">
                    <img class="w-[60px] h-[60px]" src="<?= base_url('asset/market/ic_tokopedia.png'); ?>" alt="tokopedia">
                    <img class="w-[60px] h-[60px]" src="<?= base_url('asset/market/ic_shopee.png'); ?>" alt="shopee">
                    <img class="w-[60px] h-[60px]" src="<?= base_url('asset/market/ic_lazada.png'); ?>" alt="lazada">
                </div>
                <div class="flex gap-6 m-5">
                    <img class="w-[60px] h-[60px]" src="<?= base_url('asset/market/ic_bukalapak.png'); ?>" alt="bukalapak">
                    <img class="w-[60px] h-[60px]" src="<?= base_url('asset/market/ic_blibli.png'); ?>" alt="blibi">
                </div>
            </div>
        </div>
    </div>
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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>

</html>