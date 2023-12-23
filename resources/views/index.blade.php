@extends('layouts.master')

@section('title', 'Home')

@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Website Menarik</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>

        <!-- Navbar -->


        <br>
        <br><br><br><br><br>

        <!-- Hero Section -->
        <section class="hero bg-primary text-white text-center">
            <div class="container">
                <br><br><br>
                <h1 class="display-4">Selamat Datang di Website Menarik</h1>
                <p class="lead">Temukan informasi akun dan transaksi dengan mudah.</p>
                <br><br>
            </div>
        </section>

        <!-- Content Section -->
        <section class="container my-5">
            <div class="row">
                <div class="col-md-6">
                    <h2>Akun Terbaru</h2>
                    <!-- Tambahkan kode untuk menampilkan daftar akun terbaru -->
                    <ul class="list-group">
                        <li class="list-group-item">Akun 1</li>
                        <li class="list-group-item">Akun 2</li>
                        <li class="list-group-item">Akun 3</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2>Transaksi Terbaru</h2>
                    <!-- Tambahkan kode untuk menampilkan daftar transaksi terbaru -->
                    <ul class="list-group">
                        <li class="list-group-item">Transaksi 1</li>
                        <li class="list-group-item">Transaksi 2</li>
                        <li class="list-group-item">Transaksi 3</li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- Footer -->


        <!-- Bootstrap JS (tidak lupa sertakan jQuery dan Popper.js) -->
        <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
