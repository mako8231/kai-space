<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
}
