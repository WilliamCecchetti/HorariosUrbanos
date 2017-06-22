@extends('app')

@section('content')
    <div class="container">
        <h1>Editando horario: {{$horarios->id}}</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error }}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(['route' => ["horarios.update", $horarios->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('id_linha', 'ID Linha') !!}
            {!! Form::text('id_linha', $horarios->id_linha,['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tipo', 'Tipo') !!}
            {!! Form::text('tipo', $horarios->tipo,['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('link', 'Link') !!}
            {!! Form::text('link', $horarios->link,['class' =>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection