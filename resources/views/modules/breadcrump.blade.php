<ol class="breadcrumb">
    <li>
        {!! Html::link('/', 'Home') !!}
    </li>
    @if ($links)
        @foreach ($links as $key=>$link)
            <li>
                {!! Html::link($link, $key) !!}
            </li>
        @endforeach
    @endif
</ol>