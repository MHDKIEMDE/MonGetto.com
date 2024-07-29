<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function villes()
    {
        return $this->hasMany(Ville::class);
    }

    protected static function booted()
    {
        static::deleting(function ($pays) {
            $pays->villes()->each(function ($ville) {
                $ville->delete();
            });
        });
    }
}
