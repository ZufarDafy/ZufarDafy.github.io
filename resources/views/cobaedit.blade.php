@extends('layouts.admin')
@section('container')
    <!-- Konten Utama -->
    <main class="content">
        <style>
            /* CSS */
            .popup-edit {
                display: none;
                position: fixed;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                background-color: #fefefe;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
                padding: 20px;
                max-width: 300px;
                text-align: center;
            }

            .popup-content {
                text-align: center;
            }

            .input-box {
                margin-bottom: 10px;
            }

            .close-popup {
                float: right;
                cursor: pointer;
            }

            /* Show popup-edit when checkbox is checked */
            #edit-toggle:checked + .popup-edit {
                display: block;
            }

            /* Styling checkbox */
            #edit-toggle {
                display: none;
            }

            /* Styling label/button */
            .edit-btn {
                cursor: pointer;
                padding: 5px 10px;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 5px;
            }

            .edit-btn:focus {
                outline: none;
            }
        </style>

        <div class="judul">Game</div>

        <div class="atastabel">
            <img src="img/ML.png" alt="Mobile Legends">
            <div>{{ $game }}</div>
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
                <tr>
                    <th scope="row">1</th>
                    <td>50 Diamonds</td>
                    <td>Rp 20.000</td>
                    <td><label for="edit-toggle" class="edit-btn">Edit</label></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>100 Diamonds</td>
                    <td>Rp 40.000</td>
                    <td><label for="edit-toggle" class="edit-btn">Edit</label></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>150 Diamonds</td>
                    <td>Rp 50.000</td>
                    <td><label for="edit-toggle" class="edit-btn">Edit</label></td>
                </tr>
            </tbody>
        </table>

        <!-- Popup Edit -->
        <input type="checkbox" id="edit-toggle">
        <div class="popup-edit">
            <div class="popup-content">
                <span class="close-popup">&times;</span>
                <h2 style="color: black; text-align: center;">Edit Produk</h2>
                <div class="input-box">
                    <label for="inputNamaProduk" style="color: black; display: block; margin-bottom: 5px; text-align: left;">Nama Produk</label>
                    <input type="text" id="inputNamaProduk" placeholder="Masukkan nama produk...">
                </div>
                <div class="input-box">
                    <label for="inputHargaProduk" style="color: black; display: block; margin-bottom: 5px; text-align: left;">Harga Produk</label>
                    <input type="text" id="inputHargaProduk" placeholder="Masukkan harga produk...">
                </div>
                <label for="edit-toggle" style="margin-top: 10px;">
                  <a href="/cobaedit" id="simpanEdit" class="edit-btn">Simpan</a>
                </label>
            </div>
        </div>
    </main>
@endsection
