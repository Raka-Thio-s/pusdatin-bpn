@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="ticket">
        <div class="ticket-header">
            <img src="https://i.ibb.co/XzZ3QqN/logo-pusdatin-bpn.png" alt="logopusdatin" width="120">
            <h1 class="ticket-title">Ticket Tugas IT</h1>
        </div>
        <div class="ticket-body">
            <div class="ticket-info">
                <p class="ticket-label">Ticket Number:</p>
                <p class="ticket-value">{{$tugas->id}}</p>
            </div>
            <div class="ticket-info">
                <p class="ticket-label">Detail Tugas:</p>
                <p class="ticket-value">{{$tugas->tugas}}</p>
            </div>
            <div class="ticket-info">
                <p class="ticket-label">Status:</p>
                <p class="ticket-value">{{$tugas->status}}</p>
            </div>
        </div>
        <div class="ticket-footer">
            <a href="/divisi/{{$tugas->id}}/edit" class="btn btn-warning">Ubah Status</a>
        </div>
    </div>
</div>
@endsection

<style>
    .ticket {
        background-color: #000; /* Updated color: Black (#000) */
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 20px;
        max-width: 400px;
        margin: 20px auto; /* Added margin to create space between ticket and navbar */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .ticket-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .ticket-title {
        font-size: 24px;
        color: #fff; /* Updated color: White (#fff) */
    }

    .ticket-body {
        padding: 10px 0;
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
    }

    .ticket-info {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .ticket-label {
        flex: 0 0 140px;
        font-weight: bold;
        color: #fff; /* Updated color: White (#fff) */
    }

    .ticket-value {
        flex: 1;
        color: #fff; /* Added color: White (#fff) for ticket values */
    }

    .ticket-footer {
        text-align: center;
    }

    /* Updated button style */
    .btn-warning {
        background-color: #000; /* Black color */
        border-color: #000; /* Black color */
        color: #fff; /* White color */
    }
</style>
