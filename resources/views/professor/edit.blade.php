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
<h3 class="card-title">Editar Professor    [ {{$professor->name}} ]</h3>
</div>
<form action="{{route('professor.update', $professor->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$professor->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Matricula</label>
                <input type="text" class="form-control" id="matricula" name="matricula" value="{{$professor->matricula}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">RG</label>
                <input type="text" class="form-control" id="rg" name="rg" value="{{$professor->rg}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="{{$professor->cpf}}">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-success">Atualizar</button>
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

