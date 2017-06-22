@extends('app')


@section('content')
    <div class="container">
        <h1>Horários</h1>
        <a href="{{ route('horarios.create') }}"
           class="btn btn-success">Novo Horario</a>
        <br>
        <br>
        

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>ID Linha</th>
                <th>Tipo</th>
                <th>Link</th>
                <th>Ações</th>

            </tr>
            </thead>

            <tbody>
                @foreach($horarios as $hor)
                   <tr>
                       <td>{{ $hor->id }}</td>
                       <td>{{ $hor->id_linha}}</td>
                       <td>{{ $hor->tipo}}</td>
                       <td>{{ $hor->link}}</td>
                       <td>
                           <a href="{{ route('horarios.edit', ['id'=>$hor->id]) }}"
                              class="btn-sm btn-success">Editar</a>
                           <a href="{{ route('horarios.destroy', ['id'=>$hor->id]) }}"
                              class="btn-sm btn-danger">Remover</a>
                       </td>
                   </tr>

                @endforeach
            </tbody>
        </table>
    </div>
@endsection