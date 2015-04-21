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
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

    @include('modules/footer')
    @yield('footer')
</body>
</html>
