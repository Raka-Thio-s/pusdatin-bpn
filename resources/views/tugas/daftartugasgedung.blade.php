@extends('layouts.master')

@section('content')
<div class="container">
    <h1><div class="alert alert-dark" role="alert">Daftar Tugas Div Gedung</div></h1>
    <table class="table table-striped">    
    <tr class="table-light">
        <td class="table-light">
            <td>ID</td>
            <td>Tugas</td>
            <td>Status</td>
        </td>
    </tr>
    @foreach ($tugas_div_gedung as $w)
    <tr class="table-light">
        <td class="table-light">
            <td>{{$w -> id}}</td>
            <td><a class="btn btn-outline-dark" href="#" role="button">{{$w -> tugas_gedung}}</a></td>
            <td>{{$w -> status}}</td>
        </td>      
    </tr>
    @endforeach
</table>
@endsection