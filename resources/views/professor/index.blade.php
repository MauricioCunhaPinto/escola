@extends('adminlte::page')

@section('title', 'Ordem de Serviço')

@section('content_header')
    <h1>Lista de Professores</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{route('professor.create')}}"><button type="submit" class="btn btn-success"><i class="fas fa-save"> </i> Adicionar</button></a>
        </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">   
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Matrícula</th>
            <th>RG</th>
            <th>CPF</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
       @forelse ($professores as $professor)
       <tr>
            <td>{{$professor->id}}</td>
            <td>{{$professor->name}}</td>
            <td>{{$professor->matricula}}</td>
            <td>{{$professor->rg}}</td>
            <td>{{$professor->cpf}}</td>
            <td><a href="{{route('professor.edit',$professor->id)}}" class="btn btn-app bg-primary"><span class="badge bg-purple"></span>
                <i class="fas fa-edit"></i> Editar</a>
                <a href="" class="btn btn-app bg-success"><span class="badge bg-purple"></span>
                    <i class="fas fa-barcode"></i> Visualizar</a>
                <a onclick="return confirm('Deseja realmente excluir esse registro')" href="{{route('professor.destroy', $professor->id)}}"  class="btn btn-app bg-danger">
                    <i class="fas fa-trash"></i> Excluir</a>
            </td>
    </tr>
       @empty
           <p>Nenhum resultado encontrado</p>
       @endforelse    
    </tfoot>
    </table>
    
    </div>
    {{$professores->links()}}
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

