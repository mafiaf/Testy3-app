<!-- resources/views/videos/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $video->title }}</h1>
    <p>{{ $video->description }}</p>
    <!-- Add video player or embed code -->

    <p>{{ $video->likes->count() }} likes</p>

    <h2>Comments</h2>
    @foreach($video->comments as $comment)
        <p>{{ $comment->user->name }}: {{ $comment->body }}</p>
    @endforeach

    <a href="{{ route('comments.create', $video->id) }}">Add a Comment</a>
    <a href="{{ route('comments.index', $video->id) }}">View Comments</a>

    <a href="{{ route('likes.create', $video->id) }}">Like</a>
    <a href="{{ route('likes.index', $video->id) }}">View Likes</a>

    <a href="{{ route('videos.index') }}">Back to All Videos</a>
@endsection
