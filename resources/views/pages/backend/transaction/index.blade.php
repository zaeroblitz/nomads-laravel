@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Transaction</h1>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" width='100%' cellspacing='0'>
                        <thead>
                            <tr>
                                <th class="align-middle">ID</th>
                                <th class="align-middle">Travel</th>
                                <th class="align-middle">User</th>
                                <th class="align-middle">Additional VISA</th>
                                <th class="align-middle">Total</th>
                                <th class="align-middle">Status</th>
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @forelse ($items as $item)
                           <tr>
                            <td class="align-middle">{{ $item->id }}</td>
                            <td class="align-middle">{{ $item->travel_package->title }}</td>
                            <td class="align-middle">{{ $item->user->name }}</td>
                            <td class="align-middle">{{ $item->additional_visa }}</td>
                            <td class="align-middle">{{ $item->transaction_total }}</td>
                            <td class="align-middle">{{ $item->transaction_status }}</td>                                                            
                            <td class="align-middle">
                                <a href="{{ route('transaction.show', $item->id) }}" class="btn btn-primary">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('transaction.edit', $item->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('transaction.destroy', $item->id) }}" method="POST" class="d-inline">
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
                    {{  $items->links() }}
                </div>
            </div>
        </div>



    </div>
    <!-- /.container-fluid -->
@endsection
