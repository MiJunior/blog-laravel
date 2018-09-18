<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'desc',
        'file'
    ];


    /**
     * Relationship with 'posts'
     */
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'category_post');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment')->latest();
    }
}
