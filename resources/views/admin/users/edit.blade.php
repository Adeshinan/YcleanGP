@extends('layouts.admin')
<base href="{{asset('Admin')}}">
@section('contenu')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="position-relative mx-n4 mt-n4">
                <div class="profile-wid-bg profile-setting-img">
                    <img src="Admin/assets/images/profile-bg.jpg" class="profile-wid-img" alt="">
                    <div class="overlay-content">
                        <div class="text-end p-3">
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-3">
                    <div class="card mt-n5">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                    <img src="Admin/assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xl img-thumbnail user-profile-image material-shadow" alt="user-profile-image">
                                    <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                        <input id="profile-img-file-input" type="" class="profile-img-file-input">
                                        <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                            <span class="avatar-title rounded-circle bg-light text-body material-shadow">
                                                <i class="ri-camera-fill"></i>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <h5 class="fs-16 mb-1">{{Auth::user()->name}}</h5>
                               
                            </div>
                        </div>
                    </div>
                 
                </div>
                <!--end col-->
                <div class="col-xxl-9">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" style="font-weight: bold">
                                        <i class="fas fa-home"></i>Information sur le titulaire du compte
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab" style="font-weight: bold">
                                        <i class="far fa-user"></i> Changer le mot de passe 
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                        <div class="card-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <form action="{{route('update.profile',Auth::user()->id)}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label" style="font-weight: bold">Nom</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="text" name="name" class="form-control" id="firstnameInput" value="{{Auth::user()->name}}" placeholder="Entrer le Nom" >
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="lastnameInput" class="form-label" style="font-weight: bold">Email</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="email" name="email" class="form-control" id="lastnameInput" value="{{Auth::user()->email}}" placeholder="Entrer l'email">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="phonenumberInput" class="form-label" style="font-weight: bold">Numero de Téléphone</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="text" name="numero" class="form-control" id="phonenumberInput" value="{{Auth::user()->numero}}" placeholder="Entrer le numero de téléphone">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label" style="font-weight: bold">Address</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="text" class="form-control" name="address" id="emailInput" value="{{Auth::user()->address}}" placeholder="Entrer l'address" >
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="JoiningdatInput" class="form-label" style="font-weight: bold">Ville</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="text" class="form-control" name="ville" id="JoiningdatInput" value="{{Auth::user()->ville}}" placeholder="Entrer la ville" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="JoiningdatInput" class="form-label" style="font-weight: bold">Postal</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="text" class="form-control" name="postal" id="JoiningdatInput"  value="{{Auth::user()->postal}}" placeholder="Entrer la boite postal" />
                                                </div>
                                            </div>
                                           
                                            
                                            <!--end col-->
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                                <!--end tab-pane-->
                                <div class="tab-pane" id="changePassword" role="tabpanel">
                                    <form action="{{route('update.pass',Auth::user()->id)}}" method="POST">
                                        @csrf
                                        <div class="row g-2">
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="oldpasswordInput" class="form-label" style="font-weight: bold">Ancien mot de passe </label>
                                                    <span class="text-danger">*</span>
                                                    <input type="password" class="form-control" name="current_password" id="oldpasswordInput" placeholder="Entrer l'ancien mot de passe">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="newpasswordInput" class="form-label" style="font-weight: bold">Nouveau mot de passe</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="password" class="form-control" name="password" id="newpasswordInput" placeholder="Entrer le nouveau mot de passe">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4 mb-3">
                                                <div>
                                                    <label for="confirmpasswordInput" class="form-label" style="font-weight: bold">Confirmer le mot de passe</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="password" class="form-control" name="password_confirmation" id="confirmpasswordInput" placeholder="Confirmer mot de passe">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12 mt-3">
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>
                                  
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div>
        <!-- container-fluid -->
    </div><!-- End Page-content -->

    @include('layouts.footer')
</div>

@endsection