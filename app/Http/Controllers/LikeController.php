<?php
// app/Http/Controllers/LikeController.php

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Video;

class LikeController extends Controller
{
    public function create($videoId)
    {
        $video = Video::findOrFail($videoId);
        return view('likes.create', compact('video'));
    }

    public function store(Request $request, $videoId)
    {
        // Check if the user has already liked the video to prevent duplicates
        if (Like::where('user_id', auth()->id())->where('video_id', $videoId)->exists()) {
            return redirect()->route('videos.show', $videoId)->with('error', 'You have already liked this video.');
        }

        $like = new Like([
            'user_id' => auth()->id(),
            'video_id' => $videoId,
        ]);

        $like->save();

        return redirect()->route('videos.show', $videoId)->with('success', 'Like added successfully!');
    }

    public function index($videoId)
    {
        $video = Video::findOrFail($videoId);
        return view('likes.index', compact('video'));
    }
}
