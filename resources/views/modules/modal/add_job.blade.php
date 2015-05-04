<div class="modal fade" id="add_job" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open() !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3>Cadastrar nova tarefa</h3>
            </div>
            <div class="modal-body row">

                <div class="col-xs-12">

                    <div class="form-group">
                        {!! Form::label('name', 'Nome:') !!}
                        {!! Form::select('name', $services, null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('employ', 'Funcionário:') !!}
                        {!! Form::select('employ', $services, null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('comment', 'Comentário:') !!}
                        {!! Form::textarea('comment', null, ['class'=>'form-control', 'rows' => '5']) !!}
                    </div>
                </div>


                <div class="col-xs-4">
                    {!! Form::label('date_init', 'De: ') !!}
                    <div class="input-append input-group date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                        {!! Form::text('date_init', null, ['class'=>'form-control']); !!}
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                </div>
                <div class="col-xs-4 form-group">
                    {!! Form::label('time_init', 'Hora de início') !!}
                    <div class="input-group bootstrap-timepicker">
                        {!! Form::text('time_init', null, ['class'=>'form-control time']) !!}
                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                    </div>
                </div>
                <div class="col-xs-4 form-group">
                    {!! Form::label('time_end', 'Hora de término') !!}
                    <div class="input-group bootstrap-timepicker">
                        {!! Form::text('time_init', null, ['class'=>'form-control time']) !!}
                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Adicionar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>