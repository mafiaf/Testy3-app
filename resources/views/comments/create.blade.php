<!-- resources/views/comments/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Add a Comment</h2>

    <form action="{{ route('comments.store', $video->id) }}" method="POST">
        @csrf

        <label for="body">Comment:</label>
        <textarea name="body" required></textarea>

        <button type="submit">Submit Comment</button>
    </form>

    <a href="{{ route('videos.show', $video->id) }}">Back to Video</a>
@endsection
