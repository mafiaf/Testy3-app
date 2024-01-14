<!-- resources/views/profile/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Profile</h1>

    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ Auth::user()->name }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ Auth::user()->email }}" required>

        <!-- Need to put more details as project goes on -->

        <button type="submit">Update Profile</button>
    </form>
@endsection
