@extends('app')


@section('content')
    <div class="container">
        <h1>Menu</h1>
        



        <div class="row">

            <div class="col-xs-6 col-sm-3 col-md-2">
                <a href="empresas" class="btn btn-primary">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <i class="fa fa-plus fa-5x"></i>
                        </div>
                        <div class="col-xs-12 text-center">
                            <p>Empresas</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-xs-6 col-sm-3 col-md-2">
                <a href="linhas" class="btn btn-default">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-12 text-center">
                            <p>Linhas</p>
                        </div>
                    </div>
                </a>
            </div>



            <div class="col-xs-6 col-sm-3 col-md-2">
                <a href="horarios" class="btn btn-default">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-12 text-center">
                            <p>Horários</p>
                        </div>
                    </div>
                </a>
            </div>



            <div class="col-xs-6 col-sm-3 col-md-2">
                <a href="rotas" class="btn btn-default">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-12 text-center">
                            <p>Rotas</p>
                        </div>
                    </div>
                </a>
            </div>





        </div>

    </div>
@endsection