<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/{{ ($title == "Admin") ? 'admingame.css' : '' }}">
  <link rel="stylesheet" href="css/{{ ($title == "Mobile Legends") ? 'editgame.css' : '' }}">
  <link rel="stylesheet" href="css/{{ ($title == "Daftar Users") ? 'daftaruser.css' : '' }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <title>Alstore | {{ $title }}</title>
</head>
<body>
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
                  <div class="title" style="{{ ($title == "Mobile Legends") ? 'color: orange' : ''  }}"  >Game</div>
              </td>
            </tr>
            <tr>
              <td scope="row">
                  <img src="img/users.png" alt="Users">  
                  <div class="title " style="{{ ($title == "Daftar Users") ? 'color: orange' : ''  }}" >Users</div>
              </td>
            </tr>
            <tr>
              <td scope="row">
                <img src="img/logout.png" alt="Log Out">  
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><div class="title">Log Out</div></button>
                </form>
              </td>
            </tr>
        </table>
  </nav>

  <!-- Konten Utama -->
  @yield('container')
</div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
