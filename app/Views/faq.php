<!DOCTYPE html>
<html lang="en">
  <!-- Header -->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/css/pagedone.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/js/pagedone.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="src/js/index.js"></script>
    <style>
      <!-- 
      /* Menetapkan posisi fixed untuk preloader agar selalu di atas layar 
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            z-index: 9999; /* Agar tetap di depan konten lain */
      }

      /* Preloader gif centering/
        #preloader img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        */
      </style><title>YAMALUBE OLI ASLI DARI YAMAHA</title>< !-- Header
      -->
    <nav class="bg-black dark:bg-gray-900 fixed w-full z-20 top-0 start-0">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-6 md:justify-between">
        <!-- Logo -->
        <a href="#" class="flex items-center mx-auto md:mx-0 space-x-3 rtl:space-x-reverse">
          <img src="https://www.yamalubepromo.com/static/media/logo.260e7d11.svg" class="h-14" alt="Yamalube Logo">
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
        </a>
        <!-- Button -->
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-4 text-center dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hidden w-full md:flex md:w-auto md:order-1">Masuk / Daftar</button>
        </div>
        <!-- Navbar -->
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 md:p-0 mt-4 font-bold md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-black dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="index.php" class="block py-2 px-3 text-lg text-white md:hover:bg-transparent md:hover:text-red-700 md:p-0 md:dark:hover:text-red-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">HOME</a>
            </li>
            <li>
              <a href="shop.php" class="block py-2 px-3 text-lg text-white md:hover:bg-transparent md:hover:text-red-700 md:p-0 md:dark:hover:text-red-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">OUR PRODUCT</a>
            </li>
            <li>
              <a href="tos.php" class="block py-2 px-3 text-lg text-white md:hover:bg-transparent md:hover:text-red-700 md:p-0 md:dark:hover:text-red-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">TERMS & CONDITION</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-lg text-white bg-red rounded md:bg-transparent md:text-red-700 md:p-0 md:dark:text-red-500">FAQ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </head>
  <body class="bg-black">
    <!-- Tambahkan margin-top agar konten utama tidak berdempetan dengan header -->
    <div class="bg-black">
    <!-- Background Image Section -->
    <div class="relative w-full h-[320px] md:h-[700px]">
        <div 
            class="absolute inset-0 bg-no-repeat bg-cover md:bg-center rounded-lg shadow-lg" style="background-image: url('https://www.yamalubepromo.com/assets/images/banner_faq.jpeg');"></div>
      </div>
    </div>
    <div>
    <div class="max-w-6xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <!-- Section 1 -->
    <div class="mb-5">
    <div 
        class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
        onclick="toggleDropdown('section1')">
        <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">
            Apakah Program ini Asli / resmi
        </h2>
    </div>
    <div id="section1" class="bg-white text-black p-4 rounded-b-md hidden ">
        <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
            <li>Ya. Diselenggarakan Oleh PT Yamaha Motor Indonesia Mfg</li>
        </ul>
    </div>
</div>

    <!-- Section 2 -->
    <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section2')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Berapa lama program ini berlangsung</h2>
        </div>
        <div id="section2" class="bg-white text-black p-4 rounded-b-md hidden">
        <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>01 April 2024 s/d 31 Maret 2025</li>
            </ul>
        </div>
    </div>
    <!-- Section 3 -->
    <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section3')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Siapakah yang boleh mengikuti program ini</h2>
        </div>
        <div id="section3" class="bg-white text-black p-4 rounded-b-md hidden">
        <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Konsumen Oli Yamalube di Indonesia</li>
                <li>Mekanik Bengkel (penjual) Oli Yamalube di Indonesia</li>
            </ul>
        </div>
    </div>
     <!-- Section 4 -->
     <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section4')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Bagimana cara mendapatkan hadiah Motor Yamaha</h2>
        </div>
        <div id="section4" class="bg-white text-black p-4 rounded-b-md hidden">
        <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Membeli Oli Yamalube, menScan QRCode Label Berhadiah, mendaftarkan diri pada aplikasi, jika beruntung akan mendapatkan hadiah Motor Yamaha</li>
            </ul>
        </div>
    </div>
     <!-- Section 5 -->
     <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section5')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Kapankah Undian berlangsung</h2>
        </div>
        <div id="section5" class="bg-white text-black p-4 rounded-b-md hidden">
        <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Tidak ada Hadiah Diundi pada periode saat ini, semua hadiah langsung terdapat di oli mesin Yamalube, jika beruntung konsumen akan mendapatkan salah satu-nya.</li>
            </ul>
        </div>
    </div>
     <!-- Section 6 -->
     <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section6')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Seberapa besarkah peluang untuk mendapatkan motor / Apakah ada hadiah motor … (tersedia)</h2>
        </div>
        <div id="section6" class="bg-white text-black p-4 rounded-b-md hidden">
        <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Hadiah Utama berupa 10 unit motor Yamaha, dimana jenis unitnya tidak mengikat dan akan ditentukan sesuai ketersediaan stock unit pada saat ditentukan pemenang hadiah</li>
            </ul>
        </div>
    </div>
     <!-- Section 7 -->
     <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section7')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Apakah sudah termasuk pajak Hadiah Langsung</h2>
        </div>
        <div id="section7" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Ya (Pajak di tanggung PT. Yamaha Indonesia Motor Mfg.)</li>
            </ul>
        </div>
    </div>
     <!-- Section 8 -->
     <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section8')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Seberapa besarkah peluang untuk mendapatkan hadiah langsung / Apakah hadiah langsung … (tersedia)</h2>
        </div>
        <div id="section8" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>10 Motor Yamaha</li>
                <li>5 Unit Game Console</li>
                <li>10 Unit Smartphone</li>
                <li>50 Unit Logam Mulia</li>
                <li>Ratusan Juta Uang Digital (E-Wallet)</li>
            </ul>
        </div>
    </div>
     <!-- Section 9 -->
     <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section9')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Bagaimanakah mendapatkan hadiah langsung</h2>
        </div>
        <div id="section9" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Membeli Oli Yamalube, menScan QRCode Label Berhadiah, menukarkan hadiah (Sesuai tertera pada Code) pada aplikasi, melengkapi data isian untuk pengiriman hadiah</li>
            </ul>
        </div>
    </div>
     <!-- Section 10 -->
     <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section10')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Berapakah lamakah mendapat hadiah langsung </h2>
        </div>
        <div id="section10" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Pengiriman hadiah dilakukan maksimal 7 hari kerja setelah mendapatkan notifikasi pengiriman (setelah melengkapi data isian KTP, alamat dan nomor telpon secara lengkap sebelumnya) atau lama waktu pengiriman mengikuti kebijakan expedisi </li>
            </ul>
        </div>
    </div>
     <!-- Section 11 -->
     <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section11')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Apakah hadiah langsung dapat ditukarkan / diuangkan</h2>
        </div>
        <div id="section11" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Tidak bisa</li>
            </ul>
        </div>
    </div>
     <!-- Section 12 -->
     <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section12')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Apakah bentuk uang digital yang digunakan</h2>
        </div>
        <div id="section13" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Ewallet : Dana, Ovo, Gopay, Link Aja</li>
                <li>Token Listrik</li>
                <li>Eshopping voucher</li>
            </ul>
        </div>
    </div>
     <!-- Section 13 -->
     <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section13')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Berapa lamakah mendapatkan uang digital</h2>
        </div>
        <div id="section13" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Pengiriman uang digital dilakukan setiap hari secara Real TIme setelah melengkapi data isian nomor telpon yang terhubung pada akun uang digital (e-wallet) sebelumnya dan upload foto KTP yang valid</li>
            </ul>
        </div>
    </div>
     <!-- Section 14 -->
     <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section14')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Seberapa besarkah peluang untuk mendapatkan hadiah uang digital / Berapakah Nilai denominasi uang digital</h2>
        </div>
        <div id="section14" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Ratusan Juta dibagi dalam denominasi Rp 25.000,-</li>
            </ul>
        </div>
    </div>
     <!-- Section 15 -->
     <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section15')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Apakah harus melakukan pembelian oli Yamalube untuk bisa mengikuti program dari Yamalube?</h2>
        </div>
        <div id="section15" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Ya</li>
            </ul>
        </div>
    </div>
    <!-- Section 16 -->
     <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section16')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Dimanakah membeli oli Yamalube ber-QRCode Label Berhadiah?</h2>
        </div>
        <div id="section16" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Yamalube QRCode Label Berhadiah pada tipe Silver, Sport, Super Sport, Matic, Power Matic & Super Matic di distribusi ke semua dealer resmi & bengkel kepercayaan anda</li>
            </ul>
        </div>
    </div>
    <!-- Section 17 -->
    <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section17')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Oli Yamalube manakah yang mengandung hadiah?</h2>
        </div>
        <div id="section17" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>QRCode Label Berhadiah terdapat di semua tipe oli mesin Yamalube</li>
            </ul>
        </div>
    </div>
    <!-- Section 18 -->
    <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section18')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Apakah ada cara khusus / tertentu untuk membuka label pada kemasan oli Yamalube</h2>
        </div>
        <div id="section18" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Tekan sedikit pada pinggir botol oli</li>
                <li>Lalu sobek label dari kanan bawah </li>
            </ul>
        </div>
    </div>
    <!-- Section 19 -->
    <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section19')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Apakah hanya melalui Scan QR Code untuk dapat mengikuti program Yamalube?</h2>
        </div>
        <div id="section19" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Program berjalan secara digital di <a>www.yamalubepromo.com</a></li>
                <li>Program dapat diakses melalui scan QRCode Label Berhadiah di balik label Yamalube</li>
                <li>Program hanya akan berlangsung melalui Kode Unik yang terkandung dalam QRCode Label Berhadiah</li>
            </ul>
        </div>
    </div>
    <!-- Section 20 -->
    <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section20')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Bagaimanakah membedakan QRCode label berhadiah asli / belum digunakan</h2>
        </div>
        <div id="section21" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Terdapat notifikasi validasi pada saat setelah Scan QRCode Label Berhadiah pada kemasan.</li>
            </ul>
        </div>
    </div>
    <!-- Section 21 -->
    <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section21')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Apakah memerlukan program /software / applikasi khusus untuk bisa Scan QR Code</h2>
        </div>
        <div id="section21" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Tidak. (Jika) akses melalui browser <a>www.yamalubepromo.com</a> tersedia fitur mengaktifkan Scanner</li>
                <li>Ya. (Jika) akses langsung dengan klik tombol biru "klik untuk scan QR". Aplikasi dapat menggunakan QR Reader pada umumnya Apps</li>
            </ul>
        </div>
    </div>
    <!-- Section 22 -->
    <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section22')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Apakah memerlukan seri / versi tertentu untuk dapat mengaktifkan fitur scan maupun akses ke www.yamalubepromo.com</h2>
        </div>
        <div id="section23" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Tidak. (Umumnya semua Browser dan smartphone dapat mengakses dengan baik)</li>
            </ul>
        </div>
    </div>
    <!-- Section 23 -->
    <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section23')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Apakah QRCode dapat digunakan berulang-ulang (Lebih dari sekali)</h2>
        </div>
        <div id="section23" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Maksimal akumulasi 3x scan validasi per QRCode </li>
            </ul>
        </div>
    </div>
    <!-- Section 24 -->
    <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section24')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Apakah dapat menggandakan data diri (Sebagai Konsumen / mekanik)</h2>
        </div>
        <div id="section24" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Tidak bisa, Per Akun Register hanya untuk 1 NIK yang valid</li>
            </ul>
        </div>
    </div>
    <!-- Section 25 -->
    <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section25')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Berapakah nilai minimal untuk penukaran Poin mekanik</h2>
        </div>
        <div id="section26" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Minimal 27.750 poin per sekali penukaran</li>
            </ul>
        </div>
    </div>
    <!-- Section 26 -->
    <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section26')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Berapakah nilai maksimal untuk penukaran Poin mekanik per bulan</h2>
        </div>
        <div id="section26" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Maksimal 515.000 poin dalam satu bulan</li>
            </ul>
        </div>
    </div>
    <!-- Section 27 -->
    <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section27')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Apakah di setiap QR Code pasti terdapat poin untuk mekanik</h2>
        </div>
        <div id="section27" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Ya pasti , dari setiap QRCode dibalik label produk oli mesin Yamalube ASLI terdapat poin yang sudah ditentukan</li>
                <li>Poin yang sudah terakumulasi dapat ditukarkan langsung dengan uang digital sesuai dengan ketentuan minimum & maksimal per sekali penukaran poin</li>
                <li>Pastikan anda login sebagai user mekanik untuk dapat mengumpulkan poin ini</li>
              </ul>
        </div>
    </div>
    <!-- Section 28 -->
    <div class="mb-5">
        <div 
            class="bg-[#cab28b] p-4 rounded-t-md cursor-pointer" 
            onclick="toggleDropdown('section28')">
            <h2 class="text-xs sm:text-xs font-bold" style="font-family: 'Segoe UI', sans-serif;">Apakah Data Register/Login pada yamalubepromo.com bisa dihapus ?</h2>
        </div>
        <div id="section28" class="bg-white text-black p-4 rounded-b-md hidden">
            <ul class="list-disc pl-5 text-xs sm:text-xs" style="font-family: 'Calibri', sans-serif;">
                <li>Anda dapat melakukan permintaan penghapusan Data Register/Login pada akun system berikut <b>klik disini</b> untuk melakukan permintaan</li>
            </ul>
        </div>
    </div>
</div>
    </div>
</div>

  <!-- Preloader 
    <div id="preloader"><img class="h-64" src="asset/loading.gif" alt="Loading..."></div> -->
  <div role="status" class="w-full bg-black">
    <div class="justify-center w-full"></div>
    <div class="w-full bg-black"></div>
    <span class="sr-only">Loading...</span>
  </div>
  <div role="status" class="space-y-8 mt-5 md:space-y-0 md:space-x-8 rtl:space-x-reverse md:flex md:items-center">
    <div class="w-full bg-black">
      <div class="mb-6 md:mb-0">
        <a href="#" class="flex items-center">
          <img src="https://www.yamalubepromo.com/assets/images/pattern3.png" class="w-full" alt="FlowBite Logo" />
        </a>
      </div>
    </div>
    <span class="sr-only">Loading...</span>
  </div>
  <!--- Navigator Mobile Menu  -->
  <div class="fixed bottom-0 left-0 z-50 w-full h-16 bg-[#e11e25] border-t border-[#e11e25] md:hidden">
    <div class="grid h-full max-w-lg grid-cols-5 mx-auto font-medium">
        <a href="index.php" class="inline-flex flex-col items-center justify-center px-5 border-x border-[#e11e25] hover:bg-[#cab28b] group">
            <!-- Ganti ikon SVG dengan URL gambar -->
            <img src="asset/svg/icon_home_new.svg" alt="Home Icon" class="w-5 h-5 mb-2">
            <span class="text-m text-white group-hover:text-gray-200">Home</span>
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
</div>
  <!--Akhir Navigator -->
  <script>
    window.onload = () => {
      // Setelah halaman selesai dimuat, tunggu 3 detik untuk menyembunyikan preloader
      setTimeout(() => {
        const preloader = document.getElementById('preloader');
        preloader.style.display = 'none'; // Menghilangkan preloader setelah 7 detik
      }, 3000); // Delay 3 detik 
    }
    
          function toggleDropdown(id) {
        const section = document.getElementById(id);
        section.classList.toggle('hidden');
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
            <li>
              <a href="#" class="hover:underline">Home</a>
            </li>
            <li>
              <a href="#" class="hover:underline">Our Products</a>
            </li>
            <li>
              <a href="#" class="hover:underline">Terms & Condition</a>
            </li>
            <li>
              <a href="#" class="hover:underline">FAQ</a>
            </li>
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