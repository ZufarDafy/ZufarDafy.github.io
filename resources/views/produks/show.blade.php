@extends('dashboard.layouts.main')

@section('container')
<div class="container">
        <div class="row  my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $produk->nama_produk }}</h1>

                <a href="/dashboard/produks" class="btn btn-success">Kembali</a>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Hapus</a>

                <img src="?{{ $produk->game->nama }}" alt="" class="img-fluid mt-3">
    {{-- <h2>{{ $produks["title"] }}</h2>
    <p>{{ $produks["slug"] }}</p> --}}
    <article class="my-3 fs-5">
        {{ $produk->game->nama }}
    </article>
    

<a href="/produks" class="d-block mt-5">Back to Produks</a>
            </div>
        </div>
    </div>


@endsection