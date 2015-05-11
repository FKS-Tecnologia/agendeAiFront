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
                        {!! HForm::select('name', 'Nome', $services) !!}
                    </div>
                    <div class="form-group">
                        {!! HForm::select('pet_size', 'Porte do pet', $sizes) !!}
                    </div>
                    <div class="form-group">
                        {!! HForm::price('price', 'Preço') !!}
                    </div>
                    <div class="form-group">
                        {!! HForm::textarea('description', 'Descrição') !!}
                    </div>
                    <div class="form-group">
                        {!! HForm::time('time', 'Tempo', null, 'false') !!}
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