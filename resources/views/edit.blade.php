@extends('layouts.app')
@section('title', 'Edit Data Mahasiswa')

@section('content')
<div class="col-md-8 mx-auto">
    <div class="card p-4">
        <h4 class="fw-bold text-warning mb-3">Edit Data Mahasiswa</h4>

        <form action="{{ route('update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control mb-2"
                value="{{ old('nama', $mahasiswa->nama) }}" required>

            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control mb-2"
                value="{{ old('nim', $mahasiswa->nim) }}" required>

            <label class="form-label">Jurusan</label>
            <select name="jurusan" class="form-control mb-2" required>
                <option value="">Pilih Jurusan</option>
                <option value="Teknik Informatika" {{ old('jurusan', $mahasiswa->jurusan) == 'Teknik Informatika' ? 'selected' : '' }}>
                    Teknik Informatika
                </option>
                <option value="Sistem Informasi" {{ old('jurusan', $mahasiswa->jurusan) == 'Sistem Informasi' ? 'selected' : '' }}>
                    Sistem Informasi
                </option>
                <option value="Manajemen" {{ old('jurusan', $mahasiswa->jurusan) == 'Manajemen' ? 'selected' : '' }}>
                    Manajemen
                </option>
                <option value="Akuntansi" {{ old('jurusan', $mahasiswa->jurusan) == 'Akuntansi' ? 'selected' : '' }}>
                    Akuntansi
                </option>
            </select>

            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control mb-2"
                value="{{ old('email', $mahasiswa->email) }}" required>

            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control mb-3" rows="3" required>{{ old('alamat', $mahasiswa->alamat) }}</textarea>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-warning w-50 fw-bold">Update</button>
                <a href="{{ route('table') }}" class="btn btn-secondary w-50 fw-bold">Kembali</a>
            </div>
        </form>

    </div>
</div>
@endsection
