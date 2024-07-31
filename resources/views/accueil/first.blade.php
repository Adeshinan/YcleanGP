
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
<section class="section">
    <div class="container">
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
                <div>
                    <img src="Admin/assets/images/landing/features/img-2.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row align-items-center mt-5 pt-lg-5 gy-4">
            <div class="col-lg-6 col-sm-7 col-10 mx-auto">
                <div>
                    <img src="Admin/assets/images/landing/features/img-3.png" alt="" class="img-fluid">
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
                <div>
                    <img src="Admin/assets/images/landing/features/img-2.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row align-items-center mt-5 pt-lg-5 gy-4">
            <div class="col-lg-6 col-sm-7 col-10 mx-auto">
                <div>
                    <img src="Admin/assets/images/landing/features/img-3.png" alt="" class="img-fluid">
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
                <div>
                    <img src="Admin/assets/images/landing/features/img-2.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row align-items-center mt-5 pt-lg-5 gy-4">
            <div class="col-lg-6 col-sm-7 col-10 mx-auto">
                <div>
                    <img src="Admin/assets/images/landing/features/img-3.png" alt="" class="img-fluid">
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
                <div>
                    <img src="Admin/assets/images/landing/features/img-2.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- start wallet -->
<section class="section" id="wallet">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2 class="mb-3 fw-semibold lh-base">Comment ça fonctionne?</h2>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card text-center border shadow-none material-shadow">
                    <div class="card-body py-5 px-4">
                        <img src="Admin/assets/images/nft/wallet/metamask.png" alt="" height="100" class="mb-3 pb-2">
                        <h5>RÉSERVEZ EN LIGNE</h5>
                        <p class="text-muted pb-1">
                        Réservez facilement depuis votre téléphone ou votre ordinateur en moins de 2 min.     
                        </p>
                        
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-4">
                <div class="card text-center border shadow-none material-shadow">
                    <div class="card-body py-5 px-4">
                        <img src="Admin/assets/images/nft/wallet/coinbase.png" alt="" height="100" class="mb-3 pb-2">
                        <h5>RECEVEZ VOTRE CONFIRMATION</h5>
                        <p class="text-muted pb-1">
                            Vous recevrez une confirmation instantanée par courriel pour confirmer votre rendez-vous.
                        </p>
                        
                    </div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="card text-center border shadow-none material-shadow">
                    <div class="card-body py-5 px-4">
                        <img src="Admin/assets/images/nft/wallet/binance.png" alt="" height="100" class="mb-3 pb-2">
                        <h5>RELAXEZ</h5>
                        <p class="text-muted pb-1">
                            Une équipe professionnelle certifiée et formée nettoiera votre mileu en suivant une liste exhaustive de tâches. 
                        </p>
                        
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end wallet -->

<!-- start marketplace -->
<section class="section bg-light" id="marketplace">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2 class="mb-3 fw-semibold lh-base">Explore Products</h2>
                    <p class="text-muted mb-4">Collection widgets specialize in displaying many elements of the same type, such as a collection of pictures from a collection of articles.</p>
                    <ul class="nav nav-pills filter-btns justify-content-center" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-medium active" type="button" data-filter="all">All Items</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-medium" type="button" data-filter="artwork">Artwork</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-medium" type="button" data-filter="music">Music</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-medium" type="button" data-filter="games">Games</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-medium" type="button" data-filter="crypto-card">Crypto Card</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-medium" type="button" data-filter="3d-style">3d Style</button>
                        </li>
                    </ul>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-4 product-item artwork crypto-card 3d-style">
                <div class="card explore-box card-animate">
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                        <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                    </div>
                    <div class="explore-place-bid-img">
                        <img src="Admin/assets/images/nft/img-03.jpg" alt="" class="card-img-top explore-img" />
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn">
                            <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 19.29k </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Creative Filtered Portrait</a></h5>
                        <p class="text-muted mb-0">Photography</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14">
                                <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">75.3ETH</span>
                            </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">67.36 ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 product-item music crypto-card games">
                <div class="card explore-box card-animate">
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                        <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                    </div>
                    <div class="explore-place-bid-img">
                        <img src="Admin/assets/images/nft/img-02.jpg" alt="" class="card-img-top explore-img" />
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn">
                            <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 23.63k </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">The Chirstoper</a></h5>
                        <p class="text-muted mb-0">Music</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14">
                                <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">412.30ETH</span>
                            </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">394.7 ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 product-item artwork music games">
                <div class="card explore-box card-animate">
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                        <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                    </div>
                    <div class="explore-place-bid-img">
                        <img src="https://img.themesbrand.com/velzon/images/img-4.gif" alt="" class="card-img-top explore-img" />
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn">
                            <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 15.93k </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Evolved Reality</a></h5>
                        <p class="text-muted mb-0">Video</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14">
                                <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">2.75ETH</span>
                            </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">3.167 ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 product-item crypto-card 3d-style">
                <div class="card explore-box card-animate">
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                        <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                    </div>
                    <div class="explore-place-bid-img">
                        <img src="Admin/assets/images/nft/img-01.jpg" alt="" class="card-img-top explore-img" />
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn">
                            <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 14.85k </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Abstract Face Painting</a></h5>
                        <p class="text-muted mb-0">Collectibles</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14">
                                <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">122.34ETH</span>
                            </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">97.8 ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 product-item games music 3d-style">
                <div class="card explore-box card-animate">
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                        <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                    </div>
                    <div class="explore-place-bid-img">
                        <img src="Admin/assets/images/nft/img-05.jpg" alt="" class="card-img-top explore-img" />
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn">
                            <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 64.10k </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Long-tailed Macaque</a></h5>
                        <p class="text-muted mb-0">Artwork</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14">
                                <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">874.01ETH</span>
                            </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">745.14 ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 product-item artwork music crypto-card">
                <div class="card explore-box card-animate">
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                        <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                    </div>
                    <div class="explore-place-bid-img">
                        <img src="Admin/assets/images/nft/img-06.jpg" alt="" class="card-img-top explore-img" />
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn">
                            <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                        <p class="text-muted mb-0">Artwork</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14">
                                <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span class="fw-medium">41.658 ETH</span>
                            </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">34.81 ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end container -->
</section>
<!-- end marketplace -->

<!-- start features -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2 class="mb-3 fw-semibold lh-base">Create and Sell Your NFTs</h2>
                    <p class="text-muted">The process of creating an NFT may cost less than a dollar, but the process of selling it can cost up to a thousand dollars. For example, Allen Gannett, a software developer.</p>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
        
        <div class="row">
            <div class="col-lg-3">
                <div class="card shadow-none">
                    <div class="card-body">
                        <img src="Admin/assets/images/nft/wallet.png" alt="" class="avatar-sm">
                        <h5 class="mt-4">Set up your wallet</h5>
                        <p class="text-muted fs-14">You have to choose whether to use a hot wallet a cold wallet.</p>
                        <a href="#!" class="link-success fs-14">Read More <i class="ri-arrow-right-line align-bottom"></i></a>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-3">
                <div class="card shadow-none">
                    <div class="card-body">
                        <img src="Admin/assets/images/nft/money.png" alt="" class="avatar-sm">
                        <h5 class="mt-4">Create your collection</h5>
                        <p class="text-muted fs-14">Create a collection in Opensea and give it a proper art.</p>
                        <a href="#!" class="link-success fs-14">Read More <i class="ri-arrow-right-line align-bottom"></i></a>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-3">
                <div class="card shadow-none">
                    <div class="card-body">
                        <img src="Admin/assets/images/nft/add.png" alt="" class="avatar-sm">
                        <h5 class="mt-4">Add your NFT's</h5>
                        <p class="text-muted fs-14">Go to your profile icon and top right corner creation page.</p>
                        <a href="#!" class="link-success fs-14">Read More <i class="ri-arrow-right-line align-bottom"></i></a>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-3">
                <div class="card shadow-none">
                    <div class="card-body">
                        <img src="Admin/assets/images/nft/sell.png" alt="" class="avatar-sm">
                        <h5 class="mt-4">Sell Your NFT's</h5>
                        <p class="text-muted fs-14">Create a collection in Opensea and give Add items and art.</p>
                        <a href="#!" class="link-success fs-14">Read More <i class="ri-arrow-right-line align-bottom"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!-- end container -->
</section><!-- end features -->

<!-- start Discover Items-->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="d-flex align-items-center mb-5">
                    <h2 class="mb-0 fw-semibold lh-base flex-grow-1">Discover Items</h2>
                    <a href="apps-nft-explore.html" class="btn btn-primary">View All <i class="ri-arrow-right-line align-bottom"></i></a>
                </div>
            </div>
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card explore-box card-animate border">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="Admin/assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle">
                            <div class="ms-2 flex-grow-1">
                                <a href="#!"><h6 class="mb-0 fs-15">Nancy Martino</h6></a>
                                <p class="mb-0 text-muted fs-13">Owners</p>
                            </div>
                            <div class="bookmark-icon">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                        </div>
                        <div class="explore-place-bid-img overflow-hidden rounded">
                            <img src="Admin/assets/images/nft/img-05.jpg" alt="" class="explore-img w-100">
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 19.29k </p>
                            <h5 class="text-success"><i class="mdi mdi-ethereum"></i> 97.8 ETH </h5>
                            <h6 class="fs-16 mb-0"><a href="apps-nft-item-details.html">Patterns arts &amp; culture</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card explore-box card-animate border">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="Admin/assets/images/users/avatar-9.jpg" alt="" class="avatar-xs rounded-circle">
                            <div class="ms-2 flex-grow-1">
                                <a href="#!"><h6 class="mb-0 fs-15">Henry Baird</h6></a>
                                <p class="mb-0 text-muted fs-13">Creators</p>
                            </div>
                            <div class="bookmark-icon">
                                <button type="button" class="btn btn-icon" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                        </div>
                        <div class="explore-place-bid-img overflow-hidden rounded">
                            <img src="Admin/assets/images/nft/img-03.jpg" alt="" class="explore-img w-100">
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 31.64k </p>
                            <h5 class="text-success"><i class="mdi mdi-ethereum"></i> 475.23 ETH </h5>
                            <h6 class="fs-16 mb-0"><a href="apps-nft-item-details.html">Evolved Reality</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card explore-box card-animate border">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="Admin/assets/images/users/avatar-10.jpg" alt="" class="avatar-xs rounded-circle">
                            <div class="ms-2 flex-grow-1">
                                <a href="#!"><h6 class="mb-0 fs-15">Diana Kohler</h6></a>
                                <p class="mb-0 text-muted fs-13">Owners</p>
                            </div>
                            <div class="bookmark-icon">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                        </div>
                        <div class="explore-place-bid-img overflow-hidden rounded">
                            <img src="https://img.themesbrand.com/velzon/images/img-1.gif" alt="" class="img-fluid explore-img">
                            <div class="bg-overlay"></div>
                            <div class="place-bid-btn">
                                <a href="#!" class="btn btn-success"><i class="ri-auction-fill align-bottom me-1"></i> Place Bid</a>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 8.34k </p>
                            <h5 class="text-success"><i class="mdi mdi-ethereum"></i> 701.38 ETH </h5>
                            <h6 class="fs-16 mb-0"><a href="apps-nft-item-details.html">Long-tailed macaque</a></h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
<!--end Discover Items-->

<!-- start Work Process -->
<section class="section bg-light" id="creators">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2 class="mb-3 fw-semibold lh-base">Top Creator This Week</h2>
                    <p class="text-muted">NFTs are valuable because they verify the authenticity of a non-fungible asset. This makes these assets unique and one of a kind.</p>
                </div>
            </div>
        </div><!-- end row -->
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shink-0">
                                <img src="Admin/assets/images/nft/img-01.jpg" alt="" class="avatar-sm object-fit-cover rounded" />
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <a href="pages-profile.html">
                                    <h5 class="mb-1">Timothy Smith</h5>
                                </a>
                                <p class="text-muted mb-0"><i class="mdi mdi-ethereum text-primary fs-14"></i> 4,754 ETH</p>
                            </div>
                            <div>
                                <div class="dropdown float-end">
                                    <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-fill align-middle fs-16"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                        <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                    </ul>
                                </div>
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
                                <img src="Admin/assets/images/users/avatar-5.jpg" alt="" class="avatar-sm object-fit-cover rounded">
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <a href="pages-profile.html">
                                    <h5 class="mb-1">Alexis Clarke</h5>
                                </a>
                                <p class="text-muted mb-0"><i class="mdi mdi-ethereum text-primary fs-14"></i> 81,369 ETH</p>
                            </div>
                            <div>
                                <div class="dropdown float-end">
                                    <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-fill align-middle fs-16"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                        <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                    </ul>
                                </div>
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
                                <img src="Admin/assets/images/nft/img-06.jpg" alt="" class="avatar-sm object-fit-cover rounded">
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <a href="pages-profile.html">
                                    <h5 class="mb-1">Glen Matney</h5>
                                </a>
                                <p class="text-muted mb-0"><i class="mdi mdi-ethereum text-primary fs-14"></i> 13,156 ETH</p>
                            </div>
                            <div>
                                <div class="dropdown float-end">
                                    <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-fill align-middle fs-16"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                        <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shink-0">
                                <img src="https://img.themesbrand.com/velzon/images/img-5.gif" alt="" class="avatar-sm object-fit-cover rounded">
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <a href="pages-profile.html">
                                    <h5 class="mb-1">Herbert Stokes</h5>
                                </a>
                                <p class="text-muted mb-0"><i class="mdi mdi-ethereum text-primary fs-14"></i> 34,754 ETH</p>
                            </div>
                            <div>
                                <div class="dropdown float-end">
                                    <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-fill align-middle fs-16"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                        <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shink-0">
                                <img src="Admin/assets/images/users/avatar-8.jpg" alt="" class="avatar-sm object-fit-cover rounded">
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <a href="pages-profile.html">
                                    <h5 class="mb-1">Michael Morris</h5>
                                </a>
                                <p class="text-muted mb-0"><i class="mdi mdi-ethereum text-primary fs-14"></i> 13,841 ETH</p>
                            </div>
                            <div>
                                <div class="dropdown float-end">
                                    <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-fill align-middle fs-16"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                        <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shink-0">
                                <img src="Admin/assets/images/nft/img-02.jpg" alt="" class="avatar-sm object-fit-cover rounded">
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <a href="pages-profile.html">
                                    <h5 class="mb-1">James Morris</h5>
                                </a>
                                <p class="text-muted mb-0"><i class="mdi mdi-ethereum text-primary fs-14"></i> 63,710 ETH</p>
                            </div>
                            <div>
                                <div class="dropdown float-end">
                                    <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-fill align-middle fs-16"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                        <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
    </div><!-- end container -->
</section><!-- end Work Process -->

<!-- start cta -->

<!-- end cta -->

@endsection
 