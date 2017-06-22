@extends('app')


@section('content')
<div class="container">
    <h1>Linhas</h1>

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
        </tr>

        @endforeach
        </tbody>
    </table>
</div>
@endsection