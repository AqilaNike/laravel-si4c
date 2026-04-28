<h2>Berita Terkini</h2>
@foreach ($result as $item)
    <h3>{{ $item->judul }}</h3>
    <p>{{ $item->deskripsi }}</p>
@endforeach