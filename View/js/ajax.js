window.onload = (function() {

	try{
        // recuperar contraseña con AJAX (JQuery) petición asincrona al servidor, en segundo plano    
        
        $("#update").on('click', function(){

            let update = $('#id_app').val();
            console.log(update)

            $.ajax({
                url : '../sispreso/Ajax/queryAjax.php',
                type: "POST",
                data: {update: update},
                dataType: 'html'
            })
            .done(function(data) {
                $("#respuesta").html(data);
            })
            .fail(function(data) {
                alert( "error inesperado, revisa las Network" );
            })
            .always(function(data) {
                console.log("complete");
            });

        }).keyup();

    } catch(e) { 
    	console.log(e) 
    }
});