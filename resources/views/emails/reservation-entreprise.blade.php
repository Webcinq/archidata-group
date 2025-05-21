<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouvelle Réservation</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #124698; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background-color: #f9f9f9; }
        .info-row { margin-bottom: 10px; }
        .label { font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Nouvelle Réservation de Service</h2>
        </div>
        <div class="content">
            <h3>Détails de la réservation :</h3>
            
            <div class="info-row">
                <span class="label">Client :</span> {{ $reservation->nom }}
            </div>
            
            <div class="info-row">
                <span class="label">Email :</span> {{ $reservation->email }}
            </div>
            
            <div class="info-row">
                <span class="label">Service demandé :</span> {{ $reservation->service }}
            </div>
            
            <div class="info-row">
                <span class="label">Date souhaitée :</span> {{ $reservation->date_service->format('d/m/Y') }}
            </div>
            
            <div class="info-row">
                <span class="label">Statut :</span> {{ $reservation->statut_formatted }}
            </div>
            
            @if($reservation->demande_speciale)
            <div class="info-row">
                <span class="label">Demande spéciale :</span><br>
                {{ $reservation->demande_speciale }}
            </div>
            @endif
            
            <div class="info-row">
                <span class="label">Date de la demande :</span> {{ $reservation->created_at->format('d/m/Y à H:i') }}
            </div>
            
            <p style="margin-top: 20px;">
                <a href="{{ url('/admin/reservations') }}" style="background-color: #124698; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
                    Gérer cette réservation
                </a>
            </p>
        </div>
    </div>
</body>
</html>