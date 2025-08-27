@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inventories Index') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Serial No</th>
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
                                <td><a href="{{ route('inventories.show', $inventory->id) }}" class="btn btn-info btn-sm">Lihat</a></td>

                                {{-- <td>
                                    <a href="{{ route('inventories.show', $inventory->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('inventories.edit', $inventory->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('inventories.destroy', $inventory->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
