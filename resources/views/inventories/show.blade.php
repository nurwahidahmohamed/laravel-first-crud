@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inventory Details') }}</div>

                <div class="card-body">
                    <h5>Name: {{ $inventory->name }}</h5>
                    <p>Quantity: {{ $inventory->quantity }}</p>
                    <p>Price: {{ $inventory->price }}</p>
                    <p>Serial No: {{ $inventory->serial_no }}</p>

<table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Serial No</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{ $inventory->id }}</td>
                                <td>{{ $inventory->name }}</td>
                                <td>{{ $inventory->quantity }}</td>
                                <td>{{ $inventory->price }}</td>
                                <td>{{ $inventory->serial_no }}</td>


                            </tr>

                        </tbody>

                </div>
                <td><a href="{{ route('inventories.index') }}" class="btn btn-info btn-sm">Kembali</a></td>
            </div>
        </div>
    </div>
</div>
@endsection
