<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'nom',
        'catégorie',
        'prix',
        'taux_tva',
        // Autres champs si nécessaire
    ];

    // Définir la relation avec le restaurant
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    // Si nécessaire, définir d'autres relations
}

