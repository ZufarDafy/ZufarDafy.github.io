@extends('layouts.admin')
@section('container')
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
            <th scope="col">A-Coin</th>
            <th scope="col">Transaksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($list as $user)
              
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td> {{ $user->username }} </td>
            <td>Rp {{ $user->acoin }}</td>
            <td>Lihat</td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </main>
@endsection
        

