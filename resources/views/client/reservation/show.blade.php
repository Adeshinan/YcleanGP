@extends('layouts.admin')
<base href="{{asset('Admin')}}">
@section('contenu')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{$page}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Reservation</a></li>
                                <li class="breadcrumb-item active">{{$page}}</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row justify-content-center">
                <div class="col-xxl-9">
                    <div class="card" id="demo">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-header border-bottom-dashed p-4">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <img src="Admin/assets/images/logo-dark.png"
                                                class="card-logo card-logo-dark" alt="logo dark" height="17">
                                            <img src="Admin/assets/images/logo-light.png"
                                                class="card-logo card-logo-light" alt="logo light" height="17">
                                            <div class="mt-sm-5 mt-4">
                                                <h6 class="text-muted text-uppercase fw-semibold">Adresse </h6>
                                                @if ($reservation->pour_qui == 1)

                                                <p class="text-muted mb-1" id="address-details">
                                                    {{$reservation->user->address}}</p>
                                                <p class="text-muted mb-0" id="zip-code"><span>Code
                                                        postal : </span>{{$reservation->user->postal}}</p>
                                                @else
                                                <p class="text-muted mb-1" id="address-details">
                                                    {{$reservation->address}}</p>
                                                <p class="text-muted mb-0" id="zip-code"><span>Code
                                                        postal : </span>{{$reservation->code}}</p>
                                                <p class="text-muted mb-0" id="zip-code"><span>Ville :
                                                    </span>{{$reservation->ville}}</p>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 mt-sm-0 mt-3">

                                            <h6><span class="text-muted fw-normal">Email: </span><span
                                                    id="email">{{$reservation->user->email}}</span></h6>
                                            <h6 class="mb-0"><span class="text-muted fw-normal">Numéro de contact:
                                                </span><span id="contact-no"> {{$reservation->user->numero}}</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-header-->
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <div class="card-body p-4">
                                    <div class="row g-3">
                                        <div class="col-lg-3 col-6">
                                            <p class="text-muted mb-2 text-uppercase fw-semibold">Service</p>
                                            <h5 class="fs-14 mb-0"><span
                                                    id="invoice-no">{{$reservation->service->libelle}}</span></h5>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3 col-6">
                                            <p class="text-muted mb-2 text-uppercase fw-semibold">Date et l'heure</p>
                                            <h5 class="fs-14 mb-0"><span
                                                    id="invoice-date">{{$reservation->formatted_date_visite =
                                                    Carbon\Carbon::parse($reservation->date_visite)->translatedFormat('d
                                                    F Y à H\h:i\m'); }}</span> </h5>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3 col-6">
                                            <p class="text-muted mb-2 text-uppercase fw-semibold">Statut du paiement</p>
                                            <span class="badge bg-success-subtle text-success fs-11"
                                                id="payment-status">Payé</span>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3 col-6">
                                            <p class="text-muted mb-2 text-uppercase fw-semibold">Montant Total</p>
                                            <h5 class="fs-14 mb-0">$<span id="total-amount">{{$reservation->prixTotal}}
                                                    CAD</span></h5>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end card-body-->
                            </div>

                            <div class="row">
                                <div class="col-6 mt-sm-5 mt-4 mr-3">
                                    <h3>Prochaines sessions</h3>
                                    <ul id="sessions">
                                        @foreach ($next_sessions as $session)

                                        <li> {{$reservation->formatted_date_session =
                                            Carbon\Carbon::parse($session)->translatedFormat('d
                                            F Y à H\h:i\m'); }}</li>
                                        @endforeach
                                        {{$next_sessions->links()}}
                                    </ul>
                                </div>

                                <div class="col-6 mt-sm-5 mt-4 ml-3">
                                    <h3>Autre information</h3>

                                    <ul id="sessions">


                                        <li>
                                            <h4>Instruction spéciale : </h4>{{$reservation->instruction}}
                                        </li>
                                        <li>
                                            <h4>Information sur le stationnement : </h4>
                                            @if ($reservation->station = '0')
                                            J'ai pas un stationnement
                                            @else
                                            J'ai un stationnement
                                            @endif
                                           
                                        </li>
                                        <li>
                                            <h4>Comment accéderons-nous à la propriété : </h4>
                                            {{$reservation->propriete}}
                                        </li>

                                    </ul>
                                </div>
                            </div>


                            <!--end col-->

                            <!--end col-->
                            <div class="col-lg-12">
                                <div class="card-body p-4">
                                    <div class="table-responsive">
                                        <table
                                            class="table table-borderless text-center table-nowrap align-middle mb-0">
                                            <thead>
                                                <tr class="table-active">

                                                    <th scope="col"> Détails de la reservation</th>
                                                    <th scope="col">Taux ou prix unitaire</th>
                                                    <th scope="col">Quantité</th>
                                                    <th scope="col" class="text-end">Prix</th>
                                                </tr>
                                            </thead>
                                            <tbody id="products-list">
                                                <tr>

                                                    <td class="text-start">
                                                        <span
                                                            class="fw-medium">{{$reservation->service->libelle}}</span>

                                                    </td>
                                                    <td>{{$reservation->service->prixhors}}</td>
                                                    <td></td>
                                                    <td class="text-end">${{$reservation->service->prixhors}} CAD</td>
                                                </tr>
                                                @php
                                                $reservationExtras = json_decode($reservation->extra, true);
                                                $totalExtraPrice = 0;
                                                @endphp

                                                @foreach ($extra as $item)
                                                @if (in_array($item->id, $reservationExtras))

                                                @php
                                                // Vérifier si l'extra de l'item est dans la liste des extras de la

                                                $isInReservation = in_array($item->id, $reservationExtras);

                                                // Ajouter le prix de l'item au total si c'est dans la réservation
                                                if ($isInReservation) {
                                                $totalExtraPrice += $item->prix;
                                                }
                                                @endphp

                                                <tr>

                                                    <td class="text-start">
                                                        <span class="fw-medium">{{$item->libelle}}</span>

                                                    </td>
                                                    <td>{{$item->prix}}</td>
                                                    <td></td>
                                                    <td class="text-end">${{$item->prix}} CAD</td>
                                                </tr>

                                                @else
                                                <!-- Code pour le cas où l'élément n'existe pas dans la liste de reservation extras -->
                                                @endif
                                                @php
                                                $prixExtra = 0;

                                                $prixExtra = $prixExtra + $item->prix
                                                @endphp
                                                @endforeach



                                                @php
                                                $prixparametre = 0;
                                                @endphp
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

                                                $itemTotalPrice = $item->prix * $quantity;
                                                $prixparametre += $itemTotalPrice;
                                                @endphp

                                                @if ($quantity > 0)
                                                <tr>
                                                    <td class="text-start">
                                                        <span class="fw-medium">{{$item->libelle}}</span>

                                                    </td>
                                                    <td>{{$item->prix}}</td>
                                                    <td>{{ $quantity }}</td>
                                                    <td class="text-end">${{ $item->prix * $quantity }} CAD</td>
                                                </tr>
                                                @endif
                                                @endforeach

                                                @if ($service->est_agent == 1)
                                                <tr>

                                                    <td class="text-start">
                                                        <span class="fw-medium">{{$reservation->nbre_personne}} Agent et
                                                            {{$reservation->heure_session}} heures</span>

                                                    </td>
                                                    <td>{{$service->pourcentage}} %</td>
                                                    <td></td>
                                                    @if ($reservation->nbre_personne = $service->agent &&
                                                    $reservation->heure_session = $service->heure)
                                                    @php
                                                    $reduit = $service->prixhors * ($service->pourcentage / 100);
                                                    $prix = $service->prixhors - $reduit;
                                                    @endphp
                                                    <td class="text-end">${{$prix}} CAD</td>
                                                    @else
                                                    <td class="text-end">${{$service->prixhors}} CAD</td>
                                                    @endif

                                                </tr>
                                                @else

                                                @endif


                                                @foreach ($taux as $tauxItem)
                                                @if($tauxItem->libelle == $reservation->nbre_fois)

                                                @php
                                                $prixHT = 0;
                                                $rabais = 0;
                                                @endphp

                                                <tr>
                                                    <td class="text-start">
                                                        @if ( $tauxItem->libelle )

                                                        <span class="fw-medium">Rabais </span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $tauxItem->pourcentage }} %</td>
                                                    <td></td>
                                                    @php
                                                    if ($service->est_agent == 1) {
                                                    if ($reservation->nbre_personne == $service->agent &&
                                                    $reservation->heure_session == $service->heure) {

                                                    $prixHT = $prixparametre + $totalExtraPrice + $prix;
                                                    } else {
                                                    $prixHT = $prixparametre + $totalExtraPrice + $service->prixhors;
                                                    }
                                                    $rabais = $prixHT * ($tauxItem->pourcentage / 100);
                                                    }else{

                                                    $prixHT = $prixparametre + $totalExtraPrice + $service->prixhors;
                                                    $rabais = $prixHT * ($tauxItem->pourcentage / 100);

                                                    $couponreduit = $prixHT - $rabais ;
                                                    }
                                                    @endphp
                                                    <td class="text-end">- ${{$rabais}} CAD</td>
                                                </tr>


                                                @else

                                                @endif
                                                @endforeach

                                                @if ( $coupon )
                                                <tr>
                                                    <td class="text-start">


                                                        <span class="fw-medium">Coupon de reduction </span>

                                                    </td>

                                                    <td>{{ $coupon->pourcentage }} %</td>
                                                    <td></td>
                                                    @php
                                                    $couponprix = $couponreduit * ($coupon->pourcentage / 100);
                                                    @endphp
                                                    <td class="text-end"> - {{ $couponprix }} CAD</td>
                                                </tr>

                                                @endif
                                            </tbody>
                                        </table>
                                        <!--end table-->
                                    </div>
                                    <div class="border-top border-top-dashed mt-2">
                                        <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto"
                                            style="width:250px">
                                            <tbody>
                                                <tr>

                                                    <td>PrixHT</td>
                                                    <td class="text-end">
                                                        @if ($service->est_agent == 1)


                                                        @if ($reservation->nbre_personne == $service->agent &&
                                                        $reservation->heure_session == $service->heure)
                                                        @if ($coupon)
                                                        @php
                                                        $prixHT = $prixparametre + $totalExtraPrice + $prix - $rabais - $couponprix;
                                                        @endphp
                                                        ${{ $prixHT}} CAD
                                                        @else

                                                        @php
                                                        $prixHT = $prixparametre + $totalExtraPrice + $prix - $rabais ;
                                                        @endphp
                                                        ${{ $prixHT}} CAD
                                                        @endif

                                                        @else

                                                            @if ($coupon)
                                                            @php
                                                            $prixHT = $prixparametre + $totalExtraPrice + $service->prixhors - $rabais - $couponprix;
                                                            @endphp
                                                            ${{ $prixHT}} CAD
                                                            @else
                                                            @php
                                                            $prixHT = $prixparametre + $totalExtraPrice + $service->prixhors - $rabais ;
                                                            @endphp
                                                            ${{ $prixHT}} CAD
                                                            @endif
                                                       
                                                        @endif

                                                        @else

                                                            @if ($coupon)
                                                            @php
                                                            $prixHT = $prixparametre + $totalExtraPrice + $service->prixhors - $rabais - $couponprix;
                                                            @endphp
                                                            ${{ $prixHT}} CAD
                                                            @else
                                                            @php
                                                            $prixHT = $prixparametre + $totalExtraPrice + $service->prixhors - $rabais ;
                                                            @endphp
                                                            ${{ $prixHT}} CAD
                                                            @endif
                                                      

                                                        @endif

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>TPS/TVQ</td>
                                                    @php
                                                    $taux = $tps + $tvq ;
                                                    $prixTaxe = $prixHT * ( $taux / 100);
                                                    @endphp
                                                    <td class="text-end">${{$prixTaxe}} CAD</td>
                                                </tr>

                                                <tr class="border-top border-top-dashed fs-15">
                                                    <th scope="row">PrixTTC</th>
                                                    @php
                                                    $prixTTC = $prixHT + $prixTaxe
                                                    @endphp
                                                    <th class="text-end">${{$prixTTC}} CAD</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--end table-->
                                    </div>
                                    <div class="row">

                                        <div class="col-6 mt-3">
                                            <h6 class="text-muted text-uppercase fw-semibold mb-3"> Details du paiement:
                                            </h6>
                                            <p class="text-muted mb-1"> Methode de paiement: <span class="fw-medium"
                                                    id="payment-method" style="font-weight: bold">
                                                    @if($reservation->type_paiement == 1)
                                                    Carte Bancaire
                                                    @else
                                                    Espèce
                                                    @endif</span></p>
                                            <p class="text-muted">Total payé: <span class="fw-medium" id="">$
                                                </span><span id="card-total-amount">{{$prixTTC}} CAD</span></p>
                                        </div>

                                        @if($reservation->type_paiement == 1)
                                        <div class="col-6 mt-3">
                                            <img src="{{asset('Admin/assets/img/payer.jpg')}}" alt="" height="100">
                                        </div>
                                        @endif

                                    </div>


                                    <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                        @if($reservation->valider == 1)
                                        <a href="{{route('reservation.facture',$reservation->id)}} "
                                            class="btn btn-primary"> <i class="ri-file-ppt-2-line"></i> Télécharger la
                                            facture</a>
                                        @endif
                                        @if(Auth::user()->type_connecter == 'admin' && $reservation->valider == 0)
                                        <a href="{{route('reservation.valider',$reservation->id)}} "
                                            class="btn btn-primary"><i class="ri-checkbox-circle-line"></i> Valider la
                                            reservation</a>
                                        @endif
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div><!-- container-fluid -->
    </div><!-- End Page-content -->

    @include('layouts.footer')
</div><!-- end main content-->

</div>


@endsection

<script>
    // Fonction pour récupérer les prochaines sessions via AJAX
    function fetchNextSessions() {
        fetch('{{ route('reservation.getNextSessions', ['id' => $reservation->id]) }}')
            .then(response => response.json())
            .then(data => {
                const sessionsList = document.getElementById('sessions-list');
                sessionsList.innerHTML = ''; // Efface le contenu précédent de la liste
                data.sessions.forEach(session => {
                    const listItem = document.createElement('li');
                    listItem.textContent = session;
                    sessionsList.appendChild(listItem); // Ajoute chaque session à la liste
                });
            })
            .catch(error => console.error('Error fetching sessions:', error));
    }
    
    // Rafraîchir les sessions toutes les 60 secondes (60000 ms)
    setInterval(fetchNextSessions, 60000);
    
    // Appeler fetchNextSessions une première fois au chargement de la page
    fetchNextSessions();
</script>