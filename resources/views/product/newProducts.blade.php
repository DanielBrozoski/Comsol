@extends('modelProducts')

@section('content')
    @include('optionsMenu')

    <div class="row">
        <form class="form-inline">
            <fieldset>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="prod_codi">Código:</label>
                    <div class="col-md-1">
                        <input id="prod_codi" name="prod_codi" type="text"  class="form-control input-xs" disabled>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="prod_codi">Nome:</label>
                    <div class="col-md-4">
                        <input id="prod_nome" name="prod_nome" type="text" placeholder="Digite o nome do produto" class="form-control input-xs">
                    </div>
                </div>

            </fieldset>

        </form>

    </div>

@stop