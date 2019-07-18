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

    	<br><p id="login" style="font-size: 250%">Serviços</p><br>

    	<br>

        <ul style="margin-left: 30px">
            <li id="textbox-text" style="font-size: 150%; line-height: 1.5"> Registros de Nascimento, Casamento e Óbito, averbações de Separações, Divórcios e outras. </li><br>

            <p id="textbox-text" style="font-size: 135%; line-height: 1.5">Documentos básicos para o registo de nascimentos:</p>

            <br>
            <p id="textbox-text" style="font-size: 135%; line-height: 1.5; margin-left: 30px">Se ambos os pais ou apenas o pai comparcerem no cartório:</p>

            <p>
                <ul>
                    <li id="textbox-text" style="font-size: 120%; line-height: 1.5; margin-left: 50px"> D.N.V (Declaração de Nascido Vivo – via amarela) </li>
                    <li id="textbox-text" style="font-size: 120%; line-height: 1.5; margin-left: 50px"> RG e CPF (ou Carteira de Habilitação) do pai </li>
                    <li id="textbox-text" style="font-size: 120%; line-height: 1.5; margin-left: 50px"> RG e CPF (ou Carteira de Habilitação) da mãe </li>
                </ul>
            </p>

            <br>
            <p id="textbox-text" style="font-size: 135%; line-height: 1.5; margin-left: 30px">Se apenas a mãe comparce no cartório:</p>

            <p>
                <ul>
                    <li id="textbox-text" style="font-size: 120%; line-height: 1.5; margin-left: 50px"> D.N.V (Declaração de Nascido Vivo – via amarela) </li>
                    <li id="textbox-text" style="font-size: 120%; line-height: 1.5; margin-left: 50px"> RG e CPF (ou Carteira de Habilitação) da mãe </li>
                    <li id="textbox-text" style="font-size: 120%; line-height: 1.5; margin-left: 50px"> Declaração do pai reconhecendo a paternidade, que pode ser: a) escritura pública; b) procuração pública; c) declaração com firma reconhecida em cartório </li>
                </ul>
            </p><br>

            <p id="textbox-text" style="font-size: 135%; line-height: 1.5">Documentos básicos para o registo de óbitos:</p>

            <p>
                <ul>
                    <li id="textbox-text" style="font-size: 120%; line-height: 1.5; margin-left: 50px"> D.O. (Declaração de Óbito) </li>
                    <li id="textbox-text" style="font-size: 120%; line-height: 1.5; margin-left: 50px"> RG e CPF (ou Carteira de Habilitação) da pessoa falecida </li>
                    <li id="textbox-text" style="font-size: 120%; line-height: 1.5; margin-left: 50px"> Título de Eleitor da pessoa falecida (que ficará no cartório) </li>
                    <li id="textbox-text" style="font-size: 120%; line-height: 1.5; margin-left: 50px"> Se o(a) falecido(a) era SOLTEIRO(A): Certidão de Nascimento </li>
                    <li id="textbox-text" style="font-size: 120%; line-height: 1.5; margin-left: 50px"> Se o(a) falecido(a) era CASADO(A), DIVORCIADO(A) ou VIÚVO(A): Certidão de Casamento </li>
                    <li id="textbox-text" style="font-size: 120%; line-height: 1.5; margin-left: 50px"> RG e CPF do declarante do óbito </li>
                </ul>
            </p><br>
            
            <br><li id="textbox-text" style="font-size: 150%; line-height: 1.5"> Lavratura de Procurações Públicas e Escrituras, como Venda e Compra, Doação, Separações e Divórcios, Inventários e Testamentos, entre outros. </li>
            <br>
            <p id="textbox-text" style="font-size: 135%; line-height: 1.5"> Documentos básicos para escrituras:</p><br>

            <p>
                <ul>
                    <li id="textbox-text" style="font-size: 120%; line-height: 1.5; margin-left: 50px"> RG e CPF (cópia + original) dos outorgantes e outorgados </li>
                    <li id="textbox-text" style="font-size: 120%; line-height: 1.5; margin-left: 50px"> Comprovante de residência dos outorgantes e outorgados </li>
                    <li id="textbox-text" style="font-size: 120%; line-height: 1.5; margin-left: 50px"> Certidão de nascimento ou de casamento dos outorgantes e outorgados </li>
                    <li id="textbox-text" style="font-size: 120%; line-height: 1.5; margin-left: 50px"> Se algum for pessoa jurídica, cópia autenticada do contrato social e cartão do CNPJ </li>
                    <li id="textbox-text" style="font-size: 120%; line-height: 1.5; margin-left: 50px"> Se alguma das partes não souber ou não puder escrever, RG e CPF (cópia + original) da pessoa que assinará a rogo + 2 testemunhas também portando RG e CPF (cópia + original) </li>
                    <li id="textbox-text" style="font-size: 120%; line-height: 1.5; margin-left: 50px"> Em caso de escrituras imobiliárias, documentos relativos ao imóvel (certidão de matrícula, certidão de valor venal e certidão negativa de débitos) </li>
                </ul>
            </p><br>

            <li id="textbox-text" style="font-size: 150%; line-height: 1.5"> Reconhecimento de firmas e autenticações. </li><br>

        </ul>

    </div>
    	
    </div>

    <div class="bottom" style="height: 55px">
        <div class="row" style="margin-left: 210px">
            <div class="col-md-1 lista_footer"><a href="../index.php">Home</a></div>
            <div class="col-md-1 lista_footer"><a href="sobre.php">Sobre</a></div>
            <div class="col-md-1 lista_footer"><a href="servicos.php">Serviços</a></div>
            <div class="col-md-1 lista_footer"><a href="../index.php#middle">Contato</a></div>
            <div class="col-md-1 lista_footer"><a href="ajuda.php">Ajuda</a></div>
        </div>

        <div class="row" style="margin-left: 180px">
            <div class="col-md-12">
                <p style="color:lightgrey">© 2019 Cartório de Meridiano | Todos os direitos reservados. Construido por Paulo Teixeira</a>.</p>
            </div>
        </div>
    </div>

</body>
</html>