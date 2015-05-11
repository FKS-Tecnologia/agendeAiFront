<div class="modal fade" id="delete_client" tabindex="-1" role="dialog" aria-labelledby="deleteClient" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open() !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3>Deletar cliente</h3>
            </div>
            <div class="modal-body row">
                <div class="col-xs-12">
                    <h4 class="orange">Você deseja deletar o cliente Felipe Klerk ?</h4>
                    <p>Isso irá apagar todos os agendamentos do Felipe em sua loja, tem certeza disto?</p>
                </div>
            </div>



            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Deletar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>