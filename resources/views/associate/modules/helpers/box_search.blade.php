{!! Form::open(); !!}
    {!! Form::label('s', 'Pesquisar por') !!}
    <div class="input-append input-group" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
        {!! Form::text('s', null, ['class'=>'form-control']) !!}
        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
    </div>
{!! Form::close(); !!}