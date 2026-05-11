@extends('main')

@section('title', 'Fakultas')

@section('content')
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Singkatan</th>
            <th>Dekan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($result as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->singkatan }}</td>
                <td>{{ $item->dekan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection