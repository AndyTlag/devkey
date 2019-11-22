<?php

include_once(dirname(__FILE__) . '/Config.class.php');
include_once(dirname(__FILE__) . '/conexao.php');

if ($_POST['action'] == "edita_usu") {
	edita_usu($con,$_POST['usu_id']);
}

if ($_POST['action'] == "edita_trf") {
	edita_trf($con,$_POST['trf_id']);
}

function edita_usu($con,$usu_id){

	$con->begin_transaction();
	$sql = "UPDATE ". Config::BD_PREFIX ."usuario usu 
	SET 
	usu.usu_nome = '" . addslashes($_POST['usu_nome']) ."',  
	usu.usu_email = '" . addslashes($_POST['usu_email']) ."' 
	WHERE usu.usu_id=". addslashes($_POST['usu_id']);

	$oDados = mysqli_query($con, $sql);
	
//aq
	if ($oDados === TRUE){

		$con->commit();

		echo '<script>
		document.location.href="form_cad_membro.php";
		alert("Membro atualizado!");              	

		</script>';

	}else{

		echo '<script>
		document.location.href="form_cad_membro.php";
		alert("Não foi possível atualizar membro!");              	

		</script>';
		$con->rollback();
	}
	//aq

}//func


function edita_trf($con,$trf_id){

	$con->begin_transaction();
	$sql = "UPDATE ". Config::BD_PREFIX ."tarefa trf 
	SET 
	trf.trf_nome = '" . addslashes($_POST['trf_nome']) ."',  
	trf.trf_descricao = '" . addslashes($_POST['trf_descricao']) ."' 
	WHERE trf.trf_id=". addslashes($_POST['trf_id']);

	$oDados = mysqli_query($con, $sql);
	
//aq
	if ($oDados === TRUE){

		$con->commit();

		echo '<script>
		document.location.href="editar_tarefa.php";
		alert("Tarefa atualizada!");              	

		</script>';

	}else{

		echo '<script>
		document.location.href="editar_tarefa.php";
		alert("Não foi possível atualizar tarefa!");              	

		</script>';
		$con->rollback();
	}
	//aq

}//func


?>