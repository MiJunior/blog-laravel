<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'author', 
        'content', 
        'post_id', 
        'category_id', 
        'created_at'
    ];
    /**
     * relationship with Post
     */
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
    /**
     * relationship with Category
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
