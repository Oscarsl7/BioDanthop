<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <title>@yield('descripcion_meta','') [BioNet]</title>

    <meta property="og:title" content="@yield('titulo_meta', 'BioNet')"/>
    <meta property="og:type" content="article" />
    <meta property="og:description" content="@yield('descripcion_meta','BioNet')"/>
    <meta property="og:image" content="#"/>
    <meta property="og:url" content="bionet.com"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @stack('css')
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- This page plugin CSS -->
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/extra-libs/DataTables/DataTables-1.10.16/extensions/FixedHeader/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/extra-libs/DataTables/DataTables-1.10.16/extensions/Responsive/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <!--link href="{{ asset('assets/extra-libs/DataTables/DataTables-1.10.16/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" /-->

    <style>
    td.details-control {
        background: url("{{ asset('js/pages/datatable/details_open.png') }}") no-repeat center center;
        cursor: pointer;
    }

    tr.shown td.details-control {
        background: url("{{ asset('js/pages/datatable/details_close.png') }}") no-repeat center center;
    }
    </style>

    @yield('css_content')
