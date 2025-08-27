@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Homestay Details') }}</div>

                <div class="card-body">
                    <h5>Nama Pengusaha: {{ $homestay->nama_pengusaha }}</h5>
                    <p>Jantina: {{ $homestay->jantina }}</p>
                    <p>No KP: {{ $homestay->no_kp }}</p>
                    <p>No Tel: {{ $homestay->no_tel }}</p>
                    <p>Alamat: {{ $homestay->alamat }}</p>
                    <p>Jumlah Bilik: {{ $homestay->jumlah_bilik }}</p>
                    <p>Catatan: {{ $homestay->catatan }}</p>
                    <p>Insurans: {{ $homestay->insurans }}</p>
                    <p>Pakej Produk: {{ $homestay->pakej_produk }}</p>


                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Pengusaha</th>
                                <th>Jantina</th>
                                <th>No KP</th>
                                <th>No Tel</th>
                                <th>Alamat</th>
                                <th>Jumlah Bilik</th>
                                <th>Catatan</th>
                                <th>Insurans</th>
                                <th>Pakej Produk</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{ $homestay->nama_pengusaha }}</td>
                                <td>{{ $homestay->jantina }}</td>
                                <td>{{ $homestay->no_kp }}</td>
                                <td>{{ $homestay->no_tel }}</td>
                                <td>{{ $homestay->alamat }}</td>
                                <td>{{ $homestay->jumlah_bilik }}</td>
                                <td>{{ $homestay->catatan }}</td>
                                <td>{{ $homestay->insurans }}</td>
                                <td>{{ $homestay->pakej_produk }}</td>


                            </tr>

                        </tbody>

                </div>
                <td><a href="{{ route('homestays.index') }}" class="btn btn-info btn-sm">Kembali</a></td>
            </div>
        </div>
    </div>
</div>
@endsection
