@extends('app')

@section('content')
    <div class="col-xs-12">
        {!! App\Library\Breadcrump::render($breads) !!}
    </div>


    <div class="col-xs-6">
        <h1>{{ $title }}</h1>
    </div>

    <div class="col-xs-6 text-right">
        {!! Html::link('#add', 'Adicionar usuário', ['class'=>'btn btn-primary', 'data-toggle' => "modal", 'data-target'=>"#add_user"]) !!}
    </div>

    <div class="col-xs-4 col-xs-offset-8 text-right">
        {!! HForm::search() !!}
    </div>


    <div class="col-xs-12 mt2">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Função</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user }}</td>
                    <td>Administrador</td>
                    <td>Lorem ipsum deler</td>
                    <td>
                        <a href="{{ URL::to('/') }}associado/usuario/add" class="btn btn-primary" data-toggle="modal" data-target="#add_user" title="Editar"><i class="glyphicon glyphicon-pencil"></i></a>
                        <a href="{{ URL::to('/') }}associado/usuario/add" class="btn btn-danger" data-toggle="modal" data-target="#delete_user" title="Deletar"><i class="glyphicon glyphicon-remove-circle"></i></a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection

@section('footer')
    @include('associate/modules/modal/add_users')
    @include('associate/modules/modal/delete_users')
@endsection