@extends('app')


@section('content')
    <div class="container">
        <h1>Empresas</h1>
        <a href="{{ route('empresas.create') }}"
           class="btn btn-success">Nova Empresa</a>
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
                @foreach($empresas as $emp)
                   <tr>
                       <td>{{ $emp->id }}</td>
                       <td>{{ $emp->nome }}</td>
                       <td>
                           <a href="{{ route('empresas.edit', ['id'=>$emp->id]) }}"
                              class="btn-sm btn-success">Editar</a>
                           <a href="{{ route('empresas.destroy', ['id'=>$emp->id]) }}"
                              class="btn-sm btn-danger">Remover</a>
                       </td>
                   </tr>

                @endforeach
            </tbody>
        </table>
    </div>
@endsection