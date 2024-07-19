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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Service</a></li>
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
                            <h4 class="card-title mb-0">Add, Edit & Remove</h4>
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
                                                <input type="text" id="searchInput" class="form-control search" placeholder="Search..">
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
                                                <th class="sort" data-sort="customer_name">Services</th>
                                                <th class="sort" data-sort="email">pourcentage de reduiction</th>
                                                <th class="sort" data-sort="email">Prix Normale</th>
                                                <th class="sort" data-sort="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            @foreach ($services as $service)

                                            <tr>
                                                
                                                <th scope="row">
                                                   
                                                </th>
                                                <td class="customer_name">{{$service->libelle}}</td>
                                                <td class="email">@if ($service->pourcentage)
                                                    {{$service->pourcentage}} %
                                                    @else
                                                    ❌
                                                    @endif
                                                </td>
                                                <td class="email">@if ($service->prixhors)
                                                    {{$service->prixhors}}$ CAD
                                                    @else
                                                    ❌
                                                    @endif
                                                </td>


                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <a class="btn btn-sm btn-success edit-item-btn" href="{{route('service.edit',$service->id)}}">Modifier</a>
                                                        </div>
                                                        <div class="remove">
                                                            <button type="button" class="btn btn-sm btn-danger remove-item-btn"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteRecordModal"
                                                                onclick="showModal('{{ $route }}',{{ $service->id }})">Supprimer</button>
                                                        </div>

                                                        
                                                    </div>
                                                </td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                        {{$services->links()}}
                                    </table>
                                    <div class="noresult" style="display: none">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                colors="primary:#121331,secondary:#08a88a"
                                                style="width:75px;height:75px"></lord-icon>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">We've searched more than 150+ Orders We did not
                                                find any orders for you search.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <div class="pagination-wrap hstack gap-2">
                                        <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                                            prec
                                        </a>
                                        <ul class="pagination listjs-pagination mb-0"></ul>
                                        <a class="page-item pagination-next" href="javascript:void(0);">
                                            Suiv
                                        </a>
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
                        <form class="tablelist-form" autocomplete="off" method="Post"
                            action="{{route('service.store')}}">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3" id="modal-id">
                                    <label for="id-field" class="form-label">Nom du Service</label>
                                    <input type="text" name="libelle" id="libelle" class="form-control"
                                        placeholder="Entrer nom " required />
                                </div>


                                <fieldset>

                                    <label style="font-weight: bold; font-size:16px;"> Il y'a d'agent ?</label>
                                    <span style="font-weight: bold; color:red">*</span>
                                    <div class="mb-2">
                                        <label for="oui">Oui</label>
                                        <input type="radio" id="oui" name="est_agent" value="1"
                                            onchange="toggleChamps(this.value)">

                                        <label style="margin-left:0.8rem;" for="non">Non</label>
                                        <input type="radio" id="non" name="est_agent" value="0"
                                            onchange="toggleChamps(this.value)" checked>
                                    </div>
                                </fieldset>

                                <div class="mb-4" style="display:none;" id="afficheAgent">
                                    <div class="mb-3" id="agent-container">
                                        <label for="agent-field" class="form-label">Agent</label>
                                        <input type="number" name="agent" id="agent-field" class="form-control"
                                            placeholder="Entrer nom " />
                                    </div>

                                    <div class="mb-3" id="heure-container">
                                        <label for="heure-field" class="form-label">Heure</label>
                                        <input type="number" name="heure" id="heure-field" class="form-control"
                                            placeholder="Entrer nom " />
                                    </div>

                                    <div class="mb-3" id="prix-container">
                                        <label for="prix-field" class="form-label">Pourcentage de reduction </label>
                                        <input type="number" name="pourcentage" id="prix-field" class="form-control"
                                            placeholder="Entrer le pourcentage" />
                                        <div class="invalid-feedback">Please enter an email.</div>
                                    </div>
                                </div>

                                <div class="mb-3" style="display:block;" id="prixhors-container">
                                    <label for="prixhors-field" class="form-label">Prix du service </label>
                                    <input type="number" name="prixhors" id="prixhors-field" class="form-control"
                                        placeholder="Entrer le prix" />
                                    <div class="invalid-feedback">Please enter an email.</div>
                                </div>




                                <div class="mb-3" id="modal-id">
                                    <label for="choices-multiple-remove-button" class="form-label ">Les Extras</label>

                                    <select class="form-control" name="extra[]" id="choices-multiple-remove-button"
                                        data-choices data-choices-removeItem name="choices-multiple-remove-button"
                                        multiple>

                                        @foreach ($extra as $item )
                                        <option value="{{$item->id}}">{{$item->libelle}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <fieldset>

                                    <label style="font-weight: bold; font-size:16px;">Option personnalisé ?</label>
                                    <span style="font-weight: bold; color:red">*</span>
                                    <div class="mb-2">
                                        <label for="oui">Oui</label>
                                        <input type="radio" id="oui" name="personalise" value="1"
                                            >

                                        <label style="margin-left:0.8rem;" for="non">Non</label>
                                        <input type="radio" id="non" name="personalise" value="0"
                                            checked>
                                    </div>
                                </fieldset>

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

            <!-- Modal -->
           
            <!--end modal -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Velzon.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>






@endsection

@include('profile.partials.deletemodal')
<script>
    function toggleChamps(value) {
        var afficheAgent = document.getElementById('afficheAgent');
     
        
        if (value === '1') {
            afficheAgent.style.display = 'block';
            

            // Set required attribute for inputs inside #afficheAgent
            var agentInputs = afficheAgent.querySelectorAll('input');
            agentInputs.forEach(function(input) {
                input.required = true;
            });

         

        } else {
            afficheAgent.style.display = 'none';
           

            // Remove required attribute and reset values for inputs inside #afficheAgent
            var agentInputs = afficheAgent.querySelectorAll('input');
            agentInputs.forEach(function(input) {
                input.required = false;
                input.value = '';
            });

            // Set required attribute for inputs inside #prixhorsContainer
          
        }
    }

    function entete() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }
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