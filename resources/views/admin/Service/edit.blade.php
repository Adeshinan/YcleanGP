@extends('layouts.admin')
<base href="{{asset('Admin')}}">
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
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Input Example</h4>


                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form class="tablelist-form" autocomplete="off" method="POST"
                                    action="{{ route('service.update', $service->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3" id="modal-id">
                                            <label for="libelle" class="form-label">Nom du Service</label>
                                            <input type="text" name="libelle" id="libelle" class="form-control"
                                                placeholder="Entrer nom" value="{{ $service->libelle }}" required />
                                        </div>

                                        <fieldset>
                                            <label style="font-weight: bold; font-size:16px;">Il y'a d'agent ?</label>
                                            <span style="font-weight: bold; color:red">*</span>
                                            <div class="mb-2">
                                                <label for="oui">Oui</label>
                                                <input type="radio" id="oui" name="est_agent" value="1"
                                                    onchange="toggleChamps(this.value)" {{ $service->est_agent == 1 ?
                                                'checked' : '' }}>

                                                <label style="margin-left:0.8rem;" for="non">Non</label>
                                                <input type="radio" id="non" name="est_agent" value="0"
                                                    onchange="toggleChamps(this.value)" {{ $service->est_agent == 0 ?
                                                'checked' : '' }}>
                                            </div>
                                        </fieldset>

                                        <div class="mb-4" style="display:{{ $service->est_agent == 1 ? 'block' : 'none' }};"
                                            id="afficheAgent">
                                            <div class="mb-3" id="agent-container">
                                                <label for="agent-field" class="form-label">Agent</label>
                                                <input type="number" name="agent" id="agent-field" class="form-control"
                                                    placeholder="Entrer agent" value="{{ $service->agent }}" />
                                            </div>

                                            <div class="mb-3" id="heure-container">
                                                <label for="heure-field" class="form-label">Heure</label>
                                                <input type="number" name="heure" id="heure-field" class="form-control"
                                                    placeholder="Entrer heure" value="{{ $service->heure }}" />
                                            </div>

                                            <div class="mb-3" id="prix-container">
                                                <label for="prix-field" class="form-label">Pourcentage de
                                                    reduction</label>
                                                <input type="number" name="pourcentage" id="prix-field"
                                                    class="form-control" placeholder="Entrer le pourcentage"
                                                    value="{{$service->pourcentage}}" />
                                                <div class="invalid-feedback">Please enter an email.</div>
                                            </div>
                                        </div>

                                        <div class="mb-3"
                                            id="prixhors-container">
                                            <label for="prixhors-field" class="form-label">Prix du service</label>
                                            <input type="number" name="prixhors" id="prixhors-field"
                                                class="form-control" placeholder="Entrer le prix"
                                                value="{{ $service->prixhors }}" />
                                            <div class="invalid-feedback">Please enter an email.</div>
                                        </div>

                                        <div class="mb-3" id="modal-id">
                                            <label for="choices-multiple-remove-button" class="form-label">Les Extras</label>
                                            <select class="form-control" name="extra[]" id="choices-multiple-remove-button" multiple>
                                                @foreach ($extra as $item)
                                                    <option value="{{ $item->id }}" {{ is_array($service->extra) && in_array($item->id,$service->extra) ? 'selected' : '' }}>
                                                        {{ $item->libelle }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <fieldset>
                                            <label style="font-weight: bold; font-size:16px;">Option personnalisé
                                                ?</label>
                                            <span style="font-weight: bold; color:red">*</span>
                                            <div class="mb-2">
                                                <label for="oui">Oui</label>
                                                <input type="radio" id="oui" name="personalise" value="1" {{
                                                    $service->personalise == 1 ? 'checked' : '' }}>

                                                <label style="margin-left:0.8rem;" for="non">Non</label>
                                                <input type="radio" id="non" name="personalise" value="0" {{
                                                    $service->personalise == 0 ? 'checked' : '' }}>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="hstack gap-2 justify-content-end">
                                            <a role="button" href="{{route('service.index')}}" class="btn btn-light"
                                               >Fermer</a>
                                            <button type="submit" class="btn btn-success" id="add-btn">Mettre à jour le
                                                service</button>
                                        </div>
                                    </div>
                                </form>
                                <!--end row-->
                            </div>

                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->





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
        <!-- end main content-->

    </div>
    @endsection

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