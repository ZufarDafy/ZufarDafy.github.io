@extends('layouts.admin')

@section('container')
<div class="wrapper">
  <!-- Sidebar (Navigasi) -->
  <nav class="sidebar">
      <div class="logo">
          <img src="img/alstore.png" alt="Alstore">
          <span style="font-weight: bold; font-size: 20px">Alstore</span>
      </div>
      <table class="table">
            <tr>
              <td scope="row">
                  <img src="img/game.png" alt="Game">  
                  <div class="title">Game</div>
              </td>
            </tr>
            <tr>
              <td scope="row">
                  <img src="img/users.png" alt="Users">  
                  <div class="title">Users</div>
              </td>
            </tr>
        </table>
  </nav>

  <!-- Konten Utama -->
  <main class="content">
      <div class="judul">Game</div>

      <div id="container2">
          
          <div class="baris-game">
            <div class="game-block" style="margin-right: 50px">
              <img src="img/ML.png" alt="Mobile Legends" class="game-icon">
              <div>Mobile Legends</div>
            </div>
        
            <div class="game-block">
              <img src="img/Honkai.png" alt="Honkai Star Rail" class="game-icon">
              <div>Honkai Star Rail</div>
            </div>
        
            <div class="game-block" style="margin-left: 50px">
              <img src="img/Fifa.png" alt="FIFA Mobile" class="game-icon">
              <div>FIFA Mobile</div>
            </div>
          </div>
          <div class="baris-game">
            <div class="game-block">
              <img src="img/FF.png" alt="Free Fire" class="game-icon">
              <div>Free Fire</div>
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
            <div class="game-block" style="margin-right: 50px">
              <img src="img/Stumble.png" alt="Stumble Guys" class="game-icon">
              <div>Stumble Guys</div>
            </div>
        
            <div class="game-block">
              <img src="img/PUBG.png" alt="PUBG Mobile" class="game-icon">
              <div>PUBG Mobile</div>
            </div>
        
            <div class="game-block" style="margin-left: 50px">
              <img src="img/Genshin.png" alt="Genshin Impact" class="game-icon">
              <div>Genshin Impact</div>
            </div>
          </div>
        </div>
  </main>
</div>

@endsection


