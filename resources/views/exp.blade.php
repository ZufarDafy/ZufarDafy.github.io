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
        <img src="img/slide.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/slide.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/slide.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div id="container2">
    <div id="text-block">Game List</div>

    <div class="baris-game">
      <div class="game-block">
        <a href="/ml" style="color: white; text-decoration: none;">
          <img src="img/ML.png" alt="Mobile Legends" class="game-icon">
          <div>Mobile Legends</div>
        </a>
      </div>

      <div class="game-block">
        <img src="img/Honkai.png" alt="Honkai Star Rail" class="game-icon">
        <div>Honkai Star Rail</div>
      </div>

      <div class="game-block">
        <img src="img/Fifa.png" alt="FIFA Mobile" class="game-icon">
        <div>FIFA Mobile</div>
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
        <img src="img/Valo.png" alt="Valorant" class="game-icon">
        <div>Valorant</div>
      </div>

      <div class="game-block">
        <img src="img/COD.png" alt="COD Mobile" class="game-icon">
        <div>COD Mobile</div>
      </div>
    </div>
    <div class="baris-game">
      <div class="game-block">
        <img src="img/Stumble.png" alt="Stumble Guys" class="game-icon">
        <div>Stumble Guys</div>
      </div>

      <div class="game-block">
        <img src="img/PUBG.png" alt="PUBG Mobile" class="game-icon">
        <div>PUBG Mobile</div>
      </div>

      <div class="game-block">
        <img src="img/Genshin.png" alt="Genshin Impact" class="game-icon">
        <div>Genshin Impact</div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>