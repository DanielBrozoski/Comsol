<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
        <style>

        </style>

        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="css/main.css" rel="stylesheet">
    </head>
    <body>
            <nav class="navbar navbar-default">
               <div class="container">
                   <ul class="nav navbar-nav">
                       <li class="nav-item nav-brand" >
                           <a class="navbar-link fa fa-home fa-2x pull-left" href="#"> Consol</a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav pull-right">
                        <li class="nav-item ">
                            <a class="navbar-link fa fa-user-circle-o fa-2x " href="#">{{$user->name or " *Nome de usuario*"}}</a>
                        </li>
                        <li class="nav-item ">
                            <a class="navbar-link fa fa-times fa-2x pull-left" href="#"> Sair</a>
                        </li>
                    </ul>

               </div>
            </nav>
    </body>
</html>
