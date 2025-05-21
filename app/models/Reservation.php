<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'email',
        'service',
        'date_service',
        'demande_speciale',
        'statut'
    ];

    protected $casts = [
        'date_service' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    // Constantes pour les services
    const SERVICES = [
        'BIM GEM et Modélisation' => 'BIM GEM et Modélisation',
        'Conseil et Formation' => 'Conseil et Formation',
        'BIM Management et Synthèse' => 'BIM Management et Synthèse',
        'Facility Management' => 'Facility Management'
    ];

    // Constantes pour les statuts
    const STATUTS = [
        'en_attente' => 'En attente',
        'confirmee' => 'Confirmée',
        'annulee' => 'Annulée'
    ];

    // Mutateur pour formater la date
    public function setDateServiceAttribute($value)
    {
        $this->attributes['date_service'] = \Carbon\Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    }

    // Accesseur pour la date formatée
    public function getDateServiceFormattedAttribute()
    {
        return $this->date_service->format('d/m/Y');
    }

    // Accesseur pour le statut formaté
    public function getStatutFormattedAttribute()
    {
        return self::STATUTS[$this->statut] ?? $this->statut;
    }
}