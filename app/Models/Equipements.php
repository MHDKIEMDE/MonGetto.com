<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipements extends Model
{
    use HasFactory;

    protected $fillable = ['equipements', 'image_name'];

    public function proprietes()
    {
        return $this->belongsToMany(Propriete::class);
    }

}
