@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Details') }}</div>

                <div class="card-body">
                    <h5>Name: {{ $user->name }}</h5>
                    <p>Email: {{ $user->email }}</p>
                    <p>IC No: {{ $user->ic_no }}</p>


<table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>IC No</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->ic_no }}</td>


                            </tr>

                        </tbody>

                </div>
                <td><a href="{{ route('users.index') }}" class="btn btn-info btn-sm">Kembali</a></td>
            </div>
        </div>
    </div>
</div>
@endsection
