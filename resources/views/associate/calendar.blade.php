@extends('app')

@section('content')
    <div class="col-xs-12">
        {!! App\Library\Breadcrump::render($breads) !!}
    </div>


    <div class="col-xs-6">
        <h1>{{ $title }}</h1>
    </div>

    <div class="col-xs-6 text-right">
        {!! Html::link('#add', 'Adicionar tarefa', ['class'=>'btn btn-primary', 'data-toggle' => "modal", 'data-target'=>"#add_job"]) !!}
    </div>

    <div class="clearfix"></div>

    <div class="mt2">
        <div class="col-xs-2">
            {!! HForm::time('step', 'Visualizar a cada', '00:15', false) !!}
        </div>

        <div class="col-xs-4 col-xs-offset-3">
            {!! Form::label('calendar_view', 'Visualizar por ', ['class'=>'col-xs-10 col-xs-offset-2']) !!}
            <div class="text-right">
                {!! Html::link('associado/calendario/?view=day', 'Diário', ['class'=>"btn btn-primary ".(Input::get("view", "day")=="day"?"active":"")]) !!}
                {!! Html::link('associado/calendario/?view=week', 'Semanal', ['class'=>"btn btn-primary ".(Input::get("view")=="week"?"active":"")]) !!}
                {!! Html::link('associado/calendario/?view=month', 'Mensal', ['class'=>"btn btn-primary ".(Input::get("view")=="month"?"active":"")]) !!}
            </div>
        </div>

        <div class="col-xs-3 ">
            {!! HForm::search() !!}
        </div>
    </div>



    <div class="col-xs-12 mt2">
        {!! $calendar !!}
    </div>
@endsection

@section('footer')
    @include('associate/modules/modal/add_job')
@endsection