<div class="modal fade" id="add_employ" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open() !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3>Cadastrar novo funcionário</h3>
            </div>
            <div class="modal-body row">
                <div role="tabpanel" class="col-xs-12">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#einfo" aria-controls="einfo" role="tab" data-toggle="tab">Informações</a></li>
                        <li role="presentation"><a href="#ecalendar" aria-controls="profile" role="tab" data-toggle="tab">Horários</a></li>
                        <li role="presentation"><a href="#eservices" aria-controls="messages" role="tab" data-toggle="tab">Serviços</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="einfo">
                            <div class="form-group">
                                {!! Form::label('name', 'Nome:') !!}
                                {!! Form::select('name', $services, null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', 'Email:') !!}
                                {!! Form::text('email', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('address', 'Endereço:') !!}
                                {!! Form::text('address', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="row">
                            <div class="form-group col-xs-6">
                                {!! Form::label('phone', 'Telefone:') !!}
                                {!! Form::text('phone', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group col-xs-6">
                                {!! Form::label('phone2', 'Celular:') !!}
                                {!! Form::text('phone2', null, ['class'=>'form-control']) !!}
                            </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('description', 'Descrição:') !!}
                                {!! Form::textarea('description', null, ['class'=>'form-control', 'rows' => '5']) !!}
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="ecalendar">...</div>
                        <div role="tabpanel" class="tab-pane" id="eservices">...</div>
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