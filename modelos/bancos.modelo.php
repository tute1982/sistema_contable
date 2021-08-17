<?php 

require_once "conexion.php";

class ModeloBancos{
 
    /*=============================================
	CREAR BANCO
	=============================================*/
    static public function mdlCrearBanco($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(banco, cuenta, cbu, tipo, moneda) VALUES (:banco, :cuenta, :cbu, :tipo, :moneda)");
		$stmt->bindParam(":banco", $datos["banco"], PDO::PARAM_STR);
		$stmt->bindParam(":cuenta", $datos["cuenta"], PDO::PARAM_STR);
        $stmt->bindParam(":cbu", $datos["cbu"], PDO::PARAM_STR);
        $stmt->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
        $stmt->bindParam(":moneda", $datos["moneda"], PDO::PARAM_STR);
		if($stmt->execute()){
			return "ok";
		} else {
			return "error";
		}
		$stmt->close();

		$stmt = null;
    }

    /*=============================================
	MOSTRAR BANCOS
	=============================================*/
    static public function mdlMostrarBancos($tabla, $item, $valor){
        if($item != null){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetch();
		} else {
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt -> execute();
			return $stmt -> fetchAll();
		}
		$stmt->close();
		$stmt = null;
    }

}