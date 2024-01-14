<!-- resources/views/videos/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>All Videos</h1>

    @foreach($videos as $video)
        <div>
            <h2>{{ $video->title }}</h2>
            <p>{{ $video->description }}</p>
            <!-- Add video player or embed code -->

            <p>{{ $video->likes->count() }} likes</p>

            <a href="{{ route('videos.show', $video->id) }}">View Details</a>
        </div>
    @endforeach
@endsection
