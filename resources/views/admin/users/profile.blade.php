@extends('layouts.admin')
@section('contenu')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="profile-foreground position-relative mx-n4 mt-n4">
                <div class="profile-wid-bg">
                    <img src="Admin/assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
                </div>
            </div>
            <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
                <div class="row g-4">
                    <div class="col-auto">
                        <div class="avatar-lg">
                            <img src="Admin/assets/images/users/avatar-1.jpg" alt="user-img" class="img-thumbnail rounded-circle" />
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <div class="p-2">
                            <h3 class="text-white mb-1">{{Auth::user()->name}}</h3>
                            <p class="text-white text-opacity-75"></p>
                            <div class="hstack text-white-50 gap-1">
                                <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>{{Auth::user()->ville}}, {{Auth::user()->address}}</div>
                                <div>
                                    <i class="ri-building-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>{{Auth::user()->postal}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a class="btn btn-secondary" href="{{route('edit.profile',Auth::user()->id)}}">Modifier le profile</a>
                    </div>
                    <!--end col-->
                    <div class="col-12 col-lg-auto order-last order-lg-0">
                       
                    </div>
                    <!--end col-->

                </div>
                <!--end row-->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div>
                       
                        <!-- Tab panes -->
                        <div class="tab-content pt-4 text-muted">
                            <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                <div class="row">
                                    <div class="col-xxl-4">
                                        

                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">Information</h5>
                                                <div class="table-responsive">
                                                    <table class="table table-borderless mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Nom et prénom :</th>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Contact :</th>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">E-mail :</th>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Localisation :</th>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Date de création du compte :</th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->

                                 
                                        <!--end card-->

                                        
                                        <!--end card-->
                                    </div>
                                   
                                    <div class="col-xxl-8">
                                        

                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3"></h5>
                                                <div class="table-responsive mt-4">
                                                    <table class="table table-borderless mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="ps-0" scope="row">{{Auth::user()->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-0" scope="row">{{Auth::user()->numero}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-0" scope="row">{{Auth::user()->email}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-0" scope="row">{{Auth::user()->address}},{{Auth::user()->ville}} ,{{Auth::user()->postal}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-0" scope="row">{{Auth::user()->created_at}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->

                                 
                                        <!--end card-->

                                        
                                        <!--end card-->
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                           
                            <!--end tab-pane-->
                            
                            <!--end tab-pane-->
                            
                            <!--end tab-pane-->
                        </div>
                        <!--end tab-content-->
                    </div>
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