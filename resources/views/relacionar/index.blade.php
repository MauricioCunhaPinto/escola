@extends('adminlte::page')

@section('title', 'Sistema Escolar')

@section('content_header')
    <h1>Painel</h1>
@stop

@section('content')
<div class="card">
   
    <div class="card-header">
    <a href="{{route('relacionar.create')}}"><button type="submit" class="btn btn-success"><i class="fas fa-save"> </i> Adicionar</button></a>
    </div>
    
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Professor</th>
            <th>Turma/Série</th>
            <th>Turno</th>
            <th>Tipo</th>
            <th>QTD Copias</th>
            <th>Copias que vc Tem</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
       @forelse ($professor_series as $ps)
       <tr>
            <td>{{$ps->id}}</td>
            <td>{{$ps->professor->name}}</td>
            <td>{{$ps->serie->name}}</td>
            <td>{{$ps->serie->turno}}</td>
            <td>{{$ps->tipo}}</td>
            <td>{{$ps->serie->copias}}</td>
            <td>{{$ps->serie->copias}}</td>
            <td><a href="{{route('relacionar.show',$ps->id)}}" class="btn btn-app bg-success"><span class="badge bg-purple"></span>
                <i class="fas fa-barcode"></i> Cópias</a>
                <a href="{{route('relacionar.edit',$ps->id)}}" class="btn btn-app bg-primary"><span class="badge bg-purple"></span>
                <i class="fas fa-edit"></i> Editar</a>
            </td>
    </tr>
       @empty
           <p>Nenhum resultado encontrado</p>
       @endforelse    
    </tfoot>
    </table>
    </div>
    </div>    
@stop


@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" ></script>
<script>
    $(document).ready( function () {
        $('#example1').DataTable({
            "ordering": false,
        });
     });
</script>
    <script> console.log('Hi!'); </script>
@stop
