@extends('template')

@section('content')
	<h3>Data Laptop</h3>

	<a href="/laptop" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/laptop/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Merk Laptop
            </div>
            <div class="col-8">
                <input type="text" name="merk" required="required" class="form-control">
            </div>
        </div>
         <div class="row mt-2">
            <div class="col-3">
                Harga Laptop
            </div>
            <div class="col-8">
                <input type="number" name="harga" required="required" class="form-control">
            </div>
        </div>
         <div class="row mt-2">
            <div class="col-3">
                Tersedia
            </div>
            <div class="col-8">
                <select name="tersedia" class="form-control" required>
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
        </div>
         <div class="row mt-2">
            <div class="col-3">
                Berat (kg)
            </div>
            <div class="col-8">
                <input type="number" step="0.01" name="berat" required="required" class="form-control">
            </div>
        </div>
		<br/>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection
