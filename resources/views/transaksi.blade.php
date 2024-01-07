@extends('layouts.admin')
@section('container')
<main class="content">
    <div class="judul">Tabel Daftar Transaksi Users</div>
  
    <div class="atastabel">
      <div style="display: flex; align-items: center;">
        <img src="img/report.png" alt="Users" style="width: 100px; height: 90px">
        <div style="margin-left: 10px; font-size: 30px;">Report Transaksi User</div>
      </div>
      <div style="display: flex; margin-left: -325px; margin-top: 60px;">
        <div style="font-size: 18px;">Tampilan Transaksi</div>
      </div>
    </div>
  
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">ID Transaksi</th>
          <th scope="col">Tgl Transaksi</th>
          <th scope="col">Username</th>
          <th scope="col">UID</th>
          <th scope="col">Nama Game</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Harga</th>
          <th scope="col">Proses</th>
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
          <th>Berhasil</th>
        </tr>
        <tr>
          <th>002</th>
          <th>2024-01-02</th>
          <th>Zufar</th>
          <th>456</th>
          <th>Game B</th>
          <th>Item Y</th>
          <th>Rp 40.000</th>
          <th>Gagal</th>
        </tr>
        <tr>
          <th>003</th>
          <td>2024-01-03</td>
          <td>Dafy</td>
          <td>789</td>
          <td>Game C</td>
          <td>Item Z</td>
          <td>Rp 50.000</td>
          <td>Berhasil</td>
        </tr>
      </tbody>
    </table>
  </main>
  
  
@endsection