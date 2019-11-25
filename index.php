<head>

    <title>DevKey - Cronograma</title>
    
    <script src="js/jquery-3.2.1.min.js"></script>

    <?php 
    include_once(dirname(__FILE__) . '/assets/head.html');
    ?>


    <style type="text/css">

        #visualization_wrap {

            position: relative;
            padding-bottom: 80%;
            height: 0;
            overflow:hidden;
        }
        #Status_Atividade {
            position: absolute;
            top: 0;
            left: 0;
            width:100%;
            height:100%;
        }
    </style>
</head>

<body>

 <?php 
 include_once(dirname(__FILE__) . '/menu_superior.php');
 ?>
 <div class="app-main__outer">
    <div class="app-main__inner">
     <div class="row">

        <?php 

        $qtd_membros = "SELECT COUNT(usu_id) qtdMembro 
        FROM ". Config::BD_PREFIX ."usuario";
        $total_membros = mysqli_query($con, $qtd_membros);
        $total_membros_a = mysqli_fetch_assoc($total_membros);


        $trf_status = "SELECT COUNT(trf_status) qtd, trf_status 
        FROM ". Config::BD_PREFIX ."tarefa s 
        GROUP BY s.trf_status 
        ORDER BY s.trf_status ASC";

        $qtd_status = mysqli_query($con, $trf_status);
        $total_trf = 0;
        $resultado = [];


        while($qtd_status_a = mysqli_fetch_assoc($qtd_status)){

            $total_trf += $qtd_status_a['qtd'];

            $resultado[$qtd_status_a['trf_status']]['qtd']=$qtd_status_a['qtd'];

        }

        foreach ($resultado as $key => $value) {

         $resultado[$key]['perc'] = $resultado[$key]['qtd']/$total_trf*100;
     }

        //echo  $resultado['pen']['qtd'] . "oioioioi";
          //var_dump($resultado);

     ?>

     <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-sunny-morning">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">

                    <div class="widget-heading">Total Tarefas</div>
                    <div class="widget-subheading">Tarefas de todos os membros &nbsp; &nbsp;</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span><?php echo $total_trf; ?></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-love-kiss">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Membros</div>
                    <div class="widget-subheading">Total de membros cadastrados &nbsp; &nbsp;</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span><?php echo $total_membros_a['qtdMembro']?></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-happy-itmeo">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Horas Trabalhadas</div>
                    <div class="widget-subheading">Horas totais do projeto &nbsp; &nbsp;</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>X h</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-premium-dark">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Products Sold</div>
                    <div class="widget-subheading">Revenue streams</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-warning"><span>$14M</span></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-8 col-lg-4">
        <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-danger">
                                <?php 

                                if(empty($resultado['pen']['perc'])){ 
                                    echo 0 ."%";
                                } else{
                                    echo floor($resultado['pen']['perc'] * 10)/10 ."%";
                                }

                                ?>

                            </div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="
                                <?php 


                                if(empty($resultado['pen']['perc'])){ 
                                    echo 0;
                                    } else{
                                        echo number_format($resultado['pen']['perc']);
                                    }


                                    ?>" aria-valuemin="0" aria-valuemax="100" style="width: 
                                    <?php 


                                    if(empty($resultado['pen']['perc'])){ 
                                        echo 0;
                                    } else{
                                        echo number_format($resultado['pen']['perc']);
                                    }


                                    ?> %;">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Pendentes</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-lg-4">
        <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-warning">
                                <?php 

                                if(empty($resultado['exe']['perc'])){ 
                                    echo 0 ."%";
                                } else{
                                    echo floor($resultado['exe']['perc'] * 10)/10 ."%";
                                }

                                ?>

                            </div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="
                                <?php 


                                if(empty($resultado['exe']['perc'])){ 
                                    echo 0;
                                    } else{
                                        echo number_format($resultado['exe']['perc']);
                                    }


                                    ?>" aria-valuemin="0" aria-valuemax="100" style="width:
                                    <?php 


                                    if(empty($resultado['exe']['perc'])){ 
                                        echo 0;
                                    } else{
                                        echo number_format($resultado['exe']['perc']);
                                    }


                                    ?> %;">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Executando</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-lg-4">
        <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-success">

                                <?php 

                                if(empty($resultado['fin']['perc'])){ 
                                    echo 0 ."%";
                                } else{
                                    echo floor($resultado['fin']['perc'] * 10)/10 ."%";
                                }

                                ?>

                            </div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="
                                <?php 


                                if(empty($resultado['fin']['perc'])){ 
                                    echo 0;
                                    } else{
                                        echo number_format($resultado['fin']['perc']);
                                    }


                                    ?>" aria-valuemin="0" aria-valuemax="100" style="width:
                                    <?php 


                                    if(empty($resultado['fin']['perc'])){ 
                                        echo 0;
                                    } else{
                                        echo number_format($resultado['fin']['perc']);
                                    }


                                    ?> %;">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Finalizadas</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="mb-8 card">
            <div class="card-header-tab card-header-tab-animation card-header">
                <div class="card-header-title">
                    <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                    STATUS ATIVIDADES
                </div>

            </div>
            <div class="card-body">
                <div id="visualization_wrap">
                    <div id="Status_Atividade"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</div>
</div>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

    google.charts.load('current', {
      callback: function () {
        var data = google.visualization.arrayToDataTable([
          ['Status', 'Pendente', 'Executando', 'Finalizado'],
          ['Andressa', <?php echo $resultado['pen']['qtd'];?>, <?php echo $resultado['exe']['qtd'];?>, <?php echo $resultado['fin']['qtd'];?>],
          ['Calebe', <?php echo $resultado['pen']['qtd'];?>, <?php echo $resultado['exe']['qtd'];?>, <?php echo $resultado['fin']['qtd'];?>],
          ['Gabriel', <?php echo $resultado['pen']['qtd'];?>, <?php echo $resultado['exe']['qtd'];?>, <?php echo $resultado['fin']['qtd'];?>],
          ['Gabrielle', <?php echo $resultado['pen']['qtd'];?>, <?php echo $resultado['exe']['qtd'];?>, <?php echo $resultado['fin']['qtd'];?>]
          ]);

        var container = document.getElementById('Status_Atividade');
        var chart = new google.visualization.ColumnChart(container);

        var colors = ['#ff3333','#f3ff33','#6cff33'];

        google.visualization.events.addListener(chart, 'ready', changeBorderRadius);
        google.visualization.events.addListener(chart, 'select', changeBorderRadius);
        google.visualization.events.addListener(chart, 'onmouseover', changeBorderRadius);
        google.visualization.events.addListener(chart, 'onmouseout', changeBorderRadius);

        function changeBorderRadius() {
          chartColumns = container.getElementsByTagName('rect');
          Array.prototype.forEach.call(chartColumns, function(column) {
            if ((colors.indexOf(column.getAttribute('fill')) > -2) ||
                (column.getAttribute('fill') === 'none') ||
                (column.getAttribute('stroke') === '#ffffff')) {
              column.setAttribute('rx', 10);
          column.setAttribute('ry', 10);
      }
  });
      }

      chart.draw(data, {
          colors: colors
      });
  },
  packages: ['corechart']
});

</script>
</body>

</html>
