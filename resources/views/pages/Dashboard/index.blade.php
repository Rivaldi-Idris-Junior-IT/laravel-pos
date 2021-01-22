@extends('template_pages.index')

@section('admin')

<div class="results mb-3">
    @if(Session::get('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif
    @if(Session::get('fail'))
    <div class="alert alert-success">
        {{ Session::get('fail') }}
    </div>
    @endif
</div>

<div class="panel">
    <div class="panel-heading">
        <h2 class="panel-title">Dashboard</h2>
        <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
            <!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
        </div>
    </div>
    <div class="panel-body">
        <h2>Data disini</h2>
    </div>
</div>

@endsection
