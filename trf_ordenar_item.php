<?php

include_once(dirname(__FILE__) . '/Config.class.php');
include_once(dirname(__FILE__) . '/conexao.php');

$trf_id= $_POST["trf_id"];
$trf_status= $_POST["trf_status"];
//die("aq " . $_POST["trf_status"] . " oi");

$arr_item = explode(",", $trf_id);

$trf_status = explode("[", $trf_status);
$trf_status = explode("]", $trf_status[1]);
//var_dump($trf_status);
//echo $trf_status[0];
		//die("oi" .  $trf_status[0]);

$ordem = 1;

/*switch ($trf_status[0]) {
	case 'sortable2':
		echo "oi";
		break;
	
	default:
		echo "tchau";
		break;
}*/

die($trf_status[0]);
if ($trf_status[0] == "sortable2") {
	echo "deu";
}else{
	echo "nao deu";
}

die();

	/*switch ($trf_status[0]) {
		case 'sortable1':

		$sql_sort = "UPDATE " . Config::BD_PREFIX . "tarefa 
		SET trf_status = 'pen' 
		WHERE trf_id=". $arr_item;

		die($sql_sort);

		$execute = $con->query($sql_sort) or die(mysqli_error($con));

		break;

		case 'sortable2'

		$sql_sort = "UPDATE " . Config::BD_PREFIX . "tarefa 
		SET trf_status = 'exe' 
		WHERE trf_id=". $arr_item;

		$execute = $con->query($sql_sort) or die(mysqli_error($con));

		break;

		case 'sortable3'

		$sql_sort = "UPDATE " . Config::BD_PREFIX . "tarefa 
		SET trf_status = 'fin' 
		WHERE trf_id=". $arr_item;

		$execute = $con->query($sql_sort) or die(mysqli_error($con));

		break;
	}*/

foreach ($arr_item as $item) {

	if (!empty($item)) {

		$sql = "UPDATE " . Config::BD_PREFIX . "tarefa SET trf_ordem = ".$ordem." WHERE trf_id=". $item;

		$execute = $con->query($sql) or die(mysqli_error($con));

	}
	$ordem++;
}


?>