@extends('adminlte::page')

@section('title', 'Escola')

@section('content_header')
    <h1>Painel</h1>
@stop

@section('content')
<div class="container-fluid">
<div class="row">

<div class="col-md-12">

<div class="card card-success">
<div class="card-header">
<h3 class="card-title">Editar</h3>
</div>
<form action="{{route('professor.update')}}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$aluno ? $aluno->name : null }}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Série | Turma</label>
        <select name="serie_id" class="form-control">
            <option>Selecione Aqui</option>
            @foreach($series as $serie)
            <option value="{{$serie->id}}" {{($serie->id == $aluno->serie_id)? 'selected':null}}>{{$serie->name}} - {{$serie->turno}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
            <label for="exampleInputEmail1">Responsável</label>
                <input type="text" class="form-control" id="responsavel" name="responsavel" placeholder="digite o nome do responsavel" value="{{$aluno ? $aluno->responsavel : null }}">
        </div>
    <div class="form-group">
            <label>Telefone do responsável</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                </div>
                <input type="text" class="form-control" name="contato" data-inputmask='"mask": "(999) 999-9999"' data-mask value="{{$aluno ? $aluno->contato : null }}">
            </div>
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

