<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['name','images','description'];

    public function user()
    {
        return $this->belongsTo(Blog::class);
    }

    public function images()
    {
        return $this->hasMany(BlogImage::class);
    }
}
