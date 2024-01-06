@extends('layouts.admin')
@section('container')
<main class="content">
    <div class="judul">Tabel Daftar Transaksi Users</div>
  
    <div style="display: flex; flex-direction: column; margin-top: -20px;">
      <div style="display: flex; align-items: center;">
        <img src="img/report.png" alt="Users" style="width: 100px; height: 90px">
        <div style="margin-left: 10px; font-size: 30px;">Report Transaksi User</div>
      </div>
      <div style="display: flex; align-items: center; margin-left: 110px; margin-top: -30px;">
        <div style="font-size: 18px;">Tampilan Transaksi</div>
      </div>
    </div>
  
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">ID Transaksi</th>
          <th scope="col">Tgl Transaksi</th>
          <th scope="col">uname</th>
          <th scope="col">UID</th>
          <th scope="col">nama_game</th>
          <th scope="col">nama_produk</th>
          <th scope="col">harga</th>
          <th scope="col">proses</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>001</th>
          <th>2024-01-01</th>
          <th>Muhammad</th>
          <th>123</th>
          <th>Game A</th>
          <th>Item X</th>
          <th>Rp 20.000</th>
          <th>Lihat</th>
        </tr>
        <tr>
          <th>002</th>
          <th>2024-01-02</th>
          <th>Zufar</th>
          <th>456</th>
          <th>Game B</th>
          <th>Item Y</th>
          <th>Rp 40.000</th>
          <th>Lihat</th>
        </tr>
        <tr>
          <th>003</th>
          <td>2024-01-03</td>
          <td>Dafy</td>
          <td>789</td>
          <td>Game C</td>
          <td>Item Z</td>
          <td>Rp 50.000</td>
          <td>Lihat</td>
        </tr>
      </tbody>
    </table>
  </main>
  
  
@endsection