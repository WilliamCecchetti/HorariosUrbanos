@extends('app')


@section('content')
    <div class="container">
        <h1>Linhas</h1>
        <a href="{{ route('linhas.create') }}"
           class="btn btn-success">Nova Linha</a>
        <br>
        <br>
        

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Opções</th>
            </tr>
            </thead>

            <tbody>
                @foreach($linhas as $lin)
                   <tr>
                       <td>{{ $lin->id }}</td>
                       <td>{{ $lin->nome }}</td>
                       <td>
                           <a href="{{ route('linhas.edit', ['id'=>$lin->id]) }}"
                              class="btn-sm btn-success">Editar</a>
                           <a href="{{ route('linhas.destroy', ['id'=>$lin->id]) }}"
                              class="btn-sm btn-danger">Remover</a>
                       </td>
                   </tr>

                @endforeach
            </tbody>
        </table>
    </div>
@endsection