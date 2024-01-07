@extends('layouts.main')

@section('container')
<div style="text-align: center;">

    <!-- Banner -->
    <img src="img/pubgban.jpg" class="img-fluid" alt="banner" style="width: 100%;">

    <!-- Teks Mobile Legends di sebelah kiri dengan margin-top dan latar belakang putih -->
    <div style="text-align: left; margin-left: 5%;">
        <h3 style="margin-top: 30px; display: inline-block; padding: 5px; font-weight: bold;">PUBG Mobile UC
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
        <p style="color: #17232f; font-size: 1.125rem; font-weight: bold;">1. Masukkan Player ID</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukkan Player ID" aria-label="Username">
        </div>
        <p style="font-size: smaller; margin-top: 10px; color: #808080;">
            Untuk menemukan PlayerID Anda, Buka profile anda dengan mengklik avatar di sudut kiri atas, ID dan Nama
            player akan ditampilkan di sudut kiri atas.
        </p>

    </div>
    <!-- Form Nominal -->
    <div
        style="background-color: white; padding: 20px; display: inline-block; margin-top: 20px; width: 90%; text-align: left; border-radius: 10px;">
        <p style="color: #17232f; font-size: 1.125rem; font-weight: bold;">2. Pilih Nominal Top Up</p>
        <p style="color: #17232f; margin-top: 20px;">Pilih items</p>
        <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off">
        <label class="btn btn-secondary" for="option1">Radio</label>
        <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
        <label class="btn btn-secondary" for="option2">Radio</label>
    </div>

    <div class="floating-login">
        <a href="/login">
            <button>Login</button></a>
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

    <div
        style="background-color: white; padding: 20px; display: inline-block; margin-top: 20px; width: 100%; text-align: center;">
        <p style="color: #17232f; font-size: 1.25rem; font-weight: bold;">Top up PUBG Mobile UC di Indonesia</p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto;">
            Alstore adalah toko official untuk membeli kredit game dan aplikasi secara resmi. Kami telah dipercaya
            jutaan gamers dan app users di 50 negara termasuk Indonesia. Top up game tanpa registrasi dan login untuk
            menjaga privasi anda.
            <a href="#" style="display: block;">Top up Sekarang!.</a>
        </p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto;">
            Beli PUBG Mobile UC di Alstore Indonesia, yang memberimu akses ke konten premium dan pengalaman PUBG Mobile
            yang lebih menarik.
        </p>
        <p style="color: #17232f; font-size: .875rem; margin-top: 30px; font-weight: bold;">Mengapa memilih Alstore
            untuk top up
            PUBG Mobile?</p>
        <p style="color: #17232f; font-size: .875rem; font-weight: bold;">Mudah dan Cepat</p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-top: -15px; margin-left: auto; margin-right: auto;">
            Hanya perlu hitungan detik untuk menyelesaikan pembelian UC di Alstore.
        </p>
        <p style="color: #17232f; font-size: .875rem; font-weight: bold;">Instan & aman</p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-top: -15px; margin-left: auto; margin-right: auto;">
            Pembelian top up akan langsung dikirim ke in-game account.
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
                        Bagaimana cara top up UC PUBG Mobile?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample"
                    style="background-color: #F0F0F0; color: #17232f">
                    <div class="accordion-body">
                        Placeholder content for this accordion, which is intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the first item's accordion body.
                    </div>
                </div>
            </div>

            <div class="accordion-item" style="margin-bottom: 20px;">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"
                        style="font-size: 1.25rem; background-color: #F0F0F0; color: #17232f">
                        Bagaimana cara membeli Royale Pass di PUBG Mobile?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample"
                    style="background-color: #F0F0F0; color: #17232f">
                    <div class="accordion-body">
                        Placeholder content for this accordion, which is intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the second item's accordion body.
                    </div>
                </div>
            </div>

            <div class="accordion-item" style="margin-bottom: 20px;">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"
                        style="font-size: 1.25rem; background-color: #F0F0F0; color: #17232f">
                        Dimana dapat menemukan promo dan penawaran untuk PUBG Mobile?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample" style="background-color: #F0F0F0; color: #17232f">
                    <div class="accordion-body">
                        Placeholder content for this accordion, which is intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the third item's accordion body.
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

@endsection