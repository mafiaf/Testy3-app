<!-- resources/views/videos/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create a New Video</h1>

    <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
        <!-- handles file uploads  -->
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" required>

        <label for="description">Description:</label>
        <textarea name="description"></textarea>

        <label for="video_file">Upload Video:</label>
        <input type="file" name="video_file" accept="video/*" required>
        <!-- Restricts uploads to videos. -->

        <button type="submit">Submit</button>
    </form>
@endsection
