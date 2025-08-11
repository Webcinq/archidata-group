{{-- resources/views/blog-detail.blade.php (mise à jour) --}}
@extends('layout')

@section('title', $article->titre)
@section('meta-description', $article->meta_description ?: $article->extrait)
@section('meta-keywords', $article->meta_keywords)

@section('content')
<style>
.article-hero {
    min-height: 70vh;
    background: linear-gradient(135deg, 
        rgba(11, 33, 84, 0.9) 0%, 
        rgba(18, 70, 152, 0.8) 30%, 
        rgba(90, 201, 144, 0.7) 60%,
        rgba(43, 40, 45, 0.8) 100%);
    position: relative;
    display: flex;
    align-items: center;
    overflow: hidden;
}

@if($article->image)
.article-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('{{ $article->image_url }}');
    background-size: cover;
    background-position: center;
    opacity: 0.2;
    z-index: -1;
}
@endif

.article-content {
    background: linear-gradient(to bottom, 
        #0b2154 0%, 
        #1a1a2e 30%, 
        #16213e  70%, 
        #0b2154 100%);
    min-height: 100vh;
    padding: 80px 0;
}

.article-body {
    background: linear-gradient(145deg, 
        rgba(43, 40, 45, 0.95) 0%, 
        rgba(23, 34, 77, 0.9) 100%);
    border-radius: 20px;
    padding: 50px;
    margin-bottom: 40px;
    border: 1px solid rgba(90, 201, 144, 0.2);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
}

.article-body h1, .article-body h2, .article-body h3, .article-body h4 {
    color: #ffffff;
    margin-top: 30px;
    margin-bottom: 20px;
}

.article-body h1 { font-size: 2.5rem; }
.article-body h2 { font-size: 2rem; }
.article-body h3 { font-size: 1.75rem; }
.article-body h4 { font-size: 1.5rem; }

.article-body p {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.8;
    margin-bottom: 20px;
    text-align: justify;
}

.article-body ul, .article-body ol {
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 20px;
    padding-left: 30px;
}

.article-body li {
    margin-bottom: 10px;
    line-height: 1.6;
}

.article-body blockquote {
    background: rgba(90, 201, 144, 0.1);
    border-left: 4px solid #5AC990;
    border-radius: 10px;
    padding: 20px;
    margin: 30px 0;
    font-style: italic;
}

.article-body blockquote p {
    color: #ffffff;
    margin-bottom: 10px;
}

.article-body strong {
    color: #5AC990;
    font-weight: 600;
}

.article-meta-header {
    background: rgba(43, 40, 45, 0.9);
    border-radius: 15px;
    padding: 30px;
    margin-bottom: 40px;
    border: 1px solid rgba(90, 201, 144, 0.2);
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

.similar-articles {
    background: rgba(23, 34, 77, 0.6);
    border-radius: 15px;
    padding: 40px;
    margin-top: 50px;
    border: 1px solid rgba(79, 172, 254, 0.2);
}

.similar-article-card {
    background: rgba(43, 40, 45, 0.8);
    border-radius: 15px;
    padding: 25px;
    border: 1px solid rgba(90, 201, 144, 0.2);
    transition: all 0.3s ease;
    height: 100%;
}

.similar-article-card:hover {
    transform: translateY(-5px);
    border-color: rgba(90, 201, 144, 0.4);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
}

.section-title {
    color: #ffffff;
    font-weight: 700;
    margin-bottom: 30px;
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

.breadcrumb-custom {
    background: rgba(43, 40, 45, 0.6);
    border-radius: 25px;
    padding: 10px 20px;
    margin-bottom: 30px;
}

.breadcrumb-custom a {
    color: #5AC990;
    text-decoration: none;
}

.breadcrumb-custom a:hover {
    color: #ffffff;
}

.author-info {
    background: rgba(79, 172, 254, 0.1);
    border-radius: 10px;
    padding: 20px;
    margin: 30px 0;
    border-left: 4px solid #4facfe;
}
</style>

<!-- Hero Section -->
<div class="article-hero">
    <div class="container" style="margin-top: 116px;">
        <div class="hero-content text-white">
           
            
            <h1 class="display-4 font-weight-bold mb-4">{{ $article->titre }}</h1>
            <p class="lead">{{ $article->description_courte }}</p>
            
            @if($article->secteur_activite)
                <span class="badge badge-info px-3 py-2">
                    <i class="fas fa-tag"></i> {{ ucfirst($article->secteur_activite) }}
                </span>
            @endif
        </div>
    </div>
</div>

<!-- Content Section -->
<div class="article-content">
    <div class="container">
        <!-- Métadonnées de l'article -->
        <div class="article-meta-header">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="d-flex align-items-center text-white">
                        <div class="mr-4">
                            <i class="fas fa-calendar-alt text-primary mr-2"></i>
                            Publié le {{ $article->date_publication->format('d M Y à H:i') }}
                        </div>
                        <div class="mr-4">
                            <i class="fas fa-user text-primary mr-2"></i>
                            Par {{ $article->user->name }}
                        </div>
                        <div>
                            <i class="fas fa-clock text-primary mr-2"></i>
                            {{ ceil(str_word_count(strip_tags($article->contenu)) / 200) }} min de lecture
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <!-- Boutons de partage -->
                    <div class="d-inline-flex">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" 
                           target="_blank" class="btn btn-outline-primary btn-sm mr-2">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($article->titre) }}" 
                           target="_blank" class="btn btn-outline-info btn-sm mr-2">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}" 
                           target="_blank" class="btn btn-outline-success btn-sm">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            @if($article->hashtags && count($article->hashtags) > 0)
            <div class="hashtags">
                @foreach($article->hashtags as $tag)
                    <span class="hashtag">#{{ $tag }}</span>
                @endforeach
            </div>
            @endif
        </div>

        <!-- Image principale (si différente de l'hero) -->
        @if($article->image)
        <div class="text-center mb-5">
            <img src="{{ $article->image_url }}" alt="{{ $article->titre }}" 
                 class="img-fluid rounded shadow" style="max-height: 500px; width: 100%; object-fit: cover;">
        </div>
        @endif

        <!-- Contenu de l'article -->
        <div class="article-body">
            {!! $article->contenu !!}
        </div>

        <!-- Informations sur l'auteur -->
        <div class="author-info">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($article->user->name) }}&background=0B2154&color=fff&size=80" 
                         class="rounded-circle" width="80" height="80">
                </div>
                <div class="col-md-10">
                    <h5 class="text-white mb-2">{{ $article->user->name }}</h5>
                    <p class="text-light mb-0">
                        Auteur expert en BIM et technologies de construction chez ArchiData Africa. 
                        Passionné par l'innovation dans le secteur du bâtiment et la transformation digitale.
                    </p>
                </div>
            </div>
        </div>

        <!-- Articles similaires -->
        @if($articlesSimilaires->count() > 0)
        <div class="similar-articles">
            <h2 class="section-title">Articles Similaires</h2>
            <div class="row">
                @foreach($articlesSimilaires as $similaire)
                <div class="col-md-4 mb-4">
                    <div class="similar-article-card">
                        @if($similaire->image)
                            <img src="{{ $similaire->image_url }}" class="img-fluid rounded mb-3" 
                                 style="height: 180px; width: 100%; object-fit: cover;">
                        @endif
                        <h6 class="text-white mb-3">{{ Str::limit($similaire->titre, 80) }}</h6>
                        <p class="text-light small mb-3">{{ Str::limit($similaire->description_courte, 120) }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">{{ $similaire->date_publication->format('d M Y') }}</small>
                            <a href="{{ route('blog.show', $similaire->slug) }}" class="btn btn-sm btn-outline-primary">
                                Lire <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Navigation entre articles -->
        <div class="row mt-5">
            <div class="col-6">
                <!-- Article précédent -->
                @php
                    $articlePrecedent = \App\Models\Article::actif()->publie()
                        ->where('date_publication', '<', $article->date_publication)
                        ->orderBy('date_publication', 'desc')
                        ->first();
                @endphp
                @if($articlePrecedent)
                    <a href="{{ route('blog.show', $articlePrecedent->slug) }}" 
                       class="btn btn-outline-light">
                        <i class="fas fa-arrow-left mr-2"></i> Article précédent
                    </a>
                @endif
            </div>
            <div class="col-6 text-right">
                <!-- Article suivant -->
                @php
                    $articleSuivant = \App\Models\Article::actif()->publie()
                        ->where('date_publication', '>', $article->date_publication)
                        ->orderBy('date_publication', 'asc')
                        ->first();
                @endphp
                @if($articleSuivant)
                    <a href="{{ route('blog.show', $articleSuivant->slug) }}" 
                       class="btn btn-outline-light">
                        Article suivant <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                @endif
            </div>
        </div>

        <!-- Retour au blog -->
        <div class="text-center mt-5">
            <a href="{{ route('blog') }}" class="btn btn-primary btn-lg">
                <i class="fas fa-list mr-2"></i> Retour au Blog
            </a>
        </div>
    </div>
</div>
@endsection