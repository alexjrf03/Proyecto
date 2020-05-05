window.onload = (function() {

	try{
        
        $("#id_app_update").on('keyup', function(){

            let id_app = $('#id_app_update').val();
            
            if (id_app) {
                $.ajax({
                    url : '../Proyecto/Ajax/updateAjax.php',
                    type: "POST",
                    data: {id: id_app},
                    dataType: 'json'
                })
                .done(function(response) {
                    data(response)
                })
                .fail(function(response) {
                    alert( "error inesperado, revisa las Network" );
                })
                .always(function(response) {
                    console.log("complete");
                });
            }

        }).keyup()

    } catch(e) { 
    	console.log(e) 
    }

    function data(response) 
    {
        // App
        $('#name-app').val(response.nombre)
        $('#final-user').val(response.usuario_final)
        $('#attached-files').val(response.archivo_adjunto)
        $('#file-conect').val(response.archivo_conexion)
        $('#description-app').val(response.descripcion_app)
        $('#signature-management').val(response.manejo_firma)
        $('#authentication-method').val(response.metodo_autenticacion)
        $('#url').val(response.url)
        $('#uso').val(response.uso)
        // Languaje
        $('#nomb_leng').val(response.nombre_lenguaje)
        $('#version-leng').val(response.version)
        $('#id_lenguaje').val(response.id_lenguaje)
        // Service web
        $('#web_service').val(response.nombre_serviweb)
        $('#version-sw').val(response.version_serviweb)
        $('#id_serviweb').val(response.id_serviweb)
        // System Operatives
        $('#so').val(response.nombre_so)
        $('#version-so').val(response.version_so)
        $('#id_so').val(response.id_so)
        // Env
        $('#select-ambiente').val(response.nombre_env)
        $('#id_amb').val(response.id_amb)
        // Device
        $('#nomb-disp').val(response.nombre_disp)
        $('#device').val(response.descripcion_disp)
        $('#id_disp').val(response.id_disp)
        // Database
        $('#nombre_bd').val(response.nombre_bd)
        $('#select-bd').val(response.estatus)
        $('#manejador').val(response.manejador_bd)
        $('#version_manejador').val(response.version_bd)
        $('#description_database').val(response.descripcion_bd)
        $('#id_tbd').val(response.id_tbd)
        $('#id_bd').val(response.id_bd)
        // Provider
        $('#nombre_proveedor').val(response.nombre_proveedor)
        $('#phone').val(response.telefono)
        $('#correo').val(response.correo)
        $('#id_proveedor').val(response.id_proveedor)
    }
});