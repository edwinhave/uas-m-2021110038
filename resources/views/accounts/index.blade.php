@extends('layouts.master')

@section('title', 'Account List')

@section('content')
    <h1>Account List</h1>
    <div class="container mt-5">
        <h2>Form Example</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis</label>
                <input type="text" class="form-control" id="jenis" name="jenis" required>
            </div>
            <div class="mb-3">
                <label for="action" class="form-label">Action</label>
                <input type="text" class="form-control" id="action" name="action" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
