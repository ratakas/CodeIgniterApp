$(document).ready(function(){
   //código a ejecutar cuando el DOM está listo para recibir instrucciones.





});

function eliminardata(eli_tabla,eli_col,eli_id,eli_tipo,eli_dir) {
	$('#eli_id').val(eli_id);
	$('#eli_tabla').val(eli_tabla);
	$('#eli_col').val(eli_col);
	$('#eli_dir').val(eli_dir);
	$('#eli_tipo').html(eli_tipo+ " con "+eli_col+" "+eli_id);
	$('#eli_titulo').html(eli_tipo);

	$('#asignaractividad').modal('hide');
	$('#eliminargeneral').modal('show');
}