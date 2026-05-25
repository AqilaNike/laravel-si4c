@extends('main')

@section('title', 'Tambah Mahasiswa')

@section('content')
    <form action="{{ route('mahasiswa.store') }}" method="post">
    @csrf
    <div class="m-3">
        <h5>Form Pengisian Data Mahasiswa</h5>
        <div class="form-group">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" name="npm" class="form-control" value="{{ old('npm') }}">
            @error('npm')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="foto" class="form-label">Foto</label>
            <input type="text" name="foto" class="form-control" value="{{ old('foto') }}">
            @error('foto')
                 <div class="text-danger">{{ $message }}</div>  
            @enderror
        </div>
        <div class="form-group">
            <label for="prodi_id" class="form-label">Program Studi</label>
            <select name="prodi_id" class="form-control">
                <option value="">Pilih Program Studi</option>
                @foreach($prodi as $item)
                    <option value="{{ $item->id }}" {{ old('prodi_id') == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                @endforeach
            </select>
            @error('prodi_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
@endsection