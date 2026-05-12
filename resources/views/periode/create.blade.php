@extends('main')

@section('title', 'Tambah Periode')

@section('content')
    <form action="{{ route('periode.store') }}" method="post">
    @csrf
    <div class="m-3">
        <h5>Form Pengisian Data Periode</h5>
        <div class="form-group">
            <label for="nama" class="form-label">Nama Periode</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tahun" class="form-label">Tahun Periode</label>
            <input type="text" name="tahun" class="form-control" value="{{ old('tahun') }}">
            @error('tahun')
                 <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
@endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>