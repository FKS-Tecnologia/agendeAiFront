@extends('appnouser')

@section('content')
    <ul class="nav nav-pills nav-justified nav-welcome">
        <li>
            <a href="{{ url('/associado') }}">
                Acesso ao lojista
            </a>
        </li>
        <li>
            <a href="{{ url('/auth/register') }}">
                Novo cadastro
            </a>
        </li>
    </ul>
@endsection