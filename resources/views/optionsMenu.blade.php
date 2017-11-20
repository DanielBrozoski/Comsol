<nav class="navbar navbar-default">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-hidden">
        <ul class="nav navbar-nav bg-primary">
            <li class="nav-item nav-brand" >
                <a class="navbar-link fa fa-plus" href="{{url('/novoProduto')}}"> Novo</a>
            </li>
            <li class="nav-item nav-brand" >
                <a class="navbar-link fa fa-remove" href="#"> Excluir</a>
            </li>
            <li class="nav-item nav-brand" >
                <a class="navbar-link fa fa-refresh" href="#"> Atualizar</a>
            </li>
            <li>
            <form class="form-inline nav-item">
                <div class="form-group">
                    <label class="fa fa-search btn"></label>
                    <input type="text" class="form-control" id="pesquisaProduto" placeholder="Digite o termo de produto">
                    <a href="#" class="btn btn-default fa fa-gear"></a>
                </div>

            </form>
            </li>
            {{--}}
            <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="fa fa-bars"></span></a>
                <ul class="dropdown-menu bg-primary" role="menu">
                    <li><a href="#">Ordenar por ordem alfabética</a></li>
                    <li><a href="#">Ordenar por quantidade vendida</a></li>
                    <li><a href="#">Ordenar por quantidade comprada</a></li>
                    <li><a href="#">Ordenar por quantidade em estoque</a></li>
                    <li><a href="#">Ordenar por quantidade em oferta</a></li>
                    <li><a href="#">Ordenar por quantidade em procura</a></li>
                </ul>

            </li>{{--}}
        </ul>
            </div>
        </div>
    </div>
</nav>
