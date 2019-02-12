@stack('scripts')
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/app.init.js') }}"></script>
    <script src="{{ asset('js/app-style-switcher.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <!--This page JavaScript -->
    <!--script src="{{ asset('assets/extra-libs/jquery-sessiontimeout/jquery.sessionTimeout.min.js') }}"></script-->
    <!--script src="{{ asset('assets/extra-libs/jquery-sessiontimeout/session-timeout-init.js') }}"></script-->

    <!--This page plugins -->
    <script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    <!--script src="{{ asset('js/pages/datatable/datatable-api.init.js') }}"></script-->

    <script type="text/javascript" src="{{ asset('assets/extra-libs/handlebars/handlebars-v4.0.12.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/extra-libs/DataTables/DataTables-1.10.16/extensions/FixedHeader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/extra-libs/DataTables/DataTables-1.10.16/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/numero.js')}}"></script>



@yield('js_content')
