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
		$sql="SELECT  p.nombre, p.marca, p.precio, p.stock, p.ubicacion,um.nombre as unidadMedida, f.nombre as familiaNombre from producto p 
		inner join unidadMedida um on um.idUnidadMedida=p.idUnidadMedida
		inner join familia f on f.idFamilia= p.idFamilia

	
		where p.stock>0;
		";
		return ejecutarConsulta($sql);		
	}


}

?>