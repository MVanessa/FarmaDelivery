@extends('layout')

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
            <th width="280px">Ação</th>
        </tr>

        @foreach ($todosmedicamentos as $key => $medicamento)
        <tr>
            <td>{{ $medicamento->nome }}</td>
            <td>{{ $medicamento->fabricante }}</td>
            <td>
                <a class="btn btn-info" href="#">Mostrar</a>
                <a class="btn btn-primary" href="#">Editar</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection