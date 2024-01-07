@extends('layouts.main')

@section('container')
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
      aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
      aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
      aria-label="Slide 3"></button>
  </div>
  <div style="margin-left: 18px;">Promo</div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/ffban.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/valoban.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div id="container2">
  <div id="text-block" style="font-weight: bold; font-size: 1.25rem; margin-bottom: 10px; font-family: 'Lemon', serif;">
    Lebih Hemat di
    Alstore</div>


  @auth
  <div style="margin: 20px">Selamat Datang, {{ auth()->user()->username }} ! </div>
  @endauth

  <div id="text-block">Game List</div>
  <div class="baris-game">
    <!-- Add hidden class to the game-block elements you want to initially hide -->
    <div class="game-block">
      <a href="/ml" style="color: white; text-decoration: none;">
        <img src="img/ML.png" alt="Mobile Legends" class="game-icon">
        <div>Mobile Legends</div>
      </a>
    </div>

    <div class="game-block">
      <a href="/ff" style="color: white; text-decoration: none;">
        <img src="img/FF.png" alt="Free Fire" class="game-icon">
        <div>Free Fire</div>
      </a>
    </div>

    <div class="game-block">
      <a style="color: white; text-decoration: none;">
        <img src="img/Honkai.png" alt="Honkai Star Rail" class="game-icon grayscale">
        <div>Honkai Star Rail</div>
    </div>
  </div>

  <div class="baris-game">
    <div class="game-block">
      <a style="color: white; text-decoration: none;">
        <img src="img/Fifa.png" alt="FIFA Mobile" class="game-icon grayscale">
        <div>FIFA Mobile</div>
    </div>

    <div class="game-block">
      <a href="/valo" style="color: white; text-decoration: none;">
        <img src="img/Valo.png" alt="Valorant" class="game-icon">
        <div>Valorant</div>
      </a>
    </div>

    <div class="game-block">
      <a href="/cod" style="color: white; text-decoration: none;">
        <img src="img/COD.png" alt="COD Mobile" class="game-icon">
        <div>COD Mobile</div>
      </a>
    </div>
  </div>

  <div class="baris-game hidden">
    <div class="game-block">
      <a href="/genshin" style="color: white; text-decoration: none;">
        <img src="img/Genshin.png" alt="Genshin Impact" class="game-icon">
        <div>Genshin Impact</div>
      </a>
    </div>

    <div class="game-block">
      <a style="color: white; text-decoration: none;">
        <img src="img/gt.jpg" alt="gt" class="game-icon grayscale">
        <div>Growtopia</div>
      </a>
    </div>

    <div class="game-block">
      <a style="color: white; text-decoration: none;">
        <img src="img/Stumble.png" alt="Stumble Guys" class="game-icon grayscale">
        <div>Stumble Guys</div>
      </a>
    </div>
  </div>


  <div class="baris-game hidden">
    <div class="game-block">
      <a style="color: white; text-decoration: none;">
        <img src="img/coc.jpg" alt="Clash of Clans" class="game-icon grayscale">
        <div>Clash of Clans</div>
      </a>
    </div>

    <div class="game-block">
      <a style="color: white; text-decoration: none;">
        <img src="img/bs.jpg" alt="Brawl Star" class="game-icon grayscale">
        <div>Brawl Star</div>
      </a>
    </div>

    <div class="game-block">
      <a href="/pubg" style="color: white; text-decoration: none;">
        <img src="img/PUBG.png" alt="PUBG Mobile" class="game-icon">
        <div>PUBG Mobile</div>
      </a>
    </div>
  </div>

  <div class="baris-game hidden">
    <div class="game-block">
      <a style="color: white; text-decoration: none;">
        <img src="img/wd.jpg" alt="wd" class="game-icon grayscale">
        <div>Wild Rift</div>
      </a>
    </div>

    <div class="game-block">
      <a style="color: white; text-decoration: none;">
        <img src="img/sos.jpg" alt="sos" class="game-icon grayscale">
        <div>State of Survival</div>
      </a>
    </div>

    <div class="game-block">
      <a style="color: white; text-decoration: none;">
        <img src="img/aov.jpg" alt="aov" class="game-icon grayscale">
        <div>Arena of valor</div>
      </a>
    </div>
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



<!-- Your existing "See All" button -->
<div id="see-all-button" onclick="toggleVisibility()">Tampilkan Semua</div>

<div id="container2">
  <div id="text-block" style="font-weight: bold; font-size: 1.25rem; margin-bottom: 10px; font-family: 'Lemon', serif;">
    Populer</div>

  <div class="baris-game">
    <!-- Add hidden class to the game-block elements you want to initially hide -->
    <div class="game-block">
      <a href="/valo" style="color: white; text-decoration: none;">
        <img src="img/Valo.png" alt="Valorant" class="game-icon">
        <div>Valorant</div>
      </a>
    </div>

    <div class="game-block">
      <a href="/genshin" style="color: white; text-decoration: none;">
        <img src="img/Genshin.png" alt="Genshin Impact" class="game-icon">
        <div>Genshin Impact</div>
      </a>
    </div>


    <div class="game-block">
      <a href="/pubg" style="color: white; text-decoration: none;">
        <img src="img/PUBG.png" alt="PUBG Mobile" class="game-icon">
        <div>PUBG Mobile</div>
      </a>
    </div>
  </div>

  <div class="baris-game">
    <div class="game-block">
      <a href="/ff" style="color: white; text-decoration: none;">
        <img src="img/FF.png" alt="Free Fire" class="game-icon">
        <div>Free Fire</div>
      </a>
    </div>

    <div class="game-block">
      <a href="/ml" style="color: white; text-decoration: none;">
        <img src="img/ML.png" alt="Mobile Legends" class="game-icon">
        <div>Mobile Legends</div>
      </a>
    </div>

    <div class="game-block">
      <a href="/cod" style="color: white; text-decoration: none;">
        <img src="img/COD.png" alt="COD Mobile" class="game-icon">
        <div>COD Mobile</div>
      </a>
    </div>
  </div>
