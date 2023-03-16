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
<h3 class="card-title">Editar Série    [ {{$serie->name}} ]</h3>
</div>
<form action="{{route('professor.update', $serie->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$serie->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Turno</label>
            <select name="turno" class="form-control">
                <option value="Matutino" {{$serie->turno === 'Matutino' ? 'selected' : null }}>Matutino</option>
                <option value="Vespertino" {{$serie->turno === 'Vespertino' ? 'selected' : null }}>Vespertino</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Quantidade de alunos</label>
                <input type="text" class="form-control" id="rg" name="qtd_aluno" value="{{$serie->qtd_aluno}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Numero da Sala</label>
                <input type="text" class="form-control" id="cpf" name="sala" value="{{$serie->sala}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Copias</label>
                <input type="text" class="form-control" id="cpf" disable="disable" name="sala" value="{{$serie->copias}}">
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

