<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- Leaflet CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    {{-- Google Font: Source Sans Pro --}}
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('/assets/dist/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">

    {{-- Font Awesome Icons --}}
    <link rel="stylesheet" href="{{ asset('/assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    {{-- Theme style --}}
    <link rel="stylesheet" href="{{ asset('/assets/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css?v=0.001') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/home.css') }}">

    {{-- DataTables --}}
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/rowgroup/1.4.0/css/rowGroup.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap4.min.css" rel="stylesheet">

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/9c94b38548.js" crossorigin="anonymous"></script>

    {{-- Highcharts --}}
    <script src="https://code.highcharts.com/highcharts.js"></script>

    {{-- Custom CSS  --}}
    <style>
        .dropdown-menu {
            border-left: 0.01px solid rgba(0, 0, 0, 0.05);
            border-right: 0.01px solid rgba(0, 0, 0, 0.05);
            border-bottom: 0.01px solid rgba(0, 0, 0, 0.05);
            border-top: 0.01px solid rgba(0, 0, 0, 0.05);
            box-shadow: none;
        }

        .dropdown-menu li:hover {
            background-color: rgba(41, 52, 47, 0.05);
        }

        .dropdown-menu form li:hover {
            background-color: rgba(41, 52, 47, 0.05);
        }


        @media screen and (max-width: 768px) {
            .dropdown-menu form li i {
                margin-left: -15px;
            }

            .navbar-collapse {
                /*background: rgba(0, 0, 0, 0.05);*/
                padding-left: 25px;
                padding-right: 25px;
            }

            .dropdown-menu {
                background: radial-gradient(circle at top left, #ffffff, #e5e5e5);

            }

            .navbar-nav li a {
                text-align: center;
            }

            .navbar-nav li button {
                text-align: center;
            }

        }

        .dropdown-item:hover {
            color: #0c8a4f;
            background-color: rgba(41, 52, 47, 0.05);
        }

        form li button:hover {
            color: #0c8a4f;
            background-color: rgba(41, 52, 47, 0.05);
        }

        .cursor-default {
            cursor: default !important;

        }

        .cursor-default:hover {
            cursor: default !important;
            color: #192f59 !important;
            background-color: white !important;
        }
    </style>
    
</head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <div class="atas">
            <x-navbar/>
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <x-header>
                {{ $header }}
            </x-header>

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    {{ $slot }}
                </div>
            </div>
            
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer style="margin-top: auto; padding-top: 0;">
            <x-footer/>
        </footer>

    </div>

</body>
</html>
