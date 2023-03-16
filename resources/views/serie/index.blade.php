@extends('adminlte::page')

@section('title', 'Ordem de Serviço')

@section('content_header')
    <h1>Painel</h1>
@stop

@section('content')
<div class="card">
   
    <div class="card-header">
    <a href="{{route('serie.create')}}"><button type="submit" class="btn btn-success"><i class="fas fa-save"> </i> Adicionar</button></a>
    </div>
    
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Turno</th>
            <th>Quantidade de alunos</th>
            <th>Numero da Sala</th>
            <th>Cópias</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
       @forelse ($series as $serie)
       <tr>
            <td>{{$serie->id}}</td>
            <td>{{$serie->name}}</td>
            <td>{{$serie->turno}}</td>
            <td>{{$serie->qtd_aluno}}</td>
            <td>{{$serie->sala}}</td>
            <td>{{$serie->copias}}</td>
            <td><a href="{{route('serie.edit',$serie->id)}}" class="btn btn-app bg-primary"><span class="badge bg-purple"></span>
                <i class="fas fa-edit"></i> Editar</a>
                <a href="" class="btn btn-app bg-success"><span class="badge bg-purple"></span>
                    <i class="fas fa-barcode"></i> Visualizar</a>
                <a onclick="return confirm('Deseja realmente excluir esse registro')" href="{{route('serie.destroy', $serie->id)}}"  class="btn btn-app bg-danger">
                    <i class="fas fa-trash"></i> Excluir</a>
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

