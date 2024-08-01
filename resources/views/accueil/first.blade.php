
@extends('layouts.public')
@section('public')
    
<div class="bg-overlay bg-overlay-pattern"></div>
<!-- end navbar -->

<!-- start hero section -->
<section class="section nft-hero" id="hero">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-10">
                <div class="text-center">
                    <h1 class="display-4 fw-medium mb-4 lh-base text-white">Entretien Ménager <span class="text-success">Résidentiel et Commercial Montréal</span></h1>
                    <p class="lead text-white-50 lh-base mb-4 pb-2">Profitez de notre service d'entretien ménager à Montréal et ses environs ! Réservez facilement en ligne et obtenez un intérieur impeccable en un rien de temps. Simple, rapide, et efficace !</p>

                    <div class="hstack gap-2 justify-content-center">
                        <a href="{{route('reservation.ligne')}}" class="btn btn-success" style='text-transform: uppercase;'>Résever Maintenant</a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end hero section -->

<!-- start marketplace -->
<section class="section bg-light" id="marketplace">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2 class="mb-3 fw-semibold lh-base text-uppercase">Comment ça fonctionne?</h2>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-4 product-item music crypto-card games">
                <div class="card explore-box card-animate">
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                        <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                    </div>
                    <div class="explore-place-bid-img">
                        <img src="Admin/assets/images/acc1/C1.webp" alt="" class="card-img-top explore-img" />
                        <div class="bg-overlay"></div>
                        
                    </div>
                    <div class="card-body">
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">RÉSERVEZ EN LIGNE</a></h5>
                        <p class="text-muted mb-0">Réservez facilement depuis votre téléphone ou votre ordinateur en moins de 2 min.</p>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4 product-item artwork music games">
                <div class="card explore-box card-animate">
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                        <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                    </div>
                    <div class="explore-place-bid-img">
                        <img src="Admin/assets/images/acc1/C2.webp" alt="" class="card-img-top explore-img" />
                        <div class="bg-overlay"></div>
                        
                    </div>
                    <div class="card-body">
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">RECEVEZ VOTRE CONFIRMATION</a></h5>
                        <p class="text-muted mb-0">Vous recevrez une confirmation instantanée par courriel pour confirmer votre rendez-vous.</p>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4 product-item artwork crypto-card 3d-style">
                <div class="card explore-box card-animate">
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                        <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                    </div>
                    <div class="explore-place-bid-img">
                        <img src="Admin/assets/images/acc1/C3.webp" alt="" class="card-img-top explore-img" />
                        <div class="bg-overlay"></div>
                        
                    </div>
                    <div class="card-body">
                        
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">RELAXEZ</a></h5>
                        <p class="text-muted mb-0">Une équipe professionnelle certifiée et formée nettoiera votre mileu en suivant une liste exhaustive de tâches.tography</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div><!-- end container -->
</section>
<!-- end marketplace -->
<section class="section">
    <div class="container">
    <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2 class="mb-3 fw-semibold lh-base">Y CLEAN GP : POUR VOUS FACILITER LA VIE !</h2>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    
        <div class="row align-items-center gy-4">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="text-muted">
                    <h5 class="fs-12 text-uppercase text-success">N°1</h5>
                    <h4 class="mb-3">PROFITEZ DE LA VIE, ON S'OCCUPE DE VOTRE MÉNAGE!</h4>
                    <p class="mb-4 ff-secondary">
                    Avec notre service d'entretien ménager, vous pouvez profiter pleinement de la vie sans avoir à vous soucier des tâches ménagères. Nous sommes là pour vous offrir une maison propre et bien rangée, afin que vous puissiez vous concentrer sur les choses qui comptent le plus pour vous. Que ce soit pour un entretien régulier ou pour un grand ménage, notre équipe expérimentée est là pour répondre à vos besoins. Alors, profitez de la vie en toute sérénité avec Y CLEAN! 
                    </p>
                </div>
            </div>
            <!-- end col -->
            
            <div class="col-lg-6 col-sm-7 col-10 ms-auto order-1 order-lg-2">
                <div class="image-container1">
                    <img src="Admin/assets/images/acc1/1.webp" alt="" class="styled-image1">
                </div>
            </div>

            
        </div>
        <!-- end row -->

        <div class="row align-items-center mt-5 pt-lg-5 gy-4">
            <div class="col-lg-6 col-sm-7 col-10 mx-auto">
                <div class="image-container1">
                    <img src="Admin/assets/images/acc1/2.webp" alt="" class="styled-image1">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-muted ps-lg-5">
                    <h5 class="fs-12 text-uppercase text-success">N°2</h5>
                    <h4 class="mb-3">GOÛTEZ LE BONHEUR D’UN DOMICILE TOUT PROPRE LORS DE VOTRE RETOUR À LA MAISON</h4>
                    <p class="mb-4">
                        Sentez la sérénité de rentrer chez vous dans un domicile propre grâce à nos services d'entretien ménager. Simplifiez votre vie et libérez-vous du stress de nettoyer votre maison en confiant cette tâche à notre équipe professionnelle. Contactez-nous dès maintenant pour en savoir plus sur nos services et pour réserver une visite.
                    </p>
                    <p class="mb-4">
                        Que ce soit pour un grand ménage ou pour un entretien régulier, Vous pouvez compter sur nous pour nous montrer professionnels, discrets et efficaces pour entretenir votre précieuse demeure.
                    </p>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row align-items-center gy-4">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="text-muted">
                    <h5 class="fs-12 text-uppercase text-success">N°3</h5>
                    <h4 class="mb-3" style='text-transform: uppercase;'>Nettoyage Après Construction Montréal</h4>
                    <p class="mb-4 ff-secondary">
                    Découvrez notre service de nettoyage après construction et profitez d'un espace tout neuf sans les soucis de nettoyage qui l'accompagnent. Notre équipe de professionnels est équipée pour éliminer la poussière, les débris et les résidus de construction, éliminés derrière elle un environnement propre et sain. Contactez-nous dès maintenant pour en savoir plus sur notre service de nettoyage après construction. Y CLEAN à votre service ! 
                    </p>
                    <p class="mb-4 ff-secondary">
                    Vous venez de terminer la construction de votre maison ou de votre entreprise? Laissez-nous prendre soin du nettoyage! Chez Y CLEAN, nous offrons un service de nettoyage après construction complet et professionnel 
                    </p>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-6 col-sm-7 col-10 ms-auto order-1 order-lg-2">
                <div class="image-container1">
                    <img src="Admin/assets/images/acc1/3.webp" alt="" class="styled-image1">
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row align-items-center mt-5 pt-lg-5 gy-4">
            <div class="col-lg-6 col-sm-7 col-10 mx-auto">
                <div class="image-container1">
                    <img src="Admin/assets/images/acc1/4.webp" alt="" class="styled-image1">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-muted ps-lg-5">
                    <h5 class="fs-12 text-uppercase text-success">N°4</h5>
                    <h4 class="mb-3">NETTOYAGE COMMERCIAL</h4>
                    <p class="mb-4">
                        Faites briller votre entreprise avec nos services de nettoyage commercial de qualité supérieure ! Nous proposons des solutions personnalisées pour répondre à tous vos besoins de nettoyage, qu'il s'agisse de bureaux, de magasins, de restaurants ou d'autres types d'entreprises. Nos équipes professionnelles sont équipées pour nettoyer efficacement tous les types d'espaces commerciaux, afin que vous puissiez vous y concentrer sur ce qui est vraiment important : la croissance de votre entreprise. Contactez-nous dès aujourd'hui pour en savoir plus sur nos services de nettoyage commercial. 
                    </p>
                    <p class="mb-4">
                        Y CLEAN vous propose des services en entretien ménager commercial et en gestion de bâtiments. Notre équipe expérimentée vous offrira un service de qualité quel que soit votre type d’entreprise. Hôtels, hôpitaux, bureaux, chantiers ou autre commerce: notre efficacité et notre fiabilité sont toujours à votre service.
                    </p>
                    <p class="mb-4">
                        Selon vos besoins, nous vous proposerons un forfait sur mesure et un service à la hauteur de vos attentes.
                    </p>
                   
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row align-items-center gy-4">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="text-muted">
                    <h5 class="fs-12 text-uppercase text-success">N°5</h5>
                    <h4 class="mb-3" style='text-transform: uppercase;'>CARTE DE FIDÉLITÉ Y CLEAN</h4>
                    <p class="mb-4 ff-secondary">
                        Cher(e) client(e) 
                        Nous tenons à vous remercier pour votre confiance continue envers Y CLEAN. Nous sommes heureux de vous annoncer que nous avons une offre spéciale pour nos clients fidèles tels que vous. 
                        Après avoir effectué 10 ménages avec notre entreprise, vous êtes éligible pour recevoir un ménage gratuit. Nous voulons vous remercier de votre fidélité en vous offrant ce petit geste de gratitude.
                        Nous espérons que cette offre spéciale vous permettra de continuer à profiter de notre service de nettoyage exceptionnel. Si vous avez des questions ou si vous souhaitez planifier votre prochain ménage, n'hésitez pas à nous contacter.
                        Merci encore pour votre fidélité à Y CLEAN.
                    </p>
                    <p class="mb-4 ff-secondary">
                        Profitez de nos services d'entretien ménager et bénéficiez d'avantages exclusifs avec notre carte de fidélité ! Plus vous utilisez nos services, plus vous accumulez des points pour obtenir des récompenses spéciales. Ne manquez pas cette opportunité de simplifier votre vie tout en étant récompensé. Demandez votre carte de fidélité dès maintenant ! 
                    </p>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-6 col-sm-7 col-10 ms-auto order-1 order-lg-2">
                <div class="image-container1">
                    <img src="Admin/assets/images/acc1/5.webp" alt="" class="styled-image1">
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row align-items-center mt-5 pt-lg-5 gy-4">
            <div class="col-lg-6 col-sm-7 col-10 mx-auto">
                <div class="image-container1">
                    <img src="Admin/assets/images/acc1/6.webp" alt="" class="styled-image1">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-muted ps-lg-5">
                    <h5 class="fs-12 text-uppercase text-success">N°6</h5>
                    <h4 class="mb-3">DEMANDEZ VOTRE ESTIMATION GRATUITE ET SANS ENGAGEMENT</h4>
                    <p class="mb-4">
                        Nous fournissons un service d’estimation gratuite, en effet vous pouvez nous demander un prix approximatif de nos service d’entretien ménager par téléphone ou un prix exact à travers une visite des lieux qui sera faite par un de nos opérateurs et sans aucun frais ni aucun engagement.
                    </p>                    
                    <p class="mb-4">
                        Nous sommes fiers de fournir des services d'entretien ménager de qualité à des prix compétitifs. Contactez-nous aujourd'hui pour demander votre estimation gratuite et découvrir comment nous pouvons vous aider à garder votre espace propre et bien entretenu. 
                    </p>                    
                    <p class="mb-4">
                        Il faut noter qu’une visite d’estimation est la meilleur solution pour avoir un prix exact mais aussi pour avoir des réponses à toutes vos questions directement du préposé qui sera en charge de votre service d’entretien ménager.
                    </p> 
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row align-items-center gy-4">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="text-muted">
                    <h5 class="fs-12 text-uppercase text-success">N°7</h5>
                    <h4 class="mb-3" style='text-transform: uppercase;'>LE MEILLEUR MÉNAGE À QUELQUES CLIQUES</h4>
                    <p class="mb-4 ff-secondary">
                        À la différence des plateformes classiques d'entretien ménager, chez Y CLEAN, nous mettons l'accent sur votre tranquillité d'esprit. Plus besoin de passer des appels interminables ! Optez pour la simplicité en choisissant le moment idéal pour votre ménage et effectuez le paiement en ligne en toute facilité via notre site. Votre confort est notre priorité.
                    </p>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-6 col-sm-7 col-10 ms-auto order-1 order-lg-2">
                <div class="image-container1">
                    <img src="Admin/assets/images/acc1/7.webp" alt="" class="styled-image1">
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- start wallet -->
<!-- start Work Process -->
<section class="section bg-light" id="creators">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2 class="mb-3 fw-semibold lh-base">VOTRE AVIS NOUS INTÉRESSE</h2>
                </div>
            </div>
        </div><!-- end row -->
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shink-0">
                                <img src="Admin/assets/images/avis/1.webp" alt="" class="avatar-sm object-fit-cover rounded" />
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <h5 class="mb-1">Marie</h5>
                                <h6 class="text-muted"><i class="mdi mdi-calendar text-primary fs-14"></i> 2023-04-21</h6>
                                
                                <p class="text-muted mb-0">Les nettoyeurs ont été très attentifs aux détails. Ils ont pris le temps de nettoyer chaque pièce de ma maison. Le résultat était impressionnant, et je suis ravi de la qualité de leur service.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shink-0">
                                <img src="Admin/assets/images/avis/2.webp" alt="" class="avatar-sm object-fit-cover rounded">
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <h5 class="mb-1">Luck</h5>
                                <h6 class="text-muted"><i class="mdi mdi-calendar text-primary fs-14"></i> 2023-06-05</h6>
                                <p class="text-muted mb-0">On a enfin trouvé un service de ménage fiable et efficace. équipe au top!
                                On recommande!</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shink-0">
                                <img src="Admin/assets/images/avis/3.webp" alt="" class="avatar-sm object-fit-cover rounded">
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <h5 class="mb-1">Alina</h5>
                                <h6 class="text-muted"><i class="mdi mdi-calendar text-primary fs-14"></i> 2023-08-15</h6>
                                <p class="text-muted mb-0">Ils ont fait un travail incroyable , Efficaces, rapides, et sympathiques. Je les recommande vivement! Je suis une cliente fidèle et je le resterai.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shink-0">
                                <div class="avatar-sm object-fit-cover rounded bg-light">
                                    <center class="text-muted h2" style="padding-top:7px;">S</center>
                                </div>
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <h5 class="mb-1">Sabrina</h5>
                                <h6 class="text-muted"><i class="mdi mdi-calendar text-primary fs-14"></i> 2024-06-26</h6>
                                <p class="text-muted mb-0">J'ai été très satisfaite de l'intervention de Y CLEAN pour leur sérieux et leur professionnalisme. L'équipe de Sami et Sarah a été très efficace et sympathique. Je recommande cette entreprise à 100 %.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shink-0">
                                <div class="avatar-sm object-fit-cover rounded bg-light">
                                    <center class="text-muted h2" style="padding-top:7px;">F</center>
                                </div>
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <h5 class="mb-1">Felicia</h5>
                                <h6 class="text-muted"><i class="mdi mdi-calendar text-primary fs-14"></i> 2024-06-23</h6>
                                <p class="text-muted mb-0">Excellent compagnie, tres professionelle, à l’heure et à l’écoute!! Ils prennent leur temps et accepte tout ce qu’on leur demande !! Les prix sont tres raisonnable</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div><!-- end container -->
</section><!-- end Work Process -->

<!-- start cta -->

<!-- end cta -->

@endsection
 