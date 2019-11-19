<?php

include_once(dirname(__FILE__) . '/Config.class.php');
include_once(dirname(__FILE__) . '/conexao.php');

?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Tarefas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Build whatever layout you need with our Architect framework.">
    <meta name="msapplication-tap-highlight" content="no">

    <link href="./main.css" rel="stylesheet"></head>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

           <?php 
           include_once(dirname(__FILE__) . '/menu_superior.html');
           ?>

           <div class="app-main">
            <div class="app-sidebar sidebar-shadow bg-night-fade sidebar-text-dark">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>    
                <div class="scrollbar-sidebar">
                    <?php 
                    include_once(dirname(__FILE__) . '/menu_lateral.html');
                    ?>
                </div>
            </div> 
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-graph text-success">
                                    </i>
                                </div>
                                <div>Form Layouts
                                    <div class="page-title-subheading">Build whatever layout you need with our Architect framework.
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    <i class="fa fa-star"></i>
                                </button>
                                <div class="d-inline-block dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                            <i class="fa fa-business-time fa-w-20"></i>
                                        </span>
                                        Buttons
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                    <span>
                                                        Inbox
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span>
                                                        Book
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-picture"></i>
                                                    <span>
                                                        Picture
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                    <i class="nav-link-icon lnr-file-empty"></i>
                                                    <span>
                                                        File Disabled
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>            


                    <div class="tab-content">


                      <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Grid</h5>
                                <form class="">

                                    <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Membro</label>
                                        <div class="col-sm-10"><select name="select" id="exampleSelect" class="form-control"></select></div>
                                    </div>

                                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Título</label>
                                        <div class="col-sm-10"><input name="email" id="exampleEmail" placeholder="with a placeholder" type="text" class="form-control"></div>
                                    </div>

                                    <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Descrição</label>
                                        <div class="col-sm-10"><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                                    </div>

                                    <div class="position-relative row form-check">
                                        <div class="col-sm-10 offset-sm-2">
                                            <button class="btn btn-secondary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>



                <?php

                include_once(dirname(__FILE__) . '/tarefas.php');

                ?>


            </div>
        </div>
    </div>
</div>


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
                var trf_id_list = $(this).sortable('toArray').toString();
                var receivesort = "[" + this.id + "]";
                //console.log("[" + this.id + "]");
                
                //nome -> ui.item.html
                //sortable id -> "[" + this.id + "]"
                
                //alert("[" + this.id + "] received [" + ui.item.html() + "]");
                
                $.ajax({
                    url: 'trf_ordenar_item.php',
                    type: 'POST',
                    data: {
                        trf_status : receivesort,
                        trf_id : trf_id_list
                    },
                    success: function(data) {

                        $(document).ready(function(){
                            location.reload();
                        });
                        
                    }
                });
            },

            stop: function( event, ui ) {

            }

        });
    }); 


</script>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>
</html>