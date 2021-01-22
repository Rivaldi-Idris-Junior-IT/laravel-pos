@extends('template_pages.index')

@section('admin')

<div class="panel">
    <div class="panel-heading">
        <h2 class="panel-title">Edit Data Category</h2>
        <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
            <!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
        </div>
    </div>
    <div class="panel-body">
        <form action="{{ route('category.update', $item->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="category_name">Nama Category</label>
            <input type="text" class="form-control" name="category_name" value="{{ $item->category_name }}">
            @error('category_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
                Save
            </button>
        </div>
        
        </form>
    </div>
</div>

@endsection