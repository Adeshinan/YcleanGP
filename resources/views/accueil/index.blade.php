@extends('layouts.public')
@section('public')
      <!-- start hero section -->
      <section class="section job-hero-section bg-light pb-0" id="hero">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div>
                        <h1 class="display-6 fw-semibold text-capitalize mb-3 lh-base">
                            Réservation et paiement en ligne en 4 étapes faciles.
                        </h1>
                        <p class="lead text-muted lh-base mb-4">
                            Plus besoin de passer des appels téléphoniques , tout se fait en ligne en un temps record. Profitez de la commodité de notre service de réservation en ligne pour retrouver une maison impeccable .
                        </p>
                        <form action="#" class="job-panel-filter">
                            <div class="row g-md-0 g-2">
                                <!--end col-->
                                <div class="col-md-4">
                                    <div>
                                        <select class="form-control" data-choices>
                                            <option value="">Reservation</option>
                                            @foreach ($services as $service)
                                            <option value="{{$service->id}}">
                                                {{$service->libelle}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-4">
                                    <div class="h-100">
                                        <button class="btn btn-primary submit-btn w-100 h-100" type="submit" href="#hero"><i
                                                class="ri-search-2-line align-bottom me-1"></i>Reservation</button>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="h-100">
                                        <button class="btn btn-secondary submit-btn w-100 h-100" type="submit"><i
                                                class="ri-user-3-line align-bottom me-1"></i>Se Connecter</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>

                        <ul class="treding-keywords list-inline mb-0 mt-3 fs-13">
                            <li class="list-inline-item text-danger fw-semibold"><i
                                    class="mdi mdi-tag-multiple-outline align-middle"></i> Nos Services d'entretien:</li>
                                @foreach ($services as $service)
                                <li class="list-inline-item"><a href="javascript:void(0)">{{$service->libelle}},</a></li>
                                @endforeach
                        </ul>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4">
                    <div class="position-relative home-img text-center mt-5 mt-lg-0">
                        <div class="card p-3 rounded shadow-lg inquiry-box">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0 me-3">
                                    <div class="avatar-title bg-warning-subtle text-warning rounded fs-18">
                                        <i class="ri-mail-send-line"></i>
                                    </div>
                                </div>
                                <h5 class="fs-15 lh-base mb-0">Maintenir votre espace en bon état</h5>
                            </div>
                        </div>

                        <div class="card p-3 rounded shadow-lg application-box">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0 me-3">
                                    <div class="avatar-title bg-warning-subtle text-warning rounded fs-18">
                                        <i class="ri-mail-send-line"></i>
                                    </div>
                                </div>
                                <h5 class="fs-15 lh-base mb-0">Entretien ménager à Montréal et aux environs</h5>
                            </div>
                        </div>
                        <img src="Admin/assets/images/job-profile2.png" alt="" class="user-img">
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- start services -->
    <section class="section bg-light" id="#reserve">
        
        <div class="container col-12">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base h2">Vous êtes à moins <span
                                class="text-primary">d'une minute</span> d'une maison propre!</h1>
                        <p class="text-muted">
                            Pour vos services d'entretien ménager, optez dès maintenant pour le meilleur et gardez votre maison toujours propre.
                        </p>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header align-items-center d-flex  bg-primary">
                            <h4 class="card-title mb-0 flex-grow-1 text-light">Faites votre reservation</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">

                                <form action="{{ route('reservation.passer') }}" method="POST">
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
                                                    <option value="{{$service->id}}">
                                                        {{$service->libelle}}</option>
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
                                                <input name="chambre" type="number" id="chambres"
                                                    class="form-control" placeholder="Entrer un nombre" value="0">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6" id="cuisinesField" style="display: none;">
                                            <div>
                                                <label for="valueInput" class="form-label">Cuisines</label>
                                                <input name="cuisine" type="number" class="form-control"
                                                    id="cuisines" placeholder="Entrer un nombre" value="0">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6" id="salleDeBainField"
                                            style="display: none;">
                                            <div>
                                                <label for="readonlyPlaintext" class="form-label">Salle de
                                                    Bain</label>
                                                <input name="salle_bain" type="number" class="form-control"
                                                    id="salle_bain" placeholder="Entrer un nombre" value="0">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6" id="salleAEauField" style="display: none;">
                                            <div>
                                                <label for="readonlyInput" class="form-label">Salle
                                                    à Eau</label>
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
                                        <div class="col-xxl-6 col-md-6" id="entrerCouloireField"
                                            style="display: none;">
                                            <div>
                                                <label for="iconrightInput" class="form-label">Entrer
                                                    Couloire</label>
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
                                                <label for="exampleInputdate" class="form-label">
                                                    Escaliers</label>
                                                <input name="escalier" type="number" class="form-control"
                                                    id="escalier" placeholder="Entrer un nombre" value="0">
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-xxl-6 col-md-6" id="agentField" style="display: none;">
                                            <div>
                                                <label for="exampleInputpassword" class="form-label">Nombre
                                                    d'agent</label>
                                                <input type="number" name="nbre_personne" class="form-control"
                                                    id="exampleInputpassword"
                                                    placeholder="Entrer le nombre d'agent">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6" id="heuresField" style="display: none;">
                                            <div>
                                                <label for="exampleInputpassword" class="form-label">Heure de
                                                    travail</label>
                                                <select class="form-control" name="heure_session" id="">
                                                    <option selected value="">Choisisez l'heure de
                                                        session</option>
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
                                                <label for="exampleInputtime" class="form-label">Nombre de
                                                    fois</label>
                                                <select class="form-control" name="nbre_fois" id="nbre_fois">
                                                    <option selected></option>
                                                    @foreach ($taux as $item)
                                                    <option value="{{$item->libelle}}">
                                                        {{$item->libelle}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="exampleInputpassword" class="form-label">Date et heure
                                                    debut
                                                    de
                                                    Visite</label>
                                                <input type="datetime-local" name="date_visite" class="form-control"
                                                    id="exampleInputpassword">
                                            </div>
                                        </div>



                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="exampleInputtime" class="form-label">Nom et prénoms</label>
                                                <input type="text" name="name" class="form-control" id="" placeholder="Entrer le nom" required>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="borderInputCity" class="form-label">Email </label>
                                                <input type="text" name="email" class="form-control" id=""
                                                    placeholder="Entrez votre email" required>
                                            </div>
                                        </div>

                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="borderInputPostalCode" class="form-label">Adresse</label>
                                                <input type="text" name="adress" class="form-control" id=""
                                                    placeholder="Entrez votre adresse" required>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="borderInputPostalCode" class="form-label">Code postal</label>
                                                <input type="text" name="postal" class="form-control" id=""
                                                    placeholder="Entrez votre code postal" required>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="borderInputPostalCode" class="form-label">Numero de téléphone</label>
                                                <input type="text" name="contact" class="form-control" id=""
                                                    placeholder="Entrez votre numero de téléphone" required>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="borderInputCity" class="form-label">Ville </label>
                                                <input type="text" name="vill" class="form-control" id=""
                                                    placeholder="Entrez votre ville" required>
                                            </div>
                                        </div>


                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6">
                                            <fieldset>
                                                <label style="font-weight: bold; font-size:16px;">La
                                                    reservation
                                                    appartient
                                                    à qui ?</label>
                                                <span style="font-weight: bold; color:red">*</span>
                                                <div class="mb-2">
                                                    <label for="oui">Pour moi</label>
                                                    <input type="radio" id="oui" name="pour_qui" value="1" checked>
                                                    <label style="margin-left:0.8rem;" for="non">Pour autre</label>
                                                    <input type="radio" id="non" name="pour_qui" value="0">
                                                </div>
                                            </fieldset>
                                        </div>

                                        <div class="col-xxl-6 col-md-6" id="addressField">
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
                                                    data-bs-target="#paymentmethodCollapse.show"
                                                    aria-expanded="false" aria-controls="paymentmethodCollapse">
                                                    <div class="form-check card-radio">
                                                        <input id="paymentMethod03" name="type_paiement"
                                                            type="radio" value="0" class="form-check-input" checked>
                                                        <label class="form-check-label" for="paymentMethod03">
                                                            <span class="fs-16 text-muted me-2"><i
                                                                    class="ri-money-dollar-box-fill align-bottom"></i></span>
                                                            <span class="fs-14 text-wrap">Paiement
                                                                en espèce</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <div data-bs-toggle="collapse"
                                                    data-bs-target="#paymentmethodCollapse" aria-expanded="true"
                                                    aria-controls="paymentmethodCollapse">
                                                    <div class="form-check card-radio">
                                                        <input id="paymentMethod02" name="type_paiement"
                                                            type="radio" value="1" class="form-check-input">
                                                        <label class="form-check-label" for="paymentMethod02">
                                                            <span class="fs-16 text-muted me-2"><i
                                                                    class="ri-bank-card-fill align-bottom"></i></span>
                                                            <span class="fs-14 text-wrap">Paiement
                                                                par Carte
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
                        <div class="card-header align-items-center d-flex  bg-primary">
                            <h4 class="card-title mb-0 flex-grow-1 text-light">Mouvement</h4>
                        </div>
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div>
                                        <h5 style="font-weight: bold;">Prix</h5>
                                        <hr>
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


            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end services -->

    <!-- start cta -->
  
@endsection


      
 