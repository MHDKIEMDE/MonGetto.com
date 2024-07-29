<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['filename', 'propriete_id'];

    
    public function propriete()
    {
        return $this->belongsTo(Propriete::class);
    }
}




