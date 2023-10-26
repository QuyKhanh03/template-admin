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
    <title>Dashboard - Analytics | Frest - Bootstrap Admin Template</title>
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
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({"gtm.start": new Date().getTime(), event: "gtm.js"});
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src =
                "../../../../www.googletagmanager.com/gtm5445.html?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-5DDHKGP");
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
<noscript
>
    <iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
    ></iframe
    >
</noscript>

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

