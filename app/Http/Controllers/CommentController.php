<?php
// app/Http/Controllers/CommentController.php

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Video;

class CommentController extends Controller
{
    public function create($videoId)
    {
        $video = Video::findOrFail($videoId);
        return view('comments.create', compact('video'));
    }

    public function store(Request $request, $videoId)
    {
        $request->validate([
            'body' => 'required|string',
        ]);

        $comment = new Comment([
            'body' => $request->input('body'),
            'user_id' => auth()->id(),
            'video_id' => $videoId,
        ]);

        $comment->save();

        return redirect()->route('videos.show', $videoId)->with('success', 'Comment added successfully!');
    }

    public function index($videoId)
    {
        $video = Video::findOrFail($videoId);
        return view('comments.index', compact('video'));
    }
}
