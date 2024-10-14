<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'quatier', 'pays_id'];

    public function pays()
    {
        return $this->belongsTo(Pays::class);
    }

    public function quatiers()
    {
        return $this->hasMany(Quatier::class);
    }

    protected static function booted()
    {
        static::deleting(function ($ville) {
            $ville->quatiers()->each(function ($quatier) {
                $quatier->delete();
            });
        });
    }
}
