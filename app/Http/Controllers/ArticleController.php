<?php
// app/Http/Controllers/ArticleController.php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Afficher la page blog publique
     */
    public function blog(Request $request)
    {
        $query = Article::actif()->publie()->with('user');

        // Filtrer par secteur si spécifié
        if ($request->has('secteur') && $request->secteur) {
            $query->bySecteur($request->secteur);
        }

        // Recherche par mot-clé
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('titre', 'LIKE', "%{$search}%")
                  ->orWhere('description_courte', 'LIKE', "%{$search}%")
                  ->orWhere('contenu', 'LIKE', "%{$search}%");
            });
        }

        $articles = $query->orderBy('date_publication', 'desc')->paginate(9);
        $secteurs = Article::getSecteursActivite();
        $articlesFeatured = Article::actif()->publie()->featured()->take(3)->get();

        return view('blog', compact('articles', 'secteurs', 'articlesFeatured'));
    }

    /**
     * Afficher un article spécifique
     */
    public function show($slug)
    {
        $article = Article::where('slug', $slug)
                         ->actif()
                         ->publie()
                         ->with('user')
                         ->firstOrFail();

        // Articles similaires
        $articlesSimilaires = Article::actif()
                                   ->publie()
                                   ->where('id', '!=', $article->id)
                                   ->where('secteur_activite', $article->secteur_activite)
                                   ->take(3)
                                   ->get();

        return view('blog-detail', compact('article', 'articlesSimilaires'));
    }

    /**
     * Dashboard admin - Liste des articles
     */
    public function index()
    {
        // Vérifier que l'utilisateur est admin
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Accès non autorisé.');
        }
        
        $articles = Article::with('user')
                          ->orderBy('created_at', 'desc')
                          ->paginate(10);

        $stats = [
            'total' => Article::count(),
            'publies' => Article::actif()->publie()->count(),
            'brouillons' => Article::where('actif', false)->count(),
            'featured' => Article::featured()->count()
        ];

        return view('admin.articles.index', compact('articles', 'stats'));
    }

    /**
     * Afficher le formulaire de création
     */
    public function create()
    {
        // Vérifier que l'utilisateur est admin
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Accès non autorisé.');
        }
        
        $secteurs = Article::getSecteursActivite();
        return view('admin.articles.create', compact('secteurs'));
    }

    /**
     * Enregistrer un nouvel article
     */
    public function store(Request $request)
    {
        // Vérifier que l'utilisateur est admin
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Accès non autorisé.');
        }
        
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description_courte' => 'required|string|max:500',
            'contenu' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'secteur_activite' => 'nullable|string',
            'hashtags' => 'nullable|string',
            'actif' => 'boolean',
            'featured' => 'boolean',
            'meta_description' => 'nullable|string|max:160',
            'meta_keywords' => 'nullable|string|max:255',
            'date_publication' => 'nullable|date'
        ]);
        $validated['date_publication'] = $validated['date_publication'] ?? now();


        // Gestion de l'upload d'image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public');
            $validated['image'] = $imagePath;
        }

        // Traitement des hashtags
        if ($request->hashtags) {
            $hashtags = array_map('trim', explode(',', $request->hashtags));
            $validated['hashtags'] = $hashtags;
        }

        $validated['user_id'] = auth()->id();
        $validated['slug'] = Str::slug($validated['titre']);

        // Si pas de date de publication, utiliser maintenant
        if (!$validated['date_publication']) {
            $validated['date_publication'] = now();
        }

        Article::create($validated);

        return redirect()->route('admin.articles.index')
                        ->with('success', 'Article créé avec succès!');
    }

    /**
     * Afficher le formulaire d'édition
     */
    public function edit(Article $article)
    {
        // Vérifier que l'utilisateur est admin
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Accès non autorisé.');
        }
        
        $secteurs = Article::getSecteursActivite();
        return view('admin.articles.edit', compact('article', 'secteurs'));
    }

    /**
     * Mettre à jour un article
     */
    public function update(Request $request, Article $article)
    {
        // Vérifier que l'utilisateur est admin
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Accès non autorisé.');
        }
        
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description_courte' => 'required|string|max:500',
            'contenu' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'secteur_activite' => 'nullable|string',
            'hashtags' => 'nullable|string',
            'actif' => 'boolean',
            'featured' => 'boolean',
            'meta_description' => 'nullable|string|max:160',
            'meta_keywords' => 'nullable|string|max:255',
            'date_publication' => 'nullable|date'
        ]);

        // Gestion de l'upload d'image
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }
            $imagePath = $request->file('image')->store('articles', 'public');
            $validated['image'] = $imagePath;
        }

        // Traitement des hashtags
        if ($request->hashtags) {
            $hashtags = array_map('trim', explode(',', $request->hashtags));
            $validated['hashtags'] = $hashtags;
        }

        $validated['slug'] = Str::slug($validated['titre']);

        $article->update($validated);

        return redirect()->route('admin.articles.index')
                        ->with('success', 'Article mis à jour avec succès!');
    }

    /**
     * Supprimer un article
     */
    public function destroy(Article $article)
    {
        // Vérifier que l'utilisateur est admin
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Accès non autorisé.');
        }
        
        // Supprimer l'image
        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }

        $article->delete();

        return redirect()->route('admin.articles.index')
                        ->with('success', 'Article supprimé avec succès!');
    }

    /**
     * Basculer le statut actif/inactif
     */
    public function toggleStatus(Article $article)
    {
        // Vérifier que l'utilisateur est admin
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Accès non autorisé.');
        }
        
        $article->update(['actif' => !$article->actif]);

        $status = $article->actif ? 'activé' : 'désactivé';
        return redirect()->back()
                        ->with('success', "Article {$status} avec succès!");
    }

    /**
     * Basculer le statut featured
     */
    public function toggleFeatured(Article $article)
    {
        // Vérifier que l'utilisateur est admin
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Accès non autorisé.');
        }
        
        $article->update(['featured' => !$article->featured]);

        $status = $article->featured ? 'mis en vedette' : 'retiré de la vedette';
        return redirect()->back()
                        ->with('success', "Article {$status} avec succès!");
    }
}