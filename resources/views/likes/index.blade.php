<!-- resources/views/likes/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Likes</h2>

    <p>{{ $video->likes->count() }} likes</p>

    @foreach($video->likes as $like)
        <p>{{ $like->user->name }}</p>
    @endforeach

    <a href="{{ route('videos.show', $video->id) }}">Back to Video</a>
@endsection
