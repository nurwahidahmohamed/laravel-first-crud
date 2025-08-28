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
                                <th>Kluster</th>
                                <th>No Fail</th>
                                <th>Nama Pengusaha</th>
                                <th>No KP</th>
                                <th>No Tel</th>
                                <th>Alamat 1</th>
                                <th>Alamat 2</th>
                                <th>Poskod</th>
                                <th>Daerah</th>
                                <th>Negeri</th>
                                <th>Nama Kampung</th>
                                <th>Emel</th>
                                <th>Tarikh Daftar</th>
                                <th>Tarikh Semakan Semula</th>
                                <th>Jumlah Bilik</th>
                                <th>Catatan</th>
                                <th>Insurans</th>
                                <th>Pakej Produk</th>
                                <th>Alamat 1 Kg Stay</th>
                                <th>Alamat 2 Kg Stay</th>
                                <th>Poskod Kg Stay</th>
                                <th>Daerah Kg Stay</th>
                                <th>Negeri Kg Stay</th>
                                <th>Nama Kampung Kg Stay</th>
                                <th>Tarikh Daftar Kg Stay</th>
                                <th>Tarikh Semakan Semula Kg Stay</th>
                                <th>Jumlah Bilik Kg Stay</th>
                                <th>Catatan Kg Stay</th>
                                <th>Kategori</th>
                                <th>Nama Koperasi</th>
                                <th>No Pendaftaran Koperasi</th>
                                <th>Pemilihan Akselerasi</th>
                                <th>Pra Pendaftaran Koperasi</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($homestays as $homestay)
                            <tr>
                                <td>{{ $homestay->kluster }}</td>
                                <td>{{ $homestay->no_fail }}</td>
                                <td>{{ $homestay->nama_pengusaha }}</td>
                                <td>{{ $homestay->no_kp }}</td>
                                <td>{{ $homestay->no_tel }}</td>
                                <td>{{ $homestay->alamat1_homestay }}</td>
                                <td>{{ $homestay->alamat2_homestay }}</td>
                                <td>{{ $homestay->poskod_homestay }}</td>
                                <td>{{ $homestay->daerah_homestay }}</td>
                                <td>{{ $homestay->negeri_homestay }}</td>
                                <td>{{ $homestay->nama_kampung }}</td>
                                <td>{{ $homestay->emel }}</td>
                                <td>{{ $homestay->tarikh_daftar_homestay }}</td>
                                <td>{{ $homestay->tarikh_semakan_semula_homestay }}</td>
                                <td>{{ $homestay->jumlah_bilik }}</td>
                                <td>{{ $homestay->catatan }}</td>
                                <td>{{ $homestay->insurans }}</td>
                                <td>{{ $homestay->pakej_produk }}</td>
                                <td>{{ $homestay->alamat1_kg_stay }}</td>
                                <td>{{ $homestay->alamat2_kg_stay }}</td>
                                <td>{{ $homestay->poskod_kg_stay }}</td>
                                <td>{{ $homestay->daerah_kg_stay }}</td>
                                <td>{{ $homestay->negeri_kg_stay }}</td>
                                <td>{{ $homestay->nama_kampung_kg_stay }}</td>
                                <td>{{ $homestay->tarikh_daftar_kg_stay }}</td>
                                <td>{{ $homestay->tarikh_semakan_semula_kg_stay }}</td>
                                <td>{{ $homestay->jumlah_bilik_kg_stay }}</td>
                                <td>{{ $homestay->catatan_kg_stay }}</td>
                                <td>{{ $homestay->kategori }}</td>
                                <td>{{ $homestay->nama_koperasi }}</td>
                                <td>{{ $homestay->no_pendaftaran_koperasi }}</td>
                                <td>{{ $homestay->pelaksanaan_akselerasi }}</td>
                                <td>{{ $homestay->pra_pendaftaran_koperasi }}</td>
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
