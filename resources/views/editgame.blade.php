@extends('layouts.admin')
@section('container')
    <!-- Konten Utama -->
    <main class="content">
      <div class="judul">Game</div>

      <div class="atastabel">
        <img src="img/ML.png" alt="Mobile Legends">
        <div>{{ $produk->firstwhere('game_id',$game_id)->Game->name }}</div>
      </div>
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          {{-- @dd($produk->where('game_id', $game_id)) --}}
          @foreach ($produk->where('game_id', $game_id) as $list)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $list->nama_produk }}</td>
            <td>Rp {{ $list->harga }}</td>
            <td>Hapus</td>
          </tr>
          @endforeach
          {{-- <tr>
            <th scope="row">2</th>
            <td>100 Diamonds</td>
            <td>Rp 40.000</td>
            <td>Hapus</td>
          </tr> --}}
        </tbody>
      </table>
  </main>
@endsection