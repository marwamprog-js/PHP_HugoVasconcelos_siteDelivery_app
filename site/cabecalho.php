<?php @session_start(); ?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Buguer Freitas</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="description" content="Lanches BH, Lanches em Venda Nova, Comprar sanduíche Venda Nova" />
    <meta name="author" content="Buguer Freitas" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon-nova.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>
    
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    
    <div class="page">
        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap rd-navbar-modern-wrap">
                <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="70px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <a class="brand" href="index.html" title="Ir para Página Inicial">
                                        <img src="images/logo-default-196x47.png" alt="" width="196" height="47" />
                                    </a>
                                </div>
                            </div>
                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap">
                                    <!-- RD Navbar Basket-->
                                    <div class="rd-navbar-basket-wrap">
                                        <button class="rd-navbar-basket fl-bigmug-line-shopping198" data-rd-navbar-toggle=".cart-inline"><span>2</span></button>
                                        <div class="cart-inline">
                                            <div class="cart-inline-header">
                                                
                                            <?php if(isset($_SESSION['nome_usuario'])) : ?>
                                                <span class="dados-usuario">
                                                    <p>
                                                        <a href="#" title="Editar dados">
                                                            <?php echo $_SESSION['nome_usuario'] ?>
                                                        </a>
                                                        <a href="logout.php" title="Logout">
                                                            <img src="images/logout.png" width="20px" alt="Logout">
                                                        </a>
                                                    </p>
                                                </span>
                                            <?php endif ?>
                                                
                                                <h5 class="cart-inline-title">Carrinho:<span> 2</span> Produtos</h5>
                                                <h6 class="cart-inline-title">Valor Total:<span> R$ 800,00</span></h6>
                                            </div>
                                            <div class="cart-inline-body">
                                                <div class="cart-inline-item">
                                                    <div class="unit align-items-center">
                                                        <div class="unit-left"><a class="cart-inline-figure" href="#"><img src="images/product-mini-1-108x100.png" alt="" width="108" height="100" /></a></div>
                                                        <div class="unit-body">
                                                            <h6 class="cart-inline-name"><a href="#">Nome Produto</a></h6>
                                                            <div>
                                                                <div class="group-xs group-inline-middle">
                                                                    <div class="table-cart-stepper">
                                                                        <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                                                                    </div>
                                                                    <h6 class="cart-inline-title">$550</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cart-inline-item">
                                                    <div class="unit align-items-center">
                                                        <div class="unit-left"><a class="cart-inline-figure" href="#"><img src="images/product-mini-2-108x100.png" alt="" width="108" height="100" /></a></div>
                                                        <div class="unit-body">
                                                            <h6 class="cart-inline-name"><a href="#">Nome Produto</a></h6>
                                                            <div>
                                                                <div class="group-xs group-inline-middle">
                                                                    <div class="table-cart-stepper">
                                                                        <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                                                                    </div>
                                                                    <h6 class="cart-inline-title">$250</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-inline-footer">
                                                <div class="group-sm"><a class="button button-md button-default-outline-2 button-wapasha" href="#">Produtos</a><a class="button button-md button-primary button-pipaluk" href="#">Pagamentos</a></div>
                                            </div>
                                        </div>
                                    </div><a class="rd-navbar-basket rd-navbar-basket-mobile fl-bigmug-line-shopping198" href="#"><span>2</span></a>
                                    <!-- Menu de Pesquisa -->
                                    <div class="rd-navbar-search">
                                        <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                                        <form class="rd-search" action="#">
                                            <div class="form-wrap">
                                                <label class="form-label" for="rd-navbar-search-form-input">Procurar...</label>
                                                <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="search">
                                                <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- RD MENU de Navegação-->
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item"> <!-- active class -->
                                            <a class="rd-nav-link" href="index.php">Inicio</a>
                                        </li>
                                        <li class="rd-nav-item">
                                            <a class="rd-nav-link" href="sobre.php">Sobre</a>
                                        </li>
                                        <li class="rd-nav-item">
                                            <a class="rd-nav-link" href="contatos.php">Contatos</a>
                                        </li>

                                        <?php if(!isset($_SESSION['nome_usuario'])) { ?>
                                            <li class="rd-nav-item">
                                                <a class="rd-nav-link" href="login.php">Login</a>
                                            </li>
                                        <?php } ?>

                                    </ul>
                                </div>
                                <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                                    <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span class="project-hamburger-arrow-center"></span><span class="project-hamburger-arrow-bottom"></span></div>
                                    <div class="project-hamburger-2"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                                    </div>
                                    <div class="project-close"><span></span><span></span></div>
                                </div>
                            </div>
                            <div class="rd-navbar-project rd-navbar-modern-project">
                                <div class="rd-navbar-project-modern-header">
                                    <h4 class="rd-navbar-project-modern-title">Contate-nos</h4>
                                    <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                                        <div class="project-close"><span></span><span></span></div>
                                    </div>
                                </div>
                                <div class="rd-navbar-project-content rd-navbar-modern-project-content">
                                    <div>
                                        <p>Siga-nos em nossas redes sociais e fique por dentro das promoções, participe para ganhar prêmios e grandes descontos!!!</p>

                                        <ul class="rd-navbar-modern-contacts">
                                            <li>
                                                <div class="unit unit-spacing-sm">
                                                    <div class="unit-left">
                                                        <span class="icon fab fa-whatsapp"></span>
                                                    </div>
                                                    <div class="unit-body">
                                                        <a class="link-phone" title="Ir para o Whatsapp" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=553199999-9999">31 99999-9999</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="unit unit-spacing-sm">
                                                    <div class="unit-left">
                                                        <span class="icon fa fa-location-arrow"></span>
                                                    </div>
                                                    <div class="unit-body">
                                                        <a class="link-location" href="#">Rua 50, Bairro Santa Efigênia, Belo Horizonte-MG</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="unit unit-spacing-sm">
                                                    <div class="unit-left">
                                                        <span class="icon fa fa-envelope"></span>
                                                    </div>
                                                    <div class="unit-body">
                                                        <a class="link-email" href="mailto:#">contato@delivery.com</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="list-inline rd-navbar-modern-list-social">
                                            <li><a class="icon fa fa-facebook" href="#"></a></li>
                                            <li><a class="icon fa fa-twitter" href="#"></a></li>
                                            <li><a class="icon fa fa-google-plus" href="#"></a></li>
                                            <li><a class="icon fa fa-instagram" href="#"></a></li>
                                            <li><a class="icon fa fa-pinterest" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>