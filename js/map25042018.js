 /*function initMap(){
     var ubicacion = new Localizacion(() =>{
         var options = {
             center: {
                 lat:ubicacion.latitude,
                 lng: ubicacion.longitud
             },
            zoom:15
         }
         var map = new google.maps.Map(document.getElementById('map'), options);
        //var map = document.documentElementById('#map');
         //const mapa = new google.maps.Map(map, options);
     });
 }*/


/*
function initMap(){
     var options = {
         zoom:14,
         center: { lat: 42.3601, lng:-71.0589}
     }
     var map = new google.maps.Map(document.getElementById('map'), options);

     var marker = new google.maps.Marker({
         position: { lat: 42.4668, lng:-71.0589},
         map:map
     });

 }*/


var autocomplete;
var componentForm = {
    street_number: 'short_name',
    route: 'long_name',
    locality: 'long_name',
    administrative_area_level_1: 'short_name',
    country: 'long_name',
    postal_code: 'short_name'
};




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
        draggable: true
    });  

     var geocoder = new google.maps.Geocoder();

     document.getElementById('submit').addEventListener('click', function () {
         geocodeAddress(geocoder, map);

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

        google.maps.event.addListener(marker, 'dragend', function () {
        alert('Latitud = ' + marker.getPosition().lat() + ', Longitud = ' + marker.getPosition().lng());
    });



}







    function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
        resultsMap.setCenter(results[0].geometry.location);
    var marker = new google.maps.Marker({
        map: resultsMap,
    position: results[0].geometry.location
  });

    alert(results[0].geometry.location);

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


// GEOcodificacion

//  function codeAddress() {
//      var address = document.getElementById('address').value();
//      geocoder.geocode({ 'address': address }, function (results, status) {
//          if (status == 'OK') {
//              map.setCenter(results[0].geometry.location);
//              var marker = new google.maps.Marker({
//                  map: map,
//                  position: results[0].geometry.location
//              });
//          } else {
//              alert('Geocode was not successful for the following reason: ' + status);
//          }
//      });
//  }

////////////////////////////////////////////////////////////////////////////

/* function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: hola error.' :
        'Error: Your browser doesn\'t support geolocation.');
}
 */
