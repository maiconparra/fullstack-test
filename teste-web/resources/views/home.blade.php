@extends('layouts.main')

@section('title', 'Cars')
@section('content')

<div class="container-fluid">
    <div class="col-sm-4">
        <form>
            <div class="form-group">
                <input type="hidden" name="id" value="id">
            </div>
            <div class="form-group">
                <label for="Veiculo">Veiculo</label>
                <input type="text" class="form-control" id="veiculo" name="veiculo" value="veiculo" aria-describedby="emailHelp" placeholder="Ecreva o modelo do veiculo.">
            </div>
            <div class="form-group">
                <label for="Marca">Marca</label>
                <input type="Text" class="form-control" id="marca" name="marca" value="marca" placeholder="Escreva a marca do veiculo.">
            </div>
            <div class="form-group">
                <label for="Ano">Ano</label>
                <input type="Text" class="form-control" id="ano" name="ano" value="ano" placeholder="Insira o ano do veiculo.">
            </div>
            <div class="form-group">
                <label for="Descrição">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" value="descricao" placeholder="Descreve o veiculo."></textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="vendido" id="vendido" value="vendido" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Vendido
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="vendido" id="vendido" value="vendido">
                <label class="form-check-label" for="exampleRadios2">
                  À Venda
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>

@endsection
