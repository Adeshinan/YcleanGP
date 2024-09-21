<!DOCTYPE html>
<base href="{{asset('Admin/')}}">
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="Admin/assets/images/favicon.ico">
    
        <!-- jsvectormap css -->
        <link href="Admin/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
    
        <!--Swiper slider css-->
        <link href="Admin/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
    
        <!-- Layout config Js -->
        <script src="Admin/assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="Admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="Admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="Admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="Admin/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    
        <link href="Admin/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
        <link rel="stylesheet" href="Admin/assets/libs/glightbox/css/glightbox.min.css">
        {{--
      
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
    
      
    </head>
<body>
    
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
    
              
    
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="card" id="demo">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card-header border-bottom-dashed p-4">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <img src="Admin/assets/images/logo-dark.png" class="card-logo card-logo-dark"
                                                    alt="logo dark" height="17">
                                                <img src="Admin/assets/images/logo-light.png" class="card-logo card-logo-light"
                                                    alt="logo light" height="17">
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
                                                            <p class="text-muted mb-0" id="zip-code"><span>Ville : </span>{{$reservation->ville}}</p>
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
                                    <div class="col-6 mt-sm-5 mt-4 mr-3" >
                                      
                                    </div>
    
                                        <div class="col-6 mt-sm-5 mt-4 ml-3">
                                            <h3>Autre information</h3>
    
                                            <ul id="sessions">
                                               
           
                                                <li> <h4>Instruction spéciale : </h4>{{$reservation->instruction}}</li>
                                                <li> <h4>Information sur le stationnement : </h4>{{$reservation->station}}</li>
                                                <li> <h4>Comment accéderons-nous à la propriété : </h4>{{$reservation->propriete}}</li>
                                              
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
                                                            <span class="fw-medium">{{$reservation->service->libelle}}</span>
    
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
                                                            if ($reservation->nbre_personne == $service->agent && $reservation->heure_session == $service->heure) {
                                                               
                                                                $prixHT = $prixparametre + $totalExtraPrice + $prix;
                                                            } else {
                                                                $prixHT = $prixparametre + $totalExtraPrice + $service->prixhors;
                                                            }
                                                            $rabais = $prixHT * ($tauxItem->pourcentage / 100);
                                                        }else{
                                                            
                                                            $prixHT = $prixparametre + $totalExtraPrice + $service->prixhors;
                                                            $rabais = $prixHT * ($tauxItem->pourcentage / 100);
                                                        }
                                                    @endphp
                                                    <td class="text-end">- ${{$rabais}} CAD</td>
                                                </tr>
                                                
    
                                                    @else
    
                                                    @endif
                                                    @endforeach
    
                                                   
    
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
    
    
                                                            @if ($reservation->nbre_personne == $service->agent && $reservation->heure_session == $service->heure) 
                                                               @php
                                                                    $prixHT = $prixparametre + $totalExtraPrice + $prix - $rabais;
                                                               @endphp
                                                                ${{ $prixHT}} CAD
                                                             @else 
                                                             @php
                                                                  $prixHT = $prixparametre + $totalExtraPrice + $service->prixhors - $rabais;
                                                             @endphp
                                                                ${{ $prixHT}} CAD
                                                            @endif
    
                                                        @else
                                                        @php
                                                        $prixHT = $prixparametre + $totalExtraPrice + $service->prixhors - $rabais;
                                                        @endphp
                                                          ${{ $prixHT}} CAD
    
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
                                                <h6 class="text-muted text-uppercase fw-semibold mb-3"> Details du paiement:</h6>
                                                <p class="text-muted mb-1"> Methode de paiement: <span class="fw-medium"
                                                        id="payment-method" style="font-weight: bold">@if ($reservation->type_paiement == 1)
                                                            Carte Bancaire
                                                        @else
                                                            Espèce
                                                        @endif</span></p>
                                                <p class="text-muted">Total payé: <span class="fw-medium" id="">$ </span><span
                                                        id="card-total-amount">{{$prixTTC}} CAD</span></p>
                                            </div>
    
                                            @if($reservation->type_paiement == 1)
                                            <div class="col-6 mt-3">
                                                <img src="{{asset('Admin/assets/img/payer.jpg')}}" alt="" height="100">
                                            </div>
                                            @endif
                                            
                                        </div>
                                        
                                        
                                        <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                            
                                            <a href="{{route('reservation.facture',$reservation->id)}} " class="btn btn-primary"></i> Télécharger la facture</a>
                                            @if(Auth::user()->type_connecter == 'admin' && $reservation->valider == 0)
                                            <a href="{{route('reservation.valider',$reservation->id)}} " class="btn btn-primary"></i> Valider la reservation</a>
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
    
       
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var chatConversation = document.getElementById('chat-conversation');
            chatConversation.scrollTop = chatConversation.scrollHeight;
        });
    </script>

    <!-- JAVASCRIPT -->
    <script src="Admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Admin/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="Admin/assets/libs/node-waves/waves.min.js"></script>
    <script src="Admin/assets/libs/feather-icons/feather.min.js"></script>
    <script src="Admin/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="Admin/assets/js/plugins.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>

    <!-- apexcharts -->
    <script src="Admin/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="Admin/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="Admin/assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="Admin/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="Admin/assets/js/pages/dashboard-ecommerce.init.js"></script>
    <script src="Admin/assets/js/pages/listjs.init.js"></script>
    <script src="Admin/assets/libs/prismjs/prism.js"></script>
    <script src="Admin/assets/libs/list.js/list.min.js"></script>
    <script src="Admin/assets/libs/list.pagination.js/list.pagination.min.js"></script>
    <script src="Admin/assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- App js -->
    <script src="Admin/assets/js/app.js"></script>
    <!--jquery cdn-->
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--select2 cdn-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="Admin/assets/js/pages/select2.init.js"></script>

    <script src="Admin/assets/libs/glightbox/js/glightbox.min.js"></script>

    <!-- fgEmojiPicker js -->
    <script src="Admin/assets/libs/fg-emoji-picker/fgEmojiPicker.js"></script>
    <script src="Admin/assets/libs/fullcalendar/index.global.min.js"></script>

    <!-- Calendar init -->
    <script src="Admin/assets/js/pages/calendar-month-grid.init.js"></script>
    <!-- chat init js -->
    <script src="Admin/assets/js/pages/chat.init.js"></script>

</body>
</html>