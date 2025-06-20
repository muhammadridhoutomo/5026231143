@extends('template')

@section('content')
<div class="container mt-4">
    <h3>Data Nilai Mahasiswa</h3>
    <a href="/eas/tambah" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-striped align-middle">
        <thead class="table-light text-center">
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilai as $n)
            <tr class="text-center">
                <td>{{ $n->id }}</td>
                <td>{{ $n->nomerinduksiswa }}</td>
                <td>{{ $n->nilaiangka }}</td>
                <td>{{ $n->sks }}</td>
                <td>
                    @if($n->nilaiangka <= 40)
                        D
                    @elseif($n->nilaiangka <= 60)
                        C
                    @elseif($n->nilaiangka <= 80)
                        B
                    @else
                        A
                    @endif
                </td>
                <td>{{ $n->nilaiangka * $n->sks }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
