<div class="modal fade" id="edit_client" tabindex="-1" role="dialog" aria-labelledby="editClient" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open() !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3>Editar o cadastro de Felipe Klerk</h3>
            </div>
            <div class="modal-body row">
                <div role="tabpanel" class="col-xs-12">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#einfo" aria-controls="einfo" role="tab" data-toggle="tab">Informações</a></li>
                        <li role="presentation"><a href="#ehistory" aria-controls="ehistory" role="tab" data-toggle="tab">Histórico</a></li>
                        <li role="presentation"><a href="#egastos" aria-controls="egastos" role="tab" data-toggle="tab">Relatório</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content mt2">
                        <div role="tabpanel" class="tab-pane active" id="einfo">
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
                        <div role="tabpanel" class="tab-pane" id="ehistory">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Serviço</th>
                                    <th>Data</th>
                                    <th>Gasto</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Banho</td>
                                    <td>10/10/2014</td>
                                    <td>R$ 10,20</td>
                                </tr>
                                <tr>
                                    <td>Banho</td>
                                    <td>10/10/2014</td>
                                    <td>R$ 10,20</td>
                                </tr>
                                <tr>
                                    <td>Banho</td>
                                    <td>10/10/2014</td>
                                    <td>R$ 10,20</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="well">
                                A tabela monstra os últimos 10 gastos do cliente
                                {!! Html::link('associado/clientes/', 'Ver mais detalhes', ['class'=>'btn btn-info btn-xs']) !!}
                            </div>


                        </div>
                        <div role="tabpanel" class="tab-pane" id="egastos">
                            <div class="mt2 row">
                                <div class="col-xs-6">
                                    <h4>Total agendamentos</h4>
                                    <p class="alert alert-info mt1">15 vezes</p>
                                </div>
                                <div class="col-xs-6">
                                    <h4>Total gasto</h4>
                                    <p class="alert alert-success mt1">R$ 255,30</p>
                                </div>
                            </div>

                            <h4>Serviços mais utiliza pelo Felipe</h4>
                            <table class="table table-striped table-bordered">
                                <tbody>
                                <tr>
                                    <td>Banho</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Tosa</td>
                                    <td>3</td>
                                </tr>
                                </tbody>
                            </table>
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