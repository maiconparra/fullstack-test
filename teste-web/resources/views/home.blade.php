@extends('layouts.main')

@section('title', 'Home')
@section('content')

<div id="search-container" class="col-sm-12">
    <h1>Busque um Veinculo</h1>
    <form action="/encontrar" method="POST">
        @csrf
        <div class="form-group">
            <label for="Veiculo">Veiculo</label>
            <input type="text" id="veiculo" name="veiculo" class="form-control" placeholder="Nome do veiculo.">
        </div>
        <div class="form-group">
            <label for="Marca">Marca</label>
            <input type="text" id="marca" name="marca" class="form-control" placeholder="Marca do veiculo">
        </div>
        <input type="submit" class="btn btn-primary">
    </form>
</div>
<div id="amostra-container" class="col-md-12">
    <h2>Carros usados e novos!!</h2>
    <p class="subtitle">Veja e compare.</p>
    <div id="cards-container" class="row">

    @if (session('cars'))
        @foreach (session('cars') as $item)
        <div class="card col-md-3">
            <img class="card-img-top" src="/img/carsImages/{{$item->file}}" alt="{{ $item->veiculo }}">
            <div class="card-body">
                <h5 class="card-title">{{ $item->veiculo }} -- {{ $item->marca }}</h5>
                <p class="card-text">{{ $item->descricao }}</p>
                @if($item->vendido)
                <p class="card-text">Vendido: Sim</p>
                @else
                <p class="card-text">Vendido: Não</p>
                @endif
                <p class="card-date">{{$item->createdAt}}</p>
            </div>
        </div>
        @endforeach
    @else
        @foreach ($cars as $item)
        <div class="card col-md-3">
            <img class="card-img-top" src="/img/carsImages/{{$item->file}}" alt="{{ $item->veiculo }}">
            <div class="card-body">
                <h5 class="card-title">{{ $item->veiculo }} -- {{ $item->marca }}</h5>
                <p class="card-text">{{ $item->descricao }}</p>
                @if($item->vendido)
                <p class="card-text">Vendido: Sim</p>
                @else
                <p class="card-text">Vendido: Não</p>
                @endif
                @php
                    $date = new DateTime($item->createdAt);
                    echo '<p class="card-date">'.$date->format('d/m/y').'</p>';
                @endphp
            </div>
        </div>
        @endforeach
    @endif
    </div>
</div>

@endsection
