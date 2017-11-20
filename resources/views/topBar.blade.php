<nav class="navbar navbar-default">
    <div class="container">
        <ul class="nav navbar-nav bg-primary">
            <li class="nav-item nav-brand" >
                <a class="btn navbar-link fa fa-home fa-2x pull-left" href="#"> Consol</a>
            </li>
        </ul>

        <ul class="nav navbar-nav pull-right">
            <li class="nav-item">
                <a class="btn navbar-link fa fa-user-circle-o  " href="#">{{$users->name or " *Nome de usuario*"}}</a>
            </li>
            <li class="nav-item ">
                <a class="btn navbar-link fa fa-times  pull-left" href="#"> Sair</a>
            </li>
        </ul>
    </div>
</nav>