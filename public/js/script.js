$('#registro').click(function(){
       
         var dato= $('#genre').val();
         var route= "http://localhost:8000/genero";
        /*creando la variable token*/

        var token =$('#token').val();
          /*AJAX*/

            $.ajax({
            	url: route,
            	headers:{'X-CSRF-TOKEN':token}, /*Agregar esta linea para el token*/
            	type:  'POST',
            	dataType: 'json',
            	data: {genre: dato},
            	success:function(){
            		$('#msj-success').fadeIn(); //Nota personal: Quita el display none
            	},
                error:function(msj){
                    console.log(msj.responseJSON.genre); //Solo ver el mensaje json de genero
                    $('#msj').html(msj.responseJSON.genre);
                    $('#msj-error').fadeIn();
                },
            });

});