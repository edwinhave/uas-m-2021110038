@extends('layouts.master')

@section('title', 'Daftar Transaksi')

@section('content')
    <div class="container">
        <h2>Daftar Transaksi</h2>
        <p><a href="/transactions/create" class="btn btn-primary">Buat Transaksi Baru</a></p>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kategori</th>
                    <th>Nominal</th>
                    <th>Tujuan</th>
                    <th>ID Akun</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <a href="/" class="btn btn-secondary">Kembali ke Beranda</a>
    </div>
    </div>
@endsection
