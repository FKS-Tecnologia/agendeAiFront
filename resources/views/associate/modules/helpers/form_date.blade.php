{!! Form::label($name, $label.' : ') !!}
<div class="input-append input-group date" id="date-{{ $name }}" data-date="NOW" data-date-format="dd/mm/yyyy">
    {!! Form::text($name, $value, ['class'=>'form-control']); !!}
    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
</div>