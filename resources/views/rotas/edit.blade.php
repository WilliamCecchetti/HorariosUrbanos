@extends('app')

@section('content')
    <div class="container">
        <h1>Editando rota: {{$rotas->id}}</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error }}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(['route' => ["rotas.update", $rotas->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('id_linha', 'ID Linha') !!}
            {!! Form::text('id_linha', $rotas->id_linha,['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('link', 'Link') !!}
            {!! Form::text('link', $rotas->link,['class' =>'form-control']) !!}
        </div>





        <div class="form-group">
            {!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection