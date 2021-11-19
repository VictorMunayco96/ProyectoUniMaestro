<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class MReporteGestionDetalle
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}




	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT fecha, count(idQuiebre) as cantidadQuiebre from quiebre group by fecha order by fecha desc limit 30;;
		";
		return ejecutarConsulta($sql);		
	}


}

?>