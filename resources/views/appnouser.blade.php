<html>
<head>
    <title>Laravel</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AgendeAI</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('header')
</head>
<body class="bg-orange">
<div class="container">
    <div class="content text-center row">
        <div class="col-xs-12" style="margin-top:50px;">
            <img src="{{ asset('images/logo.png') }}" />
        </div>

        <div class="col-xs-12"  style="margin-top:10px;">
            @yield('content')
        </div>
    </div>
</div>

@yield('footer')
</body>
</html>