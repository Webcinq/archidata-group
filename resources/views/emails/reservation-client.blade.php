<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Confirmation de Réservation</title>
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
            <h2>Confirmation de votre réservation</h2>
            <p>Archidata Groupe</p>
        </div>
        <div class="content">
            <p>Bonjour {{ $reservation->nom }},</p>
            
            <p>Nous avons bien reçu votre demande de réservation. Voici un récapitulatif :</p>
            
            <div class="info-row">
                <span class="label">Service demandé :</span> {{ $reservation->service }}
            </div>
            
            <div class="info-row">
                <span class="label">Date souhaitée :</span> {{ $reservation->date_service->format('d/m/Y') }}
            </div>
            
            @if($reservation->demande_speciale)
            <div class="info-row">
                <span class="label">Votre demande spéciale :</span><br>
                {{ $reservation->demande_speciale }}
            </div>
            @endif
            
            <div class="info-row">
                <span class="label">Numéro de réservation :</span> #{{ $reservation->id }}
            </div>
            
            <p>Notre équipe va examiner votre demande et vous contactera dans les plus brefs délais pour confirmer les détails de votre réservation.</p>
            
            <p>Si vous avez des questions, n'hésitez pas à nous contacter.</p>
            
            <p>Cordialement,<br>
            L'équipe Archidata Groupe</p>
        </div>
    </div>
</body>
</html>