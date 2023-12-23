@extends('layouts.master')

@section('title', 'Buat Transaksi')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header bg-success text-white">
                    <h2 class="mb-0">Buat Transaksi Baru</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('transactions.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori:</label>
                            <input type="text" name="kategori" class="form-control" maxlength="50"
                                oninput="this.value = this.value.toUpperCase();" required>
                        </div>
                        <div class="mb-3">
                            <label for="nominal" class="form-label">Nominal:</label>
                            <input type="number" name="nominal" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="tujuan" class="form-label">Tujuan Akun:</label>
                            <select name="tujuan" class="form-control" required>
                                @foreach ($accounts as $account)
                                    <option value="{{ $account->id }}">{{ $account->id }} - {{ $account->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="account_id" class="form-label">ID Akun:</label>
                            <select name="account_id" class="form-control" required>
                                @foreach ($accounts as $account)
                                    <option value="{{ $account->id }}">{{ $account->id }} - {{ $account->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Buat</button>
                        <a href="{{ route('transactions.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
