@extends('layouts.admin')
@section('contenu')


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Liste des Reservations</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Listjs</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Gestion des reservations en attente</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="listjs-table" id="customerList">
                                @if (Auth::user()->type_connecter != 'admin')
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            <a href="{{route('reservation.create')}}" class="btn btn-success"><i
                                                    class="ri-add-line align-bottom me-1"></i> Passer Réservation</a>
                                            <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i
                                                    class="ri-delete-bin-2-line"></i></button>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if (Auth::user()->type_connecter != 'admin')
                                <div class="table-responsive table-card mt-3 mb-1">
                                    @else
                                    <div class="table-responsive table-card mb-1">
                                        @endif
                                        <table class="table align-middle table-nowrap" id="customerTable">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col" style="width: 50px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="checkAll" value="option">
                                                        </div>
                                                    </th>
                                                    <th class="sort" data-sort="customer_name">Services</th>
                                                    @if (Auth::user()->type_connecter == "admin")
                                                    <th class="sort" data-sort="email">Nom du client</th>
                                                    @endif

                                                    <th class="sort" data-sort="email">Date</th>
                                                    <th class="sort" data-sort="email">Montant</th>
                                                    <th class="sort" data-sort="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($reservations as $reservation)

                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="chk_child" value="option1">
                                                        </div>
                                                    </th>

                                                    <td class="customer_name">{{$reservation->service->libelle}}</td>
                                                    @if (Auth::user()->type_connecter == "admin")
                                                    <td class="email">{{$reservation->user->name}}</td>
                                                    @endif
                                                    <td class="email">{{$reservation->date_visite}}</td>
                                                    <td class="email">{{$reservation->prixTotal}}$ CAD</td>


                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="show">
                                                                <a href="{{route('reservation.show',$reservation->id)}}"
                                                                    class="btn btn-sm btn-primary edit-item-btn">Détail</a>
                                                            </div>
                                                           {{--  <div class="edit">
                                                                <a href="{{route('reservation.edit',$reservation->id)}}" class="btn btn-sm btn-success edit-item-btn">Edité</a>
                                                            </div> --}}
                                                           
                                                        </div>
                                                    </td>
                                                </tr>

                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="d-flex justify-content-end">
                                            <div class="pagination-wrap hstack gap-2">

                                                {{$reservations->links()}}
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->


                <!-- end row -->


                <!-- end row -->

                <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    id="close-modal"></button>
                            </div>
                            <form class="tablelist-form" autocomplete="off" method="Post"
                                action="{{route('service.store')}}">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3" id="modal-id">
                                        <label for="id-field" class="form-label">Nom du Service</label>
                                        <input type="text" name="nom" id="nom" class="form-control"
                                            placeholder="Entrer nom " required />
                                    </div>

                                    <div class="mb-3" id="modal-id">
                                        <label for="id-field" class="form-label">Agent</label>
                                        <input type="number" name="agent" id="nom" class="form-control"
                                            placeholder="Entrer nom " />
                                    </div>

                                    <div class="mb-3" id="modal-id">
                                        <label for="id-field" class="form-label">Heure</label>
                                        <input type="number" name="heure" id="nom" class="form-control"
                                            placeholder="Entrer nom " />
                                    </div>

                                    <div class="mb-3">
                                        <label for="email-field" class="form-label">Prix du service (Avec reduction)
                                        </label>
                                        <input type="number" name="prix" id="prix" class="form-control"
                                            placeholder="Entrer le prix" />
                                        <div class="invalid-feedback">Please enter an email.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email-field" class="form-label">Prix du service (Sans reduction)
                                        </label>
                                        <input type="number" name="prixhors" id="prix" class="form-control"
                                            placeholder="Entrer le prix" />
                                        <div class="invalid-feedback">Please enter an email.</div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="button" class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" id="add-btn">Ajouter un
                                            service</button>
                                        <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    id="btn-close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mt-2 text-center">
                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                        colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px">
                                    </lord-icon>
                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                        <h4>Are you Sure ?</h4>
                                        <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                    <button type="button" class="btn w-sm btn-light"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete
                                        It!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end modal -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        @include('layouts.footer')
    </div>






    @endsection