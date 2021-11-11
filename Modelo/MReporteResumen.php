<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class MReporteResumen
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}




	//Implementar un método para listar los registros
	public function listar($fecha , $fecha2)
	{
		$sql="SELECT q.idQuiebre, q.cantidad, q.fecha, q.idProducto, p.nombre, p.marca, p.precio, p.stock, p.ubicacion,um.nombre as unidadMedida, q.idUsuario from quiebre q
		inner join producto p on q.idProducto=p.idProducto
		inner join unidadMedida um on um.idUnidadMedida=p.idUnidadMedida

	
		where q.fecha>='$fecha' and q.fecha<='$fecha2';
		";
		return ejecutarConsulta($sql);		
	}


}

?>