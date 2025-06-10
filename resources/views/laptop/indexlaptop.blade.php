@extends('template')

@section('content')
<div class="container mt-4">
	<h3>Data Laptop</h3>

    <a href="/laptop/tambah" class="btn btn-primary mb-3"> + Tambah Laptop Baru</a>

    <p>Cari Laptop :</p>
	<form action="/laptop/cari" method="GET" class="mb-4">
		<input type="text" class="form-control mb-2" name="cari" placeholder="Cari Merk Laptop .." >
		<input type="submit" class="btn btn-info" value="CARI">
	</form>

	<table class="table table-striped align-middle">
		<thead class="table-light text-center">
			<tr>
				<th>Merk</th>
				<th>Harga</th>
				<th>Tersedia</th>
				<th>Berat (kg)</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
		@foreach($laptop as $l)
		<tr class="text-center">
			<td>{{ $l->merklaptop }}</td>
			<td>Rp {{ number_format($l->hargalaptop, 0, ',', '.') }}</td>
			<td>{{ $l->tersedia ? 'Ya' : 'Tidak' }}</td>
			<td>{{ $l->berat }}</td>
			<td>
				<a href="/laptop/edit/{{ $l->id }}" class="btn btn-success btn-sm me-1">Edit</a>
				<a href="/laptop/hapus/{{ $l->id }}" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
        @endforeach
		</tbody>
	</table>

        {{ $laptop->links() }}
    </div>
</div>
@endsection
