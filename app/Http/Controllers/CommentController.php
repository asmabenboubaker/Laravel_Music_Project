<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $blogId)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $blog = Blog::findOrFail($blogId);

        $comment = new Comment(['content' => $request->content]);
        $blog->comments()->save($comment);

        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}
