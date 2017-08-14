<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <meta name="turbolinks-cache-control" content="no-cache">

    <title>TDrive</title>
    
     <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <script src="/js/modernizr-custom.js"></script>


</head>
<body>

    <div id="app">
        <div id="ui" class="ui">
            
            @include('flash::message')

            @include('partials._header')

            @include('partials._sidebar')

            <!--main content start-->
            <div id="content" class="ui-content">
                <div class="ui-content-body">

                    <div class="ui-container">

                       @yield('content')

                    </div>

                   @include('partials._sidebar__right')

                </div>
            </div>
            <!--main content end-->

            @include('partials._footer')

        </div>

    </div>

    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>    

    <script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>

        

</body>
</html>