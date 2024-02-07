@extends('layouts.master')

@section('content')
<div class="container">
    <h1><div class="alert alert-dark" role="alert">Daftar Tugas Div IT</div></h1>
    <table class="table table-striped">    
    <tr class="table-light">
        <td class="table-light">
            <td>ID</td>
            <td>Tugas</td>
            <td>Status</td>
            <td>Last Update</td>
        </td>
    </tr>
    @foreach ($tugas as $item)
    <tr class="table-light">
        <td class="table-light">
            <td>{{$item -> id}}</td>
            <td><a class="btn btn-outline-dark" href="/divisi/{{$item->id}}/detail-tugas" role="button">{{$item -> tugas}}</a></td>
            <td>{{$item -> status}}</td>
            <td>{{$item -> updated_at}}</td>
        </td>      
    </tr>
    @endforeach
</table>
@endsection