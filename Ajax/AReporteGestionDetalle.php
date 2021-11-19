<?php 

require_once "../Modelo/MReporteGestionDetalle.php";

$MReporteGestionDetalle=new MReporteGestionDetalle();






switch ($_GET["op"]){

	case 'listar':


		$rspta=$MReporteGestionDetalle->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
			
				
				
				 "0"=>$reg->fecha,
				 "1"=>$reg->cantidadQuiebre,
				
 		
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
