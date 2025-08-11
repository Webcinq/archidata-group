<?php
// app/Models/Article.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'slug',
        'description_courte',
        'contenu',
        'image',
        'secteur_activite',
        'hashtags',
        'actif',
        'featured',
        'meta_description',
        'meta_keywords',
        'user_id',
        'date_publication'
    ];

    protected $casts = [
        'hashtags' => 'array',
        'actif' => 'boolean',
        'featured' => 'boolean',
        'date_publication' => 'datetime'
    ];

    protected $dates = [
        'date_publication'
    ];

    /**
     * Relation avec l'utilisateur (auteur)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Générer automatiquement le slug
     */
    public function setTitreAttribute($value)
    {
        $this->attributes['titre'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    /**
     * Scope pour les articles actifs
     */
    public function scopeActif($query)
    {
        return $query->where('actif', true);
    }

    /**
     * Scope pour les articles publiés
     */
    public function scopePublie($query)
    {
        return $query->where('date_publication', '<=', now());
    }

    /**
     * Scope pour les articles en vedette
     */
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    /**
     * Scope pour rechercher par secteur
     */
    public function scopeBySecteur($query, $secteur)
    {
        return $query->where('secteur_activite', $secteur);
    }

    /**
     * Obtenir l'URL de l'image ou une image par défaut
     */
    public function getImageUrlAttribute()
    {
        if ($this->image && file_exists(public_path('storage/' . $this->image))) {
            return asset('storage/' . $this->image);
        }
        return asset('img/default-article.jpg');
    }

    /**
     * Obtenir un extrait du contenu
     */
    public function getExtraitAttribute($length = 150)
    {
        return Str::limit(strip_tags($this->contenu), $length);
    }

    /**
     * Secteurs d'activité disponibles
     */
    public static function getSecteursActivite()
    {
        return [
            'residentiel' => 'Résidentiel',
            'commercial' => 'Commercial',
            'industriel' => 'Industriel',
            'infrastructure' => 'Infrastructure',
            'hospitalier' => 'Hospitalier',
            'educatif' => 'Éducatif',
            'culturel' => 'Culturel',
            'sportif' => 'Sportif'
        ];
    }
}