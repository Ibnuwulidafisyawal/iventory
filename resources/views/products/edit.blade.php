@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Produk</h1>

    <form action="{{ route('products.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="name" value="{{ $produk->name }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" value="{{ $produk->harga }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stock" value="{{ $produk->stock }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Batal</a>
    </form>
</div>
@endsection
