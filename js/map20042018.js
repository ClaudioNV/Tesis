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
 
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: -34.397, lng: 150.644 },
        zoom: 15
    });
    var infoWindow = new google.maps.InfoWindow({ map: map });

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
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service Fallo.' :
        'Error: Your browser doesn\'t support geolocation.');
}


