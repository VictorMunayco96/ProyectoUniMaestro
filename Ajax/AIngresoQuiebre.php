<?php 

require_once "../Modelo/MIngresoQuiebre.php";

$MIngresoQuiebre=new MIngresoQuiebre();

$idQuiebre=isset($_POST["idQuiebre"])? limpiarCadena($_POST["idQuiebre"]):"";
$cantidad=isset($_POST["cantidad"])? limpiarCadena($_POST["cantidad"]):"";
$fecha=isset($_REQUEST["fecha"])? limpiarCadena($_REQUEST["fecha"]):"";
$idProducto=isset($_POST["idProducto"])? limpiarCadena($_POST["idProducto"]):"";
$idUsuario=1;


switch ($_GET["op"]){
	case 'guardaryeditar':
		
			$rspta=$MIngresoQuiebre->insertar($cantidad, $fecha, $idProducto, $idUsuario);
			echo $rspta ? "Quiebre registrado" : "El codigo es incorrecto";

		
	
	break;

	case 'eliminar':
		$rspta=$MIngresoQuiebre->eliminar($idQuiebre);
 		echo $rspta ? "Quiebre Eliminado" : "Quiebre no se pudo eliminar";
	break;




	case 'listar':


		$rspta=$MIngresoQuiebre->listar($fecha);
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
				"0"=>'<button class="btn btn-danger" onclick="eliminar('.$reg->idQuiebre.')"><i class="fa fa-close"></i></button>',
				
				"1"=>$reg->idProducto,
				 "2"=>$reg->nombre,
				 "3"=>$reg->marca,
				 "4"=>$reg->cantidad,
				 "5"=>$reg->precio,
				 "6"=>$reg->stock,
				 "7"=>$reg->ubicacion,
				 "8"=>$reg->unidadMedida,
				 "9"=>$reg->fecha
 		
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
