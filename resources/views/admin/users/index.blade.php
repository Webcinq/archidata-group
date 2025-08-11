{{-- resources/views/admin/users/index.blade.php --}}
@extends('admin.layouts.app')

@section('title', 'Gestion des Utilisateurs')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gestion des Utilisateurs</h1>
</div>

<!-- Table des utilisateurs -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Liste des Utilisateurs</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in">
                <div class="dropdown-header">Actions:</div>
                <a class="dropdown-item" href="#">Exporter la liste</a>
                <a class="dropdown-item" href="#">Statistiques</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Avatar</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Statut</th>
                        <th>Articles</th>
                        <th>Inscrit le</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                    <tr>
                        <td>
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=0B2154&color=fff&size=40" 
                                 class="rounded-circle" width="40" height="40">
                        </td>
                        <td>
                            <div class="text-dark font-weight-bold">{{ $user->name }}</div>
                            @if($user->email_verified_at)
                                <small class="text-success"><i class="fas fa-check-circle"></i> Vérifié</small>
                            @else
                                <small class="text-warning"><i class="fas fa-exclamation-circle"></i> Non vérifié</small>
                            @endif
                        </td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="{{ route('admin.users.update-role', $user) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <select name="role" class="form-select form-select-sm" onchange="this.form.submit()" 
                                        {{ $user->id === auth()->id() ? 'disabled' : '' }}>
                                    <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>Utilisateur</option>
                                    <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Administrateur</option>
                                </select>
                            </form>
                            @if($user->id === auth()->id())
                                <small class="text-muted d-block">Vous</small>
                            @endif
                        </td>
                        <td>
                            @if($user->id !== auth()->id())
                                <form action="{{ route('admin.users.toggle-status', $user) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-sm {{ $user->actif ? 'btn-success' : 'btn-danger' }}">
                                        {{ $user->actif ? 'Actif' : 'Inactif' }}
                                    </button>
                                </form>
                            @else
                                <span class="badge badge-success">Actif</span>
                            @endif
                        </td>
                        <td>
                            <span class="badge badge-info">{{ $user->articles()->count() }}</span>
                        </td>
                        <td>{{ $user->created_at->format('d/m/Y') }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                @if($user->articles()->count() > 0)
                                    <a href="{{ route('admin.articles.index') }}?author={{ $user->id }}" 
                                       class="btn btn-sm btn-outline-primary" title="Voir les articles">
                                        <i class="fas fa-newspaper"></i>
                                    </a>
                                @endif
                                
                                @if($user->id !== auth()->id())
                                    <button type="button" class="btn btn-sm btn-outline-danger" 
                                            onclick="confirmDelete({{ $user->id }})" title="Supprimer">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center py-4">
                            <div class="text-muted">
                                <i class="fas fa-users fa-3x mb-3"></i>
                                <p>Aucun utilisateur trouvé.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        @if($users->hasPages())
            <div class="d-flex justify-content-center">
                {{ $users->links() }}
            </div>
        @endif
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
                Êtes-vous sûr de vouloir supprimer cet utilisateur ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <form id="deleteForm" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function confirmDelete(userId) {
    const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const form = document.getElementById('deleteForm');
    form.action = `/admin/users/${userId}`;
    modal.show();
}
</script>
@endpush
@endsection