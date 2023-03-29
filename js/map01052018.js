var repos = "http://korpovibro.cl/modelo/registra_clases.php";

//Variables de formulario de registro de clase
var nombreclase = '';
var horainicio = '';
var horafin = '';


 
var autocomplete;
var componentForm = {
    street_number: 'short_name',
    route: 'long_name',
    locality: 'long_name',
    administrative_area_level_1: 'short_name',
    country: 'long_name',
    postal_code: 'short_name'
};


// Iniciar el mapa
function initMap() {

    var latlng = { lat: -33.450, lng: -70.6506 };
    var map = new google.maps.Map(document.getElementById('map'), {
        center:latlng,
        zoom: 15
    });

    var infoWindow = new google.maps.InfoWindow({ map: map });

    var marker = new google.maps.Marker({
        position:latlng,
        map:map,
        title: 'holaa',
        draggable: false
    });  

     var geocoder = new google.maps.Geocoder();

        //  REGISTRAR MARCAR PUNTOS EN EL MAPA
     /*document.getElementById('submit').addEventListener('click', function () {*/
         $('#submit').click(function (e) {
         geocodeAddress(geocoder, map);
         //Variable para direccion, punto o coordenada
         var direccion = new google.maps.latlng(lista[0], lista[1]);
            position: direccion
            map:map

         nombreclase = $.trim($('#nombreclase').val());
         horainicio = $.trim($('#horainicio').val());
         horafin = $.trim($('#horafin').val());
         address = $.trim($('#address').val());
         //var direccion1 = lista[0];
         //var direccion2 = lista[1];
         
         //correo = $.trim($('#correo').val());
         $.getJSON(repos, { nombreclas: nombreclase, horain: horainicio, horafi: horafin, direcname: address, Latitude1: direccion1, Longitud1: direccion2})
         
     }); 

    autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('address')),
         { types: ['geocode'] });

     autocomplete.addListener('place_changed', fillInAddress);

    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Ubicacion Encontrada!');

            map.setCenter(pos);
        }, function () {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }
        //MOVER MARCADOR Y MOSTRAR LA LONGITUD Y LATITUD DEL LUGAR
      /*  google.maps.event.addListener(marker, 'dragend', function () {
        alert('Latitud = ' + marker.getPosition().lat() + ', Longitud = ' + marker.getPosition().lng());
    });*/
    
    
}

//geocodificacion de  direcciones 
function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
        resultsMap.setCenter(results[0].geometry.location);
        marker = new google.maps.Marker({
        map: resultsMap,
        position: results[0].geometry.location

    });         // SEPARAR LATITUD Y LONGITUD EN DIFERENTE VARIABLE 
        var coordenadas = results[0].geometry.location.toString();
            //alert("Las coordenadas son:" + cordenadas);  
            coordenadas = coordenadas.replace("(","");
            coordenadas = coordenadas.replace(")", "");
            
            //alert(results[0].geometry.location);
        var lista = coordenadas.split(",");
            alert("Las coordenadas X es:" + lista[0]);
            alert("Las coordenadas Y es:" + lista[1]);

          } else {
        alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}



function fillInAddress() {
    // Get the place details from the autocomplete object.
    var place = autocomplete.getPlace();


    /*
    for (var component in componentForm) {
        document.getElementById("origen-region").value = '';
        document.getElementById("origen-comuna").value = '';
    }*/

    // Get each component of the address from the place details
    // and fill the corresponding field on the form.
    for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];

            if (addressType == "locality") {
                //document.getElementById("origen-comuna").value = val;
                var comuna = val;
            }
            if (addressType == "administrative_area_level_1") {
               // document.getElementById("origen-region").value = val;
               var region = val;
            }

        }
    }
}

