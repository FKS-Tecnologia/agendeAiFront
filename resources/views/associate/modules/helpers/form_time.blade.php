{!! Form::label($name, $label) !!}
<div class="input-group bootstrap-timepicker">
    <span>
        {!! Form::text($name, $value, ['class'=>'form-control time', 'data-show-meridian'=>$showMeridian]) !!}
    </span>
    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
</div>