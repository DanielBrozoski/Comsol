<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro de Clientes</title>

        <!-- Bootstrap -->
        <link href="css/app.css" rel="stylesheet">

        <!-- Última versão CSS compilada e minificada -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Tema opcional -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Última versão JavaScript compilada e minificada -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    @extends('basicModel')

    @section('content')
       <div class="container">
           <form class="form-horizontal">
               <fieldset>

                   <!-- Form Name -->
                   <legend>Cadastro de Clientes</legend>

                   <!-- Select Basic -->
                   <div class="form-group">
                       <label class="col-md-4 control-label" for="comboess">Pessoa</label>
                       <div class="col-md-4">
                           <select id="comboess" name="comboess" class="form-control">
                               <option value="1">Pessoa Física</option>
                               <option value="2">Pessoa Jurídica</option>
                           </select>
                       </div>
                   </div>

                   <!-- Text input-->
                   <div class="form-group">
                       <label class="col-md-4 control-label" for="nomeCliente">Nome Completo</label>
                       <div class="col-md-5">
                           <input id="nomeCliente" name="nomeCliente" type="text" placeholder="Digite seu nome completo" class="form-control input-md">

                       </div>
                   </div>

               </fieldset>
           </form>

       </div>
    @stop
    </body>
</html>
