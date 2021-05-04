@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
            <a href="{{ route('travel-package.create') }}" class="btn btn-sm btn-primary shadown-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Paket Travel
            </a>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" width='100%' cellspacing='0'>
                        <thead>
                            <tr>
                                <th class="align-middle">ID</th>
                                <th class="align-middle">Title</th>
                                <th class="align-middle">Location</th>
                                <th class="align-middle">About</th>
                                <th class="align-middle">Featured Event</th>
                                <th class="align-middle">Language</th>
                                <th class="align-middle">Foods</th>
                                <th class="align-middle">Departure Date</th>
                                <th class="align-middle">Duration</th>
                                <th class="align-middle">Type</th>
                                <th class="align-middle">Price</th>
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @forelse ($items as $item)
                           <tr>
                            <td class="align-middle">{{ $item->id }}</td>
                            <td class="align-middle">{{ $item->title }}</td>
                            <td class="align-middle">{{ $item->location }}</td>
                            <td class="align-middle">{{ $item->about }}</td>
                            <td class="align-middle">{{ $item->featured_event }}</td>
                            <td class="align-middle">{{ $item->language }}</td>
                            <td class="align-middle">{{ $item->foods }}</td>
                            <td class="align-middle">{{ $item->departure_date }}</td>
                            <td class="align-middle">{{ $item->duration }}</td>
                            <td class="align-middle">{{ $item->type }}</td>
                            <td class="align-middle">{{ $item->price }}</td>
                            <td class="align-middle">
                                <a href="{{ route('travel-package.edit', $item->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('travel-package.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                           @empty
                               <td colspan="11" class="text-center">
                                   Data Kosong
                               </td>
                           @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>
    <!-- /.container-fluid -->
@endsection
