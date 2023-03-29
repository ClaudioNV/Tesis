var repos = "/modelo/instructor.php";



var nombre = '';
var apellido = '';
var correo = '';
var password = '';
var password2 = '';
var direccion = '';
var telefono = '';
var sexo = '';
var foto = '';




$(document).ready(function () {
    //funcionalidad de los tabs

   // obtener datos del instructor
    $.getJSON(repos, { op: 'getinstructor',})
        .done(function (data) {
            //dato = data.da                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   to;
            //alert(data.nombre);
            $("#nombre").val(data.nombre);
            $("#apellido").val(data.apellido);
            $("#correo").val(data.correo);
            $("#telefono").val(data.telefono);
            $("#direccion").val(data.direccion);
            $("#password").val(data.password);
            $("#password2").val(data.password2);
            $("#sexo").val(data.sexo);
            $("#foto").val(data.foto);
         
    });  

        //actualizar los datos del instructor
    $('#actualizar').click(function (e) {
            e.preventDefault();
           
            
            username = $.trim($('#username').val());
            rut = $.trim($('#rut').val());
            nombre = $.trim($('#nombre').val());
            apellido = $.trim($('#apellido').val());
            correo = $.trim($('#correo').val());
            password = $.trim($('#password').val());
            password2 = $.trim($('#password2').val());
            direccion = $.trim($('#direccion').val());
            telefono = $.trim($('#telefono').val());
            sexo = $.trim($('#sexo option:selected').val());
            foto = $.trim($('#foto').val());
            
            //

        $.getJSON(repos, { op:'actualiza', nombrecito: nombre, apellidoins: apellido, correoins: correo, passwordins: password, password2ins: password2, direccionins: direccion, telefonoins: telefono, sexoins: sexo, fotoins: foto  })
                //nombre del get ej:(nombrecito= nombre clave -> nombre=variable)
            

            /*.done(function (data) {
                embajador_resultado = data.resultado;
                nombreEmbajador = data.embajadorNombre;
                mailEmbajador = data.embajadorMail;
                //alert(embajador_resultado);
                //alert(nombreEmbajador);
                //alert(mailEmbajador);
            })
            .fail(function (xhr, err) {
                //alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
                //alert("responseText: "+xhr.responseText);
                $.getJSON(repos, { op: 'regLogError', cotizacion: '', proceso: 'Seguro Automotriz - Embajador (regCotiza)', aseguradora: '6', coderror: '', detalle: 'No se puede Guardar Codigo Embajador', cliente: auto_rut });
            });*/

            //alert("USUARIO REGISTRADO!");
            //window.location = '../home.php';
        });
    
    
        
});
