<!doctype html>
<html lang="en" data-layout="semibox" data-sidebar-visibility="show" data-topbar="light" data-sidebar="light"
    data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Y CLEAN A propos</title>
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
                            <a class="nav-link active" href="/apropos" style='text-transform: uppercase;'>A Propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('reservation.ligne')}}" style='text-transform: uppercase;'>Réservation en ligne</a>
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
         <!-- start blog -->
        <section class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">À propos de <span class="text-primary">Y CLEAN</span></h1>
                                <p class="text-muted mb-4">We thrive when coming up with innovative ideas but also understand that a smart concept should be supported with faucibus sapien odio measurable results.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <img src="Admin/assets/images/small/img-8.jpg" alt="" class="img-fluid rounded" />
                                </div>
                                <div class="card-body">
                                    
                                    <a href="javascript:void(0);">
                                        <h5>DES SERVICES PROFESSIONNELS</h5>
                                    </a>
                                    <p class="text-muted fs-14">
                                    Y CLEAN GP, votre spécialiste en entretien ménager résidentiel et commercial dans Le Grand Montréal. Nous offrons des services de qualité supérieure pour répondre à tous vos besoins en matière de nettoyage, que ce soit pour votre domicile ou votre entreprise.
                                    </p>
                                    
                                    <div>
                                        <a href="#!" class="link-success">Lire plus <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <img src="Admin/assets/images/small/img-6.jpg" alt="" class="img-fluid rounded" />
                                </div>
                                <div class="card-body">
                                    
                                    <a href="javascript:void(0);">
                                        <h5 style='text-transform: uppercase;'>Un travail honnête et efficace</h5>
                                    </a>
                                    <p class="text-muted fs-14">
                                        Depuis que nous avons ouvert nos portes, nous nous efforçons de fournir un service de la plus haute qualité. Nous accordons une attention particulière à la qualité de notre travail et à la communication avec nos clients. Notre mission à Y CLEAN GP est simple : fournir des services de grande qualité, dans le respect des délais.
                                    </p>
                        
                                    <div>
                                        <a href="#!" class="link-success">Lire plus <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <img src="Admin/assets/images/small/img-9.jpg" alt="" class="img-fluid rounded" />
                                </div>
                                <div class="card-body">
                                    
                                    <a href="javascript:void(0);">
                                        <h5 style='text-transform: uppercase;'>Ce que nous faisons</h5>
                                    </a>
                                    <p class="text-muted fs-14">Y CLEAN GP s’engage à remplir sa mission, et à réaliser ce service avec soin. Vous pouvez compter sur nous pour nous montrer professionnels, ponctuels et efficaces, et pour nous assurer votre satisfaction à chaque étape du processus.</p>
                        
                                    <div>
                                        <a href="#!" class="link-success">Lire plus <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end container -->
            </section>
            <!-- end blog -->
        <!-- start cta -->
       
            <div class="container">
                
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">F.A.Q</h1>
                            <h3 class="mb-3 fw-semibold">Voici les questions qui nous sont fréquemment posées.</h3>
                            <p class="text-muted mb-4 ff-secondary">N'hésitez pas à communiquer avec nous pour toutes autres questions.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row g-lg-5 g-4">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0 me-1">
                                <i class="ri-question-line fs-24 align-middle text-success me-1"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-0 fw-semibold">Foires Aux Questionnements</h5>
                            </div>
                        </div>
                        <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box" id="genques-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseOne" aria-expanded="true" aria-controls="genques-collapseOne">
                                        Qui viendra faire le ménage de ma résidence ?
                                    </button>
                                </h2>
                                <div id="genques-collapseOne" class="accordion-collapse collapse show" aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body ff-secondary">
                                        Un de nos experts en entretien ménager résidentiel couvrant votre secteur.
                                    </div>
                                    <ul style="margin-left: 16px; margin-right: 13px;">
                                        <li>Nous avons sélectionné chacun d’eux avec soin, cela incluant une vérification stricte de leurs antécédents.</li>
                                        <li>Un expert (ou une équipe de 2) vous sera attitré et ce sera toujours cette même personne qui fera le ménage chez vous.</li>
                                        <li>Nos experts en ménage résidentiel sont discrets et responsables.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseTwo" aria-expanded="false" aria-controls="genques-collapseTwo">
                                        Quels sont vos services ?
                                    </button>
                                </h2>
                                <div id="genques-collapseTwo" class="accordion-collapse collapse" aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body ff-secondary">
                                        Nous offrons des services d’entretien ménager adaptés aux besoins de chacun.
                                    </div>
                                    <ul style="margin-left: 16px; margin-right: 13px;">
                                        <h6>Fréquences offertes :</h6>
                                        <li> À la semaine </li>
                                        <li> Aux 2 semaines </li>
                                        <li> Au mois </li>
                                        <li> À l'occasion </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseThree" aria-expanded="false" aria-controls="genques-collapseThree">
                                        Combien coûtent vos services ?
                                    </button>
                                </h2>
                                <div id="genques-collapseThree" class="accordion-collapse collapse" aria-labelledby="genques-headingThree" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body ff-secondary">
                                        Le coût du service sera déterminé selon vos besoins. Un de nos experts près de chez vous viendra vous rencontrer à votre domicile pour faire une évaluation gratuite et sans engagement. Il ou elle définira avec vous vos besoins. Puisque chaque résidence est unique, chaque ménage est personnalisé et adapté pour répondre aux besoins de chacun de nos clients.
                                        Tous nos services sont taxables, avec facture.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseFour" aria-expanded="false" aria-controls="genques-collapseFour">
                                        Apporterez-vous vos produits pour faire mon ménage ?
                                    </button>
                                </h2>
                                <div id="genques-collapseFour" class="accordion-collapse collapse" aria-labelledby="genques-headingFour" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body ff-secondary">
                                        Oui, nos experts se déplacent toujours avec tous les produits d’entretien nécessaires et avec leur équipement professionnel. Ils se feront un plaisir de répondre à toutes autres questions. 
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseFive" aria-expanded="false" aria-controls="genques-collapseFive">
                                        J’ai un chien ou un chat est-ce que ça pose problème ?
                                    </button>
                                </h2>
                                <div id="genques-collapseFive" class="accordion-collapse collapse" aria-labelledby="genques-headingFive" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body ff-secondary">
                                        Absolument pas, tous nos experts aiment les animaux. Lorsqu’ils viendront faire le ménage à votre domicile, ils prendront le temps de rassurer votre animal de compagnie et de faire en sorte qu’il apprenne à les connaître et à être en confiance en leur présence. 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end accordion-->

                    </div>
                    <!-- end col -->
                    
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        <br>
        <br>
        <br>
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