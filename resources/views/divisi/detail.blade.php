@extends('layouts.master')

@section('content')
<div class="container">
<body>
    <h1><div class="alert alert-dark" role="alert">Halaman {{$divisi->nama_divisi }}</div></h1>
    <a class="btn btn-outline-dark" href='/divisi/{{$divisi->id}}/create' role="button">Beri Tugas Kepada {{$divisi->nama_divisi }} </a>
    <a class="btn btn-outline-dark" href='/divisi/{{$divisi->id}}/halaman' role="button">Buka Halaman Ticket {{$divisi->nama_divisi }} </a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
crossorigin="anonymous"></script>
@endsection
</div>

