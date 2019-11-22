<?php

include_once(dirname(__FILE__) . '/Config.class.php');
include_once(dirname(__FILE__) . '/conexao.php');

if ($_POST['action'] == "excluir_usu") {
	excluir_usu($con,$_POST['usu_id']);
}

if ($_POST['action'] == "excluir_trf") {
	excluir_trf($con,$_POST['trf_id']);
}

function excluir_usu($con, $usu_id){
	$con->begin_transaction();
	$cSQL = "DELETE FROM ". Config::BD_PREFIX ."usuario 
	WHERE usu_id=". $_POST['usu_id'];

	$oDados = mysqli_query($con, $cSQL);


	if ($oDados === TRUE) {


		$con->commit();

		echo '<script>
		document.location.href="form_cad_membro.php";
		alert("Membro excluido com sucesso!");              	
		</script>';
	}else{

		echo '<script>
		document.location.href="form_cad_membro.php";
		alert("Não foi possível excluir membro! O mesmo tem tarefas a fazer!");   	
		</script>';
		$con->rollback();
	}
	
}

function excluir_trf($con, $trf_id){
	$con->begin_transaction();
	$cSQL = "DELETE FROM ". Config::BD_PREFIX ."tarefa 
	WHERE trf_id=". $_POST['trf_id'];

	$oDados = mysqli_query($con, $cSQL);


	if ($oDados === TRUE) {


		$con->commit();

		echo '<script>
		document.location.href="editar_tarefa.php";
		alert("Tarefa excluida com sucesso!");              	
		</script>';
	}else{

		echo '<script>
		document.location.href="editar_tarefa.php";
		alert("Não foi possível excluir tarefa!");   	
		</script>';
		$con->rollback();
	}
	
}


?>