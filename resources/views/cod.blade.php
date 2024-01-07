@extends('layouts.main')

@section('container')
<div style="text-align: center;">

    <!-- Banner -->
    <img src="img/codban.jpg" class="img-fluid" alt="banner" style="width: 100%;">

    <!-- Teks Mobile Legends di sebelah kiri dengan margin-top dan latar belakang putih -->
    <div style="text-align: left; margin-left: 5%;">
        <h3 style="margin-top: 30px; display: inline-block; padding: 5px; font-weight: bold;">Call of Duty Mobile
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
            Untuk menemukan PlayerID Anda, klik ikon 'settings' yang terletak di sebelah kanan layar dan klik tab 'LEGAL
            AND PRIVCY', Anda dapat menemukan PlayerID Anda di sini.
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

    <div class="floating-login">
        <a href="/login">
            <button>Login</button></a>
    </div>

    <div
        style="background-color: white; padding: 20px; display: inline-block; margin-top: 20px; width: 100%; text-align: center;">
        <p style="color: #17232f; font-size: 1.25rem; font-weight: bold;">Alstore - Cara Paling Mudah Top Up CODM Murah
            di Indonesia</p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto;">
            Hanya butuh beberapa detik saja untuk membeli COD Points (CP) Call of Duty Mobile. COD Points (CP) bisa kamu
            gunakan untuk membeli Battle Pass premium, skin senjata, hingga experience card dan masih banyak lagi! Kami
            dipercaya oleh jutaan gamers & pengguna aplikasi di Asia Tenggara termasuk di Indonesia.
            <a href="#" style="display: block;">Klik disini untuk memulai top up.</a>
        </p>
        <p style="color: #17232f; font-size: .875rem; margin-top: 30px; font-weight: bold;">Tentang Call of Duty Mobile:
        </p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto; margin-top: -15px;">
            Nikmati game penuh aksi dari seri Call of Duty Mobile® Mobile yang memacu adrenalin dimanapun kamu berada.
            Mainkan berbagai macam pilihan game mode melawan musuh di map favorit kalian seperti Nuketown dan Crash,
            dengan pengalaman optimal di HP-mu.
        </p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto;">
            Bentuk skuad bersama teman-temanmu, main sesuai gayamu dengan menggunakan UAV Recon atau Predator Missile
            dan modifikasi senjatamu untuk melawan musuh.
        </p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto;">
            Kalau kamu belum pernah mendengar Call of Duty Mobile® Mobile - Garena, tidak masalah. Yang perlu kamu
            ketahui adalah game ini akan memberikan pengalaman bermain FPS terbaik di HP. Siapkan senjatamu dan download
            sekarang juga!
        </p>

        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item" style="margin-bottom: 20px;">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"
                        style="font-size: 1.25rem; background-color: #F0F0F0; color: #17232f">
                        Bagaimana cara top up CP CODM?
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
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"
                        style="font-size: 1.25rem; background-color: #F0F0F0; color: #17232f">
                        Dapatkan info promo terbaik CODM
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