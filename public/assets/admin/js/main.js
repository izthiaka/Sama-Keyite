(() => {

    $.ajax ({
        type : 'GET',
        url: {{ route('reservation-aeroport.findDriver') }},
        // data : { 'vehicule' : vehicule },
        success : function(data){
            const chauffeur = data;
            console.log('liste des chauffeurs : '+chauffeur);
        },
        error : function(){
            console.log("An error occured !");
        }
    });
})
