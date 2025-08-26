@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Homestay Create') }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Pengusaha</label>
                            <input type="text" class="form-control" id="name" name="nama_pengusaha" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Jantina</label>
                            <textarea class="form-control" id="description" name="jantina" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">No KP</label>
                            <textarea class="form-control" id="description" name="no_kp" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">No Telefon</label>
                            <textarea class="form-control" id="description" name="no_tel" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Alamat</label>
                            <textarea class="form-control" id="description" name="alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Jumlah Bilik</label>
                            <textarea class="form-control" id="description" name="jumlah_bilik" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Catatan</label>
                            <textarea class="form-control" id="description" name="catatan" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Insurans</label>
                            <textarea class="form-control" id="description" name="insurans" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Pakej Produk</label>
                            <textarea class="form-control" id="description" name="pakej_produk" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Homestay</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
