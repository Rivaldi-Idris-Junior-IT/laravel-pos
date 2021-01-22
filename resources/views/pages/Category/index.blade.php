@extends('template_pages.index')

@section('admin')

<div class="panel">
    <div class="panel-heading">
        <h2 class="panel-title">Data Category</h2>
        <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
            <!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
        </div>
    </div>
    <div class="panel-body">
        <div class="form-group">
            <a href="{{ route('category.create') }}" class="btn btn-success">Tambah Data  <i class="fa fa-plus" style="margin-left:5px;"></i></a>
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
                    <th>UUID</th>
                    <th>Category Name</th>                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>            
            @forelse($items as $item)
                <tr>
                    <td>{{ $items->firstItem()+$loop->index }}</td>
                    <td>{{ $item->uuid }}</td>
                    <td>{{ $item->category_name }}</td>                    
                    <th>
                    
                    <a href="{{ route('category.edit',$item->id) }}" class="btn btn-warning btn-sm "><i class="lnr lnr-pencil"></i></a>                     
                    <form action="{{ route('category.destroy',$item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')"><i class="lnr lnr-trash"></i></button>
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
