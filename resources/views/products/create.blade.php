@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Barang Baru</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Ada kesalahan input:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="name">Nama Barang</label>
            <input type="text" name="name" class="form-control" placeholder="Contoh: Pulpen" required>
        </div>

        <div class="form-group mb-3">
            <label for="category_id">Kategori</label>
            <select name="category_id" class="form-control" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group mb-3">
            <label for="stock">harga</label>
            <input type="number" name="harga" class="form-control" value="0" required>
        </div>

        <div class="form-group mb-3">
            <label for="stock">Stok Awal</label>
            <input type="number" name="stock" class="form-control" value="0" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
