@extends('app')

@section('content')
    <div class="container">
        <h1>Novo Horario</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'horarios.store']) !!}
        <div class="form-group">
            {!! Form::label('id_linha', 'ID Linha') !!}
            {!! Form::text('id_linha', null,['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tipo', 'Tipo') !!}
            {!! Form::text('tipo', null,['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('link', 'Link') !!}
            {!! Form::text('link', null,['class' =>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Criar horario', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection