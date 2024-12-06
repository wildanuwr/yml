  // Pastikan JavaScript dijalankan setelah DOM dimuat
  document.addEventListener('DOMContentLoaded', function () {
    let currentIndex = 0;
    const slides = document.querySelectorAll("#slider-track img");
    const sliderTrack = document.getElementById("slider-track");

    // Fungsi untuk mengatur slide berikutnya
    function autoSlide() {
        currentIndex = (currentIndex + 1) % slides.length;

        // Jika sampai gambar terakhir, reset kembali ke gambar pertama tanpa menunggu
        if (currentIndex === 0) {
            sliderTrack.style.transition = 'none'; // Nonaktifkan transisi untuk reset
            sliderTrack.style.transform = `translateX(0%)`; // Reset ke gambar pertama langsung
            // Mengaktifkan kembali transisi setelah beberapa detik
            setTimeout(() => {
                sliderTrack.style.transition = 'transform 0.5s ease-in-out';
            }); // Menunggu agar transisi aktif kembali
        } else {
            sliderTrack.style.transform = `translateX(-${currentIndex * 100}%)`;
        }
    }

    // Set interval untuk mengganti slide setiap 3 detik
    setInterval(autoSlide, 2000);
    const swiper = new Swiper('.swiper', {
      loop: true, // Membuat slider berulang
      slidesPerView: 4, // Menampilkan 4 slide sekaligus
      spaceBetween: 10, // Jarak antar slide
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 3000, // Slide otomatis setiap 3 detik
        disableOnInteraction: false, // Tetap autoplay meskipun ada interaksi
      },
      
    });
    // Fungsi untuk mengatur atribut input berdasarkan ukuran layar
function updateInputAttributes() {
  const input = document.getElementById("dynamicInput");

  if (window.matchMedia("(min-width: 1024px)").matches) {
    // Ukuran lg atau lebih besar
    input.setAttribute("readonly", true);
    input.setAttribute("onclick", "openModal()");
    console.log("Mode lg: readonly dan onclick aktif");
  } else {
    // Ukuran md atau lebih kecil
    input.removeAttribute("readonly");
    input.removeAttribute("onclick");
    input.onclick = null; // Pastikan event listener juga dihapus
    console.log("Mode md: readonly dan onclick nonaktif");
  }
}
// Jalankan saat halaman dimuat
updateInputAttributes();
console.log("Ukuran layar:", window.innerWidth);

// Pantau perubahan ukuran layar
window.addEventListener("resize", updateInputAttributes);
document.addEventListener("DOMContentLoaded", updateInputAttributes);
});

  window.onload = () => {
    // Setelah halaman selesai dimuat, tunggu 7 detik untuk menyembunyikan preloader
    setTimeout(() => {
        const preloader = document.getElementById('preloader');
        preloader.style.display = 'none'; // Menghilangkan preloader setelah 7 detik
    }, 3000); // Delay 7 detik (7000ms)
}

  function toggleContent(id, button) {
    const content = document.getElementById(id);
    const icon = button.querySelector('i');
    if (content.classList.contains('hidden-content')) {
        content.classList.remove('hidden-content');
        icon.classList.remove('bi-plus-square-fill');
        icon.classList.add('bi-dash-square-fill');
    } else {
        content.classList.add('hidden-content');
        icon.classList.remove('bi-dash-square-fill');
        icon.classList.add('bi-plus-square-fill');
    }
}
// Fungsi untuk membuka modal
function openModal() {
  const modal = document.getElementById("modal");
  modal.classList.remove("hidden");
}

// Fungsi untuk menutup modal
function closeModal() {
  const modal = document.getElementById("modal");
  modal.classList.add("hidden");
}
// Ambil elemen input
const input = document.getElementById("dynamicInput");

// Fungsi untuk memulai pemindaian QR
 // Fungsi untuk memulai pemindaian QR
 function startScan() {
  const input = document.getElementById("dynamicInput");

  const html5QrCode = new Html5Qrcode("reader");

  // Mulai pemindaian QR
  html5QrCode.start(
      { facingMode: "environment" }, // Kamera belakang
      {
          fps: 10,    // Frame per second
          qrbox: 250  // Ukuran area pemindaian
      },
      (decodedText, decodedResult) => {
          // Jika QR berhasil discan, tampilkan hasilnya di input
          input.value = decodedText; // Menampilkan hasil di input
          html5QrCode.stop(); // Stop scanner setelah QR ditemukan
      },
      (errorMessage) => {
          // Menangani error jika pemindaian gagal
          console.error(errorMessage);
      }
  ).catch(err => {
      console.error(err);
  });
}