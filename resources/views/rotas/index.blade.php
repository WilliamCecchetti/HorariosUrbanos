@extends('app')


@section('content')
    <div class="container">
        <h1>Rotas</h1>
        <a href="{{ route('rotas.create') }}"
           class="btn btn-success">Nova Rota</a>
        <br>
        <br>
        

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>ID Linha</th>
                <th>Link</th>

                <th>Ações</th>


            </tr>
            </thead>

            <tbody>
                @foreach($rotas as $rot)
                   <tr>
                       <td>{{ $rot->id_linha }}</td>
                       <td>{{ $rot->link}}</td>



                       <td>
                           <a href="{{ route('rotas.edit', ['id'=>$rot->id]) }}"
                              class="btn-sm btn-success">Editar</a>
                           <a href="{{ route('rotas.destroy', ['id'=>$rot->id]) }}"
                              class="btn-sm btn-danger">Remover</a>
                       </td>
                   </tr>

                @endforeach
            </tbody>
        </table>
    </div>
@endsection