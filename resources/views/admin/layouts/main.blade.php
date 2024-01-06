<!DOCTYPE html>
<html lang="en" data-theme="light" data-sidebar-behaviour="fixed" data-navigation-color="inverted" data-is-fluid="true">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="BikinDingin" name="Arsan Kumala Jaya">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/assets/css/theme.bundle.css" id="stylesheetLTR">
    <link rel="stylesheet" href="/assets/css/theme.rtl.bundle.css" id="stylesheetRTL">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">

    <!-- no-JS fallback -->
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">
    </noscript>

    @include('admin.layouts.theme')
    
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" sizes="any">

    <!-- Page Title -->
    <title>@yield('title') | BikinDingin</title>
</head>

<body>

    <!-- THEME CONFIGURATION -->
    <script>
    let themeAttrs = document.documentElement.dataset;

    for (let attr in themeAttrs) {
        if (localStorage.getItem(attr) != null) {
            document.documentElement.dataset[attr] = localStorage.getItem(attr);

            if (theme === 'auto') {
                document.documentElement.dataset.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                    e.matches ? document.documentElement.dataset.theme = 'dark' : document.documentElement.dataset.theme = 'light';
                });
            }
        }
    }
    </script>
    <!-- NAVIGATION -->
    @include('admin.layouts.navbar')

    <!-- MAIN CONTENT -->
    <main>

        <!-- HEADER -->
        @include('admin.layouts.header')
        <div class="container-fluid">
            @yield('container')
        </div>
        <!-- / .container-fluid -->

        <!-- Footer -->
        @include('admin.layouts.footer')

    </main>
    <!-- / main -->

    <!-- JAVASCRIPT-->
    <!-- Theme JS -->
    <script src="/assets/js/theme.bundle.js"></script>
</body>
</html>

