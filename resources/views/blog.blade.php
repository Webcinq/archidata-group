{{-- resources/views/blog.blade.php (mise à jour) --}}
@extends('layout')
@section('content')
<style>
.blog-hero {
    min-height: 60vh;
    background: linear-gradient(135deg, 
        rgba(11, 33, 84, 0.95) 0%, 
        rgba(18, 70, 152, 0.9) 30%, 
        rgba(90, 201, 144, 0.8) 60%,
        rgba(43, 40, 45, 0.85) 100%);
    position: relative;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.blog-content {
    background: linear-gradient(to bottom, 
        #0b2154 0%, 
        #1a1a2e 30%, 
        #16213e  70%, 
        #0b2154 100%);
    min-height: 100vh;
    padding: 80px 0;
}

.article-card {
    background: linear-gradient(145deg, 
        rgba(43, 40, 45, 0.95) 0%, 
        rgba(23, 34, 77, 0.9) 100%);
    border-radius: 20px;
    padding: 40px;
    margin-bottom: 40px;
    border: 1px solid rgba(90, 201, 144, 0.2);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease;
}

.article-card:hover {
    transform: translateY(-5px);
    border-color: rgba(90, 201, 144, 0.4);
}

.article-image {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 15px;
    border: 2px solid rgba(90, 201, 144, 0.3);
    margin-bottom: 25px;
    transition: all 0.3s ease;
    background: rgba(255, 255, 255, 0.05);
}

.article-image:hover {
    border-color: rgba(90, 201, 144, 0.5);
}

.hashtags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-top: 20px;
}

.hashtag {
    background: linear-gradient(145deg, #5AC990, #4facfe);
    color: #0b2154;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.hashtag:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(90, 201, 144, 0.3);
}

.search-filter-bar {
    background: rgba(43, 40, 45, 0.9);
    border-radius: 15px;
    padding: 30px;
    margin-bottom: 40px;
    border: 1px solid rgba(90, 201, 144, 0.2);
}

.btn-filter {
    background: linear-gradient(145deg, #5AC990, #4facfe);
    border: none;
    color: #0b2154;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 25px;
    transition: all 0.3s ease;
}

.btn-filter:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(90, 201, 144, 0.4);
}

.featured-articles {
    background: rgba(23, 34, 77, 0.6);
    border-radius: 15px;
    padding: 30px;
    margin-bottom: 40px;
    border: 1px solid rgba(79, 172, 254, 0.2);
}

.article-meta {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.9rem;
    margin-bottom: 15px;
}

.article-meta i {
    margin-right: 8px;
    color: #5AC990;
}

.secteur-badge {
    background: linear-gradient(145deg, #4facfe, #00f2fe);
    color: white;
    padding: 4px 12px;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
}

.section-title {
    color: #ffffff;
    font-weight: 700;
    margin-bottom: 25px;
    position: relative;
    padding-bottom: 15px;
    text-shadow: 0 0 20px rgba(90, 201, 144, 0.5);
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, 
        #4facfe 0%, 
        #5AC990 50%, 
        #00f2fe 100%);
    border-radius: 2px;
    box-shadow: 0 0 20px rgba(90, 201, 144, 0.6);
}
</style>

<!-- Hero Section -->
<div class="blog-hero">
    <div class="container" style="margin-top: 116px;">
        <div class="hero-content">
            <h1 class="display-4 font-weight-bold mb-4">Blog & Ressources</h1>
            <p class="lead">Articles sur le BIM, la donnée, les jumeaux numériques - Actualités & Insights</p>
        </div>
    </div>
</div>

<!-- Content Section -->
<div class="blog-content">
    <div class="container">
        
        <!-- Barre de recherche et filtres -->
        <div class="search-filter-bar">
            <form method="GET" action="{{ route('blog') }}">
                <div class="row align-items-end">
                    <div class="col-md-6">
                        <label class="text-white mb-2">Rechercher un article</label>
                        <input type="text" name="search" class="form-control" 
                               placeholder="Mots-clés, titre, contenu..." 
                               value="{{ request('search') }}">
                    </div>
                    <div class="col-md-4">
                        <label class="text-white mb-2">Filtrer par secteur</label>
                        <select name="secteur" class="form-control">
                            <option value="">Tous les secteurs</option>
                            @foreach($secteurs as $key => $secteur)
                                <option value="{{ $key }}" {{ request('secteur') == $key ? 'selected' : '' }}>
                                    {{ $secteur }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-filter w-100">
                            <i class="fas fa-search"></i> Filtrer
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Articles en vedette -->
        @if($articlesFeatured->count() > 0 && !request('search') && !request('secteur'))
        <div class="featured-articles">
            <h2 class="section-title">Articles en Vedette</h2>
            <div class="row">
                @foreach($articlesFeatured as $featured)
                <div class="col-md-4 mb-4">
                    <div class="card h-100" style="background: rgba(43, 40, 45, 0.8); border: 1px solid rgba(90, 201, 144, 0.3);">
                        @if($featured->image)
                            <img src="{{ $featured->image_url }}" class="card-img-top" style="height: 180px; object-fit: cover;">
                        @endif
                        <div class="card-body text-white">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <span class="badge" style="background: linear-gradient(145deg, #f6c23e, #e74a3b);">
                                    <i class="fas fa-star"></i> En Vedette
                                </span>
                                @if($featured->secteur_activite)
                                    <span class="secteur-badge">{{ ucfirst($featured->secteur_activite) }}</span>
                                @endif
                            </div>
                            <h5 class="card-title">{{ Str::limit($featured->titre, 60) }}</h5>
                            <p class="card-text text-light">{{ Str::limit($featured->description_courte, 100) }}</p>
                            <a href="{{ route('blog.show', $featured->slug) }}" class="btn btn-sm btn-filter">Lire la suite</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Liste des articles -->
        <div class="row">
            @forelse($articles as $article)
            <div class="col-lg-12 mb-4">
                <div class="article-card h-100">
                    <div class="row h-100">
                        <div class="col-md-5">
                            @if($article->image)
                                <img src="{{ $article->image_url }}" alt="{{ $article->titre }}" class="article-image">
                            @else
                                <div class="article-image d-flex align-items-center justify-content-center" 
                                     style="background: rgba(90, 201, 144, 0.2);">
                                    <i class="fas fa-newspaper fa-3x text-white"></i>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-7 d-flex flex-column">
                            <div class="article-meta">
                                <i class="fas fa-calendar-alt"></i>{{ $article->date_publication->format('d M Y') }}
                                <i class="fas fa-user ml-3"></i>{{ $article->user->name }}
                                @if($article->secteur_activite)
                                    <br><i class="fas fa-tag"></i>{{ ucfirst($article->secteur_activite) }}
                                @endif
                            </div>
                            
                            <h3 class="text-white mb-3">{{ $article->titre }}</h3>
                            
                            <p class="text-light mb-3 flex-grow-1">{{ $article->description_courte }}</p>
                            
                            @if($article->hashtags && count($article->hashtags) > 0)
                            <div class="hashtags mb-3">
                                @foreach(array_slice($article->hashtags, 0, 4) as $tag)
                                    <span class="hashtag">#{{ $tag }}</span>
                                @endforeach
                            </div>
                            @endif
                            
                            <div class="mt-auto">
                                <a href="{{ route('blog.show', $article->slug) }}" class="btn btn-filter">
                                    Lire l'article <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="article-card text-center">
                    <i class="fas fa-search fa-3x text-white mb-4 opacity-50"></i>
                    <h3 class="text-white mb-3">Aucun article trouvé</h3>
                    <p class="text-light mb-4">
                        @if(request('search') || request('secteur'))
                            Aucun article ne correspond à vos critères de recherche.
                        @else
                            Aucun article n'est disponible pour le moment.
                        @endif
                    </p>
                    @if(request('search') || request('secteur'))
                        <a href="{{ route('blog') }}" class="btn btn-filter">
                            <i class="fas fa-list"></i> Voir tous les articles
                        </a>
                    @endif
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($articles->hasPages())
        <div class="d-flex justify-content-center mt-5">
            <div class="pagination-wrapper">
                {{ $articles->appends(request()->query())->links() }}
            </div>
        </div>
        @endif
    </div>
</div>

<style>
.pagination-wrapper .page-link {
    background-color: rgba(43, 40, 45, 0.8);
    border-color: rgba(90, 201, 144, 0.3);
    color: #ffffff;
}

.pagination-wrapper .page-link:hover {
    background-color: rgba(90, 201, 144, 0.8);
    border-color: #5AC990;
}

.pagination-wrapper .page-item.active .page-link {
    background-color: #5AC990;
    border-color: #5AC990;
}
</style>
@endsection