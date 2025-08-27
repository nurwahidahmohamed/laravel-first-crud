@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                        <span>{{ __('Homestays Index') }}</span>
                        <a href="{{ route('homestays.create') }}" class="btn btn-success btn-sm">
                            <i class="bi bi-plus-lg"></i>
                        </a>
                    </div>


                <div class="card-body">
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
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($homestays as $homestay)
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
                                <td>
                                    <a href="{{ route('homestays.show', $homestay->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                    <a href="{{ route('homestays.edit', $homestay->id) }}" class="btn btn-secondary btn-sm"><i class="bi bi-pen"></i></a>
                                    <form action="{{ route('homestays.destroy', $homestay->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
