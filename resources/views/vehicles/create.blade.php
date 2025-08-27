@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vehicles Create') }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="make">Make</label>
                            <input type="text" class="form-control" id="make" name="make" required>
                        </div>
                        <div class="form-group">
                            <label for="model">Model</label>
                            <input type="text" class="form-control" id="model" name="model" required>
                        </div>
                        <div class="form-group">
                            <label for="year">Year</label>
                            <input type="text" class="form-control" id="year" name="year" required>
                        </div>
                        <div class="form-group">
                            <label for="chassis_no">Chassis No</label>
                            <textarea class="form-control" id="chassis_no" name="chassis_no" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Vehicle</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
