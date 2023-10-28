<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests\comments;

class CommentController extends Controller
{
    public function store(comments $request)
    {

        Comment::create([
            'comment_text'=>$request->input('comment_text'),
            'user_id'=>auth()->id()
        ]);
        return redirect()->route('user_dashboard');
    }
}
