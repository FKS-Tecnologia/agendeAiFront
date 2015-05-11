<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3>Editar estabelecimento</h3>
            </div>

            <div class="modal-body row">
                <div role="tabpanel" class="col-xs-12">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#iinfo" aria-controls="iinfo" role="tab" data-toggle="tab">Informações</a></li>
                        <li role="presentation"><a href="#ihours" aria-controls="ihours" role="tab" data-toggle="tab">Horários</a></li>
                        <li role="presentation"><a href="#iholy" aria-controls="iholy" role="tab" data-toggle="tab">Feriados</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content mt2">

                        <div role="tabpanel" class="tab-pane active" id="iinfo">
                            <div class="row">
                                <div class="form-group col-xs-6">
                                    {!! HForm::input('name', 'Responsável') !!}
                                </div>
                                <div class="form-group col-xs-6">
                                    {!! HForm::email('email', 'E-mail') !!}
                                </div>
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
                                {!! HForm::file('logo', 'Logotipo') !!}
                            </div>

                            <div class="form-group">
                                {!! HForm::textarea('description', 'Descrição') !!}
                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane" id="ihours">

                            <div class="row">
                                <div class="col-xs-12">
                                    {!! HForm::weeks('date_week', 'Dias em funcionamento') !!}
                                </div>

                                <div class="col-xs-6 form-group mt2">
                                    {!! HForm::time('time_init', 'Horário de inicio') !!}
                                </div>
                                <div class="col-xs-6 form-group mt2">
                                    {!! HForm::time('time_end', 'Horário de término') !!}
                                </div>
                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane" id="iholy">
                            <div class="row">
                                {!! App\Library\Calendar::holyday_choose() !!}
                            </div>
                        </div>
                    </div>

                </div>

            </div>




            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Editar</button>
            </div>
        </div>
    </div>
</div>