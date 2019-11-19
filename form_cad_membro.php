<!doctype html>
<html lang="en">

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
                        </div>    </div>
                    </div>            

                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="main-card mb-3 card">
                                <div class="card-body"><h5 class="card-title">Grid Rows</h5>
                                    <form class="">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="exampleEmail11" class="">Email</label><input name="email" id="exampleEmail11" placeholder="with a placeholder" type="email" class="form-control"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="examplePassword11" class="">Password</label><input name="password" id="examplePassword11" placeholder="password placeholder" type="password"
                                                 class="form-control"></div>
                                             </div>
                                         </div>
                                         <div class="position-relative form-group"><label for="exampleAddress" class="">Address</label><input name="address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control"></div>
                                         <div class="position-relative form-group"><label for="exampleAddress2" class="">Address 2</label><input name="address2" id="exampleAddress2" placeholder="Apartment, studio, or floor" type="text" class="form-control">
                                         </div>
                                         <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="exampleCity" class="">City</label><input name="city" id="exampleCity" type="text" class="form-control"></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="position-relative form-group"><label for="exampleState" class="">State</label><input name="state" id="exampleState" type="text" class="form-control"></div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="position-relative form-group"><label for="exampleZip" class="">Zip</label><input name="zip" id="exampleZip" type="text" class="form-control"></div>
                                            </div>
                                        </div>
                                        <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Check me out</label></div>
                                        <button class="mt-2 btn btn-primary">Sign in</button>
                                    </form>
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
