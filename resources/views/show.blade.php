<!-- resources/views/profile/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>User Profile</h1>

    <p>Name: {{ Auth::user()->name }}</p>
    <p>Email: {{ Auth::user()->email }}</p>
    <!-- Need to add more details as project goes on. -->

    <a href="{{ route('profile.edit') }}">Edit Profile</a>
@endsection
