@extends('layouts.default')

@section('conteudo')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Medicamentos cadastrados</h2>
            </div>
        </div>
    </div>
     
    <table class="table table-bordered">
        <tr>
            <th>Nome</th>
            <th>Fabricante</th>
            <th>Quantidade</th>
            <th>Peso</th>
            <th>Indicações</th>
            <th>Contraindicações</th>
            <th>Reações</th>
            <th width="280px">Ação</th>
        </tr>

        @foreach ($todosmedicamentos as $key => $medicamento)
        <tr>
            <td>{{ $medicamento->nome }}</td>
            <td>{{ $medicamento->fabricante }}</td>
            <td>{{ $medicamento->qtd }}</td>
            <td>{{ $medicamento->peso }}</td>
            <td>{{ $medicamento->indicacoes }}</td>
            <td>{{ $medicamento->contraindicacoes }}</td>
            <td>{{ $medicamento->reacoes }}</td>
            <td>
                <a class="btn btn-info" href="#">Mostrar</a>
                <a class="btn btn-primary" href="#">Editar</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection