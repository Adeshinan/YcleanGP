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
                        <h4 class="mb-sm-0">Liste des Services</h4>

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
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Input Example</h4>

                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
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
                                                placeholder="Entrer un nombre">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6" id="cuisinesField" style="display: none;">
                                        <div>
                                            <label for="valueInput" class="form-label">Cuisines</label>
                                            <input name="cuisine" type="number" class="form-control" id="cuisines" placeholder="Entrer un nombre">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6" id="salleDeBainField" style="display: none;">
                                        <div>
                                            <label for="readonlyPlaintext" class="form-label">Salle de Bain</label>
                                            <input name="salle_bain" type="number" class="form-control"
                                                id="salle_bain" placeholder="Entrer un nombre">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6" id="salleAEauField" style="display: none;">
                                        <div>
                                            <label for="readonlyInput" class="form-label">Salle à Eau</label>
                                            <input name="salle_eau" type="number" class="form-control"
                                                id="salle_eau" placeholder="Entrer un nombre">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6" id="salonsField" style="display: none;">
                                        <div>
                                            <label for="disabledInput" class="form-label">Salons</label>
                                            <input name="salon" type="number" class="form-control" id="salon" placeholder="Entrer un nombre">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6" id="buanderieField" style="display: none;">
                                        <div>
                                            <label for="iconInput" class="form-label">Buanderie</label>
                                            <div class="form-icon">
                                                <input name="buanderie" type="number"
                                                    class="form-control form-control-icon" id="buanderie" placeholder="Entrer un nombre">

                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6" id="entrerCouloireField" style="display: none;">
                                        <div>
                                            <label for="iconrightInput" class="form-label">Entrer Couloire</label>
                                            <div class="form-icon right">
                                                <input name="entre_couloir" type="number"
                                                    class="form-control form-control-icon" id="entre_couloir" placeholder="Entrer un nombre">

                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6" id="escalierField" style="display: none;">
                                        <div>
                                            <label for="exampleInputdate" class="form-label"> Escaliers</label>
                                            <input name="escalier" type="number" class="form-control"
                                                id="escalier" placeholder="Entrer un nombre">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-xxl-6 col-md-6" id="agentField" style="display: none;">
                                        <div>
                                            <label for="exampleInputpassword" class="form-label">Nombre d'agent</label>
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
                                                <option selected>Choisisez l'heure de session</option>
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
                                                <option value="{{$item->libelle}}" 
                                                    >{{$item->libelle}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="exampleInputpassword" class="form-label">Date et heure debut de
                                                Visite</label>
                                            <input type="datetime-local" name="date_visite" class="form-control"
                                                id="exampleInputpassword">
                                        </div>
                                    </div>
                                    

                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <fieldset>
                                            <label style="font-weight: bold; font-size:16px;">La reservation appartient
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
                                            <input type="text" name="address" class="form-control border-dashed"
                                                id="borderInputAddress" placeholder="Entrez votre adresse">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6" id="postalCodeField">
                                        <div>
                                            <label for="borderInputPostalCode" class="form-label">Code postal de
                                                l'intéressé</label>
                                            <input type="text" name="code" class="form-control border-dashed"
                                                id="borderInputPostalCode" placeholder="Entrez votre code postal">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6" id="cityField">
                                        <div>
                                            <label for="borderInputCity" class="form-label">Ville de l'intéressé</label>
                                            <input type="text" name="ville" class="form-control border-dashed"
                                                id="borderInputCity" placeholder="Entrez votre ville">
                                        </div>
                                    </div>

                                </div>
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
                                        <h6>TPS / TVQ : </h6>
                                        <h6>Prix Total TTC : </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end row -->


            <!-- end row -->


            <!-- end row -->



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
                                    <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
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


@include('profile.partials.js.donnee')
@include('profile.partials.js.reservation')

<script>
    // Passer les paramètres du backend au frontend

   /*  document.addEventListener('DOMContentLoaded', function() {
    const parametres = @json($parametres->pluck('prix', 'libelle'));

    console.log('Paramètres:', parametres); // Vérifiez les clés et les valeurs ici

    const fields = ['chambre', 'cuisine', 'salle_bain', 'salle_eau', 'salon', 'buanderie', 'entre_couloir', 'escalier'];
    const resultsDiv = document.getElementById('results');

    fields.forEach(field => {
        const inputElement = document.querySelector(`[name="${field}"]`);
        if (inputElement) {
            inputElement.addEventListener('input', function() {
                const quantity = parseFloat(this.value) || 0;
                const price = parametres[field] || 0;

                console.log(`Champ: ${field}, Quantité: ${quantity}, Prix: ${price}`); // Vérifiez les valeurs

                const total = quantity * price;
                const resultElement = document.getElementById(`result-${field}`);
                
                if (resultElement) {
                    resultElement.textContent = `Total pour ${field}: ${total} CAD`;
                } else {
                    const newResultElement = document.createElement('p');
                    newResultElement.id = `result-${field}`;
                    newResultElement.textContent = `Total pour ${field}: ${total} CAD`;
                    resultsDiv.appendChild(newResultElement);
                }
            });
        }
    });
}); */

/* document.addEventListener('DOMContentLoaded', function() {
    const parametres = @json($parametres->pluck('prix', 'libelle'));

    console.log('Paramètres:', parametres); // Vérifiez les clés et les valeurs ici

    const fields = ['chambre', 'cuisine', 'salle_bain', 'salle_eau', 'salon', 'buanderie', 'entre_couloir', 'escalier'];
    const resultsDiv = document.getElementById('results');
    const totalPriceElement = document.getElementById('prixTotalHT');
    let total = 0;

    fields.forEach(field => {
        const inputElement = document.querySelector(`[name="${field}"]`);
        if (inputElement) {
            inputElement.addEventListener('input', function() {
                const quantity = parseFloat(this.value) || 0;
                const price = parametres[field] || 0;

                console.log(`Champ: ${field}, Quantité: ${quantity}, Prix: ${price}`); // Vérifiez les valeurs

                const fieldTotal = quantity * price;

                const resultElement = document.getElementById(`result-${field}`);
                
                if (resultElement) {
                    resultElement.textContent = `Total pour ${field}: ${fieldTotal.toFixed(2)} CAD`;
                } else {
                    const newResultElement = document.createElement('p');
                    newResultElement.id = `result-${field}`;
                    newResultElement.textContent = `Total pour ${field}: ${fieldTotal.toFixed(2)} CAD`;
                    resultsDiv.appendChild(newResultElement);
                }

                // Mettre à jour le prix total
                total = getTotalPrice();
                totalPriceElement.textContent = `Total: ${total.toFixed(2)} CAD`;
                console.log(totalPriceElement.textContent);
            });
        }
    });

    function getTotalPrice() {
        let totalPrice = 0;
        fields.forEach(field => {
            const quantity = parseFloat(document.querySelector(`[name="${field}"]`).value) || 0;
            const price = parametres[field] || 0;
            totalPrice += quantity * price;
        });
        return totalPrice;

       
    }
});

 */

</script>


@endsection