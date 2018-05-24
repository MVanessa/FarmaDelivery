@extends('layouts.default')
 
@section('conteudo')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Exibir medicamento</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $medicamento->nome }}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fabricante:</strong>
                {{ $medicamento->fabricante }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantidade:</strong>
                {{ $medicamento->qtd }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Peso:</strong>
                {{ $medicamento->peso }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Indicações:</strong>
                {{ $medicamento->indicacoes }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contraindicações:</strong>
                {{ $medicamento->contraindicacoes }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Reações:</strong>
                {{ $medicamento->reacoes }}
            </div>
        </div>

        <br/>
        <div class="pull-left">
            <a class="btn btn-primary" href="{{ route('medicamentos.index') }}">Voltar</a>
        </div>
@endsection