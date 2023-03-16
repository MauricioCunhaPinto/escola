@extends('adminlte::page')

@section('title', 'Ordem de Serviço')

@section('content_header')
    <h1>Painel</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="col-md-12">

        <div class="card card-widget widget-user">
       
       <div class="widget-user-header bg-info">
       <h3 class="widget-user-username">{{$user->name}}</h3>
       <h5 class="widget-user-desc">{{$user->email}}</h5>
       </div>
       <div class="widget-user-image">
       <img class="img-circle elevation-2" src="http://localhost/laravel/public/vendor/adminlte/dist/img/user.jpg" alt="User Avatar">
       </div>
       <div class="card-footer">
       <div class="row">
       <div class="col-sm-4 border-right">
       <div class="description-block">
       <h5 class="description-header">3,200</h5>
       <span class="description-text">SALES</span>
       </div>
       
       </div>
       
       <div class="col-sm-4 border-right">
       <div class="description-block">
       <h5 class="description-header">13,000</h5>
       <span class="description-text">FOLLOWERS</span>
       </div>
       
       </div>
       
       <div class="col-sm-4">
       <div class="description-block">
       <h5 class="description-header">35</h5>
       <span class="description-text">PRODUCTS</span>
       </div>
       
       </div>
       
       </div>
       
       </div>
       </div>
       
       </div>      
       </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

