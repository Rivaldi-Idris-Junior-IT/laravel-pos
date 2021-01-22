@extends('template_pages.index')

@section('admin')

<div class="panel">
    <div class="panel-heading">
        <h2 class="panel-title">Tambah Data Gallery</h2>
        <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
            <!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
        </div>
    </div>
    <div class="panel-body">
        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Nama Barang</label>
                <select name="products_id" id="" class="form-control">
                    <option value="">-- Pilih Nama Barang -- </option>
                    @foreach($items as $item)
                    <option value="{{ $item->uuid }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                @error('products_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="photo">Foto Barang</label>
                <input type="file" class="form-control" name="photo">
                @error('photo')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <legend class="col-form-label ">Set as Default</legend>
                <label class="fancy-radio">
                    <input name="is_default" value="1" type="radio">
                    <span><i></i>Ya</span>
                </label>
                <label class="fancy-radio">
                    <input name="is_default" value="0" type="radio">
                    <span><i></i>Tidak</span>
                </label>
                @error('is_default')
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
