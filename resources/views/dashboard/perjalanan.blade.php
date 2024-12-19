<!-- resources/views/perjalanan/penduduk.blade.php -->
@extends('templates.layout')

@section('content')
<div class="container mt-4">
    <h1>Data Catatan Perjalanan</h1>
    <a href="{{ route('perjalanan.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Lokasi</th>
                <th>Suhu</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($catatanPerjalanan as $index => $catatan)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $catatan->nik }}</td>
                    <td>{{ $catatan->tanggal }}</td>
                    <td>{{ $catatan->waktu }}</td>
                    <td>{{ $catatan->lokasi }}</td>
                    <td>{{ $catatan->suhu }}</td>
                    <td>
                        <a href="{{ route('perjalanan.edit', $catatan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('perjalanan.destroy', $catatan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
