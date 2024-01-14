<!-- resources/views/likes/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Add a Like</h2>

    <form action="{{ route('likes.store', $video->id) }}" method="POST">
        @csrf

        <button type="submit">Like</button>
    </form>

    <a href="{{ route('videos.show', $video->id) }}">Back to Video</a>
@endsection
