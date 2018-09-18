<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name', 
        'content', 
        'file'];

    /**
     * Relationship with 'categories'
     */
    
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_post');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment')->latest();
    }
    
}
