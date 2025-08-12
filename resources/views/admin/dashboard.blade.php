{{-- resources/views/admin/dashboard.blade.php --}}
@extends('admin.layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container-fluid">
    <!-- Header -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    
    </div>

    <!-- Cards de statistiques -->
    <div class="row">
        <!-- Articles Total -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Articles Total
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['articles_total'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Articles Publiés -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Articles Publiés
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['articles_publies'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Réservations En Attente -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Réservations En Attente
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['reservations_en_attente'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Utilisateurs Total -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Utilisateurs
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['utilisateurs_total'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Graphique des statistiques -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Évolution (6 derniers mois)</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Secteurs d'activité -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Articles par Secteur</h6>
                </div>
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        @foreach($secteurs_stats as $secteur)
                            <span class="mr-2">
                                <i class="fas fa-circle text-primary"></i> {{ ucfirst($secteur->secteur_activite) }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Articles récents -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Articles Récents</h6>
                </div>
                <div class="card-body">
                    @forelse($articles_recents as $article)
                        <div class="d-flex align-items-center border-bottom py-2">
                            <div class="mr-3">
                                @if($article->image)
                                    <img src="{{ $article->image_url }}" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                                @else
                                    <div class="bg-primary text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-radius: 0.25rem;">
                                        <i class="fas fa-newspaper"></i>
                                    </div>
                                @endif
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">{{ Str::limit($article->titre, 60) }}</h6>
                                <small class="text-muted">
                                    Par {{ $article->user->name }} • {{ $article->created_at->diffForHumans() }}
                                    @if($article->actif)
                                        <span class="badge badge-success ml-1">Publié</span>
                                    @else
                                        <span class="badge badge-warning ml-1">Brouillon</span>
                                    @endif
                                </small>
                            </div>
                        </div>
                    @empty
                        <p class="text-muted">Aucun article récent.</p>
                    @endforelse
                    <div class="text-center mt-3">
                        <a href="{{ route('admin.articles.index') }}" class="btn btn-sm btn-primary">Voir tous les articles</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Réservations récentes -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Réservations Récentes</h6>
                </div>
                <div class="card-body">
                    @forelse($reservations_recentes as $reservation)
                        <div class="d-flex align-items-center border-bottom py-2">
                            <div class="mr-3">
                                <div class="bg-info text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%;">
                                    <i class="fas fa-calendar"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">{{ $reservation->nom }}</h6>
                                <small class="text-muted">
                                    {{ $reservation->service }} • {{ $reservation->created_at->diffForHumans() }}
                                    @if($reservation->statut == 'en_attente')
                                        <span class="badge badge-warning ml-1">En attente</span>
                                    @elseif($reservation->statut == 'confirmee')
                                        <span class="badge badge-success ml-1">Confirmée</span>
                                    @else
                                        <span class="badge badge-danger ml-1">Annulée</span>
                                    @endif
                                </small>
                            </div>
                        </div>
                    @empty
                        <p class="text-muted">Aucune réservation récente.</p>
                    @endforelse
                    <div class="text-center mt-3">
                        <a href="{{ route('admin.reservations.index') }}" class="btn btn-sm btn-primary">Voir toutes les réservations</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Graphique en aires pour l'évolution
const ctx = document.getElementById('myAreaChart');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: @json(array_column($mois_stats, 'mois')),
        datasets: [{
            label: 'Articles',
            data: @json(array_column($mois_stats, 'articles')),
            borderColor: 'rgb(75, 192, 192)',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            tension: 0.1
        }, {
            label: 'Réservations',
            data: @json(array_column($mois_stats, 'reservations')),
            borderColor: 'rgb(255, 99, 132)',
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            tension: 0.1
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Graphique en secteurs pour les secteurs d'activité
const ctx2 = document.getElementById('myPieChart');
new Chart(ctx2, {
    type: 'pie',
    data: {
        labels: @json($secteurs_stats->pluck('secteur_activite')),
        datasets: [{
            data: @json($secteurs_stats->pluck('count')),
            backgroundColor: [
                '#FF6384',
                '#36A2EB',
                '#FFCE56',
                '#4BC0C0',
                '#9966FF',
                '#FF9F40',
                '#FF6384',
                '#C9CBCF'
            ]
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
    }
});
</script>
@endpush
@endsection