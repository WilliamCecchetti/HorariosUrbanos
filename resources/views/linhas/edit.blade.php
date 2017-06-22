@extends('app')

@section('content')
    <div class="container">
        <h1>Editando linha: {{$linhas->nome}}</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error }}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(['route' => ["linhas.update", $linhas->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', $linhas->nome,['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection