<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class HomeController extends Controller
{
     public function index(){

        $comments = Comment::whereNull('parent_comment_id')->with('children')->get();
        return view('home', compact('comments'));
     }
}
