<!DOCTYPE html>
<html>
<head>
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .info-row {
            margin: 10px 0;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .label {
            font-weight: bold;
            color: #555;
            min-width: 120px;
            display: inline-block;
        }
        .message-content {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin-top: 15px;
            border-left: 4px solid #007bff;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Nouveau message de contact</h1>
        <p>Vous avez reçu un nouveau message via le formulaire de contact du site web.</p>
    </div>

    <div class="info-row">
        <span class="label">Nom :</span>
        {{ $details['name'] }}
    </div>

    <div class="info-row">
        <span class="label">Email :</span>
        <a href="mailto:{{ $details['email'] }}">{{ $details['email'] }}</a>
    </div>

    @if(!empty($details['phone']))
    <div class="info-row">
        <span class="label">Téléphone :</span>
        {{ $details['phone'] }}
    </div>
    @endif

    @if(!empty($details['project_type']))
    <div class="info-row">
        <span class="label">Type de projet :</span>
        {{ $details['project_type'] }}
    </div>
    @endif

    <div class="info-row">
        <span class="label">Message :</span>
    </div>
    
    <div class="message-content">
        {!! nl2br(e($details['message'])) !!}
    </div>

    <hr style="margin: 30px 0; border: none; border-top: 1px solid #ddd;">
    
    <p style="font-size: 12px; color: #666;">
        <em>Ce message a été envoyé via le formulaire de contact du site web le {{ date('d/m/Y à H:i') }}.</em>
    </p>
</body>
</html>