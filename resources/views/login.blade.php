<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>login</title>

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
            body{background:#d4e1cd}
            .container .row .content{background:#32a041; padding: 20px; border-radius: 50px; margin-top:40%}
            .container .row .content .btn{width: 95%; border-radius: 15px; margin-bottom: 20px}
            .container .row .content .col-form-label{color:white}
            .container .row .content .form-group .form-check{margin-left: 15px; color:white }
            .container .row .content .form-group .linkEsqueceu{margin-right: 15px }
            .container .row .content .form-group .linkEsqueceu a{margin-right: 15px; color:white; font-size: 12px }
        </style>

        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-lg-offset-4 col-lg-4 col-md-offset-4">
                    <div class="content">
                        <form>
                            <div class="row">
                                <div class="col-lg-8 ">
                                  <h1> <div class="logo-login pull-left"> {{ HTML::image('img/neaplan.png','alt', array('width' => 300 , 'height' => 70))}}</div></h1>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputUsermamee" class="col-form-label">Usuário</label>
                                    <input type="username" class="form-control" id="inputUsername" placeholder="Digite o seu usuário">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputPassword" class="col-form-label">Senha</label>
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Insira sua senha">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox"> Lembrar - me
                                    </label>
                                    <label class="linkEsqueceu pull-right"><a href="#">Esqueceu sua senha?</a> </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Conectar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
