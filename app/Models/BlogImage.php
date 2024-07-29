<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogImage extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'blog_id', 'url'];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }


}
