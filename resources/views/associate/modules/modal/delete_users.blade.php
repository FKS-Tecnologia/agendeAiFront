<div class="modal fade" id="delete_user" tabindex="-1" role="dialog" aria-labelledby="deleteUser" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open() !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3>Deletar usuário</h3>
            </div>
            <div class="modal-body row">
                <div class="col-xs-12">
                    <h4 class="orange">Você deseja deletar o usuário Felipe ?</h4>
                    <p>Essa ação não pode ser revogada, tem certeza disto?</p>
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