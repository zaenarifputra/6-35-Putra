@extends('layouts.main')

@section('container')
<h1> Halaman About </h1>
<h3> {{ $name }}</h3>
<p> {{ $email }}</p>
<img src="images/{{ $gambar }}" alt="{{ $name }}" widht="200px">
@endsection