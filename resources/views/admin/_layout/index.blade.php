<!DOCTYPE html>
@if (\Request::input('view') == 'popup' || \Request::header('view') == 'popup')
    @yield('content')
    @stack('scripts')
@elseif (\Request::header('view') == 'ajax')
    @hasSection('left-slidebar')
        @yield('left-slidebar')
    @endif
    <!-- Main content -->
    <div class="content-wrapper">
        <div class="content-inner">
            @yield('content')
        </div>
        <div class="btn-to-top btn-to-top-visible">
            <button type="button" class="btn btn-dark btn-icon rounded-pill"><i class="icon-arrow-up8"></i></button>
        </div>
        @stack('scripts')
    </div>
    <!-- Secondary sidebar -->
@else
    <html lang="vn">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">
        <meta name="csrf_token" content="{{ csrf_token() }}">

        <!-- Title Page-->
        <title>Admin</title>

        <!-- Fontfaces CSS-->
        <link href="/admins/css/font-face.css" rel="stylesheet" media="all">
        <link href="/admins/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="/admins/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="/admins/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <script>
            window.SERVICE_UPLOAD_FILE = "{{ env('SERVICE_UPLOAD_FILE', '/upload-file') }}";
            window.APP_URL = "{{ env('APP_URL', '') }}";
        </script>

        <!-- Bootstrap CSS-->
        <link href="/admins/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <!-- Vendor CSS-->
        <link href="/admins/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="/admins/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"
            media="all">
        <link href="/admins/vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="/admins/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="/admins/vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="/admins/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
        <!-- Main CSS-->
        <link href="/admins/css/theme.css" rel="stylesheet" media="all">
        <link href="/admins/css/customer.css" rel="stylesheet" media="all">
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.30.0/filepond.min.css" integrity="sha512-Wc3aWsMJwzrX33j4EwoRF7iEJ40FKYNj9pnh24IzN3hmkZ2LIjjHAJ3t1UsJu1iurA6NjzirbnUI7AsPDLa1VA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
        <style>
            table th {
                white-space: pre !important;
            }
        </style>
    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            @include('admin._layout.header')
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            @include('admin._layout.sidebar')

            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container" id="page-content">
                <!-- HEADER DESKTOP-->
                @include('admin._layout.header_desktop')
                <!-- HEADER DESKTOP-->

                <!-- MAIN CONTENT-->
                <div class="main-content">
                    @yield('content')
                </div>
                <!-- END MAIN CONTENT-->
                <!-- END PAGE CONTAINER-->
            </div>

        </div>

        <!-- Jquery JS-->
        <script src="/admins/vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="/admins/vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="/admins/vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="/admins/vendor/slick/slick.min.js"></script>
        <script src="/admins/vendor/wow/wow.min.js"></script>
        <script src="/admins/vendor/animsition/animsition.min.js"></script>
        <script src="/admins/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <script src="/admins/vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="/admins/vendor/counter-up/jquery.counterup.min.js"></script>
        <script src="/admins/vendor/circle-progress/circle-progress.min.js"></script>
        <script src="/admins/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="/admins/vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="/admins/vendor/select2/select2.min.js"></script>

        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.0/tinymce.min.js" integrity="sha512-yNGv3BH/e9YlJDiGWZL7jEpr64vNvwRBr0JYSWugabgB5FxZPUQD0N3eT+ALsf1m6n4Qzz5ijH1tvCJXwR1qxg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}


        <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

        <script src="/admins/js/filepond.js"></script>
        <script src="/admins/vendor/tinymce_1/tinymce.min.js"></script>
        {{-- <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> --}}

        <script src="/admins/js/main.js"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                }
            });
            $(document).ajaxStart(function() {
                $("#page-content").LoadingOverlay("show");
            });
            $(document).ajaxStop(function() {
                $("#page-content").LoadingOverlay("hide");
            });
        </script>

        <script>
            $(document).ready(function() {
                let _current = window.location.href;
                $('.js-sub-list').css('display', 'none')
                $(".navbar__list").find('li').removeClass('active');
                $(".navbar__list").find('a').removeClass('open');
                $(".navbar__list").find(`a[href='${_current}']`).each(function(item) {
                    $(this).closest('li').addClass('active');
                    let _ul = $(this).closest('.js-sub-list');
                    if (_ul.length > 0) {
                        $(_ul).css('display', 'block')
                        $(_ul).siblings('.a').addClass('open');
                    }

                })
            });
        </script>
        <script src="/admins/js/customer.js?v=1.1"></script>
        @stack('scripts')
    </body>

    </html>
    <!-- end document-->
@endif
