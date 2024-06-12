<!doctype html>
<html lang="fr" data-layout="semibox" data-sidebar-visibility="show" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Sign Up | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="Admin/assets/images/favicon.ico">

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

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="index.html" class="d-inline-block auth-logo">
                                    <img src="Admin/assets/images/logo-light.png" alt="" height="20">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">Premium Admin & Dashboard Template</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Créer un nouveau compte</h5>
                                    <p class="text-muted">Obtenez votre compte Y CleanGP gratuit dès maintenant</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Nom et Prenoms <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="nomprenoms" id="nomprenoms" placeholder="Entrer username" required>
                                            <div class="invalid-feedback">
                                                Please enter username
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter email address" required>
                                            <div class="invalid-feedback">
                                                Please enter email
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Adresse <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="address" id="adresse" placeholder="Enter username" required>
                                            <div class="invalid-feedback">
                                                Please enter username
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Code postal <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="postal" id="postal" placeholder="Enter username" required>
                                            <div class="invalid-feedback">
                                                Please enter username
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Ville <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="ville" id="ville" placeholder="Enter username" required>
                                            <div class="invalid-feedback">
                                                Please enter username
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Numero de Téléphone <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="numero" id="numero" placeholder="Enter username" required>
                                            <div class="invalid-feedback">
                                                Please enter username
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Sexe <span class="text-danger">*</span></label>
                                           
                                            <select class="form-control" name="sexe" id="sexe" placeholder="Enter username" required id="">
                                                <option selected value="" >Choisisez le sexe</option>
                                                <option value="Masculin">Masculin</option>
                                                <option value="Féminin">Féminin</option>
                                            </select>
                                              <div class="invalid-feedback">
                                                Please enter username
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Password <span class="text-danger">*</span></label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password" name="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                <div class="invalid-feedback">
                                                    Please enter password
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-group">
                                            <label class="form-label" for="password-input">Confimer le mot de passe <span class="text-danger">*</span></label>
                                         
                                                
                                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                                            </div>
                                        </div>




                                        
                                        <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                            <h5 class="fs-13">Le mot de passe doit contenir :</h5>
                                            <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 caractères</b></p>
                                            <p id="pass-lower" class="invalid fs-12 mb-2">Au moins une lettre <b>minuscule</b> (a-z) </p>
                                            <p id="pass-upper" class="invalid fs-12 mb-2">Au moins une lettre  <b>majuscule</b> (A-Z)</p>
                                            <p id="pass-number" class="invalid fs-12 mb-0">Au moins un  <b>chiffre</b> (0-9)</p>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-secondary w-100" type="submit">Inscrire</button>
                                        </div>
                                        
                                        <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                    <h5 class="fs-13 mb-4 title text-muted">Créer un compte avec</h5>
                                            </div>

                                            <div>
                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">Déjà inscrit(e) ? <a href="auth-signin-basic.html" class="fw-semibold text-primary text-decoration-underline"> Connexion </a> </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="Admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Admin/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="Admin/assets/libs/node-waves/waves.min.js"></script>
    <script src="Admin/assets/libs/feather-icons/feather.min.js"></script>
    <script src="Admin/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="Admin/assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="Admin/assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="Admin/assets/js/pages/particles.app.js"></script>
    <!-- validation init -->
    <script src="Admin/assets/js/pages/form-validation.init.js"></script>
    <!-- password create init -->
    <script src="Admin/assets/js/pages/passowrd-create.init.js"></script>
</body>

</html>
