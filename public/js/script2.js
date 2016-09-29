$(document).ready(function(){
         var tablaDatos = $('#datos');
     	 var route= "http://localhost:8000/generos";

$.get(route, function(res){ // pasando ruta y recibiendo respuesta
	 //intero todo lo recibido
	$(res).each(function(key,value){
		tablaDatos.append("<tr><td>"+value.genre+"</td><td><button class='btn btn-primary' data-toggle='modal' href='#modal-id' >Editar</button><button class='btn btn-danger'>Eliminar</button></td></tr>")
	})
})

});