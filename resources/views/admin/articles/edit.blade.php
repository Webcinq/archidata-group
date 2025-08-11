{{-- resources/views/admin/articles/edit.blade.php --}}
@extends('admin.layouts.app')

@section('title', 'Modifier l\'Article')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Modifier l'Article</h1>
    <div class="d-flex gap-2">
        <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Retour à la liste
        </a>
        @if($article->slug)
            <a href="{{ route('blog.show', $article->slug) }}" target="_blank" class="btn btn-outline-primary">
                <i class="fas fa-eye me-1"></i> Voir l'article
            </a>
        @endif
    </div>
</div>

<!-- Informations sur l'article -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card border-left-info">
            <div class="card-body py-3">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <strong>Créé le :</strong> {{ $article->created_at->format('d/m/Y à H:i') }}
                    </div>
                    <div class="col-md-3">
                        <strong>Modifié le :</strong> {{ $article->updated_at->format('d/m/Y à H:i') }}
                    </div>
                    <div class="col-md-3">
                        <strong>Auteur :</strong> {{ $article->user->name }}
                    </div>
                    <div class="col-md-3">
                        <strong>Statut :</strong> 
                        @if($article->actif)
                            <span class="badge badge-success">Publié</span>
                        @else
                            <span class="badge badge-warning">Brouillon</span>
                        @endif
                        @if($article->featured)
                            <span class="badge badge-info"><i class="fas fa-star"></i> Vedette</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <!-- Formulaire principal -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-edit me-2"></i>Informations de l'Article
                </h6>
            </div>
            <div class="card-body">
                <form id="article-form" action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <!-- Titre -->
                    <div class="form-group mb-3">
                        <label for="titre" class="form-label font-weight-bold">Titre de l'Article *</label>
                        <input type="text" class="form-control @error('titre') is-invalid @enderror" 
                               id="titre" name="titre" value="{{ old('titre', $article->titre) }}" required>
                        @error('titre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="form-text text-muted">
                            <strong>Slug actuel :</strong> <code>{{ $article->slug }}</code>
                        </small>
                    </div>

                    <!-- Description courte -->
                    <div class="form-group mb-3">
                        <label for="description_courte" class="form-label font-weight-bold">Description Courte *</label>
                        <textarea class="form-control @error('description_courte') is-invalid @enderror" 
                                  id="description_courte" name="description_courte" rows="3" required>{{ old('description_courte', $article->description_courte) }}</textarea>
                        <small class="form-text text-muted">Cette description apparaîtra dans la liste des articles (max 500 caractères).</small>
                        @error('description_courte')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Contenu -->
                    <div class="form-group mb-3">
                        <label for="contenu" class="form-label font-weight-bold">Contenu de l'Article *</label>
                        <textarea class="form-control @error('contenu') is-invalid @enderror" 
                                  id="contenu" name="contenu" rows="15" required>{{ old('contenu', $article->contenu) }}</textarea>
                        @error('contenu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Image actuelle et nouvelle -->
                    <div class="form-group mb-3">
                        <label for="image" class="form-label font-weight-bold">Image de l'Article</label>
                        
                        @if($article->image)
                            <div class="current-image mb-3">
                                <label class="small text-muted">Image actuelle :</label>
                                <div class="position-relative d-inline-block">
                                    <img src="{{ $article->image_url }}" alt="Image actuelle" 
                                         class="img-thumbnail" style="max-width: 200px; max-height: 150px;">
                                    <div class="position-absolute top-0 start-100 translate-middle">
                                        <button type="button" class="btn btn-sm btn-danger rounded-circle" 
                                                onclick="removeCurrentImage()" title="Supprimer l'image actuelle">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif
                        
                        <input type="file" class="form-control @error('image') is-invalid @enderror" 
                               id="image" name="image" accept="image/*" onchange="previewImage(this)">
                        <small class="form-text text-muted">
                            Formats acceptés: JPG, PNG, GIF (max 2MB)
                            @if($article->image)
                                <br><strong>Laisser vide pour conserver l'image actuelle</strong>
                            @endif
                        </small>
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        
                        <!-- Aperçu de la nouvelle image -->
                        <div id="image-preview" class="mt-2" style="display: none;">
                            <label class="small text-muted">Aperçu de la nouvelle image :</label>
                            <div>
                                <img id="preview-img" class="img-thumbnail" style="max-width: 200px; max-height: 150px;">
                            </div>
                        </div>
                    </div>

                    <!-- Hashtags -->
                    <div class="form-group mb-4">
                        <label for="hashtags" class="form-label font-weight-bold">Hashtags</label>
                        <input type="text" class="form-control @error('hashtags') is-invalid @enderror" 
                               id="hashtags" name="hashtags" 
                               value="{{ old('hashtags', $article->hashtags ? implode(', ', $article->hashtags) : '') }}" 
                               placeholder="Séparez les hashtags par des virgules (ex: BIM, Construction, Innovation)">
                        <small class="form-text text-muted">Séparez chaque hashtag par une virgule.</small>
                        @error('hashtags')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        
                        @if($article->hashtags && count($article->hashtags) > 0)
                            <div class="mt-2">
                                <label class="small text-muted">Hashtags actuels :</label>
                                <div>
                                    @foreach($article->hashtags as $tag)
                                        <span class="badge badge-secondary me-1">#{{ $tag }}</span>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Boutons d'action -->
                    <div class="form-group d-flex justify-content-between align-items-center">
                        <div>
                            <button type="button" class="btn btn-outline-secondary" onclick="resetForm()">
                                <i class="fas fa-undo"></i> Annuler les modifications
                            </button>
                        </div>
                        <div>
                            <button type="submit" name="action" value="draft" class="btn btn-outline-warning me-2">
                                <i class="fas fa-save"></i> Sauvegarder en brouillon
                            </button>
                            <button type="submit" name="action" value="publish" class="btn btn-primary">
                                <i class="fas fa-check"></i> Mettre à jour et publier
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <!-- Actions rapides -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-bolt me-2"></i>Actions Rapides
                </h6>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <!-- Basculer le statut -->
                    <form action="{{ route('admin.articles.toggle-status', $article) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn {{ $article->actif ? 'btn-warning' : 'btn-success' }} w-100">
                            <i class="fas {{ $article->actif ? 'fa-eye-slash' : 'fa-eye' }}"></i>
                            {{ $article->actif ? 'Masquer l\'article' : 'Publier l\'article' }}
                        </button>
                    </form>

                    <!-- Basculer article vedette -->
                    <form action="{{ route('admin.articles.toggle-featured', $article) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn {{ $article->featured ? 'btn-outline-warning' : 'btn-warning' }} w-100">
                            <i class="fas fa-star"></i>
                            {{ $article->featured ? 'Retirer de la vedette' : 'Mettre en vedette' }}
                        </button>
                    </form>

                    <!-- Dupliquer l'article -->
                    <button type="button" class="btn btn-outline-info w-100" onclick="duplicateArticle()">
                        <i class="fas fa-copy"></i>
                        Dupliquer cet article
                    </button>

                    <!-- Supprimer l'article -->
                    <button type="button" class="btn btn-outline-danger w-100" onclick="confirmDelete()">
                        <i class="fas fa-trash"></i>
                        Supprimer l'article
                    </button>
                </div>
            </div>
        </div>

        <!-- Options de publication -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-cog me-2"></i>Options de Publication
                </h6>
            </div>
            <div class="card-body">
                <!-- Secteur d'activité -->
                <div class="form-group mb-3">
                    <label for="secteur_activite" class="form-label font-weight-bold">Secteur d'Activité</label>
                    <select class="form-control @error('secteur_activite') is-invalid @enderror" 
                            id="secteur_activite" name="secteur_activite" form="article-form">
                        <option value="">Sélectionner un secteur</option>
                        @foreach($secteurs as $key => $secteur)
                            <option value="{{ $key }}" {{ old('secteur_activite', $article->secteur_activite) == $key ? 'selected' : '' }}>
                                {{ $secteur }}
                            </option>
                        @endforeach
                    </select>
                    @error('secteur_activite')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Date de publication -->
                <div class="form-group mb-3">
                    <label for="date_publication" class="form-label font-weight-bold">Date de Publication</label>
                    <input type="datetime-local" class="form-control @error('date_publication') is-invalid @enderror" 
                           id="date_publication" name="date_publication" 
                           value="{{ old('date_publication', $article->date_publication ? $article->date_publication->format('Y-m-d\TH:i') : '') }}" 
                           form="article-form">
                    <small class="form-text text-muted">Modifiez pour reprogrammer la publication.</small>
                    @error('date_publication')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Statut -->
                <div class="form-group mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="actif" name="actif" value="1" 
                               {{ old('actif', $article->actif) ? 'checked' : '' }} form="article-form">
                        <label class="form-check-label font-weight-bold" for="actif">
                            Article publié
                        </label>
                    </div>
                    <small class="form-text text-muted">Décochez pour mettre en brouillon.</small>
                </div>

                <!-- Article en vedette -->
                <div class="form-group mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="featured" name="featured" value="1" 
                               {{ old('featured', $article->featured) ? 'checked' : '' }} form="article-form">
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
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-search me-2"></i>Optimisation SEO
                </h6>
            </div>
            <div class="card-body">
                <!-- Meta description -->
                <div class="form-group mb-3">
                    <label for="meta_description" class="form-label font-weight-bold">Meta Description</label>
                    <textarea class="form-control @error('meta_description') is-invalid @enderror" 
                              id="meta_description" name="meta_description" rows="3" 
                              maxlength="160" form="article-form">{{ old('meta_description', $article->meta_description) }}</textarea>
                    <small class="form-text text-muted">Description pour les moteurs de recherche (max 160 caractères).</small>
                    @error('meta_description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Meta keywords -->
                <div class="form-group mb-3">
                    <label for="meta_keywords" class="form-label font-weight-bold">Mots-clés SEO</label>
                    <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror" 
                           id="meta_keywords" name="meta_keywords" 
                           value="{{ old('meta_keywords', $article->meta_keywords) }}" 
                           placeholder="mot-clé1, mot-clé2, mot-clé3" form="article-form">
                    <small class="form-text text-muted">Mots-clés séparés par des virgules.</small>
                    @error('meta_keywords')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Statistiques -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-chart-bar me-2"></i>Statistiques
                </h6>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-6">
                        <div class="border-end">
                            <div class="h5 mb-1">{{ str_word_count(strip_tags($article->contenu)) }}</div>
                            <div class="small text-muted">Mots</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="h5 mb-1">{{ ceil(str_word_count(strip_tags($article->contenu)) / 200) }}</div>
                        <div class="small text-muted">Min lecture</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation de suppression -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmer la suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>Attention !</strong> Cette action est irréversible.
                </div>
                <p>Êtes-vous sûr de vouloir supprimer l'article <strong>"{{ $article->titre }}"</strong> ?</p>
                <p>Toutes les données associées seront définitivement perdues.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash me-1"></i> Supprimer définitivement
                    </button>
                </form>
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

    // Gérer les actions de soumission
    const form = document.getElementById('article-form');
    const actifCheckbox = document.getElementById('actif');
    
    form.addEventListener('submit', function(e) {
        const action = e.submitter.value;
        
        if (action === 'draft') {
            actifCheckbox.checked = false;
        } else if (action === 'publish') {
            actifCheckbox.checked = true;
        }
    });
});

// Aperçu de l'image
function previewImage(input) {
    const preview = document.getElementById('image-preview');
    const previewImg = document.getElementById('preview-img');
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            previewImg.src = e.target.result;
            preview.style.display = 'block';
        };
        
        reader.readAsDataURL(input.files[0]);
    } else {
        preview.style.display = 'none';
    }
}

