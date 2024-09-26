@extends('layouts.admin')
@section('contenu')


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{$page}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Extra</a></li>
                                <li class="breadcrumb-item active">{{$page}}</li>
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
                            <h4 class="card-title mb-0">Gestion des extras</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="listjs-table" id="customerList">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                                id="create-btn" data-bs-target="#showModal"><i
                                                    class="ri-add-line align-bottom me-1"></i> Ajouter</button>
                                           
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control search" placeholder="Search...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" style="width: 50px;">

                                                </th>
                                                <th class="sort" data-sort="customer_name">Nom de l'extra</th>
                                                <th class="sort" data-sort="phone">Prix de l'extra</th>
                                                <th class="sort" data-sort="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            @foreach ($extras as $extra)

                                            <tr>
                                                <th scope="row">

                                                </th>
                                                <td class="id" style="display:none;"><a href="javascript:void(0);"
                                                        class="fw-medium link-primary">#VZ2101</a></td>
                                                <td class="customer_name">{{$extra->libelle}}</td>
                                                <td class="phone">{{$extra->prix}}</td>

                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <button class="btn btn-sm btn-success edit-item-btn"
                                                                data-bs-toggle="modal" data-bs-target="#editModal"
                                                                data-id="{{$extra->id}}"
                                                                data-libelle="{{$extra->libelle}}"
                                                                data-prix="{{$extra->prix}}">Modifier</button>
                                                        </div>
                                                       
                                                    </div>
                                                </td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end">
                                        <div class="pagination-wrap hstack gap-2">
                                            {{$extras->links()}}
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

            <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-light p-3">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                id="close-modal"></button>
                        </div>
                        <form class="tablelist-form" autocomplete="off" method="Post" action="{{route('extra.store')}}">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3" id="modal-id">
                                    <label for="id-field" class="form-label">Nom de l'extra</label>
                                    <input type="text" name="libelle" id="libelle" class="form-control"
                                        placeholder="Entrer le nom " required />
                                </div>




                                <div class="mb-3">
                                    <label for="email-field" class="form-label">Prix de l'extra</label>
                                    <input type="number" name="prix" id="prix" class="form-control"
                                        placeholder="Entrer le prix" />
                                    <div class="invalid-feedback">Please enter an email.</div>
                                </div>



                            </div>
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success" id="add-btn">Ajouter un
                                        service</button>
                                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>




            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-light p-3">
                            <h5 class="modal-title" id="exampleModalLabel">Modifier un Extra </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                id="close-modal"></button>
                        </div>
                        <form class="tablelist-form" autocomplete="off" method="POST"
                            action="{{ route('extra.update', ':id') }}">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <input type="hidden" name="id" id="edit-id">
                                <div class="mb-3">
                                    <label for="edit-libelle" class="form-label">Nom de l'extra</label>
                                    <input type="text" name="libelle" id="edit-libelle" class="form-control" required />
                                </div>
                                <div class="mb-3">
                                    <label for="edit-pourcentage" class="form-label">Prix</label>
                                    <input type="number" name="prix" id="edit-prix" class="form-control"
                                        placeholder="Entrer le prix" required />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-success">Modifier</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    @include('layouts.footer')
</div>


@endsection

@include('profile.partials.deletemodal')


<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var editModal = document.getElementById('editModal');
        editModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');
            var libelle = button.getAttribute('data-libelle');
            var prix = button.getAttribute('data-prix');

            var modalTitle = editModal.querySelector('.modal-title');
            var modalBodyInputId = editModal.querySelector('.modal-body input#edit-id');
            var modalBodyInputLibelle = editModal.querySelector('.modal-body input#edit-libelle');
            var modalBodyInputPrix = editModal.querySelector('.modal-body input#edit-prix');
            var form = editModal.querySelector('form');

            modalTitle.textContent = 'Modifier un Extra';
            modalBodyInputId.value = id;
            modalBodyInputLibelle.value = libelle;
            modalBodyInputPrix.value = prix;

            var action = form.getAttribute('action');
            form.setAttribute('action', action.replace(':id', id));
        });
    });
</script>