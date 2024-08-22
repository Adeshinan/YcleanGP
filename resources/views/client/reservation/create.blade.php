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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Reservation</a></li>
                                <li class="breadcrumb-item active">{{$page}}</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->




            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Ajouter un réservation</h4>

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
                                                    <option value="{{$service->id}}">{{$service->libelle}}</option>
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
                                                <input name="chambre" type="number" id="chambres" class="form-control"
                                                    placeholder="Entrer un nombre" value="0">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6" id="cuisinesField" style="display: none;">
                                            <div>
                                                <label for="valueInput" class="form-label">Cuisines</label>
                                                <input name="cuisine" type="number" class="form-control" id="cuisines"
                                                    placeholder="Entrer un nombre" value="0">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6" id="salleDeBainField" style="display: none;">
                                            <div>
                                                <label for="readonlyPlaintext" class="form-label">Salle de Bain</label>
                                                <input name="salle_bain" type="number" class="form-control"
                                                    id="salle_bain" placeholder="Entrer un nombre" value="0">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6" id="salleAEauField" style="display: none;">
                                            <div>
                                                <label for="readonlyInput" class="form-label">Salle à Eau</label>
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
                                        <div class="col-xxl-6 col-md-6" id="entrerCouloireField" style="display: none;">
                                            <div>
                                                <label for="iconrightInput" class="form-label">Entrer Couloire</label>
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
                                                <label for="exampleInputdate" class="form-label"> Escaliers</label>
                                                <input name="escalier" type="number" class="form-control" id="escalier"
                                                    placeholder="Entrer un nombre" value="0">
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-xxl-6 col-md-6" id="agentField" style="display: none;">
                                            <div>
                                                <label for="exampleInputpassword" class="form-label">Nombre
                                                    d'agent</label>
                                                <input type="number" name="nbre_personne" class="form-control"
                                                    id="exampleInputpassword" placeholder="Entrer le nombre d'agent">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6" id="heuresField" style="display: none;">
                                            <div>
                                                <label for="exampleInputpassword" class="form-label">Heure de
                                                    travail</label>
                                                <select class="form-control" name="heure_session" id="">
                                                    <option selected value="">Choisisez l'heure de session</option>
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
                                                <label for="exampleInputtime" class="form-label">Nombre de fois</label>
                                                <select class="form-control" name="nbre_fois" id="nbre_fois">
                                                    <option selected></option>
                                                    @foreach ($taux as $item)
                                                    <option value="{{$item->libelle}}">{{$item->libelle}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="exampleInputpassword" class="form-label">Date et heure debut
                                                    de
                                                    Visite</label>
                                                <input type="datetime-local" name="date_visite" class="form-control"
                                                    id="exampleInputpassword">
                                            </div>
                                        </div>


                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6">
                                            <fieldset>
                                                <label style="font-weight: bold; font-size:16px;">La reservation
                                                    appartient
                                                    à qui ?</label>
                                                <span style="font-weight: bold; color:red">*</span>
                                                <div class="mb-2">
                                                    <label for="oui">Pour moi</label>
                                                    <input type="radio" id="oui" name="pour_qui" value="1" checked>
                                                    <label style="margin-left:0.8rem;" for="non">Pour autre</label>
                                                    <input type="radio" id="non" name="pour_qui" value="0" >
                                                </div>
                                            </fieldset>
                                        </div>

                                        <div class="col-xxl-6 col-md-6" id="addressField" >
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


                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="labelInput" class="form-label">Vos Instructions</label>
                                                <textarea class="form-control" name="instruction"  cols="30" rows="4" placeholder="Vos instructions"></textarea>
                                               
                                            </div>

                                        </div>

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="labelInput" class="form-label">Information de stationnement</label>

                                                <select class="form-select" name="station" id="StationSelect">
                                                    <option value="" selected>Veuillez sélectionner une option</option>
                                                    <option value="0">J'ai pas un stationnement</option>
                                                    <option  value="1">J'ai un stationnement</option>
                                                </select>
                                            </div>

                                        </div>


                                        <div class="col-xxl-6 col-md-6" id="positionStation" style="display: none">
                                            <div>
                                                <label for="labelInput" class="form-label">Entrer la position de votre stationnement</label>
                                                <textarea class="form-control" name="position"  cols="30" rows="4" placeholder="position de votre stationnement"></textarea>
                                            </div>

                                        </div>

                                        <div class="col-xxl-6 col-md-6" >
                                            <div>
                                                <label for="labelInput" class="form-label">Comment accéderons-nous à la propriété ?</label>

                                                <textarea class="form-control" name="propriete"  cols="30" rows="4" placeholder="Emplacement de la clé, combinaison, commentaire, demande spécifiques etc..."></textarea>
                                               
                                            </div>

                                        </div>

                                        <div class="col-xxl-6 col-md-6" id="">
                                            <div>
                                                <label for="borderInputCity" class="form-label">Coupon de réduction <span class="text-danger">(si vous posséder)</span></label>
                                                <input type="text" name="coupon" class="form-control" id=""
                                                    placeholder="Entrez le code du coupon" >
                                            </div>
                                        </div>

                                        <div class="hstack gap-2 justify-content-end">

                                            <div class="col-xxl-6 col-md-6">
                                                <div data-bs-toggle="collapse"
                                                    data-bs-target="#paymentmethodCollapse.show" aria-expanded="false"
                                                    aria-controls="paymentmethodCollapse">
                                                    <div class="form-check card-radio">
                                                        <input id="paymentMethod03" name="type_paiement" type="radio"
                                                            value="0" class="form-check-input" checked>
                                                        <label class="form-check-label" for="paymentMethod03">
                                                            <span class="fs-16 text-muted me-2"><i
                                                                    class="ri-money-dollar-box-fill align-bottom"></i></span>
                                                            <span class="fs-14 text-wrap">Paiement en espèce</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse"
                                                    aria-expanded="true" aria-controls="paymentmethodCollapse">
                                                    <div class="form-check card-radio">
                                                        <input id="paymentMethod02" name="type_paiement" type="radio"
                                                            value="1" class="form-check-input">
                                                        <label class="form-check-label" for="paymentMethod02">
                                                            <span class="fs-16 text-muted me-2"><i
                                                                    class="ri-bank-card-fill align-bottom"></i></span>
                                                            <span class="fs-14 text-wrap">Paiement par Carte
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
                                        <h6>Prix Total HT : <span id="prixTotalHT">0</span>$ CAD</h6>
                                        <h6>TPS / TVQ : <span id="taxes">0</span>$ CAD</h6>
                                        <h6>Prix Total TTC : <span id="prixTotalTTC">0</span>$ CAD</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    @include('layouts.footer')
</div>

<script>
    document.getElementById('StationSelect').addEventListener('change', function() {
        var textarea = document.getElementById('positionStation');
       
        if (this.value == '1') {
            textarea.style.display = 'block';
            textarea.setAttribute('required', 'required');
        } else {
            textarea.style.display = 'none';
            textarea.removeAttribute('required');
        }
    });
  </script>


@include('profile.partials.js.donnee')
@include('profile.partials.js.reservation')




@endsection