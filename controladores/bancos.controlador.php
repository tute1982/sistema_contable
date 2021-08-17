<?php

class ControladorBancos{
 
    /*=============================================
	CREAR BANCO
	=============================================*/
    static public function ctrCrearBanco(){

        if(isset($_POST["nuevoBanco"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíúóÁÉÍÓÚ ]+$/', $_POST["nuevoBanco"]) && 
				preg_match('/^[0-9]+$/', $_POST["nuevoCbu"]) ){

                $tabla = "bancos";
                $datos = array("banco" => $_POST["nuevoBanco"],
								"cuenta" => $_POST["nuevaCuenta"],
								"cbu" => $_POST["nuevoCbu"],
								"tipo" => $_POST["nuevoTipo"],
								"moneda" => $_POST["nuevaMoneda"]);

                $respuesta = ModeloBancos::mdlCrearBanco($tabla, $datos);

                if($respuesta == "ok"){
                    echo '<script>
                        swal({
                            type: "success",
                            title: "El banco ha sido grabado correctamente",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                        }).then(function(result){
                            if(result.value){
                                window.location = "bancos";
                            }
                        });
                    </script>';
                } 

            } else {
                echo '<script>
					swal({
						type: "error",
						title: "¡El banco no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
                        closeOnConfirm: false
					}).then(function(result){
						if(result.value){
							window.location = "bancos";
						}
					});
				</script>';
            }
        }

    }

    /*=============================================
	MOSTRAR BANCOS
	=============================================*/
    static public function ctrMostrarBancos($item, $valor){
        $tabla = "bancos";

        $respuesta = ModeloBancos::mdlMostrarBancos($tabla, $item, $valor);
        return $respuesta;
    }

}