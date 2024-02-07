@extends('layouts.master')

@section('content')   
<div class="container">
<table class="table table-dark table-striped-columns" action="/divisi" method="POST">
    @method('put')
    @csrf
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
    </tr>
  </thead>
  <tbody class="table table-dark table-striped-columns">
    @foreach ($divisi as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td><a class="btn btn-secondary" href='/divisi/{{$item->id}}/detail' role="button">{{ $item->nama_divisi }}</a></td>
        </tr>
    @endforeach
  </tbody>
  </td>
</table>
@endsection