// Supprimer l'image actuelle
function removeCurrentImage() {
    if (confirm('Êtes-vous sûr de vouloir supprimer l\'image actuelle ?')) {
        document.querySelector('.current-image').style.display = 'none';
        // Vous pouvez ajouter un champ caché pour indiquer la suppression
        const form = document.getElementById('article-form');
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'remove_image';
        input.value = '1';
        form.appendChild(input);
    }
}

// Réinitialiser le formulaire
function resetForm() {
    if (confirm('Êtes-vous sûr de vouloir annuler toutes les modifications ?')) {
        location.reload();
    }
}

// Confirmer la suppression
function confirmDelete() {
    const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
    modal.show();
}

// Dupliquer l'article
function duplicateArticle() {
    if (confirm('Voulez-vous créer une copie de cet article ?')) {
        // Créer un formulaire temporaire pour dupliquer
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '{{ route("admin.articles.store") }}';
        
        // Ajouter le token CSRF
        const csrfToken = document.createElement('input');
        csrfToken.type = 'hidden';
        csrfToken.name = '_token';
        csrfToken.value = '{{ csrf_token() }}';
        form.appendChild(csrfToken);
        
        // Ajouter les données de l'article
        const fields = ['titre', 'description_courte', 'secteur_activite', 'hashtags', 'meta_description', 'meta_keywords'];
        
        fields.forEach(field => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = field;
            
            if (field === 'titre') {
                input.value = 'Copie de {{ $article->titre }}';
            } else if (field === 'hashtags') {
                input.value = '{{ $article->hashtags ? implode(", ", $article->hashtags) : "" }}';
            } else {
                const originalField = document.querySelector(`[name="${field}"]`);
                input.value = originalField ? originalField.value : '';
            }
            
            form.appendChild(input);
        });
        
        // Ajouter le contenu
        const contenuInput = document.createElement('textarea');
        contenuInput.name = 'contenu';
        contenuInput.value = CKEDITOR.instances.contenu.getData();
        contenuInput.style.display = 'none';
        form.appendChild(contenuInput);
        
        document.body.appendChild(form);
        form.submit();
    }
}

// Auto-save (optionnel)
let autoSaveTimeout;
function autoSave() {
    clearTimeout(autoSaveTimeout);
    autoSaveTimeout = setTimeout(() => {
        // Implémenter l'auto-save si nécessaire
        console.log('Auto-save triggered');
    }, 30000); // 30 secondes
}

// Déclencher auto-save sur les changements
document.addEventListener('input', autoSave);
if (typeof CKEDITOR !== 'undefined') {
    CKEDITOR.on('instanceReady', function(evt) {
        evt.editor.on('change', autoSave);
    });
}
</script>
@endpush
@endsection