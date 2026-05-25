@extends('main')

@section('title', 'Periode')

@section('content')
<a href="{{ route('periode.create') }}" class="btn btn-primary mb-3">Tambah Periode</a>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Tahun Akademik</th>
            <th>Semester</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($result as $item)
            <tr>
                <td>{{ $item->tahun_akademik }}</td>
                <td>{{ $item->kode_smt }}</td>
                <td>
                    <a href="{{ route('periode.edit', $item->id) }}" class="btn btn-warning btn-rounded">Edit</a>
                    <form method="POST" action="{{ route('periode.destroy', $item->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger btn-rounded show_confirm" data-toggle="tooltip"
                            title='Delete' data-nama='{{ $item->tahun_akademik }}'>Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection