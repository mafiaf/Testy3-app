<!-- resources/views/profile/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Edit Profile</h2>

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PUT')

        <!-- Add input fields for updating user information -->

        <button type="submit">Update Profile</button>
    </form>
@endsection
