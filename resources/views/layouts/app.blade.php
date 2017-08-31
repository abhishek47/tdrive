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
<body class="body-light">

    <div id="app">
        <div id="ui" class="ui">
            
            @include('flash::message')

            @include('partials._header')

            @include('partials._sidebar')

            <!--main content start-->
            <div id="content" class="ui-content">

               <!--page title and breadcrumb start -->
                <div class="page-head-wrap">
                    <h4 class="margin0">
                       <b>Branch - {{ $branch->name }}</b> 
                    </h4>
                    <div class="breadcrumb-right">
                        <button class="btn btn-success" id="update-company" class="hidden-xs">Quick Add</button>
                    </div>
                </div>
                

                 @yield('content')

                   

                   @include('partials._sidebar__right')

               
            </div>
            <!--main content end-->

            @include('partials._footer')

        </div>

    </div>

    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>    

    <script src="{{ asset('js/toastr.min.js') }}"></script>

    <script src="{{ asset('js/select2.min.js') }}"></script>

    <!-- Bootstrap Date Range Picker Dependencies -->
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker.js') }}"></script>


    <script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
     setTimeout(function() {  toastr.clear(); }, 3000);
    </script>

    @yield('js')
        

</body>
</html>