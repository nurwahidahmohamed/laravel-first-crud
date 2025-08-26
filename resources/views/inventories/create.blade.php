
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inventory Create') }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Quantity</label>
                            <textarea class="form-control" id="description" name="quantity" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Price</label>
                            <textarea class="form-control" id="description" name="price" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Serial No</label>
                            <textarea class="form-control" id="description" name="serial_no" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Inventory</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection


