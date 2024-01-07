@extends('layouts.main')

@section('container')
<div style="text-align: center;">

    <!-- Banner -->
    <img src="img/banner.jpg" class="img-fluid" alt="banner" style="width: 100%;">

    <!-- Teks Mobile Legends di sebelah kiri dengan margin-top dan latar belakang putih -->
    <div style="text-align: left; margin-left: 5%;">
        <h3 style="margin-top: 30px; display: inline-block; padding: 5px; font-weight: bold;">Mobile Legends: Bang Bang
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
        <p style="color: #17232f; font-size: 1.125rem; font-weight: bold;">1. Masukkan User ID</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
            <input type="text" class="form-control" placeholder="Server" aria-label="Server">
        </div>
        <p style="font-size: smaller; margin-top: 10px; color: #808080;">
            Untuk mengetahui User ID Anda, silakan klik menu profile dibagian kiri atas pada menu utama game.
            User ID akan terlihat dibagian bawah Nama Karakter Game Anda. Silakan masukkan User ID Anda untuk
            menyelesaikan transaksi.
            Contoh : 12345678(1234).
        </p>

    </div>
    <!-- Form Nominal -->
    <div
        style="background-color: white; padding: 20px; display: inline-block; margin-top: 20px; width: 90%; text-align: left; border-radius: 10px;">
        <p style="color: #17232f; font-size: 1.125rem; font-weight: bold;">2. Pilih Nominal Top Up</p>
        <p style="color: #17232f;">Pilih Kategori</p>
        <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off">
        <label class="btn btn-secondary" for="option1" style="width: 30%;">
            <img src="img/dm.png" alt="Diamond Image" style="max-width: 100%; height: auto; margin-right: 10px;">
            Diamond
        </label>
        <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
        <label class="btn btn-secondary" for="option2" style="width: 30%;">
            <img src="img/bundleml.png" alt="Bundle" style="max-width: 100%; height: auto; margin-right: 10px;">
            Bundle
        </label>
        <p style="color: #17232f; margin-top: 70px;">Pilih items</p>
        <input type="radio" class="btn-check " name="options" id="option1" autocomplete="off">
        <label class="btn btn-secondary" for="option1">Radio</label>
        <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
        <label class="btn btn-secondary" for="option2">Radio</label>
    </div>

    <div
        style="background-color: white; padding: 20px; display: inline-block; margin-top: 20px; width: 90%; text-align: left; border-radius: 10px;">
        <p style="color: #17232f; font-size: 1.125rem; font-weight: bold;">3. Payment</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Harga" aria-label="Username">
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2" type="button">Beli sekarang</button>
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
        <p style="color: #17232f; font-size: 1.25rem; font-weight: bold;">Top Up ML Diamonds, Twilight Pass & Weekly
            Diamond Pass di Indonesia</p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto;">
            Hanya butuh beberapa detik saja untuk beli Diamond, Twilight Pass and Weekly Diamond Pass di Alstore,
            top-up menjadi mudah, aman, dan praktis. Alstore dipercaya oleh jutaan gamers & pengguna aplikasi di
            Asia Tenggara termasuk Indonesia.
            <a href="#" style="display: block;">Klik disini untuk memulai.</a>
        </p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto;">
            Dengan ML Diamonds kamu bisa mengakses konten premium dari hero terbaru hingga berbagai pilihan skin
            hero dan lainnya. Untuk mendapatkan nilai terbaik dari uang kamu, berikut manfaat Twilight Pass & Weekly
            Diamond Pass di bawah ini.
        </p>
        <p
            style="font-size: .875rem; color: #17232f; width: 95%; margin-top: -20px; margin-left: auto; margin-right: auto; text-align: center; white-space: pre-line;">
            Twilight Pass:
            Instant Reward: 200 Tickets, 1 Glorious General Trial Card, 1 Diamond Hero Trial Card Pack (1-Day)
            Level 8: 200 Tickets, Eudora’s “Flame Red Lips” Skin, 2 Diamond Hero Trial Card Pack (1-Day)
            Level 10: 300 Tickets, 1 Star Protection Card, 2 Deluxe Skin Trial Card Pack (1-Day)
            Level 12: 350 Tickets, 1 Double EXP Card (3-Days), 5 Luxury Ticket
            Level 15: 350 Tickets, Miya’s Exclusive “Suzuhime” Skin, 2 Epic Skin Trial Card (1-Day)
            Level 20: 500 Tickets, Twilight Pass Avatar Border, 10 Luxury Ticket.
        </p>
        <p
            style="font-size: .875rem; color: #17232f; width: 95%; margin-top: -20px; margin-left: auto; margin-right: auto; text-align: center; white-space: pre-line;">
            Weekly Diamond Pass:
            - 210 diamonds
            - 210 Starlight Member points
            - 7 Choice Bundle
        </p>
        <p style="color: #17232f; font-size: .875rem; margin-top: 30px; font-weight: bold;">Mengapa memilih Alstore
            untuk top up
            Mobile Legends?</p>
        <p style="color: #17232f; font-size: .875rem; font-weight: bold;">Mudah dan Cepat</p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-top: -15px; margin-left: auto; margin-right: auto;">
            Kamu hanya perlu hitungan detik untuk menyelesaikan pembelian di Alstore.
        </p>
        <p style="color: #17232f; font-size: .875rem; font-weight: bold;">Garansi sampai</p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-top: -15px; margin-left: auto; margin-right: auto;">
            Mobile Legends pembelian dijamin langsung masuk ke akun Kamu.
        </p>
        <p style="color: #17232f; font-size: .875rem; font-weight: bold;">Customer support kelas dunia</p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-top: -15px; margin-left: auto; margin-right: auto;">
            Tim customer support Kami selalu siap membantu 24jam. Kirim pesanmu melalui <a href='#'>form
                berikut</a>, dan Kami akan respon segera!
        </p>

        <p style="color: #17232f; font-size: .875rem; font-weight: bold;">Promo Menarik</p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-top: -15px; margin-left: auto; margin-right: auto;">
            Jangan lewatkan deals terbaik, giveaways, dan masih banyak lagi, hanya di Alstore!
        </p>

        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item" style="margin-bottom: 20px;">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"
                        style="font-size: 1.25rem; background-color: #F0F0F0; color: #17232f">
                        Bagaimana cara top up Diamond ML?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample"
                    style="background-color: #F0F0F0; color: #17232f">
                    <div class="accordion-body">
                        <p
                            style="font-size: .875rem; color: #17232f; width: 93%; margin-top: -20px; margin-left: 20px; margin-right: auto; text-align: left; white-space: pre-line;">
                            1. Kunjungin Alstore/MobileLegends
                            2. Masukan User ID dan Zone ID MLBB.
                            3. Pilih jumlah diamond yang kamu inginkan.
                            4. Menyelesaikan transaksi-mu dan diamond akan langsung terkirim ke akun MLBB-mu.
                        </p>
                        <p
                            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto; text-align: left;">
                            Kamu juga bisa kirim Diamonds ke teman dan keluarga kamu dengan cara ketik user ID dan Zone
                            ID mereka.
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion-item" style="margin-bottom: 20px;">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"
                        style="font-size: 1.25rem; background-color: #F0F0F0; color: #17232f">
                        Bagaimana cara top up Twilight Pass?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample"
                    style="background-color: #F0F0F0; color: #17232f">
                    <p
                        style="font-size: .875rem; color: #17232f; width: 93%; margin-top: -20px; margin-left: 20px; margin-right: auto; text-align: left; white-space: pre-line;">
                        1. Kunjungin Alstore/MobileLegends
                        2. Masukan User ID dan Zone ID MLBB.
                        3. Pilih penawaran Twilight Pass.
                        4. Menyelesaikan transaksi-mu dan diamond akan langsung terkirim ke akun MLBB-mu.
                    </p>
                    <p
                        style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto; text-align: left;">
                        Kamu juga bisa kirim Diamonds ke teman dan keluarga kamu dengan cara ketik user ID dan Zone
                        ID mereka.
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