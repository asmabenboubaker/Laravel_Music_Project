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
    'user_id' => Auth::user()->id
    

]);
    $blog->comments()->save($comment);

    return response()->json(['comment' => $comment]);
    }
   
}
