<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->get();
        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'video_file' => 'required|mimes:mp4,mov,avi|max:10240', // 10GB maximum size
        ]);

        $video = new Video($request->all());
        $video->user_id = Auth::id();

        $videoFile = $request->file('video_file');
        $video->video_file = $videoFile->store('videos', 'public');

        $video->save();

        return redirect()->route('videos.index')->with('success', 'Video posted successfully!');
    }
}

