{{-- <script>
    function afficheCommune(ExtraId)
    {
       
        var ext_id = ExtraId;
       
        $.ajax({
            type:'GET',
            url: "{{route('extra.liste')}}",
            data: {id: ext_id},
            success: function(data){
                console.log(data);
                $('#extra').empty();
                const liste = data;
                $('#extra').append('<option value=""> Choisissez les extra</option>');

                liste.forEach(function(item){

                    $('#extra').append('<option value="'+item.id+'" data-price="'+item.prix+'"> '+item.libelle+'</option>');

                    console.log(item);
                });

                //afficheArrondissemnt($('#extra').val());
                
            },
            error: function(data){
                console.log(data);
            }
        });
    }

    
</script>

<script>
    function toggleFields(serviceId) {
   
    // Ajax request to get the service details
    $.ajax({
        type: 'GET',
        url: `{{ route('parametre.liste') }}`,
        data: { id: serviceId },
        success: function(data) {
            console.log(data);  // Log the received data

            var fields = [
                'chambresField',
                'cuisinesField',
                'salleDeBainField',
                'salleAEauField',
                'salonsField',
                'buanderieField',
                'entrerCouloireField',
                'escalierField'
            ];

            var heures = ['heuresField','agentField'];

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
                    // Set required attribute for inputs inside the field
                    var inputs = heure.querySelectorAll('input');
                    inputs.forEach(function(input) {
                        input.required = true;
                    });
                });
            } else {
                heures.forEach(function(heureId) {
                    var heure = document.getElementById(heureId);
                    heure.style.display = 'none';
                    // Remove required attribute and reset values for inputs inside the field
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
    // Optionally call toggleFields with a default service ID if needed
    // toggleFields(1); // Example: 1 is the default service ID
});


</script>



<script>
    document.addEventListener('DOMContentLoaded', function() {
    // List of field IDs to show/hide
    var fields = [
        'addressField',
        'postalCodeField',
        'cityField'
    ];

    // Function to show or hide fields based on the radio button value
    function toggleFields() {
        var pourQuiValue = document.querySelector('input[name="pour_qui"]:checked').value;

        if (pourQuiValue === '1') {
            fields.forEach(function(fieldId) {
                var field = document.getElementById(fieldId);
                field.style.display = 'none';
                // Set required attribute for inputs inside the field
                var inputs = field.querySelectorAll('input');
                inputs.forEach(function(input) {
                    input.required = true;
                });
            });
        } else {
            fields.forEach(function(fieldId) {
                var field = document.getElementById(fieldId);
                field.style.display = 'block';
                // Remove required attribute and reset values for inputs inside the field
                var inputs = field.querySelectorAll('input');
                inputs.forEach(function(input) {
                    input.required = false;
                    input.value = '';
                });
            });
        }
    }

    // Initialize fields based on the current selection
    toggleFields();

    // Add event listeners to the radio buttons
    var radioButtons = document.querySelectorAll('input[name="pour_qui"]');
    radioButtons.forEach(function(radio) {
        radio.addEventListener('change', toggleFields);
    });
});

</script>

<script>
    document.getElementById('extra').addEventListener('change', (e) => {
            let selectedOptions = Array.from(e.target.selectedOptions).map(option => option.value);
            console.log(selectedOptions);
       }); 




function getServicePrice(servicePrxId) {
    $.ajax({
        type: 'GET',
        url: `{{ route('parametre.liste') }}`, // Replace with the correct route URL
        data: { id: servicePrxId },
        success: function(data) {
            if (data) {
                const servicePrice = parseFloat(data.prixhors);
                document.getElementById('prixTotalHT').setAttribute('data-service-price', servicePrice);
                updateTotalPrice();

                console.log(servicePrice);
                return servicePrice;
            } else {
                return 0;

                console.log('Service not found');
            }
        },
        error: function(xhr) {
            return servicePrice = 0;
            console.error(xhr.responseText);
           
        }
    });
}

function getExtra(selectElement) {
    let selectedOptions = Array.from(selectElement.selectedOptions).map(option => option.value);
    $.ajax({
        type: 'GET',
        url: `{{ route('extra.prix') }}`, // Replace with the correct route URL
        data: { id: selectedOptions },
        success: function(data) {
            if (data) {
                console.log(data)
                const extraPrices = data.map(item => parseFloat(item.prix || 0));
                const totalExtraPrice = extraPrices.reduce((acc, price) => acc + price, 0);

                document.getElementById('prixTotalHT').setAttribute('data-extra-price', totalExtraPrice);
                updateTotalPrice();

                console.log(extraPrices);
                return extraPrices;

               
            } else {

                return extraPrices = 0;
                console.log('Extras not found');
            }
        },
        error: function(xhr) {
            return extraPrices = 0;
            
            console.error(xhr.responseText);
            console.log('Error retrieving extra information');
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('service_id').addEventListener('change', function() {
        getServicePrice(this.value);
    });
});

document.addEventListener('DOMContentLoaded', function() {
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
                    resultElement = fieldTotal.toFixed(2);
                } else {
                    const newResultElement = document.createElement('p');
                    newResultElement.id = `result-${field}`;
                    newResultElement.textContent = fieldTotal.toFixed(2);
                    resultsDiv.appendChild(newResultElement);
                }



                let fieldPrice = 0;
          fields.forEach(field => {
            const quantity = parseFloat(document.querySelector(`[name="${field}"]`).value) || 0;
            const price = parametres[field] || 0;
            fieldPrice += quantity * price;
         });

      
        //return fieldPrice;

        document.getElementById('prixTotalHT').setAttribute('data-field-price', fieldPrice);
                updateTotalPrice();


                // Mettre à jour le prix total
               /*  total = getTotalPrice();
                totalPriceElement.textContent = total.toFixed(2);
                console.log(totalPriceElement.textContent); */
            });
        }
    });

     /* function getTotalPrice() {
        let fieldPrice = 0;
        fields.forEach(field => {
            const quantity = parseFloat(document.querySelector(`[name="${field}"]`).value) || 0;
            const price = parametres[field] || 0;
            fieldPrice += quantity * price;
        });

      
        return fieldPrice;
    }; */
 


   
});

function updateTotalPrice() {
    const servicePrice = parseFloat(document.getElementById('prixTotalHT').getAttribute('data-service-price') || 0);
    const extraPrice = parseFloat(document.getElementById('prixTotalHT').getAttribute('data-extra-price') || 0);
    const fieldPrice = parseFloat(document.getElementById('prixTotalHT').getAttribute('data-field-price') || 0);

    console.log(servicePrice + extraPrice + fieldPrice );
   const totalPrice = servicePrice + extraPrice + fieldPrice ;
    document.getElementById('prixTotalHT').textContent = totalPrice.toFixed(2); 
} 




/* 
    const ServicePrice = getServicePrice();
    const ExtraPrise = getExtra();
    const FieldPrice = getTotalPrice();

    const TotalHT = ServicePrice + ExtraPrise +FieldPrice ;
   
    console.log(TotalHT);
    return TotalHT;
 */

</script> --}}




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
        url: `{{ route('parametre.liste') }}`,
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
                    input.required = true;
                });
            });
        } else {
            fields.forEach(function(fieldId) {
                var field = document.getElementById(fieldId);
                field.style.display = 'block';
                var inputs = field.querySelectorAll('input');
                inputs.forEach(function(input) {
                    input.required = false;
                    input.value = '';
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
        url: `{{ route('extra.prix') }}`,
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
        url: `{{ route('parametre.liste') }}`,
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
    const servicePrice = parseFloat(document.getElementById('prixTotalHT').getAttribute('data-service-price') || 0);
    const extraPrice = parseFloat(document.getElementById('prixTotalHT').getAttribute('data-extra-price') || 0);
    const fieldPrice = parseFloat(document.getElementById('prixTotalHT').getAttribute('data-field-price') || 0);

    let discountedServicePrice = servicePrice; // Prix du service après réduction

    if (discountPercentage > 0) {
        const discount = servicePrice * (discountPercentage / 100);
            discountedServicePrice -= discount;
            const totalPrice = discountedServicePrice + extraPrice + fieldPrice;
             document.getElementById('prixTotalHT').textContent = totalPrice.toFixed(2);
    }else{
        const totalPrice = servicePrice + extraPrice + fieldPrice;
        document.getElementById('prixTotalHT').textContent = totalPrice.toFixed(2);
    }
   
   
}



function compareAndApplyDiscount() {
    const nbrePersonne = parseFloat(document.querySelector('[name="nbre_personne"]').value) || 0;
    const heureSession = parseFloat(document.querySelector('[name="heure_session"]').value) || 0;
    const selectedServiceId = document.getElementById('serviceSelect').value; // Supposons que l'ID du service est dans un élément avec l'ID 'serviceSelect'

    console.log(selectedServiceId);
if (!selectedServiceId) {
    console.error('Service ID is not selected');
    alert('Please select a service');
    return;
}
    $.ajax({
        type: 'GET',
        url: `{{ route('service.getValues') }}`,
        data: { serviceId: selectedServiceId }, // Pass the current service ID if needed
        success: function(data) {
            if (data) {
                const serviceAgents = parseFloat(data.agent);
                const serviceHours = parseFloat(data.heure);
                const discountPercentage = parseFloat(data.pourcentage);
                const servicePrice = parseFloat(document.getElementById('prixTotalHT').getAttribute('data-service-price'));

                console.log(serviceAgents);
                console.log(serviceHours);
                console.log(discountPercentage);
                console.log(servicePrice);

                if(nbrePersonne === 0 && heureSession === 0){
                    console.log('OUI');
                    document.getElementById('prixTotalHT').textContent = servicePrice.toFixed(2);
                    updateTotalPrice();

                }else {
                    console.log('NON');
                   
                    if (nbrePersonne <= serviceAgents && heureSession <= serviceHours) {
                    const discount = servicePrice * (discountPercentage / 100);
                    const discountedPrice = servicePrice - discount;
                    console.log(discountedPrice);
                    
                    document.getElementById('prixTotalHT').textContent = discountedPrice.toFixed(2);
                    updateTotalPrice(discountPercentage);
                  
                }
                else {
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


document.getElementById('extra').addEventListener('change', (e) => {
    let selectedOptions = Array.from(e.target.selectedOptions).map(option => option.value);
    console.log(selectedOptions);
    getExtra(e.target);
});







document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('service_id').addEventListener('change', function() {
        getServicePrice(this.value);
    });
});

document.addEventListener('DOMContentLoaded', function() {
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
                    resultElement.textContent = fieldTotal.toFixed(2);
                } else {
                    const newResultElement = document.createElement('p');
                    newResultElement.id = `result-${field}`;
                    newResultElement.textContent = fieldTotal.toFixed(2);
                    resultsDiv.appendChild(newResultElement);
                }

                // Mettre à jour le prix total
                let fieldPrice = 0;
                fields.forEach(field => {
                    const quantity = parseFloat(document.querySelector(`[name="${field}"]`).value) || 0;
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
    // Récupération des informations de la classe taux depuis la base de données
    const tauxInfo = {!! json_encode($taux->pluck('pourcentage', 'libelle')) !!};

    // Écouteur d'événements sur la sélection de l'option
    const tauxSelect = document.getElementById('nbre_fois');
    const prixTotalElement =  document.getElementById('prixTotalHT').textContent = totalPrice.toFixed(2);

       
    // Récupération du prix total initial
    const prixTotalInitial = parseFloat(prixTotalElement);

    console.log(prixTotalInitial);
    tauxSelect.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        const libelleChoisi = selectedOption.value;

        // Vérifier si le libellé choisi correspond à un taux dans tauxInfo
        if (tauxInfo.hasOwnProperty(libelleChoisi)) {
            const pourcentage = tauxInfo[libelleChoisi];
            const reduction = prixTotalInitial * (pourcentage / 100);
            const prixReduit = prixTotalInitial - reduction;


            console.log(pourcentage);
            console.log(prixReduit);
            prixTotalElement.textContent = prixReduit.toFixed(2);
            updateTotalPrice(pourcentage); // Mettre à jour le prix total avec le pourcentage de réduction
        } else {
            // Si aucun taux correspondant n'est trouvé, restaurer le prix initial
            prixTotalElement.textContent = prixTotalInitial.toFixed(2);
            updateTotalPrice(); // Mettre à jour le prix total sans réduction
        }
    });
});





     /* function getTotalPrice() {
        let fieldPrice = 0;
        fields.forEach(field => {
            const quantity = parseFloat(document.querySelector(`[name="${field}"]`).value) || 0;
            const price = parametres[field] || 0;
            fieldPrice += quantity * price;
        });

      
        return fieldPrice;
    }; */
 


   


</script>