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
  });

  window.onload = () => {
    // Setelah halaman selesai dimuat, tunggu 7 detik untuk menyembunyikan preloader
    setTimeout(() => {
        const preloader = document.getElementById('preloader');
        preloader.style.display = 'none'; // Menghilangkan preloader setelah 7 detik
    }, 4000); // Delay 7 detik (7000ms)
}

  function openModal() {
    const modal = document.getElementById('modal');
    modal.classList.remove('hidden');  // Menampilkan modal dengan menghapus kelas 'hidden'
  }
  function closeModal() {
    const modal = document.getElementById('modal');
    modal.classList.add('hidden');  // Menyembunyikan modal dengan menambahkan kelas 'hidden'
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
