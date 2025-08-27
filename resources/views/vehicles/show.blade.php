@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vehicles Details') }}</div>

                <div class="card-body">
                    <h5>Make: {{ $vehicle->make }}</h5>
                    <p>Model: {{ $vehicle->model }}</p>
                    <p>Year: {{ $vehicle->year }}</p>
                    <p>Chassis No: {{ $vehicle->chassis_no }}</p>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Make</th>
                                <th>Model</th>
                                <th>Year</th>
                                <th>Chassis No</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{ $vehicle->id }}</td>
                                <td>{{ $vehicle->make }}</td>
                                <td>{{ $vehicle->model }}</td>
                                <td>{{ $vehicle->year }}</td>
                                <td>{{ $vehicle->chassis_no }}</td>


                            </tr>

                        </tbody>

                </div>
                <td><a href="{{ route('vehicles.index') }}" class="btn btn-info btn-sm">Kembali</a></td>
            </div>
        </div>
    </div>
</div>
@endsection
