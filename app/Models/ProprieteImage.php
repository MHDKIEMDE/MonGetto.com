<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProprieteImage extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'propriete_id', 'url'];

    
    public function propriete()
    {
        return $this->belongsTo(Propriete::class);
    }
}




