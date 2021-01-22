@extends('template_pages.index')

@section('admin')

<div class="panel">
    <div class="panel-heading">
        <h2 class="panel-title">Data Gallery</h2>
        <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
            <!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
        </div>
    </div>
    <div class="panel-body">
        <div class="form-group float-right">
            <a href="{{ route('gallery.create') }}" class="btn btn-success">Tambah Data  <i class="fa fa-plus" style="margin-left:5px;"></i></a>
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
                    <th>Products Id</th>
                    <th>Nama Barang</th>
                    <th>Photo</th>
                    <th>Is Default</th>                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>            
            @forelse($items as $item)
                <tr>
                    <td>{{ $items->firstItem()+$loop->index }}</td>
                    <td>{{ $item->product->uuid }}</td>
                    <td>{{ $item->product->name }}</td>
                    <td><img src="{{ asset( $item->photo ) }}" alt="" width="80" height="80"></td>
                    <td>
                    @if ( $item->is_default === 0 )
                        <p>Tidak</p>
                    @else 
                        <p>Ya</p>
                    @endif
                    </td>                    
                    <th>
                    
                    <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-warning btn-sm "><i class="lnr lnr-pencil"></i></a>                     
                    <form action="{{ route('gallery.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete?')"><i class="lnr lnr-trash"></i></button>
                    </form>
                    </th>
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
