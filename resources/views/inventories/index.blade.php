@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                        <span>{{ __('Inventories Index') }}</span>
                        <a href="{{ route('inventories.create') }}" class="btn btn-success btn-sm">
                            <i class="bi bi-plus-lg"></i>
                        </a>
                    </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Serial No</th>
                                <th>User</th>
                                <th>IC No</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($inventories as $inventory)
                            <tr>
                                <td>{{ $inventory->id }}</td>
                                <td>{{ $inventory->name }}</td>
                                <td>{{ $inventory->quantity }}</td>
                                <td>{{ $inventory->price }}</td>
                                <td>{{ $inventory->serial_no }}</td>
                                <td>{{ $inventory->user->name }}</td>
                                <td>{{ $inventory->user->ic_no }} - {{ $inventory->user->gender }} - {{ $inventory->user->age }}</td>
                                <td>
                                    @can('view', $inventory)
                                    <a href="{{ route('inventories.show', $inventory->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                    @endcan
                                    @can('update', $inventory)
                                    <a href="{{ route('inventories.edit', $inventory->id) }}" class="btn btn-secondary btn-sm"><i class="bi bi-pen"></i></i></a>
                                    @endcan
                                    @can('delete', $inventory)
                                    <form action="{{ route('inventories.destroy', $inventory->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                                    </form>
                                    @endcan
                                    </form>

                                </td>


                            </tr>
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
