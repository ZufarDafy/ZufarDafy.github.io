<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/editgame.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                        <div class="title" >Game</div>
                    </td>
                  </tr>
                  <tr>
                    <td scope="row">
                        <img src="img/users.png" alt="Users">  
                        <div class="title" style="color: orange">Users</div>
                    </td>
                  </tr>
              </table>
        </nav>

        <!-- Konten Utama -->
        <main class="content">
            <div class="judul">Tabel Daftar Users</div>

            <div class="atastabel">
              <img src="img/users.png" alt="Users" style="width: 100px; height: 100px">
              <div>Users</div>
            </div>
            <table class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama Pengguna</th>
                  <th scope="col">Cash</th>
                  <th scope="col">Transaksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Muhammad</td>
                  <td>Rp 20.000</td>
                  <td>Lihat</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Zufar</td>
                  <td>Rp 40.000</td>
                  <td>Lihat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Dafy</td>
                  <td>Rp 50.000</td>
                  <td>Lihat</td>
                </tr>
              </tbody>
            </table>
        </main>
    </div>

</body>
</html>
