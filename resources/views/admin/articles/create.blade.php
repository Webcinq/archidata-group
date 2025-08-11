{{-- resources/views/admin/articles/create.blade.php --}}
@extends('admin.layouts.app')

@section('title', 'Nouvel Article')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Créer un Nouvel Article</h1>
    <a href="{{ route('admin.articles.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
        <i class="fas fa-arrow-left fa-sm text-white-50"></i> Retour à la liste
    </a>
</div>

<div class="row">
    <div class="col-lg-8">
        <!-- Formulaire principal -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Informations de l'Article</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Titre -->
                    <div class="form-group mb-3">
                        <label for="titre" class="form-label font-weight-bold">Titre de l'Article *</label>
                        <input type="text" class="form-control @error('titre') is-invalid @enderror" 
                               id="titre" name="titre" value="{{ old('titre') }}" required>
                        @error('titre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Description courte -->
                    <div class="form-group mb-3">
                        <label for="description_courte" class="form-label font-weight-bold">Description Courte *</label>
                        <textarea class="form-control @error('description_courte') is-invalid @enderror" 
                                  id="description_courte" name="description_courte" rows="3" required>{{ old('description_courte') }}</textarea>
                        <small class="form-text text-muted">Cette description apparaîtra dans la liste des articles (max 500 caractères).</small>
                        @error('description_courte')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Contenu -->
                    <div class="form-group mb-3">
                        <label for="contenu" class="form-label font-weight-bold">Contenu de l'Article *</label>
                        <textarea class="form-control @error('contenu') is-invalid @enderror" 
                                  id="contenu" name="contenu" rows="15" required>{{ old('contenu') }}</textarea>
                        @error('contenu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Image -->
                    <div class="form-group mb-3">
                        <label for="image" class="form-label font-weight-bold">Image de l'Article</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" 
                               id="image" name="image" accept="image/*">
                        <small class="form-text text-muted">Formats acceptés: JPG, PNG, GIF (max 2MB)</small>
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Hashtags -->
                    <div class="form-group mb-4">
                        <label for="hashtags" class="form-label font-weight-bold">Hashtags</label>
                        <input type="text" class="form-control @error('hashtags') is-invalid @enderror" 
                               id="hashtags" name="hashtags" value="{{ old('hashtags') }}" 
                               placeholder="Séparez les hashtags par des virgules (ex: BIM, Construction, Innovation)">
                        <small class="form-text text-muted">Séparez chaque hashtag par une virgule.</small>
                        @error('hashtags')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group text-right">
                        <button type="reset" class="btn btn-secondary mr-2">Réinitialiser</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Créer l'Article
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <!-- Options de publication -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Options de Publication</h6>
            </div>
            <div class="card-body">
                <!-- Secteur d'activité -->
                <div class="form-group mb-3">
                    <label for="secteur_activite" class="form-label font-weight-bold">Secteur d'Activité</label>
                    <select class="form-control @error('secteur_activite') is-invalid @enderror" 
                            id="secteur_activite" name="secteur_activite" form="article-form">
                        <option value="">Sélectionner un secteur</option>
                        @foreach($secteurs as $key => $secteur)
                            <option value="{{ $key }}" {{ old('secteur_activite') == $key ? 'selected' : '' }}>
                                {{ $secteur }}
                            </option>
                        @endforeach
                    </select>
                    @error('secteur_activite')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Date de publication -->
                {{-- <div class="form-group mb-3">
                    <label for="date_publication" class="form-label font-weight-bold">Date de Publication</label>
                    <input type="datetime-local" class="form-control @error('date_publication') is-invalid @enderror" 
                           id="date_publication" name="date_publication" 
                           value="{{ old('date_publication', now()->format('Y-m-d\TH:i')) }}" form="article-form">
                    <small class="form-text text-muted">Laissez vide pour publier immédiatement.</small>
                    @error('date_publication')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div> --}}

                <!-- Statut -->
                <div class="form-group mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="actif" name="actif" value="1" 
                               {{ old('actif', true) ? 'checked' : '' }} form="article-form">
                        <label class="form-check-label font-weight-bold" for="actif">
                            Publier l'article
                        </label>
                    </div>
                    <small class="form-text text-muted">Décochez pour sauvegarder en brouillon.</small>
                </div>

                <!-- Article en vedette -->
                <div class="form-group mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="featured" name="featured" value="1" 
                               {{ old('featured') ? 'checked' : '' }} form="article-form">
                        <label class="form-check-label font-weight-bold" for="featured">
                            <i class="fas fa-star text-warning"></i> Article en vedette
                        </label>
                    </div>
                    <small class="form-text text-muted">Les articles en vedette apparaissent en haut du blog.</small>
                </div>
            </div>
        </div>

        <!-- SEO -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Optimisation SEO</h6>
            </div>
            <div class="card-body">
                <!-- Meta description -->
                <div class="form-group mb-3">
                    <label for="meta_description" class="form-label font-weight-bold">Meta Description</label>
                    <textarea class="form-control @error('meta_description') is-invalid @enderror" 
                              id="meta_description" name="meta_description" rows="3" 
                              maxlength="160" form="article-form">{{ old('meta_description') }}</textarea>
                    <small class="form-text text-muted">Description pour les moteurs de recherche (max 160 caractères).</small>
                    @error('meta_description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Meta keywords -->
                <div class="form-group mb-3">
                    <label for="meta_keywords" class="form-label font-weight-bold">Mots-clés SEO</label>
                    <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror" 
                           id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords') }}" 
                           placeholder="mot-clé1, mot-clé2, mot-clé3" form="article-form">
                    <small class="form-text text-muted">Mots-clés séparés par des virgules.</small>
                    @error('meta_keywords')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<!-- CKEditor pour l'édition riche du contenu -->
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialiser CKEditor
    CKEDITOR.replace('contenu', {
        height: 400,
        toolbar: [
            { name: 'document', items: ['Source'] },
            { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'Undo', 'Redo'] },
            { name: 'editing', items: ['Find', 'Replace'] },
            '/',
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Blockquote'] },
            { name: 'links', items: ['Link', 'Unlink'] },
            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule'] },
            '/',
            { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
            { name: 'colors', items: ['TextColor', 'BGColor'] },
            { name: 'tools', items: ['Maximize'] }
        ]
    });

    // Ajouter l'attribut form aux éléments dans la sidebar
    document.querySelectorAll('#secteur_activite, #date_publication, #actif, #featured, #meta_description, #meta_keywords').forEach(function(element) {
        element.setAttribute('form', 'article-form');
    });

    // Ajouter l'ID au formulaire principal
    document.querySelector('form').setAttribute('id', 'article-form');
});
</script>
@endpush
@endsection