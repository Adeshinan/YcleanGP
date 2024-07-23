<!doctype html>
<html lang="en" data-layout="semibox" data-sidebar-visibility="show" data-topbar="light" data-sidebar="light"
    data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Y CLEAN Reservation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="Admin/assets/images/favicon.ico">

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

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">
    @include('sweetalert::alert')
    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <nav class="navbar navbar-expand-lg navbar-landing fixed-top job-navbar" id="navbar">
            <div class="container-fluid custom-container">
                <a class="navbar-brand" href="index.html">
                    <img src="Admin/assets/images/logo-dark.png" class="card-logo card-logo-dark" alt="logo dark"
                        height="17">
                    <img src="Admin/assets/images/logo-light.png" class="card-logo card-logo-light" alt="logo light"
                        height="17">
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                    <li class="nav-item">
                            <a class="nav-link" href="/" style='text-transform: uppercase;'>Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/apropos" style='text-transform: uppercase;'>A Propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('reservation.ligne')}}" style='text-transform: uppercase;'>Réservation en ligne</a>
                        </li>
                        
                    </ul>

                    <div class="">
                        <a href="{{route('login')}}" class="btn btn-soft-secondary"><i
                                class="ri-user-3-line align-bottom me-1"></i> Connexion & Inscription</a>
                    </div>
                </div>

            </div>
        </nav>
        <!-- end navbar -->

        <!-- start hero section -->
        <section class="section job-hero-section bg-light pb-0" id="hero">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div>
                            <h1 class="display-6 fw-semibold text-capitalize mb-3 lh-base">
                                Réservation et paiement en ligne en 4 étapes faciles.
                            </h1>
                            <p class="lead text-muted lh-base mb-4">
                                Plus besoin de passer des appels téléphoniques , tout se fait en ligne en un temps record. Profitez de la commodité de notre service de réservation en ligne pour retrouver une maison impeccable .
                            </p>
                            <form action="#" class="job-panel-filter">
                                <div class="row g-md-0 g-2">
                                    <!--end col-->
                                    <div class="col-md-4">
                                        <div>
                                            <select class="form-control" data-choices>
                                                <option value="">Reservation</option>
                                                @foreach ($services as $service)
                                                <option value="{{$service->id}}">
                                                    {{$service->libelle}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-4">
                                        <div class="h-100">
                                            <button class="btn btn-primary submit-btn w-100 h-100" type="submit" href="#hero"><i
                                                    class="ri-search-2-line align-bottom me-1"></i>Reservation</button>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="h-100">
                                            <button class="btn btn-secondary submit-btn w-100 h-100" type="submit"><i
                                                    class="ri-user-3-line align-bottom me-1"></i>Se Connecter</button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>

                            <ul class="treding-keywords list-inline mb-0 mt-3 fs-13">
                                <li class="list-inline-item text-danger fw-semibold"><i
                                        class="mdi mdi-tag-multiple-outline align-middle"></i> Nos Services d'entretien:</li>
                                    @foreach ($services as $service)
                                    <li class="list-inline-item"><a href="javascript:void(0)">{{$service->libelle}},</a></li>
                                    @endforeach
                            </ul>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="position-relative home-img text-center mt-5 mt-lg-0">
                            <div class="card p-3 rounded shadow-lg inquiry-box">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <div class="avatar-title bg-warning-subtle text-warning rounded fs-18">
                                            <i class="ri-mail-send-line"></i>
                                        </div>
                                    </div>
                                    <h5 class="fs-15 lh-base mb-0">Maintenir votre espace en bon état</h5>
                                </div>
                            </div>

                            <div class="card p-3 rounded shadow-lg application-box">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <div class="avatar-title bg-warning-subtle text-warning rounded fs-18">
                                            <i class="ri-mail-send-line"></i>
                                        </div>
                                    </div>
                                    <h5 class="fs-15 lh-base mb-0">Entretien ménager à Montréal et aux environs</h5>
                                </div>
                            </div>
                            <img src="Admin/assets/images/job-profile2.png" alt="" class="user-img">
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- start services -->
        <section class="section bg-light" id="#reserve">
            
            <div class="container col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base h2">Vous êtes à moins <span
                                    class="text-primary">d'une minute</span> d'une maison propre!</h1>
                            <p class="text-muted">
                                Pour vos services d'entretien ménager, optez dès maintenant pour le meilleur et gardez votre maison toujours propre.
                            </p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-header align-items-center d-flex  bg-primary">
                                <h4 class="card-title mb-0 flex-grow-1 text-light">Faites votre reservation</h4>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="live-preview">

                                    <form action="{{ route('reservation.passer') }}" method="POST">
                                        @csrf
                                        <div class="row gy-4">
                                            <div class="col-xxl-6 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Service</label>
                                                    <select name="service_id" id="serviceSelect" class="form-control"
                                                        oninput="toggleFields(this.value),afficheCommune(this.value),getServicePrice(this.value)"
                                                        required>
                                                        <option selected>Choisisez un service</option>
                                                        @foreach ($services as $service)
                                                        <option value="{{$service->id}}">
                                                            {{$service->libelle}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-6 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Extra</label>
                                                    <select class="js-example-basic-multiple" name="extra[]" id="extra"
                                                        multiple="multiple" onchange="getExtra(this)">
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-6 col-md-6" id="chambresField" style="display: none;">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Chambres</label>
                                                    <input name="chambre" type="number" id="chambres"
                                                        class="form-control" placeholder="Entrer un nombre" value="0">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-6 col-md-6" id="cuisinesField" style="display: none;">
                                                <div>
                                                    <label for="valueInput" class="form-label">Cuisines</label>
                                                    <input name="cuisine" type="number" class="form-control"
                                                        id="cuisines" placeholder="Entrer un nombre" value="0">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-6 col-md-6" id="salleDeBainField"
                                                style="display: none;">
                                                <div>
                                                    <label for="readonlyPlaintext" class="form-label">Salle de
                                                        Bain</label>
                                                    <input name="salle_bain" type="number" class="form-control"
                                                        id="salle_bain" placeholder="Entrer un nombre" value="0">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-6 col-md-6" id="salleAEauField" style="display: none;">
                                                <div>
                                                    <label for="readonlyInput" class="form-label">Salle
                                                        à Eau</label>
                                                    <input name="salle_eau" type="number" class="form-control"
                                                        id="salle_eau" placeholder="Entrer un nombre" value="0">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-6 col-md-6" id="salonsField" style="display: none;">
                                                <div>
                                                    <label for="disabledInput" class="form-label">Salons</label>
                                                    <input name="salon" type="number" class="form-control" id="salon"
                                                        placeholder="Entrer un nombre" value="0">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-6 col-md-6" id="buanderieField" style="display: none;">
                                                <div>
                                                    <label for="iconInput" class="form-label">Buanderie</label>
                                                    <div class="form-icon">
                                                        <input name="buanderie" type="number"
                                                            class="form-control form-control-icon" id="buanderie"
                                                            placeholder="Entrer un nombre" value="0">

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-6 col-md-6" id="entrerCouloireField"
                                                style="display: none;">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Entrer
                                                        Couloire</label>
                                                    <div class="form-icon right">
                                                        <input name="entre_couloir" type="number"
                                                            class="form-control form-control-icon" id="entre_couloir"
                                                            placeholder="Entrer un nombre" value="0">

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-6 col-md-6" id="escalierField" style="display: none;">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">
                                                        Escaliers</label>
                                                    <input name="escalier" type="number" class="form-control"
                                                        id="escalier" placeholder="Entrer un nombre" value="0">
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-xxl-6 col-md-6" id="agentField" style="display: none;">
                                                <div>
                                                    <label for="exampleInputpassword" class="form-label">Nombre
                                                        d'agent</label>
                                                    <input type="number" name="nbre_personne" class="form-control"
                                                        id="exampleInputpassword"
                                                        placeholder="Entrer le nombre d'agent">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-6 col-md-6" id="heuresField" style="display: none;">
                                                <div>
                                                    <label for="exampleInputpassword" class="form-label">Heure de
                                                        travail</label>
                                                    <select class="form-control" name="heure_session" id="">
                                                        <option selected value="">Choisisez l'heure de
                                                            session</option>
                                                        <option value="2">2H</option>
                                                        <option value="2.5">2H30</option>
                                                        <option value="3">3H</option>
                                                        <option value="3.5">3H30</option>
                                                        <option value="4">4H</option>
                                                        <option value="4.5">4H30</option>
                                                        <option value="5">5H</option>
                                                        <option value="5.5">5H30</option>
                                                        <option value="6">6H</option>
                                                        <option value="6.5">6H30</option>
                                                        <option value="7">7H</option>

                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-xxl-6 col-md-6">
                                                <div>
                                                    <label for="exampleInputtime" class="form-label">Nombre de
                                                        fois</label>
                                                    <select class="form-control" name="nbre_fois" id="nbre_fois">
                                                        <option selected></option>
                                                        @foreach ($taux as $item)
                                                        <option value="{{$item->libelle}}">
                                                            {{$item->libelle}}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-6 col-md-6">
                                                <div>
                                                    <label for="exampleInputpassword" class="form-label">Date et heure
                                                        debut
                                                        de
                                                        Visite</label>
                                                    <input type="datetime-local" name="date_visite" class="form-control"
                                                        id="exampleInputpassword">
                                                </div>
                                            </div>



                                            <div class="col-xxl-6 col-md-6">
                                                <div>
                                                    <label for="exampleInputtime" class="form-label">Nom et prénoms</label>
                                                    <input type="text" name="name" class="form-control" id="" placeholder="Entrer le nom" required>
                                                </div>
                                            </div>

                                            <div class="col-xxl-6 col-md-6">
                                                <div>
                                                    <label for="borderInputCity" class="form-label">Email </label>
                                                    <input type="text" name="email" class="form-control" id=""
                                                        placeholder="Entrez votre email" required>
                                                </div>
                                            </div>

                                            <!--end col-->
                                            <div class="col-xxl-6 col-md-6">
                                                <div>
                                                    <label for="borderInputPostalCode" class="form-label">Adresse</label>
                                                    <input type="text" name="adress" class="form-control" id=""
                                                        placeholder="Entrez votre adresse" required>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <div>
                                                    <label for="borderInputPostalCode" class="form-label">Code postal</label>
                                                    <input type="text" name="postal" class="form-control" id=""
                                                        placeholder="Entrez votre code postal" required>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <div>
                                                    <label for="borderInputPostalCode" class="form-label">Numero de téléphone</label>
                                                    <input type="text" name="contact" class="form-control" id=""
                                                        placeholder="Entrez votre numero de téléphone" required>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <div>
                                                    <label for="borderInputCity" class="form-label">Ville </label>
                                                    <input type="text" name="vill" class="form-control" id=""
                                                        placeholder="Entrez votre ville" required>
                                                </div>
                                            </div>


                                            <!--end col-->
                                            <div class="col-xxl-6 col-md-6">
                                                <fieldset>
                                                    <label style="font-weight: bold; font-size:16px;">La
                                                        reservation
                                                        appartient
                                                        à qui ?</label>
                                                    <span style="font-weight: bold; color:red">*</span>
                                                    <div class="mb-2">
                                                        <label for="oui">Pour moi</label>
                                                        <input type="radio" id="oui" name="pour_qui" value="1" checked>
                                                        <label style="margin-left:0.8rem;" for="non">Pour autre</label>
                                                        <input type="radio" id="non" name="pour_qui" value="0">
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div class="col-xxl-6 col-md-6" id="addressField">
                                                <div>
                                                    <label for="borderInputAddress" class="form-label">Adresse de
                                                        l'intéressé</label>
                                                    <input type="text" name="address" class="form-control" id=""
                                                        placeholder="Entrez votre adresse">
                                                </div>
                                            </div>


                                            <div class="col-xxl-6 col-md-6" id="postalCodeField">
                                                <div>
                                                    <label for="borderInputPostalCode" class="form-label">Code postal de
                                                        l'intéressé</label>
                                                    <input type="text" name="code" class="form-control" id=""
                                                        placeholder="Entrez votre code postal" required>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-md-6" id="cityField">
                                                <div>
                                                    <label for="borderInputCity" class="form-label">Ville de
                                                        l'intéressé</label>
                                                    <input type="text" name="ville" class="form-control" id=""
                                                        placeholder="Entrez votre ville" required>
                                                </div>
                                            </div>

                                            <div class="hstack gap-2 justify-content-end">

                                                <div class="col-xxl-6 col-md-6">
                                                    <div data-bs-toggle="collapse"
                                                        data-bs-target="#paymentmethodCollapse.show"
                                                        aria-expanded="false" aria-controls="paymentmethodCollapse">
                                                        <div class="form-check card-radio">
                                                            <input id="paymentMethod03" name="type_paiement"
                                                                type="radio" value="0" class="form-check-input" checked>
                                                            <label class="form-check-label" for="paymentMethod03">
                                                                <span class="fs-16 text-muted me-2"><i
                                                                        class="ri-money-dollar-box-fill align-bottom"></i></span>
                                                                <span class="fs-14 text-wrap">Paiement
                                                                    en espèce</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-6">
                                                    <div data-bs-toggle="collapse"
                                                        data-bs-target="#paymentmethodCollapse" aria-expanded="true"
                                                        aria-controls="paymentmethodCollapse">
                                                        <div class="form-check card-radio">
                                                            <input id="paymentMethod02" name="type_paiement"
                                                                type="radio" value="1" class="form-check-input">
                                                            <label class="form-check-label" for="paymentMethod02">
                                                                <span class="fs-16 text-muted me-2"><i
                                                                        class="ri-bank-card-fill align-bottom"></i></span>
                                                                <span class="fs-14 text-wrap">Paiement
                                                                    par Carte
                                                                    Bancaire</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="hstack gap-2 justify-content-end">

                                                <button type="submit" class="btn btn-success">Enrégistrer</button>
                                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                            </div>


                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header align-items-center d-flex  bg-primary">
                                <h4 class="card-title mb-0 flex-grow-1 text-light">Mouvement</h4>
                            </div>
                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">
                                        <div>
                                            <h5 style="font-weight: bold;">Prix</h5>
                                            <hr>
                                            <div id="results" style="display: none"></div>
                                            <h6>Prix Total HT : <span id="prixTotalHT">0</span>$ CAD</h6>
                                            <h6>TPS / TVQ : <span id="taxes">0</span>$ CAD</h6>
                                            <h6>Prix Total TTC : <span id="prixTotalTTC">0</span>$ CAD</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>






                @include('profile.partials.js.donnee')
                @include('profile.partials.js.reservation')


                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end services -->

        <!-- start cta -->
        <section class="py-5 bg-primary position-relative">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-sm">
                        <div>
                            <h4 class="text-white mb-2">Prêt à suivre votre réservation ?</h4>
                            <p class="text-white-50 mb-0">Si oui, connectez-vous dès maintenant à votre espace.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-auto">
                        <div>
                            <a href="{{route('login')}}" class="btn bg-gradient btn-secondary">Se Connecter</a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end cta -->

        <!-- Start footer -->
        <footer class="custom-footer bg-dark py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-4">
                        <div>
                            <div>
                                <img src="Admin/assets/images/logo-light.png" alt="logo light" height="17" />
                            </div>
                            <div class="mt-4 fs-13">
                                <p>Premium Multipurpose Admin & Dashboard Template</p>
                                <p>You can build any type of web application like eCommerce, CRM, CMS, Project
                                    management apps, Admin Panels, etc using Velzon.</p>
                                <ul class="list-inline mb-0 footer-social-link">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle">
                                                <i class="ri-facebook-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle">
                                                <i class="ri-github-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle">
                                                <i class="ri-linkedin-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle">
                                                <i class="ri-google-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle">
                                                <i class="ri-dribbble-line"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 ms-lg-auto">
                        <div class="row">
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Company</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="pages-profile.html">About Us</a></li>
                                        <li><a href="pages-gallery.html">Gallery</a></li>
                                        <li><a href="pages-team.html">Team</a></li>
                                        <li><a href="pages-pricing.html">Pricing</a></li>
                                        <li><a href="pages-timeline.html">Timeline</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">For Jobs</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="apps-job-lists.html">Job List</a></li>
                                        <li><a href="apps-job-application.html">application</a></li>
                                        <li><a href="apps-job-new.html">New Job</a></li>
                                        <li><a href="apps-job-companies-lists.html">Company List</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Support</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="pages-faqs.html">FAQ</a></li>
                                        <li><a href="pages-faqs.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row text-center text-sm-start align-items-center mt-5">
                    <div class="col-sm-6">
                        <div>
                            <p class="copy-rights mb-0">
                                <script>
                                    document.write(new Date().getFullYear()) 
                                </script> © Velzon - Themesbrand
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-3 mt-sm-0">
                            <ul class="list-inline mb-0 footer-list gap-4 fs-13">
                                <li class="list-inline-item">
                                    <a href="pages-privacy-policy.html">Privacy Policy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="pages-term-conditions.html">Terms & Conditions</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="pages-privacy-policy.html">Security</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-info btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>
    <!-- end layout wrapper -->


    <!-- JAVASCRIPT -->
    <script src="Admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Admin/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="Admin/assets/libs/node-waves/waves.min.js"></script>
    <script src="Admin/assets/libs/feather-icons/feather.min.js"></script>
    <script src="Admin/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="Admin/assets/js/plugins.js"></script>

    <!--Swiper slider js-->
    <script src="Admin/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!--job landing init -->
    <script src="Admin/assets/js/pages/job-lading.init.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!--select2 cdn-->


<script src="Admin/assets/js/pages/select2.init.js"></script>

</body>

</html>