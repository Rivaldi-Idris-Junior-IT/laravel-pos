@extends('template_pages.index')

@section('admin')

<div class="panel">
    <div class="panel-heading">
        <h2 class="panel-title">Tambah Data Transaction</h2>
        <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
            <!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
        </div>
    </div>
    <div class="panel-body">
        <form action="{{ route('transaction.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama Pembeli</label>
            <input type="text" class="form-control" name="name">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" class="form-control" name="email">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>                
        <div class="form-group">
            <label for="number">Nomor Telepon</label>
            <input type="text" class="form-control" name="number">
            @error('number')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>        
        <div class="form-group">
            <label for="address">Alamat</label>
            <textarea type="text" class="form-control " name="address"></textarea>
            @error('address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="transaction_total">Transaction Total</label>
            <input type="number" class="form-control" name="transaction_total">
            @error('transaction_total')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="transaction_status">Transaction Status</label>
            <select name="transaction_status" id="transaction_status" class="form-control">
                <option value="PENDING">PENDING</option>
                <option value="SUCCESS">SUCCESS</option>
                <option value="FAILED">FAILED</option>
            </select>
            @error('transaction_status')
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