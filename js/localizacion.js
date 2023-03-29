/*class Localizacion{
    constructor(callback){
        if(navigator.geolocation){
            //obtener ubicacion
            navigator.geolocation.getCurrentPosition((position) =>{
                this.latitude = position.coords.latitude;
                this.longitud = position.coords.longitude;

                callback();
            });
        }else{
            alert("tu navegador no soporta la geolocalizacion");
        }
    }

}*/