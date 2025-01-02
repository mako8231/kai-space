<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'category',
        'rating',
        'author',
        'art_post_id',
        'gallery_id'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }


    public function post()
    {
        return $this->hasOne(Post::class);
    }

    public function gallery()
    {
        return $this->hasOne(Gallery::class);
    }

    protected static function boot()
    {
        parent::boot();
    }
}
