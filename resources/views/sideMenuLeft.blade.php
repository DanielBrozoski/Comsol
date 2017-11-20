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
                <a href="{{ url('/produtos') }}" class="dropdown">Produtos<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-tree"></span></a>
            </li>
            <li class="dropdown">
                <a href="{{ url('/grupoProdutos') }}" class="dropdown">Grupo de produtos <span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-tree"></span></a>
            </li>
            <li class="dropdown">
                <a href="{{ url('/culturaProdutos') }}" class="dropdown">Cultura de produtos<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-tree"></span></a>
            </li>
            <li class="dropdown">
                <a href="{{ url('/produtores') }}" class="dropdown">Produtores<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-user"></span></a>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown">Ofertas<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-backward"></span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown">Clientes<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-child"></span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown">Pedidos<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-forward"></span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown">Contratos<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-handshake-o"></span></a>
            </li>
        </ul>
    </div>
</nav>