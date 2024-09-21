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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Modifier une réservation</h4>

                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">

                                <form action="{{ route('update.reservation',$reservation->id) }}" method="PATCH">
                                    @csrf
                                    <div class="row gy-4">
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="basiInput" class="form-label" style="font-weight: bold">Service</label>
                                                <span class="text-danger" style="font-weight: bold">*</span>
                                                <select name="service_id" id="serviceSelect" class="form-control"
                                                    oninput="toggleFields(this.value),afficheCommune(this.value),getServicePrice(this.value)"
                                                    required>
                                                   <option value=""></option>
                                                    @foreach($services as $service)
                                                    <option value="{{$service->id}}" @if($service->id == $reservation->service_id) selected @endif>{{$service->libelle}} </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="labelInput" class="form-label" style="font-weight: bold">Extra</label>
                                                <select class="js-example-basic-multiple" name="extra[]" id="extra"
                                                    multiple="multiple" onchange="getExtra(this)">
                                                    @foreach($extras as $extra)
                                                    <option value="{{$extra->id}}" @if(in_array($extra->id, json_decode($reservation->extra,true) ?? [])) selected @endif>{{$extra->libelle}} </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                        <!--end col-->

                                        @if ($reservation->chambre != null || $reservation->cuisine != null || $reservation->salle_bain != null || $reservation->salle_eau != null  || $reservation->salon != null || $reservation->buanderie != null || $reservation->entre_couloir != null || $reservation->escalierf != null)
                                        <div class="col-xxl-6 col-md-6" id="chambresField">
                                            <div>
                                                <label for="placeholderInput" class="form-label" style="font-weight: bold">Chambres</label>
                                                <input name="chambre" type="number" id="chambres" class="form-control"
                                                    placeholder="Entrer un nombre" value="{{$reservation->chambre}}">
                                            </div>
                                        </div>
                                       
                                      
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6" id="cuisinesField" >
                                            <div>
                                                <label for="valueInput" class="form-label" style="font-weight: bold">Cuisines</label>
                                                <input name="cuisine" type="number" class="form-control" id="cuisines"
                                                    placeholder="Entrer un nombre" value="{{$reservation->cuisine}}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6" id="salleDeBainField" >
                                            <div>
                                                <label for="readonlyPlaintext" class="form-label" style="font-weight: bold">Salle de Bain</label>
                                                <input name="salle_bain" type="number" class="form-control"
                                                    id="salle_bain" placeholder="Entrer un nombre" value="{{$reservation->salle_bain}}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6" id="salleAEauField" style="display: none;">
                                            <div>
                                                <label for="readonlyInput" class="form-label" style="font-weight: bold">Salle à Eau</label>
                                                <input name="salle_eau" type="number" class="form-control"
                                                    id="salle_eau" placeholder="Entrer un nombre" value="{{$reservation->salle_eau}}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6" id="salonsField" >
                                            <div>
                                                <label for="disabledInput" class="form-label" style="font-weight: bold">Salons</label>
                                                <input name="salon" type="number" class="form-control" id="salon"
                                                    placeholder="Entrer un nombre" value="{{$reservation->salon}}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6" id="buanderieField" >
                                            <div>
                                                <label for="iconInput" class="form-label" style="font-weight: bold">Buanderie</label>
                                                <div class="form-icon">
                                                    <input name="buanderie" type="number"
                                                        class="form-control form-control-icon" id="buanderie"
                                                        placeholder="Entrer un nombre" value="{{$reservation->buanderie}}">

                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6" id="entrerCouloireField" >
                                            <div>
                                                <label for="iconrightInput" class="form-label" style="font-weight: bold">Entrer Couloire</label>
                                                <div class="form-icon right">
                                                    <input name="entre_couloir" type="number"
                                                        class="form-control form-control-icon" id="entre_couloir"
                                                        placeholder="Entrer un nombre" value="{{$reservation->entre_couloir}}">

                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6" id="escalierField">
                                            <div>
                                                <label for="exampleInputdate" class="form-label" style="font-weight: bold"> Escaliers</label>
                                                <input name="escalier" type="number" class="form-control" id="escalier"
                                                    placeholder="Entrer un nombre" value="{{$reservation->escalier}}">
                                            </div>
                                        </div>
                                        @endif
                                        <!--end col-->

                                        @if ($reservation->nbre_personne != null)
                                            
                                       
                                        <div class="col-xxl-6 col-md-6" id="agentField" >
                                            <div>
                                                <label for="exampleInputpassword" class="form-label" style="font-weight: bold">Nombre
                                                    d'agent</label>
                                                    <span class="text-danger" style="font-weight: bold">*</span>
                                                <input type="number" name="nbre_personne" class="form-control"
                                                    id="exampleInputpassword" placeholder="Entrer le nombre d'agent" value="{{$reservation->nbre_personne}}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6" id="heuresField" >
                                            <div>
                                                <label for="exampleInputpassword" class="form-label" style="font-weight: bold">Heure de
                                                    travail</label>
                                                    <span class="text-danger" style="font-weight: bold">*</span>
                                                <select class="form-control" name="heure_session" id="" >
                                                    <option @if ($reservation->heure_session == 2)  selected  @endif value="2">2H</option>
                                                  <option @if ($reservation->heure_session == 2.5)  selected  @endif value="2.5">2H30</option>
                                                  <option @if ($reservation->heure_session == 3)  selected  @endif value="3">3H</option>
                                                  <option @if ($reservation->heure_session == 3.5)  selected  @endif value="3.5">3H30</option>
                                                  <option @if ($reservation->heure_session == 4)  selected  @endif value="4">4H</option>
                                                  <option @if ($reservation->heure_session == 4.5)  selected  @endif value="4.5">4H30</option>
                                                  <option @if ($reservation->heure_session == 5)  selected  @endif value="5">5H</option>
                                                  <option @if ($reservation->heure_session == 5.5)  selected  @endif value="5.5">5H30</option>
                                                  <option @if ($reservation->heure_session == 6)  selected  @endif value="6">6H</option>
                                                  <option @if ($reservation->heure_session == 6.5)  selected  @endif value="6.5">6H30</option>
                                                  <option @if ($reservation->heure_session == 7)  selected  @endif value="7">7H</option>


                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="exampleInputtime" class="form-label" style="font-weight: bold">Nombre de fois</label>
                                                <span class="text-danger" style="font-weight: bold">*</span>
                                                <select class="form-control" name="nbre_fois" id="nbre_fois" required>
                                                    <option selected></option>
                                                    @foreach ($taux as $item)
                                                    <option value="{{$item->libelle}}" @if($item->libelle == $reservation->nbre_fois) selected @endif>{{$item->libelle}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="exampleInputpassword" class="form-label" style="font-weight: bold">Date et heure debut
                                                    de
                                                    Visite</label>
                                                    <span class="text-danger" style="font-weight: bold">*</span>
                                                    <input type="datetime-local" name="date_visite" value="{{$reservation->date_visite}}" class="form-control"
                                                    id="exampleInputpassword">
                                            </div>
                                        </div>


                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6">
                                            <fieldset>
                                                <label style="font-weight: bold; font-size:16px;" style="font-weight: bold">La reservation
                                                    appartient
                                                    à qui ?</label>
                                                <span style="font-weight: bold; color:red">*</span>
                                                <div class="mb-2">
                                                    <label for="oui">Pour moi</label>
                                                    <input type="radio" id="oui" name="pour_qui" value="1" @if( $reservation->pour_qui == 1) checked @endif >
                                                    <label style="margin-left:0.8rem;" for="non">Pour autre</label>
                                                    <input type="radio" id="non" name="pour_qui" value="0" @if( $reservation->pour_qui == 0) checked @endif >
                                                </div>
                                            </fieldset>
                                        </div>

                                        <div class="col-xxl-6 col-md-6" id="addressField" >
                                            <div>
                                                <label for="borderInputAddress" class="form-label" style="font-weight: bold">Adresse de
                                                    l'intéressé</label>
                                                    <span class="text-danger" style="font-weight: bold">*</span>
                                                    <input type="text" name="address" value="{{$reservation->address}}" class="form-control" id=""
                                                    placeholder="Entrez votre adresse">
                                            </div>
                                        </div>


                                        <div class="col-xxl-6 col-md-6" id="postalCodeField">
                                            <div>
                                                <label for="borderInputPostalCode" class="form-label" style="font-weight: bold">Code postal de
                                                    l'intéressé</label>
                                                    <span class="text-danger" style="font-weight: bold">*</span>
                                                    <input type="text" name="code" value="{{$reservation->code}}" class="form-control" id=""
                                                    placeholder="Entrez votre code postal" required>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6" id="cityField">
                                            <div>
                                                <label for="borderInputCity" class="form-label" style="font-weight: bold">Ville de
                                                    l'intéressé</label>
                                                    <span class="text-danger" style="font-weight: bold">*</span>
                                                    <input type="text" name="ville" value="{{$reservation->ville}}" class="form-control" id=""
                                                    placeholder="Entrez votre ville" required>
                                            </div>
                                        </div>


                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="labelInput" class="form-label" style="font-weight: bold">Vos Instructions</label>
                                                <span class="text-danger" style="font-weight: bold">*</span>
                                                <textarea class="form-control" name="instruction"  cols="30" rows="4" placeholder="Vos instructions">{{$reservation->instruction}}</textarea>
                                               
                                            </div>

                                        </div>

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="labelInput" class="form-label" style="font-weight: bold">Information de stationnement</label>
                                                <span class="text-danger" style="font-weight: bold">*</span>
                                                <select class="form-select" name="station" id="StationSelect">
                                                    <option value="0" @if($reservation->nbre_fois == 0 ) selected @endif>J'ai pas un stationnement</option>
                                                    <option  value="1" @if($reservation->nbre_fois == 1 ) selected @endif>J'ai un stationnement</option>
                                                </select>
                                            </div>

                                        </div>


                                        <div class="col-xxl-6 col-md-6" id="positionStation" style="display: none">
                                            <div>
                                                <label for="labelInput" class="form-label" style="font-weight: bold">Entrer la position de votre stationnement</label>
                                                <span class="text-danger" style="font-weight: bold">*</span>
                                                <textarea class="form-control" name="position"  cols="30" rows="4" >{{$reservation->position}}</textarea>
                                            </div>

                                        </div>

                                        <div class="col-xxl-6 col-md-6" >
                                            <div>
                                                <label for="labelInput" class="form-label" style="font-weight: bold">Comment accéderons-nous à la propriété ?</label>
                                                <span class="text-danger" style="font-weight: bold">*</span>
                                                <textarea class="form-control" name="propriete"  cols="30" rows="4"  required>{{$reservation->propriete}}</textarea>
                                               
                                            </div>

                                        </div>

                                        <div class="col-xxl-6 col-md-6" id="">
                                            <div>
                                                <label for="borderInputCity" class="form-label" style="font-weight: bold">Coupon de réduction <span class="text-danger">(si vous posséder)</span></label>
                                                <input type="text" name="coupon" class="form-control" id=""
                                                   value="{{$reservation->coupon}}" >
                                            </div>
                                        </div>

                                        <div class="hstack gap-2 justify-content-end">

                                            <div class="col-xxl-6 col-md-6">
                                                <div data-bs-toggle="collapse"
                                                    data-bs-target="#paymentmethodCollapse.show" aria-expanded="false"
                                                    aria-controls="paymentmethodCollapse">
                                                    <div class="form-check card-radio">
                                                        <input id="paymentMethod03" name="type_paiement" type="radio"
                                                            value="0" class="form-check-input" @if($reservation->type_paiement == 0 ) checked @endif >
                                                        <label class="form-check-label" for="paymentMethod03">
                                                            <span class="fs-16 text-muted me-2"><i
                                                                    class="ri-money-dollar-box-fill align-bottom"></i></span>
                                                            <span class="fs-14 text-wrap" style="font-weight: bold">Paiement en espèce</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse"
                                                    aria-expanded="true" aria-controls="paymentmethodCollapse">
                                                    <div class="form-check card-radio">
                                                        <input id="paymentMethod02" name="type_paiement" type="radio"
                                                        value="1" class="form-check-input"  @if($reservation->type_paiement == 1 ) checked @endif >
                                                        <label class="form-check-label" for="paymentMethod02">
                                                            <span class="fs-16 text-muted me-2"><i
                                                                    class="ri-bank-card-fill align-bottom"></i></span>
                                                            <span class="fs-14 text-wrap" style="font-weight: bold">Paiement par Carte
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


               {{--  <div class="col-lg-3">
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
                </div> --}}
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