@extends('layouts.master')

@section('content')
<title>Document</title>
</head>
<body>
<div class="card text-bg-success mb-3" style="max-width: 18rem;">
  <h1><div class="card-header">Tugas Harian</div></h1>
  <div class="card-body">
    <h5 class="card-title">Detail Info</h5>
    @if($tugas)    
    <p class="card-text">{{ $tugas->tugas }}</p>
    <p class="card-text">Status {{ $tugas->status }}</p>
@else
    <p>Tugas tidak ditemukan.</p>
@endif

  </div>
</div>
</body>
@endsection