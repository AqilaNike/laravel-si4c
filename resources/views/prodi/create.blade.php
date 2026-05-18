@extends('main')

@section('title', 'Tambah Program Studi')

@section('content')
    <form action="{{ route('prodi.store') }}" method="post">
    @csrf
    <div class="m-3">
        <h5>Form Pengisian Data Program Studi</h5>
        <div class="form-group">
            <label for="nama_prodi" class="form-label">Nama Program Studi</label>
            <input type="text" name="nama_prodi" class="form-control" value="{{ old('nama_prodi') }}">
            @error('nama_prodi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="singkatan" class="form-label">Singkatan</label>
            <input type="text" name="singkatan" class="form-control" value="{{ old('singkatan') }}">
            @error('singkatan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>      
        <div class="form-group">
            <label for="kaprodi" class="form-label">Nama Kaprodi</label>
            <input type="text" name="kaprodi" class="form-control" value="{{ old('kaprodi') }}">
            @error('kaprodi')
                 <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="fakultas_id" class="form-label">Fakultas</label>
            <select name="fakultas_id" class="form-control">
                <option value="">Pilih Fakultas</option>
                @foreach($fakultas as $item)
                    <option value="{{ $item->id }}" {{ old('fakultas_id') == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                @endforeach
            </select>
            @error('fakultas_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
@endsection