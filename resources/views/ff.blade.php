<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav id="top-block">
        <a a href="/">
            <img src="img/alstore.png" alt="Alstore">
        </a>
        <div>Alstore</div>
    </nav>


    <div style="text-align: center;">

        <!-- Banner -->
        <img src="img/ffban.jpg" class="img-fluid" alt="banner" style="width: 100%;">

        <!-- Teks Mobile Legends di sebelah kiri dengan margin-top dan latar belakang putih -->
        <h3 style="margin-top: 30px; display: inline-block; padding: 5px; text-align: left;">Free Fire
        </h3>

        <!-- Kotak putih untuk input group dengan width 90% -->
        <div
            style="background-color: white; padding: 20px; display: inline-block; margin-top: 20px; width: 90%; text-align: left; border-radius: 10px;">

            <!-- Teks "Masukkan User ID" di atas input group -->
            <p style="color: black;">Masukkan Player ID</p>

            <!-- Input Group -->
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
        <div class="card-body"
            style="background-color: white; color: black; border-radius: 15px; padding: 10px; width: 49%; height: 30px; display: flex; justify-content: center; align-items: center; margin-right: -5%;">
            <img src="img/cust.png" alt="Icon" style="width: 20px; height: 20px; margin-right:10px; margin-left: 0px;">
            <span style="font-size: 10px; text-align: left; line-height: 1; margin-bottom: 0;">Layanan Pelanggan
                24/7</span>
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
                    <form action="/top-up" method="post" style="text-align: left;">
                        <!-- Tambahkan elemen input untuk jumlah isi saldo di sini -->
                        <label for="jumlah-saldo" class="form-label" style="color: black;">Jumlah Isi Saldo:</label>
                        <input type="text" class="form-control" id="jumlah-saldo" name="jumlah-saldo"
                            placeholder="Masukkan jumlah saldo">
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- Tombol OK -->
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
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
            Untuk menemukan ID Anda, klik pada ikon karakter. User ID tercantum di bawah nama karakter Anda. Contoh:
            '5363266446'.
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

    <div
        style="background-color: white; padding: 20px; display: inline-block; margin-top: 20px; width: 100%; text-align: center;">
        <p style="color: #17232f; font-size: 1.25rem; font-weight: bold;">Beli Diamond Garena Free Fire (FF) hanya di
            Alstore</p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto;">
            Tinggal selangkah lagi! Dengan membeli Diamond, Kamu bisa menikmati beragam fitur dalam game, seperti
            membeli skin terbaru, item in-game premium, karakter baru, event eksklusif, dan masih banyak lagi!
        </p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto;">
            Nikmati pengalaman top up melalui Codashop, yang terjamin resmi, aman, dan mudah. Kami telah dipercaya
            sebagai platform top up pilihan oleh jutaan gamers & pengguna aplikasi di Indonesia.
            <a href="#" style="display: block;">Klik disini untuk memulai top up.</a>
        </p>
        <p style="color: #17232f; font-size: .875rem; margin-top: 30px; font-weight: bold;">Mengapa memilih Alstore
            untuk top up
            Garena Free FIre?</p>
        <p style="color: #17232f; font-size: .875rem; font-weight: bold;">Mudah dan Cepat</p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-top: -15px; margin-left: auto; margin-right: auto;">
            Kamu hanya perlu hitungan detik untuk menyelesaikan pembelian di Alstore.
        </p>
        <p style="color: #17232f; font-size: .875rem; font-weight: bold;">Garansi sampai</p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-top: -15px; margin-left: auto; margin-right: auto;">
            Free Fire pembelian dijamin langsung masuk ke akun Kamu.
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
                        Bagaimana cara top up Garena Free Fire?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample"
                    style="background-color: #F0F0F0; color: #17232f">
                    <div class="accordion-body">
                        <p
                            style="font-size: .875rem; color: #17232f; width: 93%; margin-top: -20px; margin-left: 20px; margin-right: auto; text-align: left; white-space: pre-line;">
                            1. Kunjungin Alstore/FreeFire
                            2. Masukan Player ID Free Fire
                            3. Masukkan jumlah diamond yang Kamu inginkan
                            4. Menyelesaikan transaksi-mu dan diamond akan langsung terkirim ke akun Free Fire-mu.
                        </p>
                        <p
                            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto; text-align: left;">
                            Kamu juga bisa kirim Diamonds ke teman dan keluarga kamu dengan cara ketik Player ID mereka.
                        </p>
                    </div>
                </div>
            </div>

            <p style="font-size: smaller; margin-top: 10px; color: #808080;">
            Untuk menemukan ID Anda, klik pada ikon karakter. User ID tercantum di bawah nama karakter Anda. Contoh: '5363266446'.
            </p>

        </div>

        <div
            style="background-color: white; padding: 20px; display: inline-block; margin-top: 20px; width: 90%; text-align: left; border-radius: 10px;">

            <!-- Teks "Masukkan User ID" di atas input group -->
            <p style="color: black;">Pilih Nominal Top Up</p>

            <!-- Input Group -->


        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>