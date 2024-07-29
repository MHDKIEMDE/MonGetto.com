<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeMaison extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function proprietes()
    {
        return $this->hasMany(Propriete::class);
    }

    protected static function booted()
    {
        static::deleting(function ($typeMaison) {
            $typeMaison->proprietes()->delete();
        });
    }
}
