@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row align-items-start">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Homestay Create') }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        {{-- follow table homestay --}}
                        <div class="form-group">
                            <label for="name">Kluster</label>
                            <input type="text" class="form-control" id="name" name="kluster" required>
                        </div>
                        <div class="form-group">
                            <label for="name">No Fail</label>
                            <input type="text" class="form-control" id="name" name="no_fail" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Pengusaha</label>
                            <input type="text" class="form-control" id="name" name="nama_pengusaha" required>
                        </div>
                        <div class="form-group">
                            <label for="description">No Kad Pengenalan</label>
                            <textarea class="form-control" id="description" name="no_kad_pengenalan" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">No Telefon</label>
                            <textarea class="form-control" id="description" name="no_tel" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Alamat 1</label>
                            <textarea class="form-control" id="description" name="alamat1" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Alamat 2</label>
                            <textarea class="form-control" id="description" name="alamat2" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Poskod</label>
                            <textarea class="form-control" id="description" name="poskod" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Daerah</label>
                            <textarea class="form-control" id="description" name="daerah" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Negeri</label>
                            <textarea class="form-control" id="description" name="negeri" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Nama Kampung</label>
                            <textarea class="form-control" id="description" name="nama_kampung" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">E-mel</label>
                            <textarea class="form-control" id="description" name="emel" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Tarikh Daftar Homestay</label>
                            <textarea class="form-control" id="description" name="tarikh_daftar_homestay" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Tarikh Semakan Semula Homestay</label>
                            <textarea class="form-control" id="description" name="tarikh_semakan_semula_homestay" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Jumlah Bilik Homestay</label>
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
                        <div class="form-group">
                            <label for="description">Alamat 1 Kampungstay</label>
                            <textarea class="form-control" id="description" name="alamat1_kgstay" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Alamat 2 Kampungstay</label>
                            <textarea class="form-control" id="description" name="alamat2_kgstay" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Poskod Kampungstay</label>
                            <textarea class="form-control" id="description" name="poskod_kgstay" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Daerah Kampungstay</label>
                            <textarea class="form-control" id="description" name="daerah_kgstay" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Negeri Kampungstay</label>
                            <textarea class="form-control" id="description" name="negeri_kgstay" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Nama Kampungstay</label>
                            <textarea class="form-control" id="description" name="nama_kgstay" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Tarikh Daftar Kampungstay</label>
                            <textarea class="form-control" id="description" name="tarikh_daftar_kgstay" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Tarikh Semakan Semula Kampungstay</label>
                            <textarea class="form-control" id="description" name="tarikh_semakan_semula_kgstay" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Jumlah Bilik Kampungstay</label>
                            <textarea class="form-control" id="description" name="jumlah_bilik_kgstay" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Catatan</label>
                            <textarea class="form-control" id="description" name="catatan_kgstay" required></textarea>
                        </div>





                        <button type="submit" class="btn btn-primary">Create Homestay</button>
                    </form>


                </div>
            </div>
        </div>

    </div>
</div>
@endsection
