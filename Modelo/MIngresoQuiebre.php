<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class MIngresoQuiebre
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($cantidad, $fecha, $idProducto, $idUsuario)
	{
		$sql="INSERT INTO quiebre (cantidad, fecha, idProducto, idUsuario)
		VALUES ($cantidad,'$fecha','$idProducto','$idUsuario')";
		return ejecutarConsulta($sql);
	}




	//Implementamos un método para eliminar registros
	public function eliminar($idQuiebre)
	{
		$sql="delete from quiebre where idQuiebre='$idQuiebre'";
		return ejecutarConsulta($sql);
	}


	//Implementar un método para listar los registros
	public function listar($fecha)
	{
		$sql="SELECT q.idQuiebre, q.cantidad, q.fecha, q.idProducto, p.nombre, p.marca, p.precio, p.stock, p.ubicacion,um.nombre as unidadMedida, q.idUsuario from quiebre q
		inner join producto p on q.idProducto=p.idProducto
		inner join unidadMedida um on um.idUnidadMedida=p.idUnidadMedida

	
		where q.fecha='$fecha';
		";
		return ejecutarConsulta($sql);		
	}


}

?>