@extends('layouts.admin')
@section('contenu')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">

                                    </div>
                                   
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                    Reservation Total</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <h5 class="text-success fs-14 mb-0">
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-16 fw-semibold ff-secondary mb-4"><span
                                                        class="counter-value"
                                                        data-target="{{$total_reservation}}">0</span></h4>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                    <i class="bx bx-shopping-bag text-info"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            @if (Auth::user()->type_connecter == "admin")

                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                    Reservation</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <h5 class="text-danger fs-14 mb-0">
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-2">
                                            <div>
                                                <h6 class="fs-16 fw-semibold ff-secondary mb-2">En attente : <span
                                                        class="counter-value"
                                                        data-target="{{$reservation_attente}}">0</span></h6>
                                                <h6 class="fs-16 fw-semibold ff-secondary mb-3">Valider : <span
                                                        class="counter-value" data-target="{{$reservation_valider}}">0
                                                    </span></h6>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-info-subtle rounded fs-3">
                                                    <i class="bx bx-dollar-circle text-success"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            @else
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                    Reservation en attente </p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <h5 class="text-danger fs-14 mb-0">
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h6 class="fs-16 fw-semibold ff-secondary mb-4"><span
                                                        class="counter-value"
                                                        data-target="{{$reservation_attente}}">0</span></h6>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-info-subtle rounded fs-3">
                                                    <i class="bx bx-dollar-circle text-success"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            @endif



                            @if (Auth::user()->type_connecter == "admin")


                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                    Clients</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <h5 class="text-success fs-14 mb-0">
                                                   
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-16 fw-semibold ff-secondary mb-4"><span
                                                        class="counter-value" data-target="{{$total_client}}">0</span>
                                                </h4>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-warning-subtle rounded fs-3">
                                                    <i class="bx bx-user-circle text-warning"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            @else

                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                    Reservation Valider </p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <h5 class="text-danger fs-14 mb-0">
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h6 class="fs-16 fw-semibold ff-secondary mb-4"> <span
                                                        class="counter-value" data-target="{{$reservation_valider}}">0
                                                    </span></h6>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-info-subtle rounded fs-3">
                                                    <i class="bx bx-dollar-circle text-success"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            @endif


                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                    Paiement</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <h5 class="text-muted fs-14 mb-0">

                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-2">
                                            <div>
                                                <h6 class="fs-16 fw-semibold ff-secondary mb-2">En Espèce : <span
                                                        class="counter-value"
                                                        data-target="{{$paiement_espèce}}">0</span></h6>
                                                <h6 class="fs-16 fw-semibold ff-secondary mb-3">Par Carte Bancaire :
                                                    <span class="counter-value" data-target="{{$paiement_bancaire}}">0
                                                    </span>
                                                </h6>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                    <i class="bx bx-wallet text-primary"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div> <!-- end row-->


                        @if(Auth::user()->type_connecter == 'admin')
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-header border-0 align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Revenue</h4>
                                        <div>

                                        </div>
                                    </div><!-- end card header -->



                                    <div class="card-body p-0 pb-2">
                                        <div class="w-100">
                                            <div id="customer_impression_charts"
                                                data-colors='["--vz-primary", "--vz-success", "--vz-danger"]'
                                                data-colors-minimal='["--vz-light", "--vz-primary", "--vz-info"]'
                                                data-colors-saas='["--vz-success", "--vz-info", "--vz-danger"]'
                                                data-colors-modern='["--vz-warning", "--vz-primary", "--vz-success"]'
                                                data-colors-interactive='["--vz-info", "--vz-primary", "--vz-danger"]'
                                                data-colors-creative='["--vz-warning", "--vz-primary", "--vz-danger"]'
                                                data-colors-corporate='["--vz-light", "--vz-primary", "--vz-secondary"]'
                                                data-colors-galaxy='["--vz-secondary", "--vz-primary", "--vz-primary-rgb, 0.50"]'
                                                data-colors-classic='["--vz-light", "--vz-primary", "--vz-secondary"]'
                                                data-colors-vintage='["--vz-success", "--vz-primary", "--vz-secondary"]'
                                                class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-4">
                                <!-- card -->
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Localisation</h4>
                                        <div class="flex-shrink-0">
                                            
                                        </div>
                                    </div><!-- end card header -->

                                    <!-- card body -->
                                    <div class="card-body">

                                        <div id="sales-by-locations"
                                            data-colors='["--vz-light", "--vz-success", "--vz-primary"]'
                                            data-colors-interactive='["--vz-light", "--vz-info", "--vz-primary"]'
                                            style="height: 269px" dir="ltr"></div>

                                        <div class="px-2 py-2 mt-1">
                                           


                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        @endif

                        @if (Auth::user()->type_connecter == 'Client')
                            
                        <div class="col-xl-12">
                            <!-- card -->
                            <div class="card card-height-100">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Localisation</h4>
                                    <div class="flex-shrink-0">
                                        
                                    </div>
                                </div><!-- end card header -->

                                <!-- card body -->
                                <div class="card-body">

                                    <div id="sales-by-locations"
                                        data-colors='["--vz-light", "--vz-success", "--vz-primary"]'
                                        data-colors-interactive='["--vz-light", "--vz-info", "--vz-primary"]'
                                        style="height: 269px" dir="ltr"></div>

                                    <div class="px-2 py-2 mt-1">
                                       


                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        @endif


                    </div> <!-- end .h-100-->

                </div> <!-- end col -->


            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    @include('layouts.footer')
</div>




@endsection




