@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h1>Home</h1>
    <p>Total Accounts: {{ $totalAccounts }}</p>
    <p>Total Transactions: {{ $totalTransactions }}</p>
@endsection
