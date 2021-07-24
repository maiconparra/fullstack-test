@extends('layouts.main')

@section('title', 'Home')
@section('content')

<div id="search-container" class="col-sm-12">
    <h1>Busque um Veinculo</h1>
    <form action="">
        <div class="form-group">
            <label for="Veiculo">Veiculo</label>
            <input type="text" id="veiculo" name="veiculo" class="form-control" placeholder="Nome do veiculo.">
        </div>
        <div class="form-group">
            <label for="Marca">Marca</label>
            <input type="text" id="marca" name="marca" class="form-control" placeholder="Marca do veiculo">
        </div>
    </form>
</div>
<div id="amostra-container" class="col-md-12">
    <h2>Carros usados e novos!!</h2>
    <p class="subtitle">Veja e compare.</p>
    <div id="cards-container" class="row">
    @foreach ($cars as $item)
        <div class="card col-md-3">
            <img class="card-img-top" src="..." alt="{{ $item->veiculo }}">
            <div class="card-body">
              <h5 class="card-title">{{ $item->veiculo }} -- {{ $item->marca }}</h5>
              <p class="card-text">{{ $item->descricao }}</p>
              @if($item->vendido)
              <p class="card-text">Vendido: Sim</p>
              @else
              <p class="card-text">Vendido: Não</p>
              @endif
              <p class="card-date">22/06/2020</p>
            </div>
          </div>
    @endforeach
    </div>
</div>

@endsection
