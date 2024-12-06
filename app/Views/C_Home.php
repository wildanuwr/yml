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
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="<?= base_url('asset/js/index.js'); ?>"></script>
    <link rel="stylesheet" href="<?= base_url('css/tailwind.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/yamalube.css'); ?>">
    <title>YAMALUBE OLI ASLI DARI YAMAHA</title>
</head>
<!-- Preloader -->

<body class="bg-black font-segoe">
    <?= $this->include('includes/nav.php') ?>
    <div id="preloader">
        <img src="<?= base_url('asset/loading.gif'); ?>" alt="Loading...">
    </div>

    <div class="flex lg:flex-row justify-center md:flex-col sm:flex-col mt-24">
        <!-- Teks di Sebelah Kiri (1/3) -->
        <div class="md:w-full lg:w-1/3 flex flex-col lg:h-[340px] md:h-[500px] sm:h-[500px] items-center justify-center bg-[url('/asset/batik/pattern3.png')] bg-amber-400/30 bg-cover md:bg-amber-400/20 text-white p-6 lg:order-1 md:order-2 sm:order-2">
            <h1 class="text-2xl md:text-4xl font-bold font-segoe text-center md:text-left">
                VALIDASI KE<span class="text-red-500 md:text-4xl font-bold text-shadow-white">ASLI</span>AN KODE UNIK
            </h1>
            <p class="text-sm md:text-lg text-amber-200 mt-2 text-center md:text-left">
                Scan QR Code dibalik sobekan label Yamalube dan pastikan keASLIan olinya
            </p>
            <!-- Field Input -->
            <input
                id="dynamicInput"
                id="qr-input"
                type="text"
                placeholder="XXXX-XXXX-XXXX"
                class="h-14 md:h-[90px] sm:h-[90px] w-[90%] md:w-[400px] sm:w-[400px] mt-3 border border-gray-300 rounded-md text-center text-gray-500 bg-gray-100 text-lg md:text-3xl"
                readonly />
            <div id="reader" style="width: 300px; margin-top: 20px;"></div>
            <!-- Tombol di Bawah -->
            <div class="flex lg:w-[50%] md:w-[45%] sm:flex-row sm:w-[40%] justify-center mt-6 gap-2">
                <!-- Tombol Kiri -->
                <button onclick="startScan()" class="lg:w-1/2 md:w-1/2 h-14 bg-blue-600 text-white hover:bg-blue-500">
                    Klik Untuk Scan QR
                </button>

                <!-- Tombol Kanan -->
                <button class="lg:w-1/2 md:w-1/2 h-14 bg-red-600 text-white hover:bg-red-500">
                    Cek Validasi
                </button>
            </div>
        </div>

        <!-- Slider di Sebelah Kanan (2/3) -->
        <div class="lg:h-full md:w-full lg:w-2/3 lg:order-2 md:order-1 sm:order-1">
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
            <div class="flex lg:flex-row md:flex-col justify-between lg:m-4 mt-[30px] h-[100%] w-full bg-[url('/asset/batik/bg-mekanisme.png')] lg:gap-4">
                <!-- Box Kiri -->
                <div class="w-1/2 md:w-full sm:w-full bg-cover bg-center h-[70rem] lg:h-[1000px] relative flex items-center justify-center md:mb-4 ">
                    <div class="absolute inset-0 bg-white bg-opacity-50 ">
                        <div class="text-black text-4xl font-segoe font-bold mt-[30px] ml-5">
                            MEKANISME PROMO
                        </div>
                        <div class="relative flex items-center justify-center mt-[30px]">
                            <img src="<?= base_url('asset/sobek.png'); ?>" alt="Slide 1" class="w-[120px] h-[120px] object-cover justify-center items-center">
                        </div>
                        <div class="font-segoe text-xl font-bold text-black mt-[20px] flex justify-center items-center">
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
                                <div id="konsumen-content" class="mt-2 text-slate-800">
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
                <div class="w-1/2 md:w-full mr-4 bg-cover bg-center h-[1000px] relative flex items-center justify-center">
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-white bg-opacity-50">
                        <!-- Judul -->
                        <div class="text-black text-5xl font-bold mt-[30px] ml-5">
                            PEMENANG HADIAH LANGSUNG
                        </div>
                        <!-- Tabel -->
                        <div class="md:w-full p-4 mx-auto mt-10 font-segoe text-3xl font-bold shadow-lg overflow-hidden">
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
                <div class="w-full flex lg:flex-row md:flex-col sm:flex-col justify-center p-10 gap-4 items-center">
                    <div class="lg:w-1/2 md:w-full sm:w-full relative h-[500px] flex flex-col items-center justify-center box">
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

                    <div class="lg:w-1/2 md:w-full sm:w-full sm:h-[500px] flex flex-col gap-4 items-center">
                        <div class="h-1/2 border border-gray-300 flex md:flex-row sm:flex-row justify-center">
                            <div class="w-1/2 flex h-full sm:h-full">
                                <img src="<?= base_url('asset/disc1.png'); ?>" alt="Voucher 2" class="w-full">
                            </div>
                            <div class="w-1/2 bg-white relative flex flex-col items-start p-6">
                                <p class="text-sm font-bold text-black">2024-02-22</p>
                                <h3 class="text-lg font-bold text-black mb-4">
                                    Tampil Lebih Futuristik, Yamaha Luncurkan Oli Yamalube dengan Desain Botol Baru
                                </h3>
                                <button class="py-2 h-[50px] ml-5 px-6 rounded text-black bg-orange-200 font-bold">
                                    Read More
                                </button>
                                <div class="absolute inset-x-0 bottom-0 h-20 bg-[url('/asset/batik/pattern6.png')] bg-repeat bg-center"></div>
                            </div>
                        </div>
                        <div class="h-1/2 border border-gray-300 flex md:flex-row sm:flex-row justify-center">
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
            <div class="h-[500px] font-segoe flex flex-col justify-center items-center w-full text-center gap-4 sm:gap-2">
                <h1 class="text-4xl text-white font-bold ">TETAP TERKONEKSI DENGAN KAMI</h1>
                <h3 class="text-2xl text-white font-bold m-5">MEDIA SOSIAL</h3>
                <div class="flex gap-4 sm:flex-row">
                    <img class="w-[80px] h-[80px] sm:w-[60px] sm:h-[60px]" src="<?= site_url('asset/social/ic_instagram.png'); ?>" alt="instagram">
                    <img class="w-[80px] h-[80px] sm:w-[60px] sm:h-[60px]" src="<?= base_url('asset/social/ic_facebook.png'); ?>" alt="facebook">
                    <img class="w-[80px] h-[80px] sm:w-[60px] sm:h-[60px]" src="<?= base_url('asset/social/ic_twitter.png'); ?>" alt="twitter">
                    <img class="w-[80px] h-[80px] sm:w-[60px] sm:h-[60px]" src="<?= base_url('asset/social/ic_youtube.png'); ?>" alt="youtube">
                </div>
                <h2 class="text-2xl m-5 text-white font-bold">YAMAHA MOTOR GENUIN OFFICIAL STORE</h2>
                <div class="flex sm:flex-row gap-6">
                    <img class="w-[60px] h-[60px] sm:w-[40px] sm:h-[40px]" src="<?= base_url('asset/market/ic_tokopedia.png'); ?>" alt="tokopedia">
                    <img class="w-[60px] h-[60px] sm:w-[40px] sm:h-[40px]" src="<?= base_url('asset/market/ic_shopee.png'); ?>" alt="shopee">
                    <img class="w-[60px] h-[60px] sm:w-[40px] sm:h-[40px]" src="<?= base_url('asset/market/ic_lazada.png'); ?>" alt="lazada">
                </div>
                <div class="flex sm:flex-row gap-6 m-5">
                    <img class="w-[60px] h-[60px] sm:w-[40px] sm:h-[40px]" src="<?= base_url('asset/market/ic_bukalapak.png'); ?>" alt="bukalapak">
                    <img class="w-[60px] h-[60px] sm:w-[40px] sm:h-[40px]" src="<?= base_url('asset/market/ic_blibli.png'); ?>" alt="blibi">
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('includes/FotterDepan.php') ?>
    <?= $this->include('includes/modalvalid.php') ?>
    <?= $this->include('includes/navigator.php') ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>

</html>