</div>

<div id="container2">
  <div id="text-block" style="font-weight: bold; font-size: 1.25rem; margin-bottom: 10px; font-family: 'Lemon', serif;">
    Entertainment</div>

  <div class="baris-game">
    <!-- Add hidden class to the game-block elements you want to initially hide -->
    <div class="game-block">
      <a style="color: white; text-decoration: none;">
        <img src="img/sp.jpg" alt="Valorant" class="game-icon grayscale" style="border-radius: 5px;">
        <div>Spotify</div>
      </a>
    </div>

    <div class="game-block">
      <a style="color: white; text-decoration: none;">
        <img src="img/stat.jpg" alt="Valorant" class="game-icon grayscale" style="border-radius: 5px;">
        <div>Bstation</div>
      </a>
    </div>


    <div class="game-block">
      <a style="color: white; text-decoration: none;">
        <img src="img/we.jpg" alt="Valorant" class="game-icon grayscale" style="border-radius: 5px;">
        <div>WeTV</div>
      </a>
    </div>
  </div>

  <div class="baris-game">
    <div class="game-block">
      <a style="color: white; text-decoration: none;">
        <img src="img/iq.png" alt="Valorant" class="game-icon grayscale" style="border-radius: 5px;">
        <div>IQIYI</div>
      </a>
    </div>

    <div class="game-block">
      <a style="color: white; text-decoration: none;">
        <img src="img/nimo.png" alt="Valorant" class="game-icon grayscale" style="border-radius: 5px;">
        <div>Nimo TV</div>
      </a>
    </div>

    <div class="game-block">
      <a style="color: white; text-decoration: none;">
        <img src="img/tinder.jpg" alt="Valorant" class="game-icon grayscale" style="border-radius: 5px;">
        <div>Tinder</div>
      </a>
    </div>
  </div>
</div>

<div style="padding: 20px; display: inline-block; margin-top: 20px; width: 100%; text-align: left;">
  <p style="color: white; font-size: 2rem; font-weight: bold; font-family: 'Lemon', serif; line-height: 1;">Alstore
    Indonesia</p>
  <p style="color: white; font-size: 1rem; margin-top: 20px; font-weight: bold;">Alstore: Startup Website top-up
    tercepat dan terpercaya di Indonesia
  <p style="font-size: .875rem; margin-top: 10px; color: white; width: 93%;">
    Setiap bulannya, jutaan gamers menggunakan Alstore untuk melakukan pembelian kredit game dengan lancar. Top-up
    Mobile Legends, Free Fire,
    Ragnarok M, dan berbagai game lainnya!
  </p>
  <div style="color:  white; display: flex;  align-items: center;">
    <img src="img/disc.gif" alt="Icon" style="width: 70px; height: 70px; margin-right:10px; margin-left: 0px;">
    <span style="font-size: .875rem; text-align: left; line-height: 1; margin-bottom: 0;">Harga yang sangat bersahabat
      dengan kantong para Gamers</span>
  </div>
  <div style="color:  white; display: flex; align-items: center; margin-top: 10px;">
    <img src="img/send.gif" alt="Icon" style="width: 70px; height: 70px; margin-right:10px; margin-left: 0px;">
    <span style="font-size: .875rem; text-align: left; line-height: 1; margin-bottom: 0;">Pengiriman Instan langsung
      tanpa tertunda</span>
  </div>
  <div style="color:  white; display: flex;  align-items: center;  margin-top: 10px;">
    <img src="img/cust.gif" alt="Icon" style="width: 70px; height: 70px; margin-right:10px; margin-left: 0px;">
    <span style="font-size: .875rem; text-align: left; line-height: 1; margin-bottom: 0;">Customer Service yang sangat
      responsif dan ramah</span>
  </div>
  <div style="color:  white; display: flex;  align-items: center;  margin-top: 10px;">
    <img src="img/wallet.gif" alt="Icon" style="width: 70px; height: 70px; margin-right:10px; margin-left: 0px;">
    <span style="font-size: .875rem; text-align: left; line-height: 1; margin-bottom: 0;">Metode Pembayaran yang
      sangat
      praktis dan efisien</span>
  </div>
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


<footer style="background-color: #F0F0F0; color: black; padding: 10px; text-align: center;">
  <p style="margin-top: 10px;">&copy; 2024 Alstore. All rights reserved.</p>
</footer>

<script>
  function toggleVisibility() {
    var hiddenElements = document.querySelectorAll('#container2 .hidden');

    hiddenElements.forEach(function (element) {
      element.style.display = (element.style.display === 'none' || element.style.display === '') ? 'flex' : 'none';
    });

    // Toggle the text of the "See All" button
    var seeAllButton = document.getElementById('see-all-button');
    seeAllButton.textContent = (seeAllButton.textContent === 'Tampilkan Semua') ? 'Tampilkan Sebagian' : 'Tampilkan Semua';
  }
</script>

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


<!-- Your existing script -->
@endsection