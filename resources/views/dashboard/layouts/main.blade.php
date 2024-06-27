<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko martin punya ni bos</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/dist/img/favicon.png">
    <!-- Global Styles(used by all pages) -->
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="/assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
    <!-- Third party Styles(used by this page) -->
    <link href="/assets/plugins/datatables/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- App css -->
    <link href="/assets/dist/css/app.min.css" rel="stylesheet">
    <!-- Start Your Custom Style Now -->
    <link href="/assets/dist/css/style.css" rel="stylesheet">
</head>

<body class="fixed sidebar-mini">
    <div class="wrapper">
        @include('dashboard.partials.sidebar')
        <div class="content-wrapper">
            <div class="main-content">
                @include('dashboard.partials.header')
                <div class="body-content mt-5">
                    <div class="decoration blur-2"></div>
                    <div class="decoration blur-3"></div>
                    @yield('content')
                </div>
            </div>
            @include('dashboard.partials.footer')
            <div class="overlay"></div>
        </div>
        <!--/.wrapper-->
    </div>
    <!-- Global script(used by all pages) -->
    <script src="/assets/plugins/jQuery/jquery.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- Third Party Scripts(used by this page) -->
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatables/dataTables.bootstrap5.min.js"></script>
    <!-- Page Scripts(used by all page) -->
    <script src="/assets/dist/js/app.min.js"></script>
    <!-- Page Active Scripts(used by this page) -->
    <script src="/assets/dist/js/dashboard.js"></script>
</body>

</html>
