@extends('template')

@section('content')
<div class="container mt-4">
    <h3>Tambah Data Nilai Mahasiswa</h3>

    <form action="/eas/store" method="POST">
        @csrf

        <div class="form-group row mb-3">
            <label class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-10">
                <input type="text" name="nomerinduksiswa" class="form-control" maxlength="5" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-10">
                <input type="text" name="nilaiangka" class="form-control" required>
            </div>
        </div>

        <div class="form-group row mb-4">
            <label class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-10">
                <input type="text" name="sks" class="form-control" required>
            </div>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-success">SIMPAN</button>
            <a href="/eas" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
@endsection
