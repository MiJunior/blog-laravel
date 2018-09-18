<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use App\Category;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    
    public function store(CommentRequest $request){
        $newData = $request->all();
        Comment::create($newData);
        return response()->json( true );
    }
}
