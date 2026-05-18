@extends('main')

@section('title', 'Tambah Periode')

@section('content')
    <form action="{{ route('periode.store') }}" method="post">
    @csrf
    <div class="m-3">
        <h5>Form Pengisian Data Periode</h5>
        <div class="form-group">
            <label for="tahun_akademik" class="form-label">Tahun Akademik</label>
            <input type="text" name="tahun_akademik" class="form-control" value="{{ old('tahun_akademik') }}" placeholder="2025/2026">
            @error('tahun_akademik')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="kode_smt" class="form-label">Semester</label>
            <select name="kode_smt" class="form-control">
                <option value="">Pilih Semester</option>
                <option value="Ganjil" {{ old('kode_smt') === 'Ganjil' ? 'selected' : '' }}>Ganjil</option>
                <option value="Genap" {{ old('kode_smt') === 'Genap' ? 'selected' : '' }}>Genap</option>
            </select>
            @error('kode_smt')
                 <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
@endsection