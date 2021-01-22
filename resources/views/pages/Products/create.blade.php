@extends('template_pages.index')

@section('admin')

<div class="panel">
    <div class="panel-heading">
        <h2 class="panel-title">Tambah Data Product</h2>
        <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
            <!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
        </div>
    </div>
    <div class="panel-body">
        <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama Barang</label>
            <input type="text" class="form-control" name="name">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <select name="category_id" id="" class="form-control">
            <option value="">-- Pilih Category -- </option>
            @foreach($items as $item)
                <option value="{{ $item->uuid }}">{{ $item->category_name }}</option>
            @endforeach
            </select>
            @error('category')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea type="text" class="form-control ckeditor" name="description"></textarea>
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Harga Barang</label>
            <input type="number" class="form-control" name="price">
            @error('price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="quantity">Jumlah Barang</label>
            <input type="text" class="form-control" name="quantity">
            @error('quantity')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group ">
            <button class="btn btn-primary btn-block btn-lg">Save</button>
        </div>
        </form>
    </div>
</div>

@endsection