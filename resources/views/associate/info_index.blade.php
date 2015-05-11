@extends('app')

@section('content')
    <div class="col-xs-12">
        {!! App\Library\Breadcrump::render($breads) !!}
    </div>


    <div class="col-xs-5">
        <h1>{{ $title }}</h1>
    </div>


    <div class="col-xs-3 col-xs-offset-4 text-right">
        {!! Html::link('#add', 'Editar estabelecimento', ['class'=>'btn btn-primary', 'data-toggle' => "modal", 'data-target'=>"#add_user"]) !!}
    </div>



    <div class="col-xs-12 mt2">
        <div class="well pull-left">
            <div class="col-xs-3">
                {!! Html::image(asset('images/logo150.png')) !!}
            </div>
            <div class="col-xs-9">
                <h3 class="mb2">Agende ai</h3>
                <strong>Endereço: </strong>Rua nossa senhora de nazare, 127<br/>
                <strong>Telefone: </strong>(11) 97167-0302<br/>
                <strong>Responsável: </strong>Felipe Signorini<br/>
                <strong>Email de contato: </strong>felipeklerk@yahoo.com.br<br/>
                <strong>Aberto: </strong>De segunda à sexta das 8:00 às 22:00<br/>
                <hr class="mt2"/>
                <p class="mt2">
                    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                </p>

                <div class="mt5 row">
                    <div class="col-xs-6">
                        <h4>Total de tarefas</h4>
                        <p class="alert alert-info mt1">255</p>
                    </div>
                    <div class="col-xs-6">
                        <h4>Total de agendamentos</h4>
                        <p class="alert alert-success mt1">150</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('associate/modules/modal/edit_bussiness')
@endsection