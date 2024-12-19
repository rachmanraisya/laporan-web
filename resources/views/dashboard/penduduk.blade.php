@extends('templates.layout')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <a href="{{ route('dashboard.buat') }}" class="btn btn-primary">Tambah Data</a>
        </div>

        <table class="table table-striped table-bordered mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penduduk as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->nik }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->jenis_kelamin }}</td>
                    <td>
                        <!-- Debugging -->
                        <a href="{{ route('dashboard.edits', $data->nik) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('penduduk.destroy', $data->nik) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
