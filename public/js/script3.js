$(document).on('click','.pagination a', function(e){
           //obtener eventos
           e.preventDefault();    // Nota:split divide cadenas 
 		   var page=$(this).attr('href').split('page=')[1]; //obtenemos la posicion 1
            var route='http://localhost:8000/usuario';      
 		   console.log(page);


 		   $.ajax({
 		   	url: route,
 		   	type: 'GET',
 		   	dataType: 'json',
 		   	data: {page:page},
 		    success:function(data){
 		     //	console.log(data);
 		     //	
 		        $('.users').html(data);
 		    }
 		   });

 		   

});
   