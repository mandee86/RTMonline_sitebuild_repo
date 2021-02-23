<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>RTM oline</title>
        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
         <!-- <link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet"> -->
        <link href="/css/app.css" rel="stylesheet">

        <!-- Favicon -->
        <!-- <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon//apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon//apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon//apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon//apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon//apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon//apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon//apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon//apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon//android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon//favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon//favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon//favicon-16x16.png">
        <link rel="manifest" href="/img/favicon//manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/img/favicon//ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff"> -->

    </head>
    <body>
        <div id="site-wrapper">
            <!-- #site-header -->
            @include('layouts._header')
            <!-- end #site-header -->

            <!-- #site-content -->
            <main id="site-content">
                @yield('content')
            </main>
            <!-- end #site-content -->
            
            <!-- #site-footer -->
            @include('layouts._footer')
            <!-- end #site-footer -->
        </div>

        <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
        <script src="/js/jquery-ellipsis-master/dist/jquery.ellipsis.min.js"></script>
        <!-- <script src="/js/moment.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>        <!-- <script src="/js/bootstrap-datetimepicker.min.js" ></script> -->
        <!-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script src="/js/app.js"></script>
    </body>
</html>
