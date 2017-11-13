<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Bootstrap -->
        <link href="css/app.css" rel="stylesheet">

        <!-- Última versão CSS compilada e minificada -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- CSS minificada FontAewsome -->
        <link rel="stylesheet"href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <!-- Tema opcional -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Última versão JavaScript compilada e minificada -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- Font Awesome -->
        <script src="https://use.fontawesome.com/67510ba098.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="css/main.css" rel="stylesheet">

        <style>
            .collapse .nav li.dropdown  a{color:white}
            .collapse .nav li.dropdown  a:hover{color:#cecece; background-color: #67b168 }

        </style>
    </head>
    <body>
    <nav class="navbar navbar-default sidebar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#">Página inicial<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-home"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-tree"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                            <li><a href="#">Novo produto</a></li>
                            <li><a href="#">Alterar produto</a></li>
                            <li><a href="#">Excluir produto</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Novo grupo de produtos</a></li>
                            <li><a href="#">Alterar grupo de produtos</a></li>
                            <li><a href="#">Excluir grupo de produtos</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Novo cultura de produtos</a></li>
                            <li><a href="#">Alterar grupo de produtos</a></li>
                            <li><a href="#">Excluir grupo de produtos</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtores <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-user"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                            <li><a href="#">Novo produtor</a></li>
                            <li><a href="#">Alterar produtor</a></li>
                            <li><a href="#">Excluir produtor</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-child"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                            <li><a href="#">Novo cliente</a></li>
                            <li><a href="#">Alterar cliente</a></li>
                            <li><a href="#">Excluir cliente</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    </body>
</html>
