<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use App\Category;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){
        $newData = $request->all();
        if(!preg_match("^([A-Z][a-zA-Z]+ [A-Z][a-zA-Z]+)$^", $newData['author'])){
            return Redirect::back()->withErrors(['Name should be like this: Joe Parkinson', 'Message']);
        }else
        Comment::create($newData);
        Session::flash('message', "Success");
        return Redirect::back();
    }
}
