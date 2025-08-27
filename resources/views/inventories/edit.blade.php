@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inventory Edit') }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" value="{{ $inventory->name }}" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Quantity</label>
                            <input class="form-control" value="{{ $inventory->quantity }}" id="description" name="quantity" required></input>
                        </div>
                        <div class="form-group">
                            <label for="description">Price</label>
                            <input class="form-control"  value="{{ $inventory->price }}" id="description" name="price" required></input>
                        </div>
                        <div class="form-group">
                            <label for="description">Serial No</label>
                            <input class="form-control" value="{{ $inventory->serial_no }}" id="description" name="serial_no" required></input>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Inventory</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
