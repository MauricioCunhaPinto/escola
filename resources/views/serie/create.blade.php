@extends('adminlte::page')

@section('title', 'Ordem de Serviço')

@section('content_header')
    <h1>Painel</h1>
@stop

@section('content')
<div class="container-fluid">
<div class="row">

<div class="col-md-12">

<div class="card card-success">
<div class="card-header">
<h3 class="card-title">Cadastro de Série</h3>
</div>
<form action="{{route('serie.store')}}" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="digite seu nome" value="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Turno</label>
            <select name="turno" class="form-control">
                <option value="Matutino" >Matutino</option>
                <option value="Vespertino" >Vespertino</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Quantidade de alunos</label>
                <input type="text" class="form-control" id="rg" name="qtd_aluno" placeholder="digite a quantidade">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Numero da Sala</label>
                <input type="text" class="form-control" id="cpf" name="sala" placeholder="digite o numero">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
    </div> 
</form>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

