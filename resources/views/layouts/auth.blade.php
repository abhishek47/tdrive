<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TDrive</title>
    
     <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">

    <script src="/js/modernizr-custom.js"></script>
</head>
<body>

    <div id="app">
       

            @include('flash::message')

                

                       @yield('content')

                    

            
        
    </div>

        
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

 

</body>
</html>