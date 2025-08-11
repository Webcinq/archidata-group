<?php
// app/Http/Controllers/AdminController.php (version corrigée)

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Carbon\Carbon;

class AdminController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Dashboard principal
     */
    public function dashboard()
    {
        // Vérifier que l'utilisateur est admin
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Accès non autorisé.');
        }

        // Statistiques générales
        $stats = [
            'articles_total' => Article::count(),
            'articles_publies' => Article::actif()->publie()->count(),
            'articles_brouillons' => Article::where('actif', false)->count(),
            'reservations_total' => Reservation::count(),
            'reservations_en_attente' => Reservation::where('statut', 'en_attente')->count(),
            'utilisateurs_total' => User::count(),
        ];

        // Articles récents
        $articles_recents = Article::with('user')
                                  ->orderBy('created_at', 'desc')
                                  ->take(5)
                                  ->get();

        // Réservations récentes
        $reservations_recentes = Reservation::orderBy('created_at', 'desc')
                                           ->take(5)
                                           ->get();

        // Statistiques par mois (6 derniers mois)
        $mois_stats = [];
        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $mois_stats[] = [
                'mois' => $date->format('M Y'),
                'articles' => Article::whereYear('created_at', $date->year)
                                   ->whereMonth('created_at', $date->month)
                                   ->count(),
                'reservations' => Reservation::whereYear('created_at', $date->year)
                                            ->whereMonth('created_at', $date->month)
                                            ->count(),
            ];
        }

        // Articles par secteur
        $secteurs_stats = Article::selectRaw('secteur_activite, COUNT(*) as count')
                                ->whereNotNull('secteur_activite')
                                ->groupBy('secteur_activite')
                                ->get();

        return view('admin.dashboard', compact(
            'stats', 
            'articles_recents', 
            'reservations_recentes', 
            'mois_stats',
            'secteurs_stats'
        ));
    }

    /**
     * Gestion des utilisateurs
     */
    public function users()
    {
        // Vérifier que l'utilisateur est admin
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Accès non autorisé.');
        }
        
        $users = User::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Mettre à jour le rôle d'un utilisateur
     */
    public function updateUserRole(Request $request, User $user)
    {
        // Vérifier que l'utilisateur est admin
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Accès non autorisé.');
        }

        $request->validate([
            'role' => 'required|in:admin,user'
        ]);

        // Empêcher de modifier son propre rôle
        if ($user->id === auth()->id()) {
            return redirect()->back()->with('error', 'Vous ne pouvez pas modifier votre propre rôle.');
        }

        $user->update(['role' => $request->role]);

        return redirect()->back()->with('success', 'Rôle utilisateur mis à jour avec succès!');
    }

    /**
     * Basculer le statut actif d'un utilisateur
     */
    public function toggleUserStatus(User $user)
    {
        // Vérifier que l'utilisateur est admin
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Accès non autorisé.');
        }

        // Empêcher de désactiver son propre compte
        if ($user->id === auth()->id()) {
            return redirect()->back()->with('error', 'Vous ne pouvez pas désactiver votre propre compte.');
        }

        $user->update(['actif' => !$user->actif]);

        $status = $user->actif ? 'activé' : 'désactivé';
        return redirect()->back()->with('success', "Utilisateur {$status} avec succès!");
    }

    /**
     * Gestion des réservations depuis l'admin
     */
    public function reservations()
    {
        // Vérifier que l'utilisateur est admin
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Accès non autorisé.');
        }
        
        $reservations = Reservation::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.reservations.index', compact('reservations'));
    }

    /**
     * Supprimer un utilisateur
     */
    public function destroyUser(User $user)
    {
        // Vérifier que l'utilisateur est admin
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Accès non autorisé.');
        }

        // Empêcher de supprimer son propre compte
        if ($user->id === auth()->id()) {
            return redirect()->back()->with('error', 'Vous ne pouvez pas supprimer votre propre compte.');
        }

        // Supprimer l'utilisateur (les articles seront également supprimés grâce à la contrainte de clé étrangère)
        $user->delete();

        return redirect()->back()->with('success', 'Utilisateur supprimé avec succès!');
    }
}