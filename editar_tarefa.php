<head>
    <title>Editar Tarefa</title>

    <?php 
    include_once(dirname(__FILE__) . '/assets/head.html');
    ?>

</head>
<body>

   <?php 
   include_once(dirname(__FILE__) . '/menu_superior.php');
   ?> 

   <div class="app-main__outer">
    <div class="app-main__inner">
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">

                    <script>


                        $(function() {
                            $(".btn-toggle").click(function(e) {
                                e.preventDefault();
                                el = $(this).data('element');
                                $(el).toggle();
                            });
                        });


                    </script>

                    <div class="col-md-12">


                        <div class="card-body">

                            <div class="col-md-12">
                                <div class="main-card mb-6 card">
                                    <div class="card-body">
                                        <h5 class="card-title">Lista de Tarefas</h5>
                                        <ul class="list-group">


                                            <?php


                                            $cSQL = "SELECT * FROM " .Config::BD_PREFIX. "tarefa";



                                            $oDados = mysqli_query($con, $cSQL);

                                            while ($registro = mysqli_fetch_assoc($oDados)) {

                                                //listar tarefas
                                                echo '



                                                <li class="list-group-item">
                                                <h5 class="list-group-item-heading">'
                                                .$registro['trf_nome'].
                                                '</h5>

                                                <p class="list-group-item-text">'.$registro['trf_descricao'].'

                                                </p>
                                                ';

                                                //botao de exclusao

                                                echo '

                                                <div class="pull-right">
                                                <button data-toggle="modal" data-target="#excluir_trf'.$registro['trf_id'].'" class="btn btn-danger">
                                                <i class="pe-7s-trash"></i>
                                                </button>
                                                </div>

                                                ';

                                                //modal de exclusao
                                                
                                                echo '

                                                <div class="modal" id="excluir_trf'.$registro['trf_id'].'">
                                                <div class="modal-dialog">
                                                <div class="modal-content">

                                                
                                                <div class="modal-header">
                                                <h4 class="modal-title">Você deseja excluir essa tarefa?</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                
                                                <div class="modal-body">
                                                '.$registro['trf_nome'].' - '.$registro['trf_descricao'].'

                                                </div>


                                                
                                                <div class="modal-footer">
                                                <form action="excluir.php" method="post">

                                                <button class="btn btn-danger">Excluir</button>
                                                <input type="hidden" name="action" value="excluir_trf">
                                                <input type="hidden" name="trf_id" value="'.$registro['trf_id'].'">
                                                </form>
                                                </div>

                                                </div>
                                                </div>
                                                </div>
                                                


                                                ';

                                                //botao de edicao

                                                echo '

                                                <div class="pull-right">
                                                <button type="button" class="btn btn-warning  btn-toggle" data-element="#'.$registro['trf_id'].'" value="">
                                                <i class="pe-7s-note"></i>

                                                </button>
                                                </div>

                                                ';

                                                //form de edicao
                                                
                                                echo '

                                                <div class="form-group" id="'.$registro['trf_id'].'" style="display:none">

                                                <form action="edita.php" method="post">
                                                <div class="form-row">

                                                <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                <label for="trf_nome" class="">
                                                Tarefa
                                                </label>
                                                <input name="trf_nome" id="trf_nome" placeholder="Nome da Tarefa" type="text" class="form-control" minlength="3" required value="'.$registro['trf_nome'].'">
                                                </div>
                                                </div>


                                                <div class="col-md-10">
                                                <div class="position-relative form-group">
                                                <label for="trf_descricao" class="">
                                                Descrição
                                                </label>

                                                <textarea id="trf_descricao" name="trf_descricao" class="form-control"  minlength="3" required>

                                                '.$registro['trf_descricao'].'

                                                </textarea>
                                                
                                                </div>
                                                </div>

                                                </div>

                                                <button class="mt-2 btn btn-success">Editar</button>

                                                <input type="hidden" name="action" value="edita_trf">
                                                <input type="hidden" name="trf_id" value="'.$registro['trf_id'].'">

                                                </form>

                                                </div>
                                                </li>




                                                '
                                                ;




                                            }


                                            ?>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>

