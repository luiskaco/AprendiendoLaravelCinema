$('#registro').click(function(){
       
         var dato= $('#genre').val();
         var route= "http://localhost:8000/genero";
        /*creando la variable token*/

        var token =$('#token').val();
          /*AJAX*/

            $.ajax({
            	url: route,
            	headers:{'X-CSRF-TOKEN':token},
            	type:  'POST',
            	dataType: 'json',
            	data: {genre: dato},
            })
            .done(function() {
            	console.log("success");
            })
            .fail(function() {
            	console.log("error");
            })
            .always(function() {
            	console.log("complete");
            });

});