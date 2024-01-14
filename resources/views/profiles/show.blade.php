<!-- resources/views/profile/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>User Profile</h2>

    <!-- Display user information (name, email, etc.) -->

    <a href="{{ route('profile.edit') }}">Edit Profile</a>
@endsection
