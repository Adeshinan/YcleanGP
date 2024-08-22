<script>
    function afficheCommune(ExtraId) {
        var ext_id = ExtraId;
        $.ajax({
            type: 'GET',
            url: "{{route('extra.liste')}}",
            data: { id: ext_id },
            success: function(data) {
                console.log(data);
                $('#extra').empty();
                $('#extra').append('<option value="">Choisissez les extra</option>');
                data.forEach(function(item) {
                    $('#extra').append('<option value="' + item.id + '" data-price="' + item.prix + '">' + item.libelle + '</option>');
                });
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>

<script>
    function toggleFields(serviceId) {
        $.ajax({
            type: 'GET',
            url: "{{ route('parametre.liste') }}",
            data: { id: serviceId },
            success: function(data) {
                var fields = ['chambresField', 'cuisinesField', 'salleDeBainField', 'salleAEauField', 'salonsField', 'buanderieField', 'entrerCouloireField', 'escalierField'];
                var heures = ['heuresField', 'agentField'];

                if (data.personalise === 1) {
                    fields.forEach(function(fieldId) {
                        var field = document.getElementById(fieldId);
                        field.style.display = 'block';
                        var inputs = field.querySelectorAll('input');
                        inputs.forEach(function(input) {
                            input.required = true;
                        });
                    });
                } else {
                    fields.forEach(function(fieldId) {
                        var field = document.getElementById(fieldId);
                        field.style.display = 'none';
                        var inputs = field.querySelectorAll('input');
                        inputs.forEach(function(input) {
                            input.required = false;
                            input.value = '';
                        });
                    });
                }

                if (data.est_agent === 1) {
                    heures.forEach(function(heureId) {
                        var heure = document.getElementById(heureId);
                        heure.style.display = 'block';
                        var inputs = heure.querySelectorAll('input');
                        inputs.forEach(function(input) {
                            input.required = true;
                        });
                    });
                } else {
                    heures.forEach(function(heureId) {
                        var heure = document.getElementById(heureId);
                        heure.style.display = 'none';
                        var inputs = heure.querySelectorAll('input');
                        inputs.forEach(function(input) {
                            input.required = false;
                            input.value = '';
                        });
                    });
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
                alert('Error retrieving service information');
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('service_id').addEventListener('change', function() {
            toggleFields(this.value);
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var fields = ['addressField', 'postalCodeField', 'cityField'];

        function toggleFields() {
            var pourQuiValue = document.querySelector('input[name="pour_qui"]:checked').value;

            if (pourQuiValue === '1') {
                fields.forEach(function(fieldId) {
                    var field = document.getElementById(fieldId);
                    field.style.display = 'none';
                    var inputs = field.querySelectorAll('input');
                    inputs.forEach(function(input) {
                        input.required = false;
                        input.value = '';
                    });
                });
            } else {
                fields.forEach(function(fieldId) {
                    var field = document.getElementById(fieldId);
                    field.style.display = 'block';
                    var inputs = field.querySelectorAll('input');
                    inputs.forEach(function(input) {
                        input.required = true;
                    });
                });
            }
        }

        toggleFields();

        var radioButtons = document.querySelectorAll('input[name="pour_qui"]');
        radioButtons.forEach(function(radio) {
            radio.addEventListener('change', toggleFields);
        });
    });
</script>

<script>
    function getExtra(selectElement) {
        let selectedOptions = Array.from(selectElement.selectedOptions).map(option => option.value);
        $.ajax({
            type: 'GET',
            url: {{ route('extra.prix') }},
            data: { id: selectedOptions },
            success: function(data) {
                if (data) {
                    const extraPrices = data.map(item => parseFloat(item.prix || 0));
                    const totalExtraPrice = extraPrices.reduce((acc, price) => acc + price, 0);
                    document.getElementById('prixTotalHT').setAttribute('data-extra-price', totalExtraPrice);
                    updateTotalPrice();
                } else {
                    console.log('Extras not found');
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
                console.log('Error retrieving extra information');
            }
        });
    }

    function getServicePrice(servicePrxId) {
        $.ajax({
            type: 'GET',
            url: {{ route('parametre.liste') }},
            data: { id: servicePrxId },
            success: function(data) {
                if (data) {
                    const servicePrice = parseFloat(data.prixhors);
                    document.getElementById('prixTotalHT').setAttribute('data-service-price', servicePrice);
                    updateTotalPrice();
                } else {
                    console.error('Service not found');
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
                alert('Error retrieving service information');
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('service_id').addEventListener('change', function() {
            getServicePrice(this.value);
        });
    });

    function updateTotalPrice(discountPercentage = 0) {
        const taxRates = {
            TPS: {{ $tps }},
            TVQ: {{ $tvq }}
        };

        const servicePrice = parseFloat(document.getElementById('prixTotalHT').getAttribute('data-service-price') || 0);
        const extraPrice = parseFloat(document.getElementById('prixTotalHT').getAttribute('data-extra-price') || 0);
        const fieldPrice = parseFloat(document.getElementById('prixTotalHT').getAttribute('data-field-price') || 0);

        let discountedServicePrice = servicePrice; // Prix du service après réduction

        if (discountPercentage > 0) {
            const discount = servicePrice * (discountPercentage / 100);
            discountedServicePrice -= discount;
            const totalPrice = discountedServicePrice + extraPrice + fieldPrice;
            document.getElementById('prixTotalHT').textContent = totalPrice.toFixed(2);

            const somTaxes = taxRates.TPS + taxRates.TVQ;
            const totalTaxes = totalPrice * (somTaxes / 100);

            document.getElementById('taxes').textContent = totalTaxes.toFixed(2);

            // Calculate total price with taxes
            const totalPriceTTC = totalPrice + totalTaxes;
            document.getElementById('prixTotalTTC').textContent = totalPriceTTC.toFixed(2);
        } else {
            const totalPrice = servicePrice + extraPrice + fieldPrice;
            document.getElementById('prixTotalHT').textContent = totalPrice.toFixed(2);

            const somTaxes = taxRates.TPS + taxRates.TVQ;
            const totalTaxes = totalPrice * (somTaxes / 100);

            document.getElementById('taxes').textContent = totalTaxes.toFixed(2);

            // Calculate total price with taxes
            const totalPriceTTC = totalPrice + totalTaxes;
            document.getElementById('prixTotalTTC').textContent = totalPriceTTC.toFixed(2);
        }
    }

    function compareAndApplyDiscount() {
        const nbrePersonne = parseFloat(document.querySelector('[name="nbre_personne"]').value) || 0;
        const heureSession = parseFloat(document.querySelector('[name="heure_session"]').value) || 0;
        const selectedServiceId = document.getElementById('serviceSelect').value; // Supposons que l'ID du service est dans un élément avec l'ID 'serviceSelect'

        if (!selectedServiceId) {
            console.error('Service ID is not selected');
            alert('Please select a service');
            return;
        }

        $.ajax({
            type: 'GET',
            url: {{ route('service.getValues') }},
            data: { serviceId: selectedServiceId }, // Pass the current service ID if needed
            success: function(data) {
                if (data) {
                    const serviceAgents = parseFloat(data.agent);
                    const serviceHours = parseFloat(data.heure);
                    const discountPercentage = parseFloat(data.pourcentage);
                    const servicePrice = parseFloat(document.getElementById('prixTotalHT').getAttribute('data-service-price'));

                    if (nbrePersonne === 0 && heureSession === 0) {
                        document.getElementById('prixTotalHT').textContent = servicePrice.toFixed(2);
                        updateTotalPrice();
                    } else {
                        if (nbrePersonne <= serviceAgents && heureSession <= serviceHours) {
                            const discount = servicePrice * (discountPercentage / 100);
                            const discountedPrice = servicePrice - discount;
                            document.getElementById('prixTotalHT').textContent = discountedPrice.toFixed(2);
                            updateTotalPrice(discountPercentage);
                        } else {
                            document.getElementById('prixTotalHT').textContent = servicePrice.toFixed(2);
                            updateTotalPrice();
                        }
                    }
                } else {
                    console.error('Service data not found');
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
                alert('Error retrieving service information');
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('[name="heure_session"]').addEventListener('change', compareAndApplyDiscount);
        document.querySelector('[name="nbre_personne"]').addEventListener('input', compareAndApplyDiscount);
    });

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('extra').addEventListener('change', (e) => {
            let selectedOptions = Array.from(e.target.selectedOptions).map(option => option.value);
            getExtra(e.target);
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('service_id').addEventListener('change', function() {
            getServicePrice(this.value);
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const parametres = @json($parametres->pluck('prix', 'libelle'));

        const fields = ['chambre', 'cuisine', 'salle_bain', 'salle_eau', 'salon', 'buanderie', 'entre_couloir', 'escalier'];
        const resultsDiv = document.getElementById('results');
        const totalPriceElement = document.getElementById('prixTotalHT');

        fields.forEach(field => {
            const inputElement = document.querySelector([name="${field}"]);
            if (inputElement) {
                inputElement.addEventListener('input', function() {
                    const quantity = parseFloat(this.value) || 0;
                    const price = parametres[field] || 0;

                    const fieldTotal = quantity * price;

                    const resultElement = document.getElementById(result-${field});

                    if (resultElement) {
                        resultElement.textContent = fieldTotal.toFixed(2);
                    } else {
                        const newResultElement = document.createElement('p');
                        newResultElement.id = result-${field};
                        newResultElement.textContent = fieldTotal.toFixed(2);
                        resultsDiv.appendChild(newResultElement);
                    }

                    // Mettre à jour le prix total
                    let fieldPrice = 0;
                    fields.forEach(field => {
                        const quantity = parseFloat(document.querySelector([name="${field}"]).value) || 0;
                        const price = parametres[field] || 0;
                        fieldPrice += quantity * price;
                    });

                    totalPriceElement.setAttribute('data-field-price', fieldPrice);
                    updateTotalPrice();
                });
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const tauxInfo = {!! json_encode($taux->pluck('pourcentage', 'libelle')) !!};

        const tauxSelect = document.getElementById('nbre_fois');
        if (tauxSelect) {
            tauxSelect.addEventListener('change', function() {
                const selectedOption = this.options[this.selectedIndex];
                const libelleChoisi = selectedOption.value;

                const prixTotalElement = document.getElementById('prixTotalHT');

                const prixTotalInitial = parseFloat(prixTotalElement.textContent) || 0;

                if (tauxInfo.hasOwnProperty(libelleChoisi)) {
                    const pourcentage = tauxInfo[libelleChoisi];
                    const reduction = prixTotalInitial * (pourcentage / 100);
                    const prixReduit = prixTotalInitial - reduction;

                    prixTotalElement.textContent = prixReduit.toFixed(2);
                    updateTotalPrice(pourcentage);
                } else {
                    prixTotalElement.textContent = prixTotalInitial.toFixed(2);
                    updateTotalPrice();
                }
            });
        } else {
            console.error('Element with ID "nbre_fois" not found.');
        }
    });
</script>