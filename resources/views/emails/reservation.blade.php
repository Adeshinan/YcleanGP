<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la Réservation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f7f7f7;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        .booking-details {
            margin-top: 20px;
        }

        .booking-details p {
            margin: 5px 0;
        }

        .extras,
        .service {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        @php
        $date = Carbon\Carbon::parse($reservation->date_visite)->format('d/m/Y à H:i');
        @endphp
        <h5>Salut Yclean,</h5>
        <p>La réservation suivante a été ajoutée par {{$reservation->user->name}} pour le
            {{$date }}. Veuillez vous assurer
            qu'une équipe soit promptement assignée, qu'une retenue soit placée sur le compte du client et qu'un email
            de confirmation soit envoyé au client.</p>
        <h1>Détails de la Réservation</h1>
        <div class="booking-details">
            <p><strong>Nom:</strong> {{$reservation->user->name}}</p>
            <p><strong>Téléphone:</strong> {{$reservation->user->numero}}</p>
            <p><strong>Email:</strong> {{$reservation->user->email}}</p>
            <p><strong>Adresse:</strong>
                @if ($reservation->pour_qui == 1)

                {{$reservation->user->address}}, {{$reservation->user->ville}},
                {{$reservation->user->postal}}
                @else

                {{$reservation->address}}, {{$reservation->ville}},
                {{$reservation->code}}

                @endif
            </p>

            <p><strong>Date/Heure:</strong> {{ $date }}</p>
            <p><strong>Fréquence:</strong>{{$reservation->nbre_fois}} </p>

            <div class="service">
                <p><strong>Service:</strong> {{$reservation->service->libelle}}</p>


                @foreach ($parametre as $item)
                @php
                $quantity = 0;
                if ($item->libelle == 'chambre') {
                $quantity = $reservation->chambre;
                } elseif ($item->libelle == 'salon') {
                $quantity = $reservation->salon;
                } elseif ($item->libelle == 'cuisine') {
                $quantity = $reservation->cuisine;
                } elseif ($item->libelle == 'salle_bain') {
                $quantity = $reservation->salle_bain;
                } elseif ($item->libelle == 'salle_eau') {
                $quantity = $reservation->salle_eau;
                } elseif ($item->libelle == 'buanderie') {
                $quantity = $reservation->buanderie;
                } elseif ($item->libelle == 'entre_couloir') {
                $quantity = $reservation->entre_couloir;
                } elseif ($item->libelle == 'escalier') {
                $quantity = $reservation->escalier;
                }


                @endphp

                @if ($quantity > 0)

                <li>{{ $quantity }} x {{$item->libelle}}</li>
                @endif

                @endforeach

                </ul>
            </div>


            <div class="extras">
                <p><strong>Extras:</strong></p>
                @php
                $reservationExtras = json_decode($reservation->extra, true);
                $totalExtraPrice = 0;
                @endphp
                <ul>


                    @foreach ($extra as $item)
                    @if (in_array($item->id, $reservationExtras))


                    <li>{{$item->libelle}}</li>
                    @endif

                    @endforeach
                </ul>
            </div>
            @if ($service->est_agent == 1)
            <p><strong>Durée:</strong> {{$reservation->heure_session}} H</p>

            @endif

            @if ($service->est_agent == 1)
            <p><strong>Nombre d'agent:</strong> {{$reservation->nbre_personne}} Agent</p>
            @endif

            <p><strong>Coupon:</strong>@if ($coupon)
                Appliqué
            @else
                Non appliqué
            @endif
                 </p>

            <p><strong>Prix:</strong> $ {{$reservation->prixTotal}} CAD</p>
            <p><strong>Méthode de paiement:</strong> @if ($reservation->type_paiement == 1)
                Carte Bancaire
                @else
                Espèce
                @endif</p>
            <p><strong>Instructions spéciales:</strong> {{$reservation->instruction}}</p>
            <p><strong>Information de stationnement:</strong> {{$reservation->station}}</p>
            <p><strong>Comment accéderons-nous à la propriété?</strong> {{$reservation->propriete}}</p>
        </div>
    </div>
</body>

</html>