@extends('template_pages.index')

@section('admin')

<div class="panel">
    <div class="panel-heading">
        <h2 class="panel-title">Data Product</h2>
        <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
            <!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
        </div>
    </div>
    <div class="panel-body">
        <div class="form-group float-right">
            <a href="{{ route('transaction.create') }}" class="btn btn-success">Tambah Data  <i class="fa fa-plus" style="margin-left:5px;"></i></a>
        </div>

        @if(session('success'))
        <div class="alert alert-success mt-2 mb-2" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama </th>
                    <th>Email</th>
                    <th>Nomor</th>
                    <th>Total Transaksi</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>            
            @forelse($items as $item)
                <tr>
                    <td>{{ $items->firstItem()+$loop->index }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->number }}</td>
                    <td>{{ $item->transaction_total }}</td>
                    <td>
                        @if($item->transaction_status == 'PENDING')
                        <span class="badge badge-info">PENDING</span>
                        @elseif($item->transaction_status == 'SUCCESS')
                        <span class="badge badge-success">SUCCESS</span>
                        @elseif($item->transaction_status == 'FAILED')
                        <span class="badge badge-danger">FAILED</span>
                        @endif
                    </td>
                    <td>
                    @if($item->transaction_status == 'PENDING')
                    <a href="{{ route('transaction.status', $item->id) }}?status=SUCCESS" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                    <a href="{{ route('transaction.status', $item->id) }}?status=FAILED" class="btn btn-warning btn-sm"><i class="fa fa-times"></i></a>
                    @endif
                    <a href="#mymodal"
                       data-remote="{{ route('transaction.show', $item->id) }}"
                       data-toggle="modal"
                       data-target="#mymodal"
                       data-title="Detail Transaksi {{ $item->uuid }}"
                       class="btn btn-primary btn-sm">
                       <i class="fa fa-eye"></i>
                       </a>
                    <a href="{{ route('transaction.edit', $item->id) }}" class="btn btn-info btn-sm "><i class="lnr lnr-pencil"></i></a>
                    <form action="{{ route('transaction.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete?')"><i class="lnr lnr-trash"></i></button>
                    </form>
                    </td>
                </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">
                    Data tidak tersedia
                </td>
            </tr>
            @endforelse
            </tbody>
        </table>
        {{ $items->links() }}
    </div>
</div>
<!-- END BORDERED TABLE -->
</div>

@endsection
