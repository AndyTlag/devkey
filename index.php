<?php

include_once(dirname(__FILE__) . '/Config.class.php');
include_once(dirname(__FILE__) . '/conexao.php');

?>

<!DOCTYPE html>
<html>
<head>

	<title>ORGANOGRAMA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script type="text/javascript" src="JS/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="JS/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		
		.dragHelper{
			display: block;
			padding: 30px;
			margin-top: 10px;
			background: #fff;
			border: 2px dashed #c2cdda;
			border-radius: 3px;
			text-align: center;
			-webkit-transition: background-color 0.2s ease;
			transition: background-color 0.2s ease;
		}	

		.item{
			margin-top: 10px;
			padding: 10px;
			cursor: move;
		}

		#sortable1, #sortable2, #sortable3 {
			border: 1px solid #eee;
			width: 22%;
			min-height: 20px;
			list-style-type: none;
			margin: 0;
			padding: 5px 0 0 0;
			float: left;
			margin-right: 10px;
		}

		#sortable1 li, #sortable2 li, #sortable3 li {
			margin: 0 5px 5px 5px;
			padding: 5px;
			font-size: 1.2em;
			width: 95%;

		}

	</style>

</head>
<body>
	<div class="container">
		

		<?php


		$cSQL = "SELECT * FROM " 
		. Config::BD_PREFIX . "tarefa  
		ORDER BY trf_ordem ASC";



		$oDados = mysqli_query($con, $cSQL) or die(mysqli_error($con));


		while ($retorno = mysqli_fetch_assoc($oDados)){ 

			switch ($retorno['trf_status']) {

				case 'pen':
				?>

				<ul id="sortable1" class="connectedSortable">
					<?php
					echo '
					<li class="alert alert-danger item" 
					id="'.$retorno['trf_id'].'">' 
					. $retorno['trf_nome'] . '
					</li>
					';
					?>
				</ul>

				<?php
				break;

				case 'exe':
				?>

				<ul id="sortable2" class="connectedSortable">
					<?php
					echo '
					<li class="alert alert-warning item" 
					id="'.$retorno['trf_id'].'">' 
					. $retorno['trf_nome'] . '
					</li>';
					?>
				</ul>

				<?php
				break;

				case 'fin':
				?>

				<ul id="sortable3" class="connectedSortable">
					<?php
					echo '
					<li class="alert alert-success item" 
					id="'.$retorno['trf_id'].'">' 
					. $retorno['trf_nome'] . '
					</li>';
					?>
				</ul>

				<?php
				break;
			}
		}


		?>		
		
	</div>
</body>
<script type="text/javascript">

	$(function(){


		$("#sortable1, #sortable2, #sortable3").sortable({
			connectWith: ".connectedSortable",
			placeholder: 'dragHelper',
			scroll: true,
			revert: true,
			cursor: "move",
			update: function(event, ui) {
				var trf_id_list = $(this).sortable('toArray').toString();

				$.ajax({
					url: 'trf_ordenar_item.php',
					type: 'POST',
					data: {trf_id : trf_id_list},
					success: function(data) {

					}
				});
			},


			start: function( event, ui ) {

			},

			receive: function(event, ui) {

				var receivesort = "[" + this.id + "]";
				//alert("[" + this.id + "]");
				//nome -> ui.item.html
				//sortable id -> "[" + this.id + "]"
				//alert("[" + this.id + "] received [" + ui.item.html() + "]");
				
				$.ajax({
					url: 'trf_ordenar_item.php',
					type: 'POST',
					data: {trf_status : receivesort},
					success: function(data) {

					}
				});
			},


			stop: function( event, ui ) {

			}





		});
	}); 

</script>
</html>