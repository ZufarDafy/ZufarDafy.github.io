@extends('layouts.main')

@section('container')
<div style="text-align: center;">

    <!-- Banner -->
    <img src="img/valoban.jpg" class="img-fluid" alt="banner" style="width: 100%;">

    <!-- Teks Mobile Legends di sebelah kiri dengan margin-top dan latar belakang putih -->
    <div style="text-align: left; margin-left: 5%;">
        <h3 style="margin-top: 30px; display: inline-block; padding: 5px; font-weight: bold;">VALORANT
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
        <p style="color: #17232f; font-size: 1.125rem; font-weight: bold;">1. Masukkan Riot ID</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukkan Riot ID" aria-label="UID" id="UIDD"
                oninput="getUID()">
        </div>
        <p style="font-size: smaller; margin-top: 10px; color: #808080;">
            Untuk menemukan Riot ID Anda, buka halaman profil akun dan salin Riot ID+Tag menggunakan tombol yang
            tersedia disamping Riot ID. (Contoh: Westbourne#SEA)
        </p>

    </div>
    <!-- Form Nominal -->
    <div
        style="background-color: white; padding: 20px; display: inline-block; margin-top: 20px; width: 90%; text-align: left; border-radius: 10px;">
        <p style="color: #17232f; font-size: 1.125rem; font-weight: bold;">2. Pilih Nominal Top Up</p>
        <p style="color: #17232f; margin-top: 20px;">Pilih items</p>
        <p style="color: #17232f; font-size: .750rem; margin-top: -15px;">*Klik Item 2 kali</p>
        @foreach($produks as $p)
        <div class="btn-group" style="margin-bottom: 10px; max-width: 46%;">
            <button type="button" onclick="beliSekarang()" class="btn product-button" data-harga="{{ $p->harga }}"
                data-nama="{{ $p->nama_produk }}" style="background-color: #17232f; color: white;">
                <img src="img/points.png" alt="Product Image" style="max-width: 75%; height: auto; margin-right: 5px;">
                {{ $p->nama_produk }}
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
        @auth
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            @csrf
            <button class="btn btn-primary me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#myModal">
                Beli sekarang
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Struk Pembelian</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Informasi Pembelian -->
                        <div class="mb-3">
                            <label for="username" class="form-label" style="color:black;">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" readonly
                                value="{{ auth()->user()->username }}">
                        </div>
                        <div class="mb-3">
                            <label for="namaGame" class="form-label" style="color:black;">Nama Game:</label>
                            <input type="text" class="form-control" id="namaGame" name="namaGame" readonly
                                value="Valorant"> <!-- Ganti dengan nama game yang sesuai -->
                        </div>
                        <div class="mb-3">
                            <label for="namaProduk" class="form-label" style="color:black;">Nama Produk:</label>
                            <input type="text" class="form-control" id="namaProduk" name="namaProduk" readonly>
                            <!-- Isi nilai ini menggunakan JavaScript saat tombol beli diklik -->
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label" style="color:black;">Harga:</label>
                            <input type="text" class="form-control" id="harga" name="harga" readonly>
                            <!-- Isi nilai ini menggunakan JavaScript saat tombol beli diklik -->
                        </div>
                        <div class="mb-3">
                            <label for="uid" class="form-label" style="color:black;">UID:</label>
                            <input type="text" class="form-control" id="uid" name="uid">
                        </div>

                        <!-- Tombol Submit -->
                        <button type="button" class="btn btn-primary" onclick="submitForm()">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="/login"><button class="btn btn-primary me-md-2" type="button">Silahkan Login</button></a>
        </div>
        @endauth
    </div>

    <div
        style="background-color: white; padding: 20px; display: inline-block; margin-top: 20px; width: 100%; text-align: center;">
        <p style="color: #17232f; font-size: 1.25rem; font-weight: bold;">Cara terbaik top up Valorant Points di
            Indonesia</p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto;">
            Hanya perlu beberapa detik untuk top up VALORANT Points di Alstore, tempat top up yang mudah, aman, dan
            nyaman. Kami dipercaya oleh para gamers dan pengguna aplikasi di Indonesia.
            <a href="#" style="display: block;">Top up Sekarang!.</a>
        </p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto;">
            Dengan VALORANT Points, kamu bisa akses konten premium seperti Battle Pass, Weapon Skins, New Agents, dan
            Radianite Points. Kami juga bisa partisipasi di event eksklusif yang tersedia dalam game dan masih banyak
            benefir lainnya!
        </p>
        <p style="color: #17232f; font-size: .875rem; margin-top: 30px; font-weight: bold;">Mengapa memilih Alstore
            untuk top up
            Valorant?</p>
        <p style="color: #17232f; font-size: .875rem; font-weight: bold;">Mudah dan Cepat</p>
        <p
            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-top: -15px; margin-left: auto; margin-right: auto;">
            Kamu hanya perlu hitungan detik untuk menyelesaikan pembelian di Alstore.
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
                        Bagaimana cara beli VALORANT Points?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample"
                    style="background-color: #F0F0F0; color: #17232f">
                    <div class="accordion-body">
                        <p
                            style="font-size: .875rem; color: #17232f; width: 93%; margin-top: -20px; margin-left: 20px; margin-right: auto; text-align: left; white-space: pre-line;">
                            1. Kunjungin Alstore/Valorant
                            2. Masukan Riot ID
                            3. Pilih jumlah Point yang kamu inginkan.
                            4. Menyelesaikan transaksi-mu dan Point akan langsung terkirim ke akun Valorant-mu.
                        </p>
                        <p
                            style="font-size: .875rem; margin-top: 10px; color: #17232f; width: 93%; margin-left: auto; margin-right: auto; text-align: left;">
                            Kamu juga bisa kirim Genesis ke teman dan keluarga kamu dengan cara ketik Riot ID mereka.
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion-item" style="margin-bottom: 20px;">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"
                        style="font-size: 1.25rem; background-color: #F0F0F0; color: #17232f">
                        Dimana dapat menemukan promo dan penawaran untuk Valorant?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample" style="background-color: #F0F0F0; color: #17232f">
                    <div class="accordion-body">
                        Lihat semua promo di Instagram Alstore atau join Grubnya
                    </div>
                </div>
            </div>
        </div>
        <!--Beres Text -->
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
                        <input type="text" class="form-control" id="jumlah-saldo" name="jumlah-saldo"
                            placeholder="Masukkan jumlah saldo">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="okButton" data-bs-dismiss="modal">OK</button>
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

        // Memperbarui nilai input harga dan nama produk di form utama
        document.getElementById('hargaInput').value = hargaProduk;
        document.getElementById('namaProdukInput').value = namaProduk;

        // Memperbarui nilai input harga dan nama produk di modal pembelian
        document.getElementById('namaProduk').value = namaProduk;
        document.getElementById('harga').value = hargaProduk;

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
</script>


<script>
    function getUID() {
        var uidInput = document.getElementById('UIDD');
        document.getElementById('uid').value = uidInput.value;
    }
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(documen      eady(function () {
        // Menjalankan submit form saat to       "OK" diklik
        $('#okButton').o n('cli          unction () {
                 ('#saldoForm').submit();
        })             // Fonput jumlah saldo saat modal muncul
        $('#saldoModal').on('shown.bs.modal', function () {
            $('#jumlah-saldo').focus();
        });

        // Menghentikan default submit form dan kemudian submit form
        $('#saldoForm').on('submit', function (e) {
            e.preventDefault();
            $(this).unbind('submit').submit();
        });
    });
</script>



@endsection