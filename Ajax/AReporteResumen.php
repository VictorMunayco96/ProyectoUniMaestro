<?php 

require_once "../Modelo/MReporteResumen.php";

$MReporteResumen=new MReporteResumen();


$fecha=isset($_REQUEST["fecha"])? limpiarCadena($_REQUEST["fecha"]):"";
$fecha2=isset($_REQUEST["fecha2"])? limpiarCadena($_REQUEST["fecha2"]):"";



switch ($_GET["op"]){

	case 'listar':


		$rspta=$MReporteResumen->listar($fecha, $fecha2);
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
			
				
				"0"=>$reg->idProducto,
				 "1"=>$reg->nombre,
				 "2"=>$reg->marca,
				 "3"=>$reg->cantidad,
				 "4"=>$reg->precio,
				 "5"=>$reg->stock,
				 "6"=>$reg->ubicacion,
				 "7"=>$reg->unidadMedida,
				 "8"=>$reg->fecha
 		
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;
}
