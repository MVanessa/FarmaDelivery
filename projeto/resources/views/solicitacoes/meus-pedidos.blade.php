<?php use App\Medicamento; ?>

@extends('layouts.default')
 
@section('conteudo')
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Meus pedidos:</h2>
            </div>
            <div class="form-group row" id="divBusca">
                <label for="busca" id="lbBusca" class="col-sm-2 col-form-label">Buscar</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="busca" placeholder="informe o medicamento">
                </div>
            </div>
       	</div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome do Medicamento</th>
                <th>Fabricante</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody id="minha-tabela">
        	@foreach ($solicitacoes as $key => $solicitacao)
        	<tr>
                <td> {{ $nome = Medicamento::getName($solicitacao->id_medicamento) }} </td>
                <td> {{ $fabricante = Medicamento::getFabricante($solicitacao->id_medicamento) }} </td>
                <td> {{ $solicitacao->qtd }}</td>
        	</tr>
        	@endforeach
        </tbody>
    </table>

    <div class="pull-left">
        <a class="btn btn-primary" id="voltar" href="{{ route('medicamentos.index') }}">Voltar</a>
    </div>
@endsection