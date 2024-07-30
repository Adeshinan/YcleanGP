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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Taxe</a></li>
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
                            <h4 class="card-title mb-0">Gestion des taxes</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="listjs-table" id="customerList">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            

                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" id="searchInput" class="form-control search"
                                                    placeholder="Search..">
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
                                                <th class="sort" data-sort="customer_name">Libelle de la taxe</th>
                                                <th class="sort" data-sort="email">pourcentage de reduiction</th>
                                                <th class="sort" data-sort="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            @foreach ($taxe as $index)

                                            <tr>

                                                <th scope="row">

                                                </th>
                                                <td class="customer_name">{{$index->libelle}}</td>
                                                <td class="email">
                                                    {{$index->pourcentage}} %

                                                </td>



                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <button class="btn btn-sm btn-success edit-item-btn"
                                                                data-bs-toggle="modal" data-bs-target="#editModal"
                                                                data-id="{{$index->id}}"
                                                                data-libelle="{{$index->libelle}}"
                                                                data-pourcentage="{{$index->pourcentage}}">Modifier</button>
                                                        </div>
                                                        <div class="remove">
                                                           
                                                        </div>


                                                    </div>
                                                </td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end">
                                        <div class="pagination-wrap hstack gap-2">
                                            {{$taxe->links()}}

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

          


            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-light p-3">
                            <h5 class="modal-title" id="exampleModalLabel">Modifier un Taux</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                id="close-modal"></button>
                        </div>
                        <form class="tablelist-form" autocomplete="off" method="POST"
                            action="{{ route('taxe.update', ':id') }}">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <input type="hidden" name="id" id="edit-id">
                                <div class="mb-3">
                                    <label for="edit-libelle" class="form-label">Libelle de la taxe</label>
                                    <input type="text" name="libelle" id="edit-libelle" class="form-control" readonly />
                                </div>

                                <div class="mb-3">
                                    <label for="edit-pourcentage" class="form-label">Pourcentage</label>
                                    <input type="number" name="pourcentage" id="edit-pourcentage" class="form-control"
                                        placeholder="Entrer le pourcentage" required />
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

            <!--end modal -->

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
            var pourcentage = button.getAttribute('data-pourcentage');

            var modalTitle = editModal.querySelector('.modal-title');
            var modalBodyInputId = editModal.querySelector('.modal-body input#edit-id');
            var modalBodyInputLibelle = editModal.querySelector('.modal-body input#edit-libelle');
            var modalBodyInputPourcentage = editModal.querySelector('.modal-body input#edit-pourcentage');
            var form = editModal.querySelector('form');

            modalTitle.textContent = 'Modifier un Coupon';
            modalBodyInputId.value = id;
            modalBodyInputLibelle.value = libelle;
            modalBodyInputPourcentage.value = pourcentage;

            var action = form.getAttribute('action');
            form.setAttribute('action', action.replace(':id', id));
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#searchInput').on('keyup', function() {
            var searchTerm = $(this).val().toLowerCase();

            // on parcourt chaque ligne du tableau pour vérifier la correspondance avec le terme de recherche
            $('table tbody tr').each(function() {
                var rowData = $(this).text().toLowerCase();
                if (rowData.indexOf(searchTerm) === -1) {
                    // Masquer la ligne si elle ne correspond pas au terme de recherche
                    $(this).hide();
                } else {
                    // Afficher la ligne si elle correspond au terme de recherche
                    $(this).show();
                }
            });
        });
    });
</script>