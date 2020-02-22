window.onload = (function(){
    try{
        
        // $("#siguiente").on('keyup', function(){
        function ajaxForm () {
            alert('hola');
            let buscar = document.getElementById('form').value;                    

            function httpQuest()
            {
                try{
                req=new XMLHttpRequest();
                }catch(err1){
                    try{
                        req=new ActiveXObject("Msxml2.XMLHTTP");
                        }catch (err2){
                        try{
                            req=new ActiveXObject("Microsoft.XMLHTTP");
                            }catch (err3){
                            req=false;
                            }
                        }
                }
                return req;
            }

            function getBusqueda(buscar){
                    var http=httpQuest();
                
                if(buscar != ""){
                    if (http.readyState==4 || http.readyState==0) {
                        var myRand=parseInt(Math.random()*999999999999);

                        http.open("GET","../IVPA/Ajax/consultasAjax.php?myRand="+myRand+"&buscar="+buscar,true);         
                        http.onreadystatechange=function(){           
                        if ((http.readyState==4 && http.status==200)) {
                            
                            var retorno = http.responseText;

                            document.getElementById('respuesta').innerHTML= retorno;
                                
                            }
                        } 
                }
                http.setRequestHeader("Content-Type","application/x-www-formurlencoded");
                http.send(null);

                } else {
                    
                    var error = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>¡Aviso!</strong> No puede buscar si el campo esta vacío. Intentar nuevamente<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                    
                    document.getElementById('respuesta').innerHTML = error;

                }
                
            }  

            getBusqueda(buscar);
        }
        // }).keyup();

    } catch(e) { console.log(e) }
});