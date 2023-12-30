<!DOCTYPE html>
<html lang="en" data-theme="light" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="Webinning" name="author">
        
            <!-- Theme CSS -->
            <link rel="stylesheet" href="{{ asset('/') }}/assets/css/theme.bundle.css" id="stylesheetLTR">
            <link rel="stylesheet" href="{{ asset('/') }}/assets/css/theme.rtl.bundle.css" id="stylesheetRTL">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">
        <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">
        
        <!-- no-JS fallback -->
        <noscript>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">
        </noscript>
        
        <script>
         // Theme switcher
        
            let themeSwitcher = document.getElementById('themeSwitcher');
        
            const getPreferredTheme = () => {
                if (localStorage.getItem('theme') != null) {
                    return localStorage.getItem('theme');
                }
        
                return document.documentElement.dataset.theme;
            };
        
            const setTheme = function (theme) {
                if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    document.documentElement.dataset.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
                } else {
                    document.documentElement.dataset.theme = theme;
                }
        
                localStorage.setItem('theme', theme);
            };
        
            const showActiveTheme = theme => {
                const activeBtn = document.querySelector(`[data-theme-value="${theme}"]`);
        
                document.querySelectorAll('[data-theme-value]').forEach(element => {
                    element.classList.remove('active');
                });
        
                activeBtn && activeBtn.classList.add('active');
        
             // Set button if demo mode is enabled
                document.querySelectorAll('[data-theme-control="theme"]').forEach(element => {
                    if (element.value == theme) {
                        element.checked = true;
                    }
                });
            };
        
            function reloadPage() {
                window.location = window.location.pathname;
            }
        
        
            setTheme(getPreferredTheme());
        
            if(typeof themeSwitcher != 'undefined') {
                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                    if(localStorage.getItem('theme') != null) {
                        if (localStorage.getItem('theme') == 'auto') {
                            reloadPage();
                        }
                    }
                });
        
                window.addEventListener('load', () => {
                    showActiveTheme(getPreferredTheme());
                    
                    document.querySelectorAll('[data-theme-value]').forEach(element => {
                        element.addEventListener('click', () => {
                            const theme = element.getAttribute('data-theme-value');
        
                            localStorage.setItem('theme', theme);
                            reloadPage();
                        })
                    })
                });
            }
        </script>
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('/') }}assets/img/logo.ico" sizes="any">
        
            <!-- Demo script -->
            <script>
                var themeConfig = {
                    theme: JSON.parse('"light"'),
                    isRTL: JSON.parse('false'),
                    isFluid: JSON.parse('true'),
                    sidebarBehaviour: JSON.parse('"fixed"'),
                    navigationColor: JSON.parse('"inverted"')
                };
                
                var isRTL = localStorage.getItem('isRTL') === 'true',
                    isFluid = localStorage.getItem('isFluid') === 'true',
                    theme = localStorage.getItem('theme'),
                    sidebarSizing = localStorage.getItem('sidebarSizing'),
                    linkLTR = document.getElementById('stylesheetLTR'),
                    linkRTL = document.getElementById('stylesheetRTL'),
                    html = document.documentElement;
        
                if (isRTL) {
                    linkLTR.setAttribute('disabled', '');
                    linkRTL.removeAttribute('disabled');
                    html.setAttribute('dir', 'rtl');
                } else {
                    linkRTL.setAttribute('disabled', '');
                    linkLTR.removeAttribute('disabled');
                    html.removeAttribute('dir');
                }
            </script>
        
        <!-- Page Title -->
        <title>@yield('title') | BikinDingin</title>
    </head>

    <body class="d-flex align-items-center bg-light-green m-5">

        <!-- THEME CONFIGURATION -->
        <script>
            let themeAttrs = document.documentElement.dataset;
        
            for(let attr in themeAttrs) {
                if(localStorage.getItem(attr) != null) {
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

        <!-- MAIN CONTENT -->
        <main class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 col-lg-6 px-lg-4 px-xl-8 d-flex flex-column vh-100 py-6">

                    <!-- Brand -->
                    <a class="navbar-brand mb-auto" href="/">
                        <img src="{{ asset('/') }}assets/img/bikin-dingin.png" class="navbar-brand-img logo-light logo-large" alt="..." width="165" height="45">
                    </a>

                    <div>
                        <!-- Title -->
                        <h1 class="mb-2">
                            @yield('title')
                        </h1>

                        <!-- Subtitle -->
                        <p class="text-secondary">
                            @yield('subtitle')
                        </p>

                        <!-- Form -->
                        @yield('form')
                    </div>

                    <div class="mt-auto">

                        <!-- Link -->
                        @yield('link')
                    </div>
                    
                </div>

                <div class="col-md-5 col-lg-6 d-none d-lg-block">

                    <!-- Image -->
                    @yield('image')
                </div>
            </div> <!-- / .row -->
        </main> <!-- / main -->

        <!-- JAVASCRIPT-->
        <!-- Theme JS -->
        <script src="{{ asset('/') }}/assets/js/theme.bundle.js"></script>    
    </body>
</html>