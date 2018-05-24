@extends('layouts.default')

@section('conteudo')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Medicamentos cadastrados</h2>
            </div>
        </div>
    </div>
    <br/>
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
                <a class="btn btn-info" href="{{ route('medicamentos.show',$medicamento->id) }}">Detalhes</a>
                <a class="btn btn-primary" href="{{ route('medicamentos.edit',$medicamento->id) }}">Editar</a>
                {!! Form::open(['method' => 'DELETE','route' => ['medicamentos.destroy', $medicamento->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
@endsection