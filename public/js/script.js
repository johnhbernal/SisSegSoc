/**
 *
 * @author <a href="mailto:johnhawer8@gmail.com">John Hawer Bernal Gonzalez;
 * @since 25/05/2017
 * En esta función llamamos a un ajax para que nos realize una consulta a la funcion getRecurso 
 * que se encuentra dentro del controlador SearchController a partir del 3 caracter ingresado.
 * Nos devuelve el nombre y el apellido contatenados del empleado y su codigo de empleado.
 */
selector = $.noConflict();


//__________________________________________________________________________________
/*
 * Funcion utilizada para consultar por un rango de edad.
 */
//	selector.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
//	var min = parseInt($('#min').val(), 10);
//	var max = parseInt($('#max').val(), 10);
//
//	var age = parseFloat(data[1]) || 0; // use data for the age column
//
//	if ((isNaN(min) && isNaN(max)) || (isNaN(min) && age <= max)
//			|| (min <= age && isNaN(max)) || (min <= age && age <= max)) {
//		return true;
//	}
//
//	return false;
//});


	selector(document).ready(function() {

//	var table =selector('#tableAdmin').DataTable({
////		"language" : {
////			"url" : "./public/json/Spanish.json"
////		}
//	});


  // Punto 1.
  // Crear código para filtrar pacientes por nombre.
//	selector('input[name=patient_filter]').keyup(function() {
//		
//		table.column(0).search(this.value).draw();
//		
//	});
	
	
	//punto 2
	// llamado a el codigo que busca por un rang0 de fecha cada vez que se ingresa un nuevo valor.
	// Event listener to the two range filtering inputs to redraw on input
//	selector('#min, #max').keyup(function() {
//		table.draw();
//	});

//	alert($('#example_info').attr('value'));

});

