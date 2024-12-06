document.addEventListener("DOMContentLoaded", function () {
    const qrCodeReader = new Html5Qrcode("reader"); // Inisialisasi
    const resultDisplay = document.getElementById("qr-value");
    const startButton = document.getElementById("start-scan");
    const stopButton = document.getElementById("stop-scan");
  
    // Fungsi untuk memulai pemindaian
    function startScanning() {
      Html5Qrcode.getCameras()
        .then((devices) => {
          if (devices && devices.length) {
            const cameraId = devices[0].id; // Menggunakan kamera pertama
            qrCodeReader.start(
              cameraId,
              {
                fps: 10, // Frame per second
                qrbox: { width: 250, height: 250 }, // Area scanning
              },
              (decodedText) => {
                // Callback saat QR code berhasil dibaca
                resultDisplay.textContent = decodedText;
                console.log(`QR Code berhasil dibaca: ${decodedText}`);
                stopScanning(); // Hentikan pemindaian setelah sukses
              },
              (error) => {
                console.warn(`QR Code gagal dibaca: ${error}`);
              }
            );
            startButton.disabled = true;
            stopButton.disabled = false;
          }
        })
        .catch((err) => {
          console.error("Tidak ada kamera yang tersedia:", err);
        });
    }
  
    // Fungsi untuk menghentikan pemindaian
    function stopScanning() {
      qrCodeReader.stop().then(() => {
        console.log("Pemindaian berhenti");
        startButton.disabled = false;
        stopButton.disabled = true;
      });
    }
  
    // Event listener untuk tombol
    startButton.addEventListener("click", startScanning);
    stopButton.addEventListener("click", stopScanning);
  });
  