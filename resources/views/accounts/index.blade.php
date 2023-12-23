@extends('layouts.master')

@section('title', 'Daftar Akun')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Pendaftar Akun</h2>
            <p><a href="/accounts/create" class="btn btn-primary">Buat Akun Baru</a></p>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <a href="/" class="btn btn-secondary">Kembali ke Beranda</a>
        </div>
    </div>
@endsection
