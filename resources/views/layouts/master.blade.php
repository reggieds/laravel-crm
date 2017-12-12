<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | {{ config('app.name') }}</title>

    {{--  sheets  --}}
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/navbar.css">

</head>
<body>
    
        <div id="wrapper">
            <div class="overlay"></div>
    
            @include('layouts.navbar')

            <!-- Page Content -->
            <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <h3 class="page-header">{{ $title }}</h3>  
                            
                            @include('layouts.flash')
                    
                            @yield('content')
                        </div>
                    </div>

                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

    @section('scripts')
        <script src="/js/app.js" type="text/javascript"></script>
    @show
</body>
</html>