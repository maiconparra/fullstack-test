@extends('layouts.main')

@section('title', 'Cadastro de Veiculo')
@section('content')

<div id="cars-create-container" class="col-md-6 offset-md">
    <h1>Cadastre o seu veiculo</h1>
    <p>Os campos com * são obrigatórios!</p>

    <form action="/cadastrar" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="Imagem">Imagem</label>
            <input type="file" id="file" name="file" class="form-control-file">
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" class="id" name="id">
        </div>
        <div class="form-group">
            <label for="Veiculo">Veiculo *</label>
            <input type="text" class="form-control" id="veiculo" name="veiculo" placeholder="Digite o nome do veiculo.">
        </div>
        <div class="form-group">
            <label for="Marca">Marca *</label>
            <input type="text" class="form-control" id="marca" name="marca" placeholder="Digite a marca do veiculo.">
        </div>
        <div class="form-group">
            <label for="Ano">Ano *</label>
            <input type="number" class="form-control"  id="ano" name="ano" placeholder="Digite o ano do veiculo.">
        </div>
        <div class="form-group">
            <label for="Descrição">Descrição *</label>
            <textarea class="form-control" name="descricao" id="descricao" placeholder="Descreva a atual situação do veiculo"></textarea>
        </div>
        <div class="form-group">
            <label for="Vendido">Vendido *</label>
            <select name="vendido" id="vendido" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <input id="submit-cars" type="submit" class="btn btn-primary" value="Cadastrar Veiculo">
    </form>
</div>

<script>
    $('#submit-cars').onclick(function (value) {
        console.log(value);
    });
</script>

@endsection
