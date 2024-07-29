<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'quartier', 'pays_id'];

    public function pays()
    {
        return $this->belongsTo(Pays::class);
    }

    public function quartiers()
    {
        return $this->hasMany(Quartier::class);
    }

    protected static function booted()
    {
        static::deleting(function ($ville) {
            $ville->quartiers()->each(function ($quartier) {
                $quartier->delete();
            });
        });
    }
}
