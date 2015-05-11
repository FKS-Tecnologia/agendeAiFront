@extends('app')

@section('content')
    <div class="col-xs-12">
        {!! App\Library\Breadcrump::render($breads) !!}
    </div>


    <div class="col-xs-6">
        <h1>{{ $title }}</h1>
    </div>

    <div class="col-xs-6 text-right">
        {!! Html::link('#add', 'Adicionar cliente', ['class'=>'btn btn-primary', 'data-toggle' => "modal", 'data-target'=>"#add_client"]) !!}
    </div>



        <div class="col-xs-4 col-xs-offset-4 text-right">
            {!! HForm::select('jobs', 'Filtrar por tipo de serviço', $services) !!}
        </div>

        <div class="col-xs-4 text-right">
           {!! HForm::search() !!}
        </div>


    <div class="col-xs-12 mt2">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ùltimo horário</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Felipe signorini</td>
                    <td>10/05/2015 - 15:30</td>
                    <td>
                        <a href="{{ URL::to('/') }}associado/funcionario/add" class="btn btn-primary" data-toggle="modal" data-target="#edit_client" title="Editar"><i class="glyphicon glyphicon-pencil"></i></a>
                        <a href="{{ URL::to('/') }}associado/funcionario/add" class="btn btn-danger" data-toggle="modal" data-target="#delete_client" title="Deletar"><i class="glyphicon glyphicon-remove-circle"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Priscila Shimeji <i class="glyphicon glyphicon-cloud-download" data-toggle="tooltip" title="Cliente agendeai"></i></td>
                    <td>10/05/2015 - 15:30</td>
                    <td>
                        <a href="{{ URL::to('/') }}associado/funcionario/add" class="btn btn-primary" data-toggle="modal" data-target="#edit_client" title="Editar"><i class="glyphicon glyphicon-pencil"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('footer')
    @include('associate/modules/modal/add_client')
    @include('associate/modules/modal/edit_client')
    @include('associate/modules/modal/delete_client')
@endsection