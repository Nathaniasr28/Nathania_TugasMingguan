@extends('layouts.app')

@section('content')
<article>
    <h1>{{ $new_berita["Judul"] }}</h1>
    <h3>{{ $new_berita["Penulis"] }}</h3>
    <p>{{ $new_berita["Konten"] }}</p>
</article>

<a href="/berita>Kembali</a>
@endsection
