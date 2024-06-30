<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportCategorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'prix', 'description'
    ];

    public function clients()
    {
        return $this->hasMany(Client::class, 'sport_categories_id');
    }

    public function abonements()
    {
        return $this->hasMany(Abonement::class, 'sport_categories_id');
    }
}
