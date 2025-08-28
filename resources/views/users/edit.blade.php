@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Edit') }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" value="{{ $user->name }}" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">IC No</label>
                            <input class="form-control" value="{{ $user->ic_no }}" id="description" name="ic_no" required></input>
                        </div>
                        <div class="form-group">
                            <label for="description">Email</label>
                            <input class="form-control"  value="{{ $user->email }}" id="description" name="email" required></input>
                        </div>
                        <div class="form-group">
                            <label for="description">Password</label>
                            <input class="form-control" value="{{ $user->password }}" id="description" name="password" required></input>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit User</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
