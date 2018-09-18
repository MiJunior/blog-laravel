<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Uploader;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $categories = Category::pluck('name', 'id');
     return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newData = $request->only('name', 'content');
        if($request->has('file')) {
            $file = Uploader::file($request->file('file'));
            Uploader::push('storage/fileUpload');
            $fullPath = Uploader::getFullPath();
            $newData['file'] = $fullPath;
        }
        $post = Post::create($newData);
        if($request->input('category_id')):
            $post->categories()->attach($request->input('category_id'));
        endif;
        return redirect('category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $postId
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $comments = $post->comments()->orderBy('id','desc')->paginate(5);
        return view('posts.show', compact('post', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::get();
        $posts = Post::findorfail($id);
        return view('posts.edit', compact('posts', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findorfail($id);
        $newData = $request->all();
        if(!empty($newData['file'])) {
            Uploader::file($newData['file']);
            Uploader::push('storage/fileUpload');
            $fullPath = Uploader::getFullPath();
            $newData['file'] = $fullPath;
        }
        $post->update($newData);
        if($request->input('category_id')):
            $post->categories()->attach($request->update('category_id'));
        endif;
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {  
        $post->delete();
        return redirect('category');
    }
}
