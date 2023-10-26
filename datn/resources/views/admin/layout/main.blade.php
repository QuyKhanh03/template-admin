<!DOCTYPE html>
<html
    lang="en"
    class="light-style layout-navbar-fixed layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../../assets/"
    data-template="vertical-menu-template"
>
<head>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <title>BeePets | {{ $title  ?? "Bảng điều khiển" }}</title>
    <meta
        name="description"
        content="Start your development with a Dashboard for Bootstrap 5"
    />
    <meta
        name="keywords"
        content="dashboard, bootstrap 5 dashboard, bootstrap 5 admin, bootstrap 5 design, bootstrap 5"
    />
    <link rel="canonical" href="https://1.envato.market/frest_admin"/>
    <script>

    </script>
    <link
        rel="icon"
        type="image/x-icon"
        href="https://demos.pixinvent.com/frest-html-admin-template/assets/img/favicon/favicon.ico"
    />
    @include('admin.layout.header')
    {{--push css--}}
    @stack('css')
</head>
<body>


<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        @include('admin.partials.app-menu')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            @include('admin.partials.top-bar')
            <!-- / Navbar -->
            <!-- Content wrapper -->
            @yield('content')
        </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>

    <div class="drag-target"></div>
</div>

@include('admin.layout.footer')

{{--push script--}}
@stack('script')
</body>

</html>

