<?php
// app/Models/User.php (mise à jour)

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'actif'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'actif' => 'boolean'
        ];
    }

    /**
     * Relation avec les articles
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    /**
     * Vérifier si l'utilisateur est admin
     */
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    /**
     * Scope pour les admins
     */
    public function scopeAdmins($query)
    {
        return $query->where('role', 'admin');
    }

    /**
     * Scope pour les utilisateurs actifs
     */
    public function scopeActifs($query)
    {
        return $query->where('actif', true);
    }
}