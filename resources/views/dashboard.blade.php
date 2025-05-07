@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<style>
    .dashboard-container {
        max-width: 800px;
        margin: 2rem auto;
        background-color: #fff;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        text-align: left;
    }

    .dashboard-container h1 {
        text-align: center;
        margin-bottom: 2rem;
        font-size: 2rem;
        font-weight: bold;
    }

    .agenda-item {
        border-bottom: 1px solid #ddd;
        padding: 1rem 0;
    }

    .agenda-item:last-child {
        border-bottom: none;
    }

    .agenda-title {
        margin: 0;
        font-size: 1.2rem;
        font-weight: 600;
        color: #333;
    }

    .agenda-date {
        font-size: 0.9rem;
        color: #888;
        margin-top: 0.25rem;
        margin-bottom: 0.5rem;
    }

    .agenda-description {
        font-size: 1rem;
        color: #555;
        margin: 0;
    }

    .agenda-heading {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: #222;
    }

    .logout-button {
        margin-top: 2rem;
        display: block;
        background-color: #d9534f;
        color: white;
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .logout-button:hover {
        background-color: #c9302c;
    }
</style>

<div class="dashboard-container">
    <h1>Selamat Datang, {{ $username }}!</h1>

    <div>
        <div class="agenda-heading">Agenda Kegiatan</div>

        <div class="agenda-item">
            <div class="agenda-title">Rapat Koordinasi</div>
            <div class="agenda-date">10 Juli 2024</div>
            <p class="agenda-description">Rapat koordinasi dengan seluruh kepala dinas untuk membahas program kerja tahun ini.</p>
        </div>

        <div class="agenda-item">
            <div class="agenda-title">Peringatan Hari Kemerdekaan</div>
            <div class="agenda-date">17 Agustus 2024</div>
            <p class="agenda-description">Acara peringatan hari kemerdekaan Republik Indonesia di alun-alun Sidoarjo.</p>
        </div>
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="logout-button">Logout</button>
    </form>
</div>

@endsection
