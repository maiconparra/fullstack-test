@extends('layouts.main')

@section('title', 'Home')
@section('content')

<pre>

    <table id="table-cars" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr class="row">
                <th class="col-sm-2">Veiculo</th>
                <th class="col-sm-2">Marca</th>
                <th class="col-sm-1">Ano</th>
                <th class="col-sm-6">Descrição</th>
                <th class="col-sm-1">Vendido</th>
            </tr>
        </thead>
        <tbody>
    @foreach($cars as $cars)
            <tr class="row">
                <td class="col-sm-2">{{ $cars->veiculo }}</td>
                <td class="col-sm-2">{{ $cars->marca }}</td>
                <td class="col-sm-1">{{ $cars->ano }}</td>
                <td class="col-sm-6">{{ $cars->descricao }}</td>
                @if($cars->vendido)

                <td class="col-sm-1">Sim</td>

                @else

                <td class="col-sm-1">Não</td>

                @endif
            </tr>
    @endforeach
        </tbody>
    </table>
</pre>

@endsection
