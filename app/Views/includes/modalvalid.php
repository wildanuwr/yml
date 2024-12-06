<div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <!-- Konten Modal -->
    <div class="relative bg-white w-full sm:mx-4 sm:max-w-sm md:max-w-md lg:max-w-lg rounded-lg shadow-lg overflow-hidden flex flex-col items-center justify-center">
        <!-- Background Atas -->
        <div
            class="h-20 w-full bg-cover flex items-center justify-end"
            style="background-image: url('/asset/batik/pattern7.png');">
            <img src="<?= base_url('asset/svg/icon_cross_x.svg') ?>" alt="Logo" class="w-16 h-16 mr-4" />
        </div>

        <!-- Konten Modal -->
        <div class="p-6 relative flex flex-col justify-center items-center">
            <img src="<?= base_url('asset/svg/icon_cross_valid.svg') ?>" alt="Logo" class="w-16 h-16 mb-6" />
            <!-- Header -->

            <!-- Isi Modal -->
            <p class="text-black text-xl mb-6 text-center">
                Validasi Kode Unik Yamalube Anda
            </p>
            <h2 class="text-xl uppercase font-semibold mb-4 text-center">INFORMASI</h2>
            <p class="text-center text-xl">
                Mau Dapat Hadiah?
            </p>
            <p class="text-center text-xl">Yuk Klik Lanjutkan</p>
            <!-- Tombol Aksi di Tengah -->
            <div class="flex justify-center mt-4">
                <button
                    onclick="closeModal()"
                    class="bg-[#0e1ec7] text-white px-4 py-2 rounded-md hover:bg-gray-400 transition">
                    Lanjutkan
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