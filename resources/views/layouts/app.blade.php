<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon.png" />
        <link rel="icon" type="image/png" href="../img/favicon.png" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Material Dashboard by Creative Tim</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!-- Bootstrap core CSS     -->
        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" />

        <!--  Material Dashboard CSS    -->
        <link href="{{ URL::asset('css/material-dashboard.css') }}" rel="stylesheet" />

        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="{{ URL::asset('css/demo.css') }}" rel="stylesheet" />

        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    </head>

    <body>

        <div class="wrapper">

            @include('layouts.sidebar')


            <div class="main-panel">

                @include('layouts.navbar')

                <div class="content">
                    @yield('content')
                </div>

                @include('layouts.footer')
            </div>
        </div>

    </body>

    <!--   Core JS Files   -->

    <script src="{{ URL::asset('js/jquery-3.1.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/material.min.js') }}" type="text/javascript"></script>


    <!--  Charts Plugin -->
    <script src="{{ URL::asset('js/chartist.min.js') }}" type="text/javascript"></script>


    <!--  Notifications Plugin    -->
    <script src="{{ URL::asset('js/bootstrap-notify.js') }}" type="text/javascript"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Material Dashboard javascript methods -->
    <script src="{{ URL::asset('js/material-dashboard.js') }}" type="text/javascript"></script>

    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ URL::asset('js/demo.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
    </script>

</html>
