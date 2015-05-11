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
                        {!! HForm::select('name', 'Nome', $services) !!}
                    </div>
                    <div class="form-group">
                        {!! HForm::select('size', 'Porte', $sizes) !!}
                    </div>
                    <div class="form-group">
                        {!! HForm::select('client', 'Cliente', $clients) !!}
                    </div>
                    <div class="form-group">
                        {!! HForm::textarea('comment', 'Comentário') !!}
                    </div>
                </div>


                <div class="col-xs-4">
                    {!! HForm::date('date_init', 'Dia') !!}
                </div>
                <div class="col-xs-4 form-group">
                    {!! HForm::time('time_init', 'Horário de inicio') !!}
                </div>
                <div class="col-xs-4 form-group">
                    {!! HForm::time('time_end', 'Horário de término') !!}
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