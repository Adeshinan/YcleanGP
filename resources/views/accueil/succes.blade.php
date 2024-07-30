<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succès de Paiement</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #deeaf7;
        }

        .success-container {
            max-width: 700px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .success-image {
            max-width: 70%;
            height: auto;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="success-container text-center">
            <img src="Admin/assets/images/verification-img.png" alt="Succès" class="success-image">
           
            <h1 class="mt-4">Paiement Réussi</h1>
            <p class="lead mt-4">Nous vous remercions d'avoir choisi notre service d'entretien ménager. Votre réservation a bien été enregistrée.
                Nous sommes impatients de vous offrir un environnement propre et agréable. Si vous avez des questions ou des demandes spécifiques, n'hésitez pas à nous contacter à <a href="mailo">info@yclean.ca</a> . Nous sommes là pour vous servir !</p>
            <p>Vous recevrez un email de confirmation avec les détails de votre transaction.</p>
            <a href="{{ Auth::check() ? route('dashboard') : '/' }}" class="btn btn-success mt-4">Retour à l'accueil</a>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>