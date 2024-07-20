<!doctype html>
<html lang="en" data-layout="semibox" data-sidebar-visibility="show" data-topbar="light" data-sidebar="light"
    data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Job Landing | Velzon - Admin & Dashboard Template</title>
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
                            <a class="nav-link active" href="#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#process">Process</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#categories">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#findJob">Find Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#candidates">Candidates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                    </ul>

                    <div class="">
                        <a href="auth-signin-basic.html" class="btn btn-soft-secondary"><i
                                class="ri-user-3-line align-bottom me-1"></i> Login & Register</a>
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
                            <h1 class="display-6 fw-semibold text-capitalize mb-3 lh-base">Find your next job and build
                                your dream here</h1>
                            <p class="lead text-muted lh-base mb-4">Find jobs, create trackable resumes and enrich your
                                applications. Carefully crafted after analyzing the needs of different industries.</p>
                            <form action="#" class="job-panel-filter">
                                <div class="row g-md-0 g-2">
                                    <div class="col-md-4">
                                        <div>
                                            <input type="search" id="job-title" class="form-control filter-input-box"
                                                placeholder="Job, Company name...">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-4">
                                        <div>
                                            <select class="form-control" data-choices>
                                                <option value="">Select job type</option>
                                                <option value="Full Time">Full Time</option>
                                                <option value="Part Time">Part Time</option>
                                                <option value="Freelance">Freelance</option>
                                                <option value="Internship">Internship</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-4">
                                        <div class="h-100">
                                            <button class="btn btn-primary submit-btn w-100 h-100" type="submit"><i
                                                    class="ri-search-2-line align-bottom me-1"></i> Find Job</button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>

                            <ul class="treding-keywords list-inline mb-0 mt-3 fs-13">
                                <li class="list-inline-item text-danger fw-semibold"><i
                                        class="mdi mdi-tag-multiple-outline align-middle"></i> Trending Keywords:</li>
                                <li class="list-inline-item"><a href="javascript:void(0)">Design,</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)">Development,</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)">Manager,</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)">Senior</a></li>
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
                                    <h5 class="fs-15 lh-base mb-0">Work Inquiry from velzon</h5>
                                </div>
                            </div>

                            <div class="card p-3 rounded shadow-lg application-box">
                                <h5 class="fs-15 lh-base mb-3">Applications</h5>
                                <div class="avatar-group">
                                    <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                        data-bs-trigger="hover" data-bs-placement="top" title="Brent Gonzalez">
                                        <div class="avatar-xs">
                                            <img src="Admin/assets/images/users/avatar-3.jpg" alt=""
                                                class="rounded-circle img-fluid">
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                        data-bs-trigger="hover" data-bs-placement="top" title="Ellen Smith">
                                        <div class="avatar-xs">
                                            <div class="avatar-title rounded-circle bg-danger">
                                                S
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                        data-bs-trigger="hover" data-bs-placement="top" title="Ellen Smith">
                                        <div class="avatar-xs">
                                            <img src="Admin/assets/images/users/avatar-10.jpg" alt=""
                                                class="rounded-circle img-fluid">
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                        data-bs-trigger="hover" data-bs-placement="top">
                                        <div class="avatar-xs">
                                            <div class="avatar-title rounded-circle bg-success">
                                                Z
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                        data-bs-trigger="hover" data-bs-placement="top" title="Brent Gonzalez">
                                        <div class="avatar-xs">
                                            <img src="Admin/assets/images/users/avatar-9.jpg" alt=""
                                                class="rounded-circle img-fluid">
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                        data-bs-trigger="hover" data-bs-placement="top" title="More Appliances">
                                        <div class="avatar-xs">
                                            <div
                                                class="avatar-title fs-13 rounded-circle bg-light border-dashed border text-primary">
                                                2k+
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <img src="Admin/assets/images/job-profile2.png" alt="" class="user-img">

                            <div class="circle-effect">
                                <div class="circle"></div>
                                <div class="circle2"></div>
                                <div class="circle3"></div>
                                <div class="circle4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end hero section -->

        <section class="section" id="process">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 ff-secondary fw-semibold lh-base">How <span class="text-primary">it's
                                    work</span> creative jobs & quickly features</h1>
                            <p class="text-muted">A creative person has the ability to invent and develop original
                                ideas, especially in the arts. Like so many creative people, he was never satisfied.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-body p-4">
                                <h1 class="fw-bold display-5 ff-secondary mb-4 text-secondary position-relative">
                                    <div class="job-icon-effect"></div>
                                    <span>1</span>
                                </h1>
                                <h6 class="fs-17 mb-2">Register Account</h6>
                                <p class="text-muted mb-0 fs-15">First, You need to make a account.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card shadow-none">
                            <div class="card-body p-4">
                                <h1 class="fw-bold display-5 ff-secondary mb-4 text-success position-relative">
                                    <div class="job-icon-effect"></div>
                                    <span>2</span>
                                </h1>
                                <h6 class="fs-17 mb-2">Create Resume</h6>
                                <p class="text-muted mb-0 fs-15">Create a resume for your job.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card shadow-none">
                            <div class="card-body p-4">
                                <h1 class="fw-bold display-5 ff-secondary mb-4 text-success position-relative">
                                    <div class="job-icon-effect"></div>
                                    <span>3</span>
                                </h1>

                                <h6 class="fs-17 mb-2">Find Job</h6>
                                <p class="text-muted mb-0 fs-15">Search for your dream jobs from velzon.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card shadow-none">
                            <div class="card-body p-4">
                                <h1 class="fw-bold display-5 ff-secondary mb-4 text-success position-relative">
                                    <div class="job-icon-effect"></div>
                                    <span>4</span>
                                </h1>
                                <h6 class="fs-17 mb-2">Apply Job</h6>
                                <p class="text-muted mb-0 fs-15">Apply to the company and wait for interview.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end container-->
        </section>

        <!-- start features -->
        <section class="section">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between justify-content-center gy-4">
                    <div class="col-lg-5 col-sm-7">
                        <div class="about-img-section mb-5 mb-lg-0 text-center">
                            <div class="card rounded shadow-lg inquiry-box d-none d-lg-block">
                                <div class="card-body d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <div
                                            class="avatar-title bg-secondary-subtle text-secondary rounded-circle fs-18">
                                            <i class="ri-briefcase-2-line"></i>
                                        </div>
                                    </div>
                                    <h5 class="fs-15 lh-base mb-0">Search Over <span
                                            class="text-secondary fw-semibold">1,00,000+</span> Jobs</h5>
                                </div>
                            </div>

                            <div class="card feedback-box">
                                <div class="card-body d-flex shadow-lg">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="Admin/assets/images/users/avatar-10.jpg" alt=""
                                            class="avatar-sm rounded-circle">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="fs-14 lh-base mb-0">Tonya Noble</h5>
                                        <p class="text-muted fs-11 mb-1">UI/UX Designer</p>

                                        <div class="text-warning">
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="Admin/assets/images/about.jpg" alt="" class="img-fluid mx-auto rounded-3" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-muted">
                            <h1 class="mb-3 lh-base">Find Your <span class="text-primary">Dream Job</span> in One Place
                            </h1>
                            <p class="ff-secondary fs-16 mb-2">The first step in finding your <b>dream job </b> is
                                deciding where to look for first-hand insight. Contact professionals who are already
                                working in industries or positions that interest you.</p>
                            <p class="ff-secondary fs-16">Schedule informational interviews and phone calls or ask for
                                the opportunity to shadow them on the job.</p>

                            <div class="vstack gap-2 mb-4 pb-1">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="avatar-xs icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                <i class="ri-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">Dynamic Content</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="avatar-xs icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                <i class="ri-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">Setup plugin's information.</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="avatar-xs icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                <i class="ri-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">Themes customization information</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <a href="#!" class="btn btn-primary">Find Your Jobs <i
                                        class="ri-arrow-right-line align-bottom ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end features -->

        <!-- start services -->
        <section class="section bg-light" id="categories">


            <div class="container col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Faites une reservation
                            </h1>
                            <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with
                                the right freelancers.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->



                <div class="row">
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Input Example</h4>

                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="live-preview">

                                    <form action="{{ route('reservation.store') }}" method="POST">
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
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Input Example</h4>
                            </div>
                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">
                                        <h4 class="text-center">Prix de la Réservation</h4>
                                        <div>
                                            <div id="results" style="display: none"></div>
                                           
                                            <h6>Prix Total HT : <span id="prixTotalHT">0</span>$ CAD
                                            </h6>
                                            <h6>TPS / TVQ : <span id="taxes">0</span>$ CAD</h6>
                                            <h6>Prix Total TTC : <span id="prixTotalTTC">0</span>$ CAD
                                            </h6>
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
                            <h4 class="text-white mb-2">Ready to Started?</h4>
                            <p class="text-white-50 mb-0">Create new account and refer your friend</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-auto">
                        <div>
                            <a href="#!" class="btn bg-gradient btn-secondary">Create Free Account</a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end cta -->

        <section class="section" id="findJob">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Find Your <span
                                    class="text-primary">Career</span> You Deserve it</h1>
                            <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with
                                the right freelancers.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-warning-subtle rounded">
                                            <img src="Admin/assets/images/companies/img-3.png" alt=""
                                                class="avatar-xxs">
                                        </div>
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="#!">
                                            <h5>UI/UX designer</h5>
                                        </a>
                                        <ul class="list-inline text-muted mb-3">
                                            <li class="list-inline-item">
                                                <i class="ri-building-line align-bottom me-1"></i> Nesta Technologies
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-map-pin-2-line align-bottom me-1"></i> USA
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-money-dollar-circle-line align-bottom me-1"></i> $23k - 35k
                                            </li>
                                        </ul>
                                        <div class="hstack gap-2">
                                            <span class="badge bg-success-subtle text-success">Design</span>
                                            <span class="badge bg-danger-subtle text-danger">UI/UX</span>
                                            <span class="badge bg-primary-subtle text-primary">Adobe XD</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-ghost-primary btn-icon custom-toggle"
                                            data-bs-toggle="button">
                                            <span class="icon-on"><i class="ri-bookmark-line"></i></span>
                                            <span class="icon-off"><i class="ri-bookmark-fill"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-primary-subtle rounded">
                                            <img src="Admin/assets/images/companies/img-2.png" alt=""
                                                class="avatar-xxs">
                                        </div>
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="#!">
                                            <h5>Product Sales Specialist</h5>
                                        </a>
                                        <ul class="list-inline text-muted mb-3">
                                            <li class="list-inline-item">
                                                <i class="ri-building-line align-bottom me-1"></i> Digitech Galaxy
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-map-pin-2-line align-bottom me-1"></i> Spain
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-money-dollar-circle-line align-bottom me-1"></i> $10k - 15k
                                            </li>
                                        </ul>
                                        <div class="hstack gap-2">
                                            <span class="badge bg-primary-subtle text-primary">Sales</span>
                                            <span class="badge bg-secondary-subtle text-secondary">Product</span>
                                            <span class="badge bg-info-subtle text-info">Business</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="btn btn-ghost-primary btn-icon custom-toggle active"
                                            data-bs-toggle="button">
                                            <span class="icon-on"><i class="ri-bookmark-line"></i></span>
                                            <span class="icon-off"><i class="ri-bookmark-fill"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-danger-subtle rounded">
                                            <img src="Admin/assets/images/companies/img-4.png" alt=""
                                                class="avatar-xxs">
                                        </div>
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="#!">
                                            <h5>Marketing Director</h5>
                                        </a>
                                        <ul class="list-inline text-muted mb-3">
                                            <li class="list-inline-item">
                                                <i class="ri-building-line align-bottom me-1"></i> Meta4Systems
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-map-pin-2-line align-bottom me-1"></i> Sweden
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-money-dollar-circle-line align-bottom me-1"></i> $20k - 25k
                                            </li>
                                        </ul>
                                        <div class="hstack gap-2">
                                            <span class="badge bg-warning-subtle text-warning">Marketing</span>
                                            <span class="badge bg-info-subtle text-info">Business</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="btn btn-ghost-primary btn-icon custom-toggle active"
                                            data-bs-toggle="button">
                                            <span class="icon-on"><i class="ri-bookmark-line"></i></span>
                                            <span class="icon-off"><i class="ri-bookmark-fill"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-success-subtle rounded">
                                            <img src="Admin/assets/images/companies/img-9.png" alt=""
                                                class="avatar-xxs">
                                        </div>
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="#!">
                                            <h5>Product Designer</h5>
                                        </a>
                                        <ul class="list-inline text-muted mb-3">
                                            <li class="list-inline-item">
                                                <i class="ri-building-line align-bottom me-1"></i> Themesbrand
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-map-pin-2-line align-bottom me-1"></i> USA
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-money-dollar-circle-line align-bottom me-1"></i> $40k+
                                            </li>
                                        </ul>
                                        <div class="hstack gap-2">
                                            <span class="badge bg-success-subtle text-success">Design</span>
                                            <span class="badge bg-danger-subtle text-danger">UI/UX</span>
                                            <span class="badge bg-primary-subtle text-primary">Adobe XD</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-ghost-primary btn-icon custom-toggle"
                                            data-bs-toggle="button">
                                            <span class="icon-on"><i class="ri-bookmark-line"></i></span>
                                            <span class="icon-off"><i class="ri-bookmark-fill"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-info-subtle rounded">
                                            <img src="Admin/assets/images/companies/img-1.png" alt=""
                                                class="avatar-xxs">
                                        </div>
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="#!">
                                            <h5>Project Manager</h5>
                                        </a>
                                        <ul class="list-inline text-muted mb-3">
                                            <li class="list-inline-item">
                                                <i class="ri-building-line align-bottom me-1"></i> Syntyce Solutions
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-map-pin-2-line align-bottom me-1"></i> Germany
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-money-dollar-circle-line align-bottom me-1"></i> $18k - 26k
                                            </li>
                                        </ul>
                                        <div class="hstack gap-2">
                                            <span class="badge bg-danger-subtle text-danger">HR</span>
                                            <span class="badge bg-success-subtle text-success">Manager</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-ghost-primary btn-icon custom-toggle"
                                            data-bs-toggle="button">
                                            <span class="icon-on"><i class="ri-bookmark-line"></i></span>
                                            <span class="icon-off"><i class="ri-bookmark-fill"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-success-subtle rounded">
                                            <img src="Admin/assets/images/companies/img-7.png" alt=""
                                                class="avatar-xxs">
                                        </div>
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="#!">
                                            <h5>Business Associate</h5>
                                        </a>
                                        <ul class="list-inline text-muted mb-3">
                                            <li class="list-inline-item">
                                                <i class="ri-building-line align-bottom me-1"></i> Nesta Technologies
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-map-pin-2-line align-bottom me-1"></i> USA
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-money-dollar-circle-line align-bottom me-1"></i> $23k - 35k
                                            </li>
                                        </ul>
                                        <div class="hstack gap-2">
                                            <span class="badge bg-success-subtle text-success">Design</span>
                                            <span class="badge bg-danger-subtle text-danger">UI/UX</span>
                                            <span class="badge bg-primary-subtle text-primary">Adobe XD</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="btn btn-ghost-primary btn-icon custom-toggle active"
                                            data-bs-toggle="button">
                                            <span class="icon-on"><i class="ri-bookmark-line"></i></span>
                                            <span class="icon-off"><i class="ri-bookmark-fill"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-info-subtle rounded">
                                            <img src="Admin/assets/images/companies/img-8.png" alt=""
                                                class="avatar-xxs">
                                        </div>
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="#!">
                                            <h5>Recruiting Coordinator</h5>
                                        </a>
                                        <ul class="list-inline text-muted mb-3">
                                            <li class="list-inline-item">
                                                <i class="ri-building-line align-bottom me-1"></i> Zoetic Fashion
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-map-pin-2-line align-bottom me-1"></i> Namibia
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-money-dollar-circle-line align-bottom me-1"></i> $12k - 15k
                                            </li>
                                        </ul>
                                        <div class="hstack gap-2">
                                            <span class="badge bg-success-subtle text-success">Full Time</span>
                                            <span class="badge bg-info-subtle text-info">Remote</span>
                                            <span class="badge bg-primary-subtle text-primary">Fashion</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="btn btn-ghost-primary btn-icon custom-toggle active"
                                            data-bs-toggle="button">
                                            <span class="icon-on"><i class="ri-bookmark-line"></i></span>
                                            <span class="icon-off"><i class="ri-bookmark-fill"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-warning-subtle rounded">
                                            <img src="Admin/assets/images/companies/img-5.png" alt=""
                                                class="avatar-xxs">
                                        </div>
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="#!">
                                            <h5>Customs officer</h5>
                                        </a>
                                        <ul class="list-inline text-muted mb-3">
                                            <li class="list-inline-item">
                                                <i class="ri-building-line align-bottom me-1"></i> Nesta Technologies
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-map-pin-2-line align-bottom me-1"></i> USA
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-money-dollar-circle-line align-bottom me-1"></i> $41k - 45k
                                            </li>
                                        </ul>
                                        <div class="hstack gap-2">
                                            <span class="badge bg-success-subtle text-success">Design</span>
                                            <span class="badge bg-danger-subtle text-danger">UI/UX</span>
                                            <span class="badge bg-primary-subtle text-primary">Adobe XD</span>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-ghost-primary btn-icon custom-toggle"
                                            data-bs-toggle="button">
                                            <span class="icon-on"><i class="ri-bookmark-line"></i></span>
                                            <span class="icon-off"><i class="ri-bookmark-fill"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="text-center mt-4">
                            <a href="#!" class="btn btn-ghost-primary">View More Jobs <i
                                    class="ri-arrow-right-line align-bottom"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- start find jobs -->
        <section class="section">
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="text-muted mt-5 mt-lg-0">
                            <h5 class="fs-12 text-uppercase text-secondary">Hot Featured Company</h5>
                            <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Get <span
                                    class="text-primary">10,000+</span> Featured Companies</h1>
                            <p class="ff-secondary mb-2">The demand for content writing services is growing. This is
                                because content is required in almost every industry. <b>Many companies have discovered
                                    how effective content marketing is.</b> This is a major reason for this increase in
                                demand.</p>
                            <p class="mb-4 ff-secondary">A Content Writer is a professional who writes informative and
                                engaging articles to help brands showcase their products.</p>

                            <div class="mt-4">
                                <a href="index.html" class="btn btn-primary">View More Companies <i
                                        class="ri-arrow-right-line align-middle ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-sm-7 col-10 ms-lg-auto mx-auto order-1 order-lg-2">
                        <div>
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <button type="button" class="btn btn-icon btn-soft-primary float-end"
                                        data-bs-toggle="button" aria-pressed="true"><i
                                            class="mdi mdi-cards-heart fs-16"></i></button>
                                    <div class="avatar-sm mb-4">
                                        <div class="avatar-title bg-secondary-subtle rounded">
                                            <img src="Admin/assets/images/companies/img-1.png" alt=""
                                                class="avatar-xxs">
                                        </div>
                                    </div>
                                    <a href="#!">
                                        <h5>New Web designer</h5>
                                    </a>
                                    <p class="text-muted">Themesbrand</p>

                                    <div class="d-flex gap-4 mb-3">
                                        <div>
                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i>
                                            Escondido,California
                                        </div>

                                        <div>
                                            <i class="ri-time-line text-primary me-1 align-bottom"></i> 3 min ago
                                        </div>
                                    </div>

                                    <p class="text-muted">As a Product Designer, you will work within a Product Delivery
                                        Team fused with UX, engineering, product and data talent.</p>

                                    <div class="hstack gap-2">
                                        <span class="badge bg-success-subtle text-success">Full Time</span>
                                        <span class="badge bg-primary-subtle text-primary">Freelance</span>
                                        <span class="badge bg-danger-subtle text-danger">Urgent</span>
                                    </div>

                                    <div class="mt-4 hstack gap-2">
                                        <a href="#!" class="btn btn-soft-primary w-100">Apply Job</a>
                                        <a href="#!" class="btn btn-soft-success w-100">Overview</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-lg bg-info mb-0 features-company-widgets rounded-3">
                                <div class="card-body">
                                    <h5 class="text-white fs-16 mb-4">10,000+ Featured Companies</h5>

                                    <div class="d-flex gap-1">
                                        <a href="javascript: void(0);" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                            data-bs-placement="top" title="Brent Gonzalez">
                                            <div class="avatar-xs">
                                                <div class="avatar-title bg-light bg-opacity-25 rounded-circle">
                                                    <img src="Admin/assets/images/companies/img-5.png" alt=""
                                                        height="15">
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript: void(0);" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                            data-bs-placement="top" title="Brent Gonzalez">
                                            <div class="avatar-xs">
                                                <div class="avatar-title bg-light bg-opacity-25 rounded-circle">
                                                    <img src="Admin/assets/images/companies/img-2.png" alt=""
                                                        height="15">
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript: void(0);" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                            data-bs-placement="top" title="Brent Gonzalez">
                                            <div class="avatar-xs">
                                                <div class="avatar-title bg-light bg-opacity-25 rounded-circle">
                                                    <img src="Admin/assets/images/companies/img-8.png" alt=""
                                                        height="15">
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript: void(0);" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                            data-bs-placement="top" title="Brent Gonzalez">
                                            <div class="avatar-xs">
                                                <div class="avatar-title bg-light bg-opacity-25 rounded-circle">
                                                    <img src="Admin/assets/images/companies/img-7.png" alt=""
                                                        height="15">
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript: void(0);" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                            data-bs-placement="top" title="More Companies">
                                            <div class="avatar-xs">
                                                <div
                                                    class="avatar-title fs-11 rounded-circle bg-light bg-opacity-25 text-white">
                                                    1k+
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end find jobs -->

        <!-- start candidates -->
        <section class="section bg-light" id="candidates">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Hire Experts <span
                                    class="text-primary">Team</span></h1>
                            <p class="text-muted mb-4">Hiring experts costs more per hour than hiring entry- or
                                mid-level freelancers, but they can usually get the work done faster—and better.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper candidate-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card text-center">
                                        <div class="card-body p-4">
                                            <img src="Admin/assets/images/users/avatar-2.jpg" alt=""
                                                class="rounded-circle avatar-md mx-auto d-block">
                                            <h5 class="fs-17 mt-3 mb-2">Nancy Martino</h5>
                                            <p class="text-muted fs-13 mb-3">Creative Designer</p>

                                            <p class="text-muted mb-4 fs-14">
                                                <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i>
                                                Escondido, California
                                            </p>

                                            <a href="#!" class="btn btn-primary w-100">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card text-center">
                                        <div class="card-body p-4">
                                            <img src="Admin/assets/images/users/avatar-3.jpg" alt=""
                                                class="rounded-circle avatar-md mx-auto d-block">
                                            <h5 class="fs-17 mt-3 mb-2">Glen Matney</h5>
                                            <p class="text-muted fs-13 mb-3">Marketing Director</p>

                                            <p class="text-muted mb-4 fs-14">
                                                <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i>
                                                Escondido, California
                                            </p>

                                            <a href="#!" class="btn btn-primary w-100">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card text-center">
                                        <div class="card-body p-4">
                                            <img src="Admin/assets/images/users/avatar-10.jpg" alt=""
                                                class="rounded-circle avatar-md mx-auto d-block">
                                            <h5 class="fs-17 mt-3 mb-2">Alexis Clarke</h5>
                                            <p class="text-muted fs-13 mb-3">Product Manager</p>

                                            <p class="text-muted mb-4 fs-14">
                                                <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i>
                                                Escondido, California
                                            </p>

                                            <a href="#!" class="btn btn-primary w-100">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card text-center">
                                        <div class="card-body p-4">
                                            <img src="Admin/assets/images/users/avatar-8.jpg" alt=""
                                                class="rounded-circle avatar-md mx-auto d-block" />
                                            <h5 class="fs-17 mt-3 mb-2">James Price</h5>
                                            <p class="text-muted fs-13 mb-3">Product Designer</p>

                                            <p class="text-muted mb-4 fs-14">
                                                <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i>
                                                Escondido, California
                                            </p>

                                            <a href="#!" class="btn btn-primary w-100">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card text-center">
                                        <div class="card-body p-4">
                                            <img src="Admin/assets/images/users/avatar-5.jpg" alt=""
                                                class="rounded-circle avatar-md mx-auto d-block" />
                                            <h5 class="fs-17 mt-3 mb-2">Michael Morris</h5>
                                            <p class="text-muted fs-13 mb-3">Full Stack Developer</p>

                                            <p class="text-muted mb-4 fs-14">
                                                <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i>
                                                Escondido, California
                                            </p>

                                            <a href="#!" class="btn btn-primary w-100">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </section>
        <!-- end candidates -->

        <!-- start blog -->
        <section class="section" id="blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Our Latest <span
                                    class="text-primary">News</span></h1>
                            <p class="text-muted mb-4">We thrive when coming up with innovative ideas but also
                                understand that a smart concept should be supported with faucibus sapien odio measurable
                                results.</p>
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
                                <ul class="list-inline fs-14 text-muted">
                                    <li class="list-inline-item">
                                        <i class="ri-calendar-line align-bottom me-1"></i> 30 Oct, 2021
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ri-message-2-line align-bottom me-1"></i> 364 Comment
                                    </li>
                                </ul>
                                <a href="javascript:void(0);">
                                    <h5>Design your apps in your own way ?</h5>
                                </a>
                                <p class="text-muted fs-14">One disadvantage of Lorum Ipsum is that in Latin certain
                                    letters appear more frequently than others.</p>

                                <div>
                                    <a href="#!" class="link-secondary">Learn More <i
                                            class="ri-arrow-right-line align-bottom ms-1"></i></a>
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
                                <ul class="list-inline fs-14 text-muted">
                                    <li class="list-inline-item">
                                        <i class="ri-calendar-line align-bottom me-1"></i> 02 Oct, 2021
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ri-message-2-line align-bottom me-1"></i> 245 Comment
                                    </li>
                                </ul>
                                <a href="javascript:void(0);">
                                    <h5>Smartest Applications for Business ?</h5>
                                </a>
                                <p class="text-muted fs-14">Due to its widespread use as filler text for layouts,
                                    non-readability is of great importance: human perception.</p>

                                <div>
                                    <a href="#!" class="link-secondary">Learn More <i
                                            class="ri-arrow-right-line align-bottom ms-1"></i></a>
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
                                <ul class="list-inline fs-14 text-muted">
                                    <li class="list-inline-item">
                                        <i class="ri-calendar-line align-bottom me-1"></i> 23 Sept, 2021
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ri-message-2-line align-bottom me-1"></i> 354 Comment
                                    </li>
                                </ul>
                                <a href="javascript:void(0);">
                                    <h5>How apps is changing the IT world</h5>
                                </a>
                                <p class="text-muted fs-14">Intrinsically incubate intuitive opportunities and real-time
                                    potentialities Appropriately communicate one-to-one technology.</p>

                                <div>
                                    <a href="#!" class="link-secondary">Learn More <i
                                            class="ri-arrow-right-line align-bottom ms-1"></i></a>
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
        <section class="py-5 bg-primary position-relative">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-sm">
                        <div>
                            <h4 class="text-white fw-semibold">Get New Jobs Notification!</h4>
                            <p class="text-white text-opacity-75 mb-0">Subscribe & get all related jobs notification.
                            </p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-auto">
                        <button class="btn btn-secondary" type="button">Subscribe Now <i
                                class="ri-arrow-right-line align-bottom"></i></button>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="Admin/assets/js/pages/select2.init.js"></script>

</body>

</html>