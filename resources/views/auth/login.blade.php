<!-- resources/views/auth/login.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Login</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Add input fields for email and password -->

        <button type="submit">Login</button>
    </form>
@endsection
