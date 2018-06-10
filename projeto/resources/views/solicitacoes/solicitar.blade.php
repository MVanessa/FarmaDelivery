<?php use App\Http\Controllers\SolicitacoesController; ?>
<?php $endereco = SolicitacoesController::getEnderecoSolicitante(auth()->user()->id); ?>
<?php $qtd = SolicitacoesController::verificaQtdDisponivel($medicamento->id); ?>

@extends('layouts.default')
 
@section('conteudo')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Dados do medicamento:</h2>
            </div>
        </div>
    </div>

    <form class="" action="{{ route('solicitacoes.store',  ['id_user' => auth()->user()->id, 'id_medicamento' => $medicamento->id]) }}" method="post">
        {{ csrf_field() }}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $medicamento->nome }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                    <strong>Quantidade disponível em estoque:</strong>
                    {{ $qtd }}
            </div>
        </div>

        <div class="col-sm-4-4 col-sm-4 col-md-4">
            <div class="form-group">          
                <strong>Quantidade a ser solicitada:</strong>
                <input type="number" name="qtd" min="1" max="<?=$qtd?>" class="form-control" placeholder="1" autofocus>
            </div>
        </div>

        <hr/>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Dados do solicitante:</h2>
                </div>
            </div>
        </div>

        @if ( Auth::check() )
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome do solicitante:</strong>
                    {{ auth()->user()->name }}                
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Endereço:</strong>
                    {{ $endereco }}
                </div>
            </div>
        @endif
        <div class="form-group">
            <input type="submit" class="btn btn-success" id="confirmar" value="Confirmar">
        </div>
    </form>
@endsection