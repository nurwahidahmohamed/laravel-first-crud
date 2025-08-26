@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Homestays Index') }}</div>

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
                                <th>Tindakan</th>
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
                                <td><a href="{{ route('homestays.show', $homestay->id) }}" class="btn btn-info btn-sm">Lihat</a></td>

                                {{-- <td>
                                    <a href="{{ route('inventories.show', $inventory->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('inventories.edit', $inventory->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('inventories.destroy', $inventory->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
