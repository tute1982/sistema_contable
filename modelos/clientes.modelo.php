<?php 

require_once "conexion.php";

class ModeloClientes{

    /*=============================================
	CREAR CLIENTE
	=============================================*/
    static public function mdlCrearCliente($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, cuit, email, telefono, direccion) VALUES (:nombre, :cuit, :email, :telefono, :direccion)");
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":cuit", $datos["cuit"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		if($stmt->execute()){
			return "ok";
		} else {
			return "error";
		}
		$stmt->close();

		$stmt = null;
    }

    /*=============================================
	MOSTRAR CLIENTES
	=============================================*/
    static public function mdlMostrarClientes($tabla, $item, $valor){
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

    /*=============================================
	EDITAR CLIENTE
	=============================================*/
    static public function mdlEditarCliente($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, cuit = :cuit, email = :email, telefono = :telefono, direccion = :direccion WHERE id = :id");
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":cuit", $datos["cuit"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		
		if($stmt->execute()){
			return "ok";
		} else {
			return "error";
		}
		$stmt->close();

		$stmt = null;
    }

    /*=============================================
	BORRAR CLIENTE
	=============================================*/
	static public function mdlEliminarCliente($tabla, $datos){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);
		if($stmt -> execute()){
			return "ok";
		}else{
			return "error";	
		}
		$stmt -> close();
		$stmt = null;
	}

}