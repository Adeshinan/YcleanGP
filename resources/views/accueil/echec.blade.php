<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Échec de Paiement</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
         body {
            background-color: #deeaf7;
        }
        .failure-container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
   
        
        .failure-image {
            max-width: 100px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="failure-container">
            <img src="https://via.placeholder.com/100?text=X" alt="Échec" class="failure-image">
            <h1 class="mt-4">Échec de Paiement</h1>
            <p class="lead mt-4">Désolé, votre paiement n'a pas pu être traité.</p>
            <p>Veuillez vérifier vos informations de paiement et réessayer. Si le problème persiste, contactez notre support client.</p>
            <a href="{{ Auth::check() ? route('dashboard') : '/' }}" class="btn btn-danger mt-4">Retour à l'accueil</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
