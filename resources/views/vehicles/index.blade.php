@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Vehicles Index') }}</div> --}}
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>{{ __('Vehicles Index') }}</span>
                        <a href="{{ route('vehicles.create') }}" class="btn btn-success btn-sm">
                            <i class="bi bi-plus-lg"></i>
                        </a>
                    </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Make</th>
                                <th>Model</th>
                                <th>Year</th>
                                <th>Chassis No</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vehicles as $vehicle)
                            <tr>
                                <td>{{ $vehicle->id }}</td>
                                <td>{{ $vehicle->make }}</td>
                                <td>{{ $vehicle->model }}</td>
                                <td>{{ $vehicle->year }}</td>
                                <td>{{ $vehicle->chassis_no }}</td>
                                <td>
                                    <a href="{{ route('vehicles.show', $vehicle->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                    <a href="{{ route('vehicles.edit', $vehicle->id) }}" class="btn btn-secondary btn-sm"><i class="bi bi-pen"></i></i></a>
                                    <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
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
