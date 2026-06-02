@extends('main')

@section('title', 'mahasiswa')

@section('content')
<a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NPM</th>
            <th>Program Studi</th>
            <th>Foto</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($result as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->npm }}</td>
                <td>{{ $item->prodi->nama_prodi ?? '-' }}</td>
                <td>
                    @if ($item->foto)
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto" width="50">
                    @else
                    <span class="text-muted">Tidak ada foto</span>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection