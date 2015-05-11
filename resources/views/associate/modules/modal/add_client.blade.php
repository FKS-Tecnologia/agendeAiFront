<div class="modal fade" id="add_client" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open() !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3>Cadastrar novo cliente</h3>
            </div>
            <div class="modal-body row">
                <div role="tabpanel" class="col-xs-12">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#ainfo" aria-controls="einfo" role="tab" data-toggle="tab">Informações</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content mt2">
                        <div role="tabpanel" class="tab-pane active" id="ainfo">
                            <div class="form-group">
                                {!! HForm::input('pet_name', 'Nome do Pet') !!}
                            </div>
                            <div class="form-group">
                                {!! HForm::select('pet_size', 'Porte do pet', $size) !!}
                            </div>
                            <div class="form-group">
                                {!! HForm::input('name', 'Responsável') !!}
                            </div>
                            <div class="form-group">
                                {!! HForm::email('email', 'E-mail') !!}
                            </div>
                            <div class="form-group">
                                {!! HForm::input('address', 'Endereço') !!}
                            </div>
                            <div class="row">
                            <div class="form-group col-xs-6">
                                {!! HForm::phone('phone', 'Telefone') !!}
                            </div>
                            <div class="form-group col-xs-6">
                                {!! HForm::phone('cellular', 'Celular') !!}
                            </div>
                            </div>
                            <div class="form-group">
                                {!! HForm::textarea('description', 'Descrição') !!}
                            </div>
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