<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected static function boot()
    {
        parent::boot();
        self::deleting(function ($category) {
            $category->posts()->detach();
        });
    }

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
        return $this->belongsToMany('App\Post', 'post_category');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment')->latest();
    }
}
