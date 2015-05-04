<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3>Editar estabelecimento</h3>
            </div>
            <div class="modal-body col-xs-12">
                {!! Form::open() !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nome:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Descrição:') !!}
                    {!! Form::textarea('description', null, ['class'=>'form-control', 'rows' => '5']) !!}
                </div>

                <hr/>

                <div class="row mt1">
                    <div class="col-xs-6 form-group">
                        {!! Form::label('time_init', 'Abre às') !!}
                        <div class="input-group bootstrap-timepicker">
                            {!! Form::text('time_init', null, ['class'=>'form-control time']) !!}
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                    </div>
                    <div class="col-xs-6 form-group">
                        {!! Form::label('time_end', 'Fecha às') !!}
                        <div class="input-group bootstrap-timepicker">
                            {!! Form::text('time_end', null, ['class'=>'form-control time']) !!}
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                    </div>
                </div>
                {!! Form::label('time_end', 'Escolha os dias da semana') !!}
                <nav class="navbar navbar-default">

                    <div class="container-fluid text-center">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">Domingo</a>
                        </div>
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">Segunda</a>
                        </div>
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">Terça</a>
                        </div>
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">Quarta</a>
                        </div>
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">Quinta</a>
                        </div>
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">Sexta</a>
                        </div>
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">Sabádo</a>
                        </div>
                    </div><!-- /.container-fluid -->
                </nav>

                <div class="form-group">
                    {!! Form::label('holiday', 'Trabalha em feriados?:') !!}
                    {!! Form::checkbox('holiday', 1, 1, ['class'=>'form-control switch']) !!}
                </div>
                {!! Form::close() !!}
            </div>



            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Editar</button>
            </div>
        </div>
    </div>
</div>