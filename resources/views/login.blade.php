@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container" style="max-width: 500px; margin: 3rem auto; padding: 2rem;">
    <h2 style="text-align: center; color: #037509;">Login</h2>
    <form method="POST" action="{{ route('login.post') }}" novalidate>
        @csrf

        <label for="username" style="display:block; margin-top:1rem; font-weight:600;">Username</label>
        <input type="text" id="username" name="username" value="{{ old('username') }}" required
            style="width:100%; padding:0.5rem; border:1px solid #ccc; border-radius:4px; margin-bottom:0.5rem;" />
        @error('username')
            <div class="error" style="color: #d93025; font-size: 0.875rem;">{{ $message }}</div>
        @enderror

        <label for="password" style="display:block; margin-top:1rem; font-weight:600;">Password</label>
        <input type="password" id="password" name="password" required
            style="width:100%; padding:0.5rem; border:1px solid #ccc; border-radius:4px; margin-bottom:0.5rem;" />
        @error('password')
            <div class="error" style="color: #d93025; font-size: 0.875rem;">{{ $message }}</div>
        @enderror

        <button type="submit"
            style="width:100%; background-color: #037509; color: white; padding: 0.75rem; border: none; border-radius: 4px; font-size: 1rem; cursor: pointer; margin-top: 1.5rem; transition: background-color 0.3s ease;">Login</button>
    </form>
</div>
@endsection
