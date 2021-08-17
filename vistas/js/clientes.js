/*=============================================
Editar Usuario
=============================================*/
$(document).on("click", ".btnEditarCliente", function(){

	var idCliente = $(this).attr("idCliente");
	
	var datos = new FormData();
	datos.append("idCliente", idCliente);

	$.ajax({

		url:"ajax/clientes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			$("#idCliente").val(respuesta["id"]);
            $("#editarCliente").val(respuesta["nombre"]);
			$("#editarEmail").val(respuesta["email"]);
			$("#editarDireccion").val(respuesta["direccion"]);
			$("#editarTelefono").val(respuesta["telefono"]);
			$("#editarCuit").val(respuesta["cuit"]);
		}

	});

})

/*=============================================
ELIMINAR CLIENTE
=============================================*/
$(document).on("click", ".btnEliminarCliente", function(){

    var idCliente = $(this).attr("idCliente");

    swal({
        title: "¿Está seguro que quiere borrar el cliente?",
        text: "¡Si no lo está, puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar cliente'
    }).then((result)=>{
        if(result.value){
            window.location = "index.php?ruta=clientes&idCliente="+idCliente;
        }
    })
})