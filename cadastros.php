<?php

include_once(dirname(__FILE__) . '/Config.class.php');
include_once(dirname(__FILE__) . '/conexao.php');

if ($_POST['action'] == "cad_trf") {
  cad_trf($con);
}

if ($_POST['action'] == "cad_usu") {
	cad_usu($con);
}

function cad_trf($con) {

  if (isset($_POST['trf_nome']) && ($_POST['trf_descricao']) && ($_POST['trf_usu'])){

    $con->begin_transaction();

    $cSQL = "INSERT INTO " 
    . Config::BD_PREFIX . "tarefa (trf_nome, trf_descricao, trf_usu) VALUES ('" 
    . addslashes($_POST['trf_nome']) . "', '" 
    . addslashes($_POST['trf_descricao']) . "', '" 
    . addslashes($_POST['trf_usu']) . "')";

    $oDados = mysqli_query($con, $cSQL);

    if ($oDados === TRUE) {

      $con->commit();

      echo '<script>
      document.location.href="index.php";
      alert("Tarefa cadastrada com sucesso!");
      </script>';

    } else {
      echo '<script>
      document.location.href="index.php";
      alert("Erro: '.mysqli_error($con).'");              	

      </script>';
      $con->rollback();
    }
  } else { 

    if ($_POST['trf_usu'] == 0) {
      echo '<script>
      document.location.href="index.php";
      alert("Selecione o usuário");
      </script>';
    } else {
      echo '<script>
      document.location.href="index.php";
      alert("Não foi possivel cadastrar tarefa!");
      </script>';
    }
  }
} 

?>