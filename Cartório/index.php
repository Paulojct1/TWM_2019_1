<!DOCTYPE html>
<html>
<head>
    <title>Cartório de Meridiano - Registro Civil e Notas</title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap2.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/style3.css">
    <link rel="stylesheet" type="text/css" href="css/style4.css">
    <link rel="stylesheet" type="text/css" href="css/style5.css">

    <script type="text/javascript" src="js/js1.js"></script>
    <script type="text/javascript" src="js/js2.js"></script>
    <script type="text/javascript" src="js/js3.js"></script>
    <script type="text/javascript" src="js/js4.js"></script>
    <script type="text/javascript" src="js/js5.js"></script>
    <script type="text/javascript" src="js/js6.js"></script>
    <script type="text/javascript" src="js/js7.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <div class="pre-header" style="background-color: #2A2A2A">
                <div class="inner">
                    <div class="meta" style="color: lightgray">
                    Bem-vindo(a), faça o 
                                 <a href="php/login.php">Login</a> ou
                                 <a href="php/cadastro.php">Cadastre-se</a>.</div>
                    <div class="fright buscatopo">
                        <form method="post" action="index.php?pG=X19idXNjYQ==" class="formtopo" onsubmit="return validabusca()">
                             <input type="hidden" name="act" value="pesquisar" />
                             <input type="submit" class="bt" value="Buscar" />
                             <input type="text" name="query" id="query" class="query" value="O que você procura?" onblur="if(this.value=='') this.value='O que você procura?'" onfocus="if(this.value =='O que você procura?' ) this.value=''" />
                        </form>
                    </div>
                </div>
    </div>

    <div class="sidenav">

        <a href="#" alt="cartorio - home" title="Home">
            <img id="logo" src="img/logo.png" width="110px">
        </a>

        <a href="index.php">Home</a><br>
        <a href="php/sobre.php">Sobre</a><br>
        <a href="php/servicos.php">Serviços</a><br>
        <a href="#middle">Contato</a><br>
        <a href="php/ajuda.php">Ajuda</a>
    </div>

    <div id="main" style="margin-left: 150px">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-xs-12">
                    <div id="avisos" class="carousel slide" data-ride="carousel">

                        <!-- PONTOS REPRESENTATIVOS DE IMAGENS -->
                        <ol class="carousel-indicators" style="bottom: -60px">
                            <li data-target="#avisos" data-slide-to="0" class="active"></li>
                            <li data-target="#avisos" data-slide-to="1"></li>
                            <li data-target="#avisos" data-slide-to="2"></li>
                            <li data-target="#avisos" data-slide-to="3"></li>
                            <li data-target="#avisos" data-slide-to="4"></li>
                            <li data-target="#avisos" data-slide-to="5"></li>
                            <li data-target="#avisos" data-slide-to="6"></li>
                        </ol>

                        <!-- IMAGENS -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="avisos/img4.jpg" class="img-thumbnail center" width="500px">
                                <div class="carousel-caption">
                                    
                                </div>
                            </div>
                        
                            <div class="item">
                                <img src="avisos/img2.jpg" class="img-thumbnail center" width="500px">
                                <div class="carousel-caption">
                                    
                                </div>
                            </div>

                            <div class="item">
                                <img src="avisos/img3.jpg" class="img-thumbnail center" width="500px">
                                <div class="carousel-caption">
                                    
                                </div>
                            </div>

                            <div class="item">
                                <img src="avisos/img1.jpg" class="img-thumbnail center" width="500px">
                                <div class="carousel-caption">
                                    
                                </div>
                            </div>

                            <div class="item">
                                <img src="avisos/img5.jpg" class="img-thumbnail center" width="500px">
                                <div class="carousel-caption">
                                    
                                </div>
                            </div>

                            <div class="item">
                                <img src="avisos/img6.jpg" class="img-thumbnail center" width="500px">
                                <div class="carousel-caption">
                                    
                                </div>
                            </div>

                            <div class="item">
                                <img src="avisos/img7.jpg" class="img-thumbnail center" width="500px">
                                <div class="carousel-caption">
                                    
                                </div>
                            </div>

                        </div>

                        <!-- CONTROLES -->
                        <a class="left carousel-control" href="#avisos" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="right carousel-control" href="#avisos" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>

                <div class="col-md-7 col-xs-12">
                    <br><h1 style="margin-left: 50px">BEM-VINDO AO NOSSO SITE!</h1>

                    <p id="horarios">Horário de Funcionamento</p><br><br><br>
                    <p id="horarios">Segunda a Sexta:</p><br><br><br>
                    <p id="horarios">Das 09:00hs às 12:30hs</p><br><br>
                    <p id="horarios">Das 13:30hs às 16:00hs</p><br>
                    
                    <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Leia mais</a></p> -->
                </div>
            </div>
        </div>
    </div>

    <div id="middle2" style="margin-left: 150px">
        
    </div>

    <div id="middle" style="margin-left: 150px">
        <div class="container">

            <div class="row"> 
                <div class="col-sm-6 col-md-4"> 
                    <div class="thumbnail"> 
                        <!-- <img src="img/f1.jpg" class="img-thumbnail"> --> 
                        <div class="caption" style="min-height: 250px"> 
                            <h3>Sobre</h3> 
                            <p id="textbox-text"> Pagina dedicada ao Oficial de Registro Civil das Pessoas Naturais e Tabelião de Notas de Meridiano, Comarca de Fernandopolis, Estado de São Paulo. </p><br>
                            <p id="textbox-text"><a href="php/sobre.php" class="btn btn-primary" role="button" style="text-decoration: none">Descrição Completa</a> 
                        </div> 
                    </div> 
                </div> 

                <div class="col-sm-6 col-md-4"> 
                    <div class="thumbnail"> 
                        <!-- <img src="img/f2.jpg" class="img-thumbnail"> --> 
                        <div class="caption" style="min-height: 250px"> 
                            <h3>Onde Estamos</h3> 
                            <p id="textbox-text"> Rua Ernesto Cavalin, n. 2228 </p><br>
                            <p id="textbox-text"> 15625-000 Meridiano </p><br><br>
                            <p id="textbox-text"><a href="https://www.google.com.br/maps/place/Cartório+de+Registro+Civil+das+Pessoas+Naturais+e+Tabelião+de+Notas+de+Meridiano/@-20.3562965,-50.175124,17.96z/data=!4m13!1m7!3m6!1s0x9497fa7244492001:0x6971d59453bebb3d!2sR.+Ernesto+Cavalin,+2228,+Meridiano+-+SP,+15625-000!3b1!8m2!3d-20.3558837!4d-50.1746971!3m4!1s0x9497fa7246966989:0xedf78efb5edf02b4!8m2!3d-20.3559347!4d-50.1746933" target="_blank" class="btn btn-primary" role="button" style="text-decoration: none">Localização</a>
                        </div> 
                    </div> 
                </div> 
                
                <div class="col-sm-6 col-md-4"> 
                    <div class="thumbnail"> 
                        <!-- <img src="img/f3.jpg" class="img-thumbnail"> --> 
                        <div class="caption" style="min-height: 250px" style="margin-left: 20px">
                            <h3>Contato</h3>
                            <ul style="margin-left: 30px">
                                <li style="font-size: 120%">Email: rcpnmeridiano@hotmail.com</li><br>
                                <li style="font-size: 120%">Telefone (WhatsApp): (17) 98823-7431</li><br>
                                <a href="https://www.facebook.com/cartoriomeridiano/" target="_blank"><li style="font-size: 120%">Facebook</li></a><br>
                            </ul>

                            <!-- <p><a href="#" class="btn btn-primary" role="button">Botão</a> -->
                        </div> 
                    </div> 
                </div> 
            </div>
        </div>
    </div>

    <div class="bottom" style="height: 55px">
        <div class="row" style="margin-left: 210px">
            <div class="col-md-1 lista_footer"><a href="php/index.php">Home</a></div>
            <div class="col-md-1 lista_footer"><a href="php/sobre.php">Sobre</a></div>
            <div class="col-md-1 lista_footer"><a href="php/servicos.php">Serviços</a></div>
            <div class="col-md-1 lista_footer"><a href="#middle">Contato</a></div>
            <div class="col-md-1 lista_footer"><a href="php/ajuda.php">Ajuda</a></div>
        </div>
        <div class="row" style="margin-left: 180px">
            <div class="col-md-12">
                <p style="color:lightgrey">© 2019 Cartório de Meridiano | Todos os direitos reservados. Construido por Paulo Teixeira</a>.</p>
            </div>
        </div>
    </div>

</body>
</html>