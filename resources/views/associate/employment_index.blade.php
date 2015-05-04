@extends('app')

@section('content')
    <div class="col-xs-12">
        {!! App\Library\Breadcrump::render($breads) !!}
    </div>


    <div class="col-xs-6">
        <h1>{{ $title }}</h1>
    </div>

    <div class="col-xs-6 text-right">
        {!! Html::link('#add', 'Adicionar funcionário', ['class'=>'btn btn-primary', 'data-toggle' => "modal", 'data-target'=>"#add_employ"]) !!}
    </div>



        <div class="col-xs-4 col-xs-offset-4 text-right">
            {!! Form::label('jobs', 'Filtrar por, tipo de serviços') !!}
            {!! Form::select('jobs', $services, null, ['class'=>'form-control']) !!}
        </div>

        <div class="col-xs-4 text-right">
            {!! Form::label('s', 'Pesquisar por nome') !!}
            <div class="input-append input-group" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                {!! Form::text('s', null, ['class'=>'form-control']) !!}
                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
            </div>

        </div>


    <div class="col-xs-12 mt2">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Horários</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Felipe signorini</td>
                    <td>Segunda a sexta - 10:00 às 19:00</td>
                    <td>
                        <a href="{{ URL::to('/') }}associado/funcionario/add" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="glyphicon glyphicon-pencil"></i></a>
                        <a href="{{ URL::to('/') }}associado/funcionario/add" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Fechar"><i class="glyphicon glyphicon-remove-circle"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('footer')
    @include('modules/modal/add_employ')
@endsection