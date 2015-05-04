@extends('app')

@section('content')
    <div class="col-xs-12">
        {!! App\Library\Breadcrump::render($breads) !!}
    </div>


    <div class="col-xs-6">
        <h1>{{ $title }}</h1>
    </div>

    <div class="col-xs-6 text-right">
        {!! Html::link('#add', 'Adicionar serviços', ['class'=>'btn btn-primary', 'data-toggle' => "modal", 'data-target'=>"#add_service"]) !!}
    </div>




        <div class="col-xs-4 col-xs-offset-8 text-right">
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
                    <th>Tempo</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{ $service }}</td>
                    <td>15 minutos</td>
                    <td>Lorem ipsum deler</td>
                    <td>
                        <a href="{{ URL::to('/') }}associado/servicos/add" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="glyphicon glyphicon-pencil"></i></a>
                        <a href="{{ URL::to('/') }}associado/servicos/add" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Fechar"><i class="glyphicon glyphicon-remove-circle"></i></a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection

@section('footer')
    @include('modules/modal/add_services')
@endsection