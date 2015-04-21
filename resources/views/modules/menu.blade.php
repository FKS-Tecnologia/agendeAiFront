<nav class="navbar navbar-default">
    <div class="container-fluid bg-orange pd-base">
        <div class="site-wrapper">
            <div class="pull-left">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo150.png') }}" />
                </a>
            </div>

            <div class="pull-right">
                <ul class="nav nav-tabs navbar-right mt-menu-admin">
                    <li><a href="{{ url('/associado/info') }}">Informações</a></li>
                    <li><a href="{{ url('/associado/funcionarios') }}">Funcionários</a></li>
                    <li><a href="{{ url('/associado/servicos') }}">Serviços</a></li>
                    <li><a href="{{ url('/associado/calendario') }}">Calendário</a></li>
                    <li><a href="{{ url('/associado/usuario') }}">Usuário</a></li>
                    <li><a href="{{ url('/auth/logout') }}">Sair</a></li>
                    <!--
                    @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}">Login</a></li>
                        <li><a href="{{ url('/auth/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    @endif
                            -->
                </ul>
            </div>
        </div>

    </div>
</nav>