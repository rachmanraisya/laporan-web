@extends('templates.layout')

@section('content')
<div class="container mt-4">
    <h1>Edit Data Catatan Perjalanan</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('perjalanan.update', $catatanPerjalanan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" value="{{ $catatanPerjalanan->nik }}" required>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $catatanPerjalanan->tanggal }}" required>
        </div>
        <div class="mb-3">
            <label for="waktu" class="form-label">Waktu</label>
            <input type="time" class="form-control" id="waktu" name="waktu" value="{{ $catatanPerjalanan->waktu }}" required>
        </div>
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $catatanPerjalanan->lokasi }}" required>
        </div>
        <div class="mb-3">
            <label for="suhu" class="form-label">Suhu</label>
            <input type="number" class="form-control" id="suhu" name="suhu" value="{{ $catatanPerjalanan->suhu }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
