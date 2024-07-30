@extends('layouts.public')

@section('public')
    
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


@endsection
      