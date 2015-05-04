<div class="modal fade" id="add_service" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open() !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3>Cadastrar novo serviço</h3>
            </div>
            <div class="modal-body row">
                <div class="col-xs-12">
                    <div class="form-group">
                        {!! Form::label('name', 'Nome:') !!}
                        {!! Form::select('name', $services, null, ['class'=>'form-control']) !!}
                    </div>
                    <hr/>
                    <div class="form-group">
                        {!! Form::label('description', 'Descrição:') !!}
                        {!! Form::textarea('description', null, ['class'=>'form-control', 'rows' => '5']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('time', 'Tempo:') !!}
                        <div class="input-group bootstrap-timepicker">
                            {!! Form::text('time', null, ['class'=>'form-control time', 'data-show-meridian'=>'false', 'data-default-time'=>'0:15']) !!}
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
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