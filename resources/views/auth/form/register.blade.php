<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label class="col-md-4 control-label">Nome</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">E-mail</label>
        <div class="col-md-6">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">Senha</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">Confirme a senha</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password_confirmation">
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Cadastrar
            </button>
        </div>
    </div>
</form>