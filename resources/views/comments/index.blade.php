<!-- resources/views/comments/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Comments</h2>

    @foreach($video->comments as $comment)
        <p>{{ $comment->user->name }}: {{ $comment->body }}</p>
    @endforeach

    <a href="{{ route('videos.show', $video->id) }}">Back to Video</a>
@endsection
