<html>
<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>
<body>
    
    @if (session()->has('flash'))
    <div class="alert alert-info">
        {{ session('flash') }}
    </div>
    @endif
        
    @yield('content')

    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>
