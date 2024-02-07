@extends('layouts.master')

@section('content')
<title>Document</title>
</head>
<body>
<form action="/divisi/{{$tugas->id}}" method="POST">
@method('put')
@csrf
<div class="container">
 <h1><div class="alert alert-dark" role="alert">Ubah Status Ticket divisi IT</div></h1><br>
  <select name="status" class="form-select" aria-label="Default select example">
    <option selected>Status</option>
     <option value="Permohonan" @if($tugas->status == "Permohonan")selected @endif>Permohonan</option>
     <option value="Dikerjakan" @if($tugas->status == "Dikerjakan")selected @endif>Dikerjakan</option>
     <option value="Close" @if($tugas->status == "Close")selected @endif>Close</option>
</select><br>
  <input class="btn btn-outline-secondary" type="submit" value="submit">
  </div>
</body>
@endsection