<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected static function boot()
    {
        parent::boot();
        self::deleting(function ($category) {
            $category->categories()->detach();
        });
    }

    protected $fillable = [
        'name', 
        'content', 
        'file'];

    /**
     * Relationship with 'categories'
     */
    
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'post_category');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment')->latest();
    }
    
}
