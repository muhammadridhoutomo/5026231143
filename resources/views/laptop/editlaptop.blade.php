@extends('template')

@section('content')
	<h3>Edit Data Laptop</h3>

	<a href="/laptop" class="btn btn-info"> Kembali</a>
	<br/>
	<br/>

	@foreach($laptop as $l)
	<form action="/laptop/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $l->id }}">

        <div class="form-group">
            <label>Merk Laptop</label>
            <input type="text" required="required" name="merk" value="{{ $l->merklaptop }}" class="form-control">
        </div>

        <div class="form-group">
            <label>Harga Laptop</label>
            <input type="number" required="required" name="harga" value="{{ $l->hargalaptop }}" class="form-control">
        </div>

        <div class="form-group">
            <label>Tersedia</label>
            <select name="tersedia" class="form-control" required>
                <option value="1" {{ $l->tersedia == 1 ? 'selected' : '' }}>Ya</option>
                <option value="0" {{ $l->tersedia == 0 ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>

        <div class="form-group">
            <label>Berat (kg)</label>
            <input type="number" step="0.01" required="required" name="berat" value="{{ $l->berat }}" class="form-control">
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach
@endsection
