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