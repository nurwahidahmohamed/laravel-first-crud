@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Homestay Edit') }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Pengusaha</label>
                            <input type="text" value="{{ $homestay->nama_pengusaha }}" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Jantina</label>
                            <input class="form-control" value="{{ $homestay->jantina }}" id="description" name="jantina " required></input>
                        </div>
                        <div class="form-group">
                            <label for="description">Insurans</label>
                            <input class="form-control"  value="{{ $homestay->insurans }}" id="description" name="insurans" required></input>
                        </div>
                        <div class="form-group">
                            <label for="description">Pakej Produk</label>
                            <input class="form-control" value="{{ $homestay->pakej_produk }}" id="description" name="pakej_produk" required></input>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Homestay</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
