{{-- resources/views/admin/articles/index.blade.php --}}
@extends('admin.layouts.app')

@section('title', 'Gestion des Articles')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gestion des Articles</h1>
    <a href="{{ route('admin.articles.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Nouvel Article
    </a>
</div>

<!-- Statistiques rapides -->
<div class="row mb-4">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['total'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Publiés</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['publies'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Brouillons</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['brouillons'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-edit fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">En Vedette</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['featured'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-star fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Table des articles -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Liste des Articles</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in">
                <div class="dropdown-header">Actions:</div>
                <a class="dropdown-item" href="{{ route('admin.articles.create') }}">Nouvel article</a>
                <a class="dropdown-item" href="#">Exporter en PDF</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Titre</th>
                        <th>Secteur</th>
                        <th>Auteur</th>
                        <th>Statut</th>
                        <th>Date Publication</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($articles as $article)
                    <tr>
                        <td>
                            @if($article->image)
                                <img src="{{ $article->image_url }}" class="img-thumbnail" style="width: 60px; height: 60px; object-fit: cover;">
                            @else
                                <div class="bg-secondary d-flex align-items-center justify-content-center text-white" style="width: 60px; height: 60px;">
                                    <i class="fas fa-image"></i>
                                </div>
                            @endif
                        </td>
                        <td>
                            <div class="text-dark font-weight-bold">{{ Str::limit($article->titre, 50) }}</div>
                            <div class="text-muted small">{{ Str::limit($article->description_courte, 80) }}</div>
                            @if($article->featured)
                                <span class="badge badge-warning"><i class="fas fa-star"></i> Vedette</span>
                            @endif
                        </td>
                        <td>
                            @if($article->secteur_activite)
                                <span class="badge badge-info">{{ ucfirst($article->secteur_activite) }}</span>
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td>{{ $article->user->name }}</td>
                        <td>
                            <form action="{{ route('admin.articles.toggle-status', $article) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-sm {{ $article->actif ? 'btn-success' : 'btn-warning' }}">
                                    {{ $article->actif ? 'Publié' : 'Brouillon' }}
                                </button>
                            </form>
                        </td>
                        <td>
                            @if($article->date_publication)
                                {{ $article->date_publication->format('d/m/Y H:i') }}
                            @else
                                <span class="text-muted">Non programmé</span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <!-- Voir l'article -->
                                <a href="{{ route('blog.show', $article->slug) }}" class="btn btn-sm btn-outline-primary" target="_blank" title="Voir">
                                    <i class="fas fa-eye"></i>
                                </a>
                                
                                <!-- Éditer -->
                                <a href="{{ route('admin.articles.edit', $article) }}" class="btn btn-sm btn-outline-secondary" title="Éditer">
                                    <i class="fas fa-edit"></i>
                                </a>
                                
                                <!-- Basculer vedette -->
                                <form action="{{ route('admin.articles.toggle-featured', $article) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-sm {{ $article->featured ? 'btn-warning' : 'btn-outline-warning' }}" title="Vedette">
                                        <i class="fas fa-star"></i>
                                    </button>
                                </form>
                                
                                <!-- Supprimer -->
                                <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Supprimer">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">
                            <div class="text-muted">
                                <i class="fas fa-newspaper fa-3x mb-3"></i>
                                <p>Aucun article trouvé.</p>
                                <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">Créer le premier article</a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        @if($articles->hasPages())
            <div class="d-flex justify-content-center">
                {{ $articles->links() }}
            </div>
        @endif
    </div>
</div>
@endsection