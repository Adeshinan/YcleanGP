<!DOCTYPE html>
<html>
<head>
    <title>Détails de votre réservation</title>
</head>
<body>
    <h1>Détails de votre réservation</h1>
    <p>Service: {{ $reservation->service_id }}</p>
    <p>Date de visite: {{ $reservation->date_visite }}</p>
    <!-- Ajoutez d'autres détails de la réservation ici -->
</body>
</html>
