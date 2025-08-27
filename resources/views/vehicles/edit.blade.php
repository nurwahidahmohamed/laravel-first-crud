@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vehicle Edit') }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Make</label>
                            <input type="text" value="{{ $vehicle->make }}" class="form-control" id="name" name="make" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Model</label>
                            <input class="form-control" value="{{ $vehicle->model }}" id="description" name="model" required></input>
                        </div>
                        <div class="form-group">
                            <label for="description">Year</label>
                            <input class="form-control"  value="{{ $vehicle->year }}" id="description" name="year" required></input>
                        </div>
                        <div class="form-group">
                            <label for="description">Chassis No</label>
                            <input class="form-control" value="{{ $vehicle->chassis_no }}" id="description" name="chassis_no" required></input>
                        </div>

                        <button type="submit" class="btn btn-primary">Edit Vehicle</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
