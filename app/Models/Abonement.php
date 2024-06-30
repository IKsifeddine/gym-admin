<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonement extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_debut', 'date_fin', 'sport_categories_id', 'client_id', 'tarif_abonement'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function sportCategory()
    {
        return $this->belongsTo(SportCategorie::class, 'sport_categories_id');
    }
}
