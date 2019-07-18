<!DOCTYPE html>
<html>
<head>
	<title>Cartório de Meridiano - Registro Civil e Notas</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.min.css">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap2.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">

    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/style2.css">
    <link rel="stylesheet" type="text/css" href="../css/style3.css">
    <link rel="stylesheet" type="text/css" href="../css/style4.css">
    <link rel="stylesheet" type="text/css" href="../css/style5.css">

    <script type="text/javascript" src="../js/js1.js"></script>
    <script type="text/javascript" src="../js/js2.js"></script>
    <script type="text/javascript" src="../js/js3.js"></script>
    <script type="text/javascript" src="../js/js4.js"></script>
    <script type="text/javascript" src="../js/js5.js"></script>
    <script type="text/javascript" src="../js/js6.js"></script>
    <script type="text/javascript" src="../js/js7.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


	<link rel="shortcut icon" type="image/png" href="../img/favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
	<div class="pre-header" style="background-color: #2A2A2A">
            	<div class="inner">
                	<div class="meta" style="color: lightgray">
                	Bem-vindo(a), faça o
                                 <a href="login.php">Login</a> ou
                                 <a href="cadastro.php">Cadastre-se</a>.</div>
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
            <img id="logo" src="../img/logo.png" width="110px">
        </a>

        <a href="../index.php">Home</a><br>
        <a href="sobre.php">Sobre</a><br>
        <a href="servicos.php">Serviços</a><br>
        <a href="../index.php#middle">Contato</a><br>
        <a href="ajuda.php">Ajuda</a>
    </div>

    <div id="main" style="margin-left: 150px">

        <br><p id="login">Para acessar alguns itens de nosso website, você precisa ser um usuário cadastrado.</p>
        <br><p id="login">Se deseja realizar o login em nosso website <a href="login.html">clique aqui</a> .</p><br>
        <br><p id="login" style="font-size: 150%">O Cartório de Meridiano não fornece nem compartilha seus dados com nenhuma empresa.</p>
        <br><p id="login" style="font-size: 150%">Seus dados serão utilizados apenas para controle e segurança interna.</p><br>


        <br><br><b style="margin-left: 150px">Nome: <input style="margin-left: 20px" type="text" name="senha" maxlength="50" size="35" class="cform"></b>
        <b style="margin-left: 40px">CPF: <input style="margin-left: 20px" type="text" name="cpf" maxlength="50" size="45" class="cform"></b>
        <br><br><b style="margin-left: 148px">Senha: <input style="margin-left: 20px" type="text" name="senha" maxlength="50" size="35" class="cform"></b>
        <b style="margin-left: 46px">RG: <input style="margin-left: 20px" type="text" name="cpf" maxlength="50" size="15" class="cform"></b>
        <b style="margin-left: 13px">Org. Exp. <input style="margin-left: 15px" type="text" name="cpf" maxlength="50" size="9" class="cform"></b>

        <br><br><b style="margin-left: 69px">Confirme sua senha: <input style="margin-left: 20px" type="text" name="senha" maxlength="50" size="35" class="cform"></b>
        <b style="margin-left: 32px">Email: <input style="margin-left: 20px" type="text" name="cpf" maxlength="50" size="45" class="cform"></b>

        <br><br><b style="margin-left: 135px">Telefone: <input style="margin-left: 20px" type="text" name="senha" maxlength="50" size="35" class="cform"></b>
        <b style="margin-left: 24px">Celular: <input style="margin-left: 20px" type="text" name="cpf" maxlength="50" size="45" class="cform"></b>

        <br><br><br><button style="margin-left: 320px; width: 85px; height: 25px;">Cadastrar-se</button>
        

    </div>

    <div id="middle" style="min-height: 100px">
    	
    </div>

    <div class="bottom" style="height: 55px; position: relative;">
        <div class="row" style="margin-left: 210px">
            <div class="col-md-1 lista_footer"><a href="../index.php">Home</a></div>
            <div class="col-md-1 lista_footer"><a href="sobre.php">Sobre</a></div>
            <div class="col-md-1 lista_footer"><a href="servicos.php">Serviços</a></div>
            <div class="col-md-1 lista_footer"><a href="../index.php#middle">Contato</a></div>
            <div class="col-md-1 lista_footer"><a href="ajuda.php">Ajuda</a></div>
        </div>

        <div class="row" style="margin-left: 180px; position: relative;">
            <div class="col-md-12">
                <p style="color:lightgrey">© 2019 Cartório de Meridiano | Todos os direitos reservados. Construido por Paulo Teixeira</a>.</p>
            </div>
        </div>
    </div>

</body>
</html>