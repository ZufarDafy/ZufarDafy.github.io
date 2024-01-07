@extends('layouts.main')

@section('container')
<div style="text-align: center;">

    <!-- Banner -->
    <img src="img/genshinban.png" class="img-fluid" alt="banner" style="width: 100%;">

    <!-- Teks Mobile Legends di sebelah kiri dengan margin-top dan latar belakang putih -->
    <div style="text-align: left; margin-left: 5%;">
        <h3 style="margin-top: 30px; display: inline-block; padding: 5px; font-weight: bold;">Genshin Impact
        </h3>
    </div>

    <div style="width: 90%; display: flex; justify-content: space-between;">

        <div class="card-body"
            style="background-color: white; color: black; border-radius: 15px; padding: 10px; width: 49%; height: 30px; display: flex; justify-content: center; align-items: center; margin-left: 5%; margin-right: 15px;">
            <img src="img/process.png" alt="Icon"
                style="width: 20px; height: 20px; margin-right:10px; margin-left: 0px;">
            <span style="font-size: 10px; text-align: left; line-height: 1; margin-bottom: 0;">Proses yang sangat
                cepat</span>
        </div>

        <div class="card-body"
            style="background-color: white; color: black; border-radius: 15px; padding: 10px; width: 49%; height: 30px; display: flex; justify-content: center; align-items: center; margin-right: -5%;">
            <img src="img/cust.png" alt="Icon" style="width: 20px; height: 20px; margin-right:10px; margin-left: 0px;">
            <span style="font-size: 10px; text-align: left; line-height: 1; margin-bottom: 0;">Layanan Pelanggan
                24/7</span>
        </div>

    </div>

    <div
        style="background: linear-gradient(to right, #273A80, #482865); padding: 20px; display: flex; margin-top: 50px; width: 90%; text-align: left; border-radius: 10px; margin-left: 5%;">
        <img src="img/disc.gif" alt="Icon" style="width: 50px; height: 50px; margin-right:10px; margin-left: -5px;">
        <span
            style="font-size: 12px; text-align: left; line-height: 1; margin-bottom: 0; color: #DAB754; font-weight: bold; margin-top: 2px;">Dapatkan
            Diskon 15% untuk setiap pembelian Items diatas 50.000 dan Diskon 30% untuk setiap pembelian Items diatas
            200.000</span>
    </div>

    <!-- Form User ID -->
    <div
        style="background-color: white; padding: 20px; display: inline-block; margin-top: 20px; width: 90%; text-align: left; border-radius: 10px;">
        <p style="color: #17232f; font-size: 1.125rem; font-weight: bold;">1. Masukkan UID dan pilih Server</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukkan UID" aria-label="Player ID">

            <select class="form-control" aria-label="Server">
                <option value="" selected disabled>Pilih Server</option>
                <option value="server1">Amerika</option>
                <option value="server2">Europe</option>
                <option value="server2">Asia</option>
                <option value="server2">TW, HK, MO</option>
                <!-- Tambahkan opsi server lainnya sesuai kebutuhan -->
            </select>
        </div>
        <p style="font-size: smaller; margin-top: 10px; color: #808080;">
            Untuk menemukan UID Anda, masuk pakai akun Anda. Klik pada tombol profile di pojok kiri atas layar. Temukan
            UID dibawah avatar. Masukan UID Anda di sini. Selain itu, Anda juga dapat temukan UID Anda di pojok bawah
            kanan layar.
        </p>

    </div>
    <!-- Form Nominal -->
    <div
        style="background-color: white; padding: 20px; display: inline-block; margin-top: 20px; width: 90%; text-align: left; border-radius: 10px;">
        <p style="color: #17232f; font-size: 1.125rem; font-weight: bold;">2. Pilih Nominal Top Up</p>
        <div
            style="background-color: #17232f; color:  white; display: flex;  align-items: center;  margin-top: 10px; border-radius: 10px;">
            <img src="img/dm.png" alt="Icon" style="width: 70px; height: 70px; margin-right:10px; margin-left: 0px;">
            <span style="font-size: 1.275rem; text-align: left; margin-bottom: 0;">Item</span>
        </div>
        <p style="color: #17232f; margin-top: 30px;">Pilih items</p>
        <p style="color: #17232f; font-size: .750rem; margin-top: -15px;">*Klik Item 2 kali</p>
        @foreach($produksItem as $p)
        <div class="btn-group" style="margin-bottom: 10px; max-width: 46%;">
            <button type="button" onclick="beliSekarang()" class="btn product-button" data-harga="{{ $p->harga }}"
                data-nama="{{ $p->nama_produk }}" style="background-color: #17232f; color: white;">
                <img src="img/genesis.png" alt="Product Image" style="max-width: 70%; height: auto; margin-right: 5px;">
                {{ $p->nama_produk }}
            </button>
        </div>
        @endforeach

        <div
            style="background-color: #17232f; color:  white; display: flex;  align-items: center;  margin-top:50px; border-radius: 10px;">
            <img src="img/bundleml.png" alt="Icon"
                style="width: 70px; height: 70px; margin-right:10px; margin-left: 0px;">
            <span style="font-size: 1.275rem; text-align: left; margin-bottom: 0;">Bundle</span>
        </div>
        <p style="color: #17232f; margin-top: 30px;">Pilih items</p>
        @foreach($produksBundle as $a)
        <div class="btn-group" style="margin-bottom: 10px; max-width: 46%;">
            <button type="button" onclick="beliSekarang()" class="btn product-button" data-harga="{{ $a->harga }}"
                data-nama="{{ $a->nama_produk }}" style="background-color: #17232f; color: white;">
                <img src="img/genesis.png" alt="Product Image" style="max-width: 50%; height: auto; margin-right: 5px;">
                {{ $a->nama_produk }}
            </button>
        </div>
        @endforeach
    </div>

    <div
        style="background-color: white; padding: 20px; display: inline-block; margin-top: 20px; width: 90%; text-align: left; border-radius: 10px;">
        <p style="color: #17232f; font-size: 1.125rem; font-weight: bold;">3. Pembayaran</p>
        <div class="input-group mb-3">
            <input id="hargaInput" type="text" class="form-control" placeholder="Harga" aria-label="Harga" readonly>
        </div>
        <div class="input-group mb-3">
            <input id="namaProdukInput" type="text" class="form-control" placeholder="Nama Produk"
                aria-label="Nama Produk" readonly>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2" type="button" onclick="beliSekarang()">Beli sekarang</button>
        </div>
    </div>

    @auth
    <div class="floating-login">
    @csrf
    <button type="button" class="btn btn-primary btn-saldo" data-bs-toggle="modal" data-bs-target="#saldoModal"
        style="text-align: left; width: 160px; height: 40px;">
        Saldo: {{ auth()->user()->acoin }}
    </button>
    </div>

    <div class="modal" id="saldoModal" tabindex="-1" aria-labelledby="saldoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="saldoModalLabel" style="color: black;">Recharge Saldo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('topup.saldo') }}" method="post" id="saldoForm" style="text-align: left;">
            @csrf
            <label for="jumlah-saldo" class="form-label" style="color: black;">Jumlah Isi Saldo:</label>
            <input type="text" class="form-control" id="jumlah-saldo" name="jumlah-saldo" placeholder="Masukkan jumlah saldo">
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="okButton" data-bs-dismiss="modal">OK</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
    @else
    <div class="floating-login">
    <a href="/login">
        <button>Login</button></a>
    </div>
    @endauth

    <div
        style="background-color: white; padding: 20px; display: inline-block; margin-top: 20px; width: 100%; text-align: center;">
        <p style="color: #17232f; font-size: 1.25rem; font-weight: bold;">Tempat Top Up Genshin Impact Nomor 1 di
            Indonesia</p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto;">
            Hanya butuh beberapa detik saja untuk membeli Genesis Crystals untuk Genshin Impact. Beli Primogems untuk
            "wish" atau supply bundles di dalam gift shop pakai Genesis Crystals. Kami dipercaya oleh jutaan gamers &
            pengguna aplikasi di Asia Tenggara termasuk di Indonesia.
            <a href="#" style="display: block;">Klik disini untuk memulai top up.</a>
        </p>
        <p style="color: #17232f; font-size: .875rem; margin-top: 30px; font-weight: bold;">Tentang Genshin Impact:
        </p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto; margin-top: -15px;">
            Jelajahi luasnya semesta penuh dengan petualangan dalam game open-world terbaru dari HoYoverse. Masuklah ke
            Tevyat, dunia yang penuh dengan kehidupan dan berbagai kekuatan. Kamu dan saudaramu sampai ke dunia ini dari
            semesta lain. Terpisahkan oleh Dewa yang masih menjadi misteri, kekuatanmu dirampas, dan dibuang ke dalam
            tidur yang sangat lelap, kemudian terbangun di dalam dunia yang sangat berbeda. Lalu kamu memulai
            petualanganmu melewati Teyvat untuk mencari jawaban dari Sang Ketujuh - Dewa dari segala elemen. Dalam
            perjalanan, persiapkan diri untuk menyusuri setiap sudut dunia yang menakjubkan, gabungkan kekuatan berbagai
            tipe karakter, dan ungkap misteri demi misteri Teyvat untuk menjawab semuanya.
        </p>

        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item" style="margin-bottom: 20px;">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"
                        style="font-size: 1.25rem; background-color: #F0F0F0; color: #17232f">
                        Bagaimana Cara Top up Genesis Crystal Genshin Impact?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample"
                    style="background-color: #F0F0F0; color: #17232f">
                    <div class="accordion-body">
                        <p
                            style="font-size: .875rem; color: #17232f; width: 93%; margin-top: -20px; margin-left: 20px; margin-right: auto; text-align: left; white-space: pre-line;">
                            1. Kunjungin Alstore/GenshinImpact
                            2. Masukan UID dan Server Akun Genshin
                            3. Pilih jumlah Genesis yang kamu inginkan.
                            4. Menyelesaikan transaksi-mu dan Genesis akan langsung terkirim ke akun Genshin-mu.
                        </p>
                        <p
                            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto; text-align: left;">
                            Kamu juga bisa kirim Genesis ke teman dan keluarga kamu dengan cara ketik user UID dan
                            Server mereka.
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion-item" style="margin-bottom: 20px;">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"
                        style="font-size: 1.25rem; background-color: #F0F0F0; color: #17232f">
                        Top Up Blessing of the Welkin Moon
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample" style="background-color: #F0F0F0; color: #17232f">
                    <div class="accordion-body">
                        <p
                            style="font-size: .875rem; color: #17232f; width: 93%; margin-top: -20px; margin-left: 20px; margin-right: auto; text-align: left; white-space: pre-line;">
                            1. Kunjungin Alstore/GenshinImpact
                            2. Masukan UID dan Server Akun Genshin
                            3. Pilih penawaran Blessing of the Welkin Moon.
                            4. Menyelesaikan transaksi-mu dan Genesis akan langsung terkirim ke akun Genshin-mu.
                        </p>
                        <p
                            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto; text-align: left;">
                            Kamu juga bisa kirim Genesis ke teman dan keluarga kamu dengan cara ketik user UID dan
                            Server mereka.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--Beres Text -->
    </div>

    <div style="background-color: #E8F953; padding: 20px; display: inline-block; width: 100%; text-align: left;">
        <p style="color: #17232f; font-size: 1.125rem; font-weight: bold; margin-top: 70px;">Butuh Bantuan?</p>
        <button type="button" class="btn btn-light"
            style="margin-top: -10px; background-color: #C0D603; color: black; border-radius: 7px; padding: 10px; width: 140px; height: 35px; display: flex; justify-content: center; align-items: center;"
            onclick="window.location.href='https://wa.me/62881025872869?text=Halo%20bang%20aku%20mau%20nanya.';">
            <img src="img/diss.png" alt="Icon" style="width: 20px; height: 20px; margin-right: 5px; margin-left: -5px;">
            <span style="font-size: 14px;">Hubungi Kami</span>
        </button>
        <p style="color: #17232f; font-size: 1.125rem; font-weight: bold; margin-top: 40px;">Bahasa:</p>
        <div class="card-body"
            style="margin-top: -10px; background-color: #C0D603; color: black; border-radius: 7px; padding: 10px; width: 140px; height: 35px; display: flex; justify-content: center; align-items: center;">
            <img src="img/indo.png" alt="Icon" style="width: 25px; height: 25px; margin-right:10px; margin-left: -5px;">
            <span style="font-size: 18px;">Indonesia</span>
        </div>
        <p style="color: #17232f; font-size: 1.125rem; font-weight: bold; margin-top: 40px; margin-bottom: 5px;">
            Dapatkan berita Alstore di:
        </p>
        <a href="https://www.instagram.com/alstore.04/" target="_blank"><img src="img/ig.png"
                style="width: 24px; height: 24px; margin-right: 5px;"></a>
        <a href="https://chat.whatsapp.com/JZ7dFXxRfd1GYoC3qD9rWt" target="_blank"><img src="img/wa.png"
                style="width: 24px; height: 24px; margin-right: 10px;"></a>
    </div>

</div>

<footer style="background-color: #F0F0F0; color: black; padding: 10px; text-align: center;">
    <p style="margin-top: 10px;">&copy; 2024 Alstore. All rights reserved.</p>
</footer>

<script>
    // Bagian JavaScript
    function beliSekarang() {
        // Mendapatkan nilai harga dari tombol yang dipilih
        var selectedProduct = document.querySelector('.product-button.active');
        var hargaProduk = selectedProduct ? selectedProduct.dataset.harga : 0;
        var namaProduk = selectedProduct ? selectedProduct.dataset.nama : '';

        // Memperbarui nilai input harga dan nama produk
        document.getElementById('hargaInput').value = hargaProduk;
        document.getElementById('namaProdukInput').value = namaProduk;

        // Menonaktifkan tombol setelah beberapa detik
        setTimeout(function () {
            selectedProduct.classList.remove('active');
        }, 2000); // Ganti angka 2000 dengan jumlah milidetik yang diinginkan
    }

    // Menangani acara klik pada tombol produk
    document.querySelectorAll('.product-button').forEach(function (button) {
        button.addEventListener('click', function () {
            // Toggle kelas aktif pada tombol yang dipilih
            button.classList.toggle('active');
        });
    });
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Menjalankan submit form saat tombol "OK" diklik
    $('#okButton').on('click', function() {
      $('#saldoForm').submit();
    });

    // Fokuskan ke input jumlah saldo saat modal muncul
    $('#saldoModal').on('shown.bs.modal', function() {
      $('#jumlah-saldo').focus();
    });

    // Menghentikan default submit form dan kemudian submit form
    $('#saldoForm').on('submit', function(e) {
      e.preventDefault();
      $(this).unbind('submit').submit();
    });
  });
</script>

@endsection