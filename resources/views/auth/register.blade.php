<!-- resources/views/auth/register.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Register</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Add input fields for name, email, password, and password confirmation -->

        <button type="submit">Register</button>
    </form>
@endsection
