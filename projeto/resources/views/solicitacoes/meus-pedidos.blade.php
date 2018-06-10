<?php use App\Medicamento; ?>

@extends('layouts.default')
 
@section('conteudo')
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Meus pedidos:</h2>
            </div>
       	</div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome do Medicamento</th>
                <th>Fabricante</th>
                <th>Quantidade</th>
                <th>Data da Solicitação</th>
            </tr>
        </thead>
        <tbody id="minha-tabela">
        	@foreach ($solicitacoes as $key => $solicitacao)
        	<tr>
                <td> {{ $nome = Medicamento::getName($solicitacao->id_medicamento) }} </td>
                <td> {{ $fabricante = Medicamento::getFabricante($solicitacao->id_medicamento) }} </td>
                <td>{{ $solicitacao->qtd }}</td>
                <?php $data = new DateTime($solicitacao->created_at); ?>
                <td>{{ date_format($data, 'd/m/y') }}</td>
        	</tr>
        	@endforeach
        </tbody>
    </table>
@endsection