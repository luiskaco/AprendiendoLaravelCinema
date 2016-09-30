$(document).ready(function(){
       cargar(); 

});

function cargar(){
         var tablaDatos = $('#datos');
         var route= "http://localhost:8000/generos";
          /*Limpiando datos*/ 
          $('#datos').empty();

            $.get(route, function(res){ // pasando ruta y recibiendo respuesta
               //intero todo lo recibido
            $(res).each(function(key,value){
                tablaDatos.append("<tr><td>"+value.genre+"</td><td><button class='btn btn-primary' value="+value.id+" Onclick='Mostrar(this);' data-toggle='modal' href='#modal-id' >Editar</button><button value="+value.id+" Onclick='Eliminar(this);'class='btn btn-danger'>Eliminar</button></td></tr>")
            });
         });
}

function Eliminar(btn){
       
      var route='http://localhost:8000/genero/'+btn.value+'';
      var token=$('#token').val();

       $.ajax({
            url: route,
            headers:{'X-CSRF-TOKEN':token}, /*Agregar esta linea para el token*/
            type:  'DELETE',//peticion eliminar
            dataType: 'json',
            success:function(){
                cargar();
                $('#msj-success').fadeIn(); //Nota personal: Quita el display none
              
                
              }
          });

}
/*creando el boton mostrar editar*/
function Mostrar(btn){
    //console.log(btn.value); /*IMprimo el boton pero accedo a su valor*/
    var route='http://localhost:8000/genero/'+btn.value+'/edit';

    $.get(route, function(res) {
    	/*Llenado los campos del  formulario*/
 	     //Sconsole.log(res);
    	 $('#genre').val(res.genre);
    	 $('#id').val(res.id);
    });

}

/*Boton Actualizar del MOdal*/
$("#actualizar").click(function(){
	  
	   /*Extrayendo los valores */
		var value= $("#id").val();
		var dato=$('#genre').val();
		var route='http://localhost:8000/genero/'+value+'';
		var token=$('#token').val();
          
          /* console.log('Valor : '+value+'Dato :'+dato+'Ruta :'+route+' Token :'+token); 
*/
         $.ajax({
          	url: route,
          	headers:{'X-CSRF-TOKEN':token}, /*Agregar esta linea para el token*/
            type:  'PUT',//ES actualizar
            dataType: 'json', 
          	data: {genre:dato},
          	success:function(){
            		cargar();
                $('#msj-success').fadeIn(); //Nota personal: Quita el display none
                $('#modal-id').modal('toggle');
                
            	}
          });
})