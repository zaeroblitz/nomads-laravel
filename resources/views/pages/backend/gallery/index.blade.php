@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
            <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-primary shadown-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Gallery
            </a>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" width='100%' cellspacing='0'>
                        <thead>
                            <tr>
                                <th class="align-middle">ID</th>
                                <th class="align-middle">Travel</th>
                                <th class="align-middle">Gambar</th>
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td class="align-middle">{{ $item->id }}</td>
                                    <td class="align-middle">{{ $item->travel_package->title }}</td>
                                    <td class="align-middle">
                                        <img src="{{ Storage::url($item->image) }}" style="width: 150px"
                                            class="img-thumbnail">
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('gallery.destroy', $item->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="4" class="text-center">
                                    Data Kosong
                                </td>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $items->links() }}
                </div>
            </div>
        </div>



    </div>
    <!-- /.container-fluid -->
@endsection
