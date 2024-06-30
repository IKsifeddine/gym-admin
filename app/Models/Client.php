<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'prenom', 'adress', 'telephone', 'sport_categories_id', 'status', 'photo'
    ];

    public function sportCategory()
    {
        return $this->belongsTo(SportCategorie::class, 'sport_categories_id');
    }

    public function abonements()
    {
        return $this->hasMany(Abonement::class);
    }
}
