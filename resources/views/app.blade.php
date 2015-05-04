<!DOCTYPE html>
<html lang="en">
<head>
	@include('modules/header')
    @yield('header')
</head>
<body>
	@include('modules/menu')

    <div class="site-wrapper">
        <div class="row">
	    @yield('content')
        </div>
    </div>

	<!-- Scripts -->
    {!! Html::script('https://code.jquery.com/jquery-2.1.4.min.js') !!}
    {!! Html::script('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js') !!}
    {!! Html::script(asset('/js/boostrap_datapicker.js')) !!}
    {!! Html::script(asset('/js/boostrap_timepicker.js')) !!}
    {!! Html::script(asset('/js/boostrap_switch.js')) !!}
    {!! Html::script(asset('/js/main.js')) !!}

    @include('modules/footer')
    @yield('footer')
</body>
</html>
