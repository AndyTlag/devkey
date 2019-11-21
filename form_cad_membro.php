<?php

include_once(dirname(__FILE__) . '/Config.class.php');
include_once(dirname(__FILE__) . '/conexao.php');

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Form Layouts - Build whatever layout you need with our Architect framework.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Build whatever layout you need with our Architect framework.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

       <?php 
       include_once(dirname(__FILE__) . '/menu_superior.php');
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
                include_once(dirname(__FILE__) . '/menu_lateral.php');
                ?>
            </div>
        </div> 
        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="tab-content">
                    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Cadastrar Membro</h5>
                                <form action="cadastros.php" method="post">
                                    <div class="form-row">

                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="usu_nome" class="">
                                                    Nome
                                                </label>
                                                <input name="usu_nome" id="usu_nome" placeholder="Nome do Usuário" type="text" class="form-control" minlength="3" required>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="usu_email" class="">
                                                    Email
                                                </label>
                                                <input name="usu_email" id="usu_email" placeholder="E-mail do Usuário" type="email" class="form-control" minlength="3" required>
                                            </div>
                                        </div>

                                    </div>

                                    <button class="mt-2 btn btn-success">Cadastrar</button>
                                    <input type="hidden" name="action" value="cad_usu">

                                </form>
                            </div>

                            <div class="col-md-12">
                                        <div class="main-card mb-6 card">

                            <div class="card-body">

                                <div class="col-md-12">
                                    <div class="main-card mb-6 card">
                                        <div class="card-body">
                                            <h5 class="card-title">Lista de Usuários</h5>
                                            <ul class="list-group">


                                                <?php


                                                $cSQL = "SELECT * FROM " .Config::BD_PREFIX. "usuario";

                                                $oDados = mysqli_query($con, $cSQL);

                                                while ($registro = mysqli_fetch_assoc($oDados)) {



                                                    echo '

                                                    <li class="list-group-item">
                                                    <h5 class="list-group-item-heading">'
                                                    .$registro['usu_nome'].
                                                    '</h5>

                                                    <p class="list-group-item-text">'.$registro['usu_email'].'

                                                    </p>
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
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
