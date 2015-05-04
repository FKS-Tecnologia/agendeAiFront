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


    <div class="row pull-left">
        <div class="col-xs-2 col-xs-offset-4 text-right">
            {!! Form::label('jobs', 'Por tarefa') !!}
            {!! Form::select('jobs', $services, null, ['class'=>'form-control']) !!}
        </div>

        <div class="col-xs-6 text-right">
            {!! Form::open(); !!}
                <div class="col-xs-6">
                    {!! Form::label('date_init', 'De: ') !!}
                    <div class="input-append input-group date" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                        {!! Form::text('date_init', null, ['class'=>'form-control']); !!}
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                </div>
                <div class="col-xs-6">
                    {!! Form::label('date_end', 'até ') !!}
                    <div class="input-append input-group date" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                        {!! Form::text('date_end', null, ['class'=>'form-control date']); !!}
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>

                </div>
            {!! Form::close(); !!}
        </div>
    </div>



    <div class="col-xs-12 mt2">
        {!! $calendar !!}
    </div>
@endsection

@section('footer')
    @include('modules/modal/add_job')
@endsection