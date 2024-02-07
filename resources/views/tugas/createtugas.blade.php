@extends('layouts.master')

@section('content')
<div class="container">
  <h1><div class="alert alert-dark" role="alert">Buat Ticket Untuk Divisi IT</div></h1>
  <form action="{{ route('tugas.store', ['id' => 1]) }}" method="POST">
    @csrf
    <label for="floatingTextarea2">Buat Tugas</label><br>
    <textarea name="tugas" class="form-control" placeholder="Input tugas disini" id="floatingTextarea2" style="height: 100px"></textarea>
    <label for="exampleInputEmail1" class="form-label">Status</label><br>
    <div>
      <select name="status" class="form-select" aria-label="Default select example">
        <option selected>Status</option>
        <option value="Permohonan">Permohonan</option>
        <option value="Dikerjakan">Dikerjakan</option>
        <option value="Close">Close</option>
      </select>
    </div>
    <input class="btn btn-dark" type="submit" value="Submit">
  </form>
</div>
@endsection
