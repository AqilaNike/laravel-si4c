@extends('main')

@section('title', 'Periode')

@section('content')
<a href="{{ route('periode.create') }}" class="btn btn-primary mb-3">Tambah Periode</a>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Tahun</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($result as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->tahun }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection