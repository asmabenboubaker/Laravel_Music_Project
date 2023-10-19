<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $blogId)
    {
        
        $request->validate([
        'content' => 'required',
    ]);

    $blog = Blog::findOrFail($blogId);

    $comment = new Comment(['content' => $request->content,
    // 'user_id' => Auth::id() 

]);
    $blog->comments()->save($comment);

    return response()->json(['comment' => $comment]);
    }
    /*
     $comment = new Comment($request->all());
    $blog->comments()->save($comment);
    
    if ($request->ajax()) {
        return response()->json($comment, 201);
    }

    // For non-ajax requests, redirect back or to any other location
    return redirect()->back();
    */
}
