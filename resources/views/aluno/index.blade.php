@extends('adminlte::page')

@section('title', 'Ordem de Serviço')

@section('content_header')
    <h1>Painel</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{route('aluno.create')}}"><button type="submit" class="btn btn-success"><i class="fas fa-save"> </i> Adicionar</button></a>
        </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">   
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Série</th>
            <th>Sala</th>
            <th>Responsável</th>
            <th>Contato</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
       @forelse ($alunos as $aluno)
       <tr>
            <td>{{$aluno->id}}</td>
            <td>{{$aluno->name}}</td>
            <td>{{$aluno->serie->name}}</td>
            <td>{{$aluno->serie->sala}}</td>
            <td>{{$aluno->responsavel}}</td>
            <td>{{$aluno->contato}}</td>
            <td><a href="{{route('aluno.edit',$aluno->id)}}" class="btn btn-app bg-primary"><span class="badge bg-purple"></span>
                <i class="fas fa-edit"></i> Editar</a>
                <a href="{{route('aluno.show',$aluno->id)}}" class="btn btn-app bg-success"><span class="badge bg-purple"></span>
                    <i class="fas fa-barcode"></i> Relacionar/Série</a>
                <a onclick="return confirm('Deseja realmente excluir esse registro')" href="{{route('aluno.destroy', $aluno->id)}}"  class="btn btn-app bg-danger">
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
            "emptyTable": "Nenhum registro encontrado",
            "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "infoFiltered": "(Filtrados de _MAX_ registros)",
            "infoThousands": ".",
            "loadingRecords": "Carregando...",
            "zeroRecords": "Nenhum registro encontrado",
            "search": "Pesquisar",
            "paginate": {
            "next": "Próximo",
            "previous": "Anterior",
            "first": "Primeiro",
            "last": "Último"
    },
        });
     });
</script>
    <script> console.log('Hi!'); </scrip>
@stop
