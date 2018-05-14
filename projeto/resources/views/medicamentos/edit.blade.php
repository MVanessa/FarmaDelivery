@extends('layouts.default')

@section('conteudo')
    <div>
        <div class="row">
            <div class="col-md-12">
                <h1>Editar Medicamento</h1>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <form class="" action="{{route('medicamentos.update', $medicamento->id)}}" method="post">
                  <input name="_method" type="hidden" value="PUT">
                    {{csrf_field()}}
                    <div class="form-group">
                        <strong>Nome:</strong>
                        <input type="text" name="nome" class="form-control" placeholder="ex: atropina" value="{{$medicamento->nome}}" autofocus>
                        <strong>Fabricante:</strong>
                        <input type="text" name="fabricante" class="form-control" placeholder="ex: eurofarma" value="{{$medicamento->fabricante}}" autofocus>
                        <strong>Quantidade:</strong>
                        <input type="number" name="qtd" class="form-control" placeholder="10" value="{{$medicamento->qtd}}" autofocus>
                        <strong>Peso:</strong>
                        <input type="number" name="peso" step="0.01" class="form-control" placeholder="0.5" value="{{$medicamento->peso}}" autofocus>
                        <strong>Indicações:</strong>
                        <input type="text" name="indicacoes" class="form-control" placeholder="ex: para tratamento de úlcera" value="{{$medicamento->indicacoes}}" autofocus>
                        <strong>Contraindicações:</strong>
                        <input type="text" name="contraindicacoes" class="form-control" placeholder="ex: contraindicado em pacientes com asma" value="{{$medicamento->contraindicacoes}}" autofocus>
                        <strong>Reações:</strong>
                        <input type="text" name="reacoes" class="form-control" placeholder="ex: pode ocorrer sonolência" value="{{$medicamento->reacoes}}" autofocus>
                    </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Cadastrar">
                </div>
          </form>
        </div>
      </div>
  </div>    
@endsection
