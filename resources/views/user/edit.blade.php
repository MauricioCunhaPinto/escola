@extends('adminlte::page')

@section('title', 'Ordem de Serviço')

@section('content_header')
    <h1>Atualizar Usuário</h1>
@stop

@section('content')
<div class="container-fluid">
<div class="row">

<div class="col-md-12">

<div class="card card-success">
<div class="card-header">
<h3 class="card-title">Editar usuário [{{$user->name}}]</h3>
</div>
@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
        <li class="error" style="color:red;">{{$error}}</li>
        @endforeach
    </ul>
@endif
<form action="{{route('user.update', $user->id)}}" method="POST">
    @csrf
    @method('PUT')
    {{-- <input type="hidden" name="_method" value="PUT"> --}}
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="digite seu nome" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="digite seu endereço" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Senha</label>
                <input type="password" class="form-control" id="exampleInputEmail1" name="password" placeholder="digite seu telefone">
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

