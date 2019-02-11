<!DOCTYPE html>
<html dir="ltr" lang="{{ app()->getLocale() }}">
<head>
    @include('BioNetPos.includes.head')
</head>
@php

    $sTitlePage = empty($sTitlePage) ? '' : $sTitlePage;
    $asSubMenu = empty($asSubMenu) ? array() : $asSubMenu;
    $asMenuTitulo = empty($asMenuTitulo) ? array() : $asMenuTitulo;
    $esLogIn = empty($esLogIn) ? false : $esLogIn;
    $navbarbg = empty(Session::get("con_color_layout")) ? "skin1" : Session::get("con_color_layout");
    $sidebarbg = "skin6";// empty(Session::get("con_color_layout")) ? "skin1" : Session::get("con_color_layout");

@endphp
<body>
    @include('BioNetPos.includes.preloader')

    @include('BioNetPos.includes.modal')

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    @if($esLogIn == false)
      <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @includeIf('BioNetPos.includes.header', ['asSubMenu' => $asSubMenu, 'asMenuTitulo' => $asMenuTitulo])
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="{{ $sidebarbg }}">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                @include('BioNetPos.includes.sidebar')
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            @includeIf('BioNetPos.includes.breadcrumb', ['sTitlePage' => $sTitlePage])
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                Todos los derechos reservados por <a href="https://bionet.com">bio-Net</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    @else
      @yield('content')
    @endif
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel  -->
    <!-- ============================================================== -->

    <!-- @ include ('BioNetPos.includes.customizer') -->

    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    @include('BioNetPos.includes.page-js')
</body>

</html>
