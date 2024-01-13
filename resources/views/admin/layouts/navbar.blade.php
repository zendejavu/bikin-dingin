<nav id="mainNavbar" class="navbar navbar-vertical navbar-expand-lg scrollbar bg-dark navbar-dark">

    <!-- Theme configuration (navbar) -->
    <script>
    let navigationColor = localStorage.getItem('navigationColor'),
        navbar = document.getElementById('mainNavbar');

    if (navigationColor != null && navbar != null) {
        if (navigationColor == 'inverted') {
            navbar.classList.add('bg-dark', 'navbar-dark');
            navbar.classList.remove('bg-white', 'navbar-light');
        } else {
            navbar.classList.add('bg-white', 'navbar-light');
            navbar.classList.remove('bg-dark', 'navbar-dark');
        }
    }
    </script>
    <div class="container-fluid">

        <!-- Brand -->
        <a href="/admin" class="navbar-brand">
        {{-- <a href="/admin" class="navbar-brand"> --}}
            {{-- <h1 class="text-white fw-bold d-block">Bikin<span class="text-success">Dingin</span> </h1> --}}
            <img src="{{ asset('/') }}assets/img/logo-small-light.svg" class="navbar-brand-img logo-light logo-small" alt="..." width="19" height="25">
            <img src="{{ asset('/') }}assets/img/logo-large-light.svg" class="navbar-brand-img logo-light logo-large" alt="..." width="125" height="25">
            <img src="{{ asset('/') }}assets/img/logo-small-dark.svg" class="navbar-brand-img logo-dark logo-small" alt="..." width="19" height="25">
            <img src="{{ asset('/') }}assets/img/logo-large-dark.svg" class="navbar-brand-img logo-dark logo-large" alt="..." width="125" height="25">
        </a>

        <!-- Navbar toggler -->
        <a href="javascript: void(0);" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#sidenavCollapse" aria-controls="sidenavCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </a>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenavCollapse">

            <!-- Navigation -->
            <ul class="navbar-nav mb-lg-7">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin*') ? ' active' : '' }}" href="/admin">
                        <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.753,13.944v8.25h6v-6a1.5,1.5,0,0,1,1.5-1.5h1.5a1.5,1.5,0,0,1,1.5,1.5v6h6v-8.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                            <path d="M.753,12.444,10.942,2.255a1.5,1.5,0,0,1,2.122,0L23.253,12.444" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? ' active' : '' }}" href="/">
                        <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.753,13.944v8.25h6v-6a1.5,1.5,0,0,1,1.5-1.5h1.5a1.5,1.5,0,0,1,1.5,1.5v6h6v-8.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                            <path d="M.753,12.444,10.942,2.255a1.5,1.5,0,0,1,2.122,0L23.253,12.444" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                        </svg>
                        <span>Landing Page</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {{ request()->is('order*') ? ' active' : '' }} " href="#pagesCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="pagesCollapse">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-0.75 -0.75 24 24" height="24" width="24" class="nav-link-icon"><defs></defs><path d="m19.5 21.1875 -2.8228125 -1.670625a1.6265625000000001 1.6265625000000001 0 0 1 -0.65625 -1.59375V16.181250000000002l-1.0584375 -1.0556249999999998a1.2646875 1.2646875 0 0 1 0 -1.7878125 1.2881250000000002 1.2881250000000002 0 0 1 0.19218749999999998 -0.1584375h0a1.2665625 1.2665625 0 0 1 1.59375 0.1584375l1.4868750000000002 1.4878125" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="m16.731562500000003 8.3925 3.49125 3.09375a4.28625 4.28625 0 0 1 0.7996875 2.4937500000000004v2.0793749999999998a2.255625 2.255625 0 0 0 0.65625 1.59375l0.27281249999999996 0.271875" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="m4.2646875 14.825625 1.4868750000000002 -1.4878125a1.2665625 1.2665625 0 0 1 1.59375 -0.1584375h0a1.2881250000000002 1.2881250000000002 0 0 1 0.19218749999999998 0.1584375 1.2646875 1.2646875 0 0 1 0 1.7878125L6.4828125 16.181250000000002v1.7381250000000001a1.6265625000000001 1.6265625000000001 0 0 1 -0.65625 1.59375L3 21.1875" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="m0.5456249999999999 17.919375000000002 0.27281249999999996 -0.271875a2.255625 2.255625 0 0 0 0.65625 -1.59375v-2.0784375a4.28625 4.28625 0 0 1 0.7996875 -2.4937500000000004l3.4940625 -3.0890625" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M16.753125 13.3378125V3.9375a0.71625 0.71625 0 0 0 -0.7153125 -0.7153125h-2.8603125a1.9068749999999999 1.9068749999999999 0 0 0 -3.8137499999999998 0h-2.859375a0.7153125 0.7153125 0 0 0 -0.7153125 0.7153125v9.4003125" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="m6.504375 17.8471875 9.5334375 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="m7.6659375 6.2090625 3.0375 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="m14.0503125 6.2090625 0.8756250000000001 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="m7.6659375 8.397187500000001 3.0375 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="m14.0503125 8.397187500000001 0.8756250000000001 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="m7.6659375 11.100937499999999 3.0375 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="m14.0503125 11.100937499999999 0.8756250000000001 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                        <span>Pemesanan</span>
                    </a>
                    <div class="collapse " id="pagesCollapse">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="/orders" class="nav-link ">
                                    <span>Riwayat Pemesanan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/invoice" class="nav-link ">
                                    <span>Invoice</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {{ request()->is('user*') ? ' active' : '' }} " href="#userCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="userCollapse">
                        <svg viewBox="-0.25 -0.25 24 24" xmlns="http://www.w3.org/2000/svg" height="24" width="24" class="nav-link-icon"><path d="M17.135416666666664 21.541666666666664v-1.46875c0 -3.870645833333333 -2.839583333333333 -4.495354166666667 -5.516625 -5.4833333333333325 -0.8900625 -0.32997916666666666 -0.7431875 -2.6535416666666665 -0.3495625 -3.0873125 0.9243333333333332 -1.0173541666666666 1.709625 -2.209979166666667 1.709625 -5.091666666666667C12.978854166666666 3.503458333333333 11.082208333333332 1.9583333333333333 8.8125 1.9583333333333333S4.646145833333334 3.503458333333333 4.646145833333334 6.408645833333333c0 2.880708333333333 0.7833333333333333 4.073333333333333 1.709625 5.091666666666667 0.39166666666666666 0.4337708333333333 0.5405 2.757333333333333 -0.3495625 3.0873125C3.377145833333333 15.5599375 0.4895833333333333 16.17289583333333 0.4895833333333333 20.072916666666664V21.541666666666664Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M19.583333333333332 21.541666666666664h3.427083333333333v-1.46875c0 -3.870645833333333 -2.839583333333333 -4.495354166666667 -5.516625 -5.4833333333333325 -0.8900625 -0.32997916666666666 -0.7431875 -2.6535416666666665 -0.3495625 -3.0873125 0.9243333333333332 -1.0173541666666666 1.709625 -2.209979166666667 1.709625 -5.091666666666667C18.853854166666665 3.503458333333333 16.957208333333334 1.9583333333333333 14.6875 1.9583333333333333a4.731333333333333 4.731333333333333 0 0 0 -0.9791666666666666 0.09791666666666667" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                        <span>Data User</span>
                    </a>
                    <div class="collapse {{ request()->is('account') ? ' show' : '' }}" id="userCollapse">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="/account" class="nav-link {{ request()->is('account') ? ' active' : '' }}">
                                    <span>Informasi Akun</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/customer" class="nav-link {{ request()->is('customer') ? ' active' : '' }}">
                                    <span>Customer</span>
                                    <span class="badge text-bg-primary badge-circle ms-3">7</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="technician" class="nav-link {{ request()->is('teknisi') ? ' active' : '' }}">
                                    <span>Teknisi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item w-100">
                    <hr>
                    <h5 class="text-uppercase text-light opacity-50 nav-link">
                        Maintenance
                    </h5>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('chat*') ? ' active' : '' }} " href="/chat">
                        <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.25,18.75a1.5,1.5,0,0,1-1.5-1.5V9.75a1.5,1.5,0,0,1,1.5-1.5h10.5a1.5,1.5,0,0,1,1.5,1.5v7.5a1.5,1.5,0,0,1-1.5,1.5h-1.5v4.5l-4.5-4.5Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                            <path d="M6.75,12.75l-3,3v-4.5H2.25a1.5,1.5,0,0,1-1.5-1.5V2.25A1.5,1.5,0,0,1,2.25.75h10.5a1.5,1.5,0,0,1,1.5,1.5v3" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                        </svg>
                        <span>Chat</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {{ (request()->is('inbox') || request()->is('read-mail')) ? ' active' : '' }}" href="#emailCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="emailCollapse">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18"><defs><style>.a{fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}</style></defs><title>envelope</title><rect class="a" x="0.75" y="4.5" width="22.5" height="15" rx="1.5" ry="1.5"/><line class="a" x1="15.687" y1="9.975" x2="19.5" y2="13.5"/><line class="a" x1="8.313" y1="9.975" x2="4.5" y2="13.5"/><path class="a" d="M22.88,5.014l-9.513,6.56a2.406,2.406,0,0,1-2.734,0L1.12,5.014"/></svg>
                        <span>Email</span>
                    </a>
                    <div class="collapse {{ (request()->is('inbox') || request()->is('read-mail')) ? ' show' : '' }}" id="emailCollapse">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="/inbox" class="nav-link {{ request()->is('inbox*') ? ' active' : '' }}">
                                    <span>Inbox</span>
                                    <span class="badge text-bg-primary badge-circle ms-3">7</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/read-mail" class="nav-link {{ request()->is('read-mail*') ? ' active' : '' }}">
                                    <span>Read Email</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('calendar*') ? ' active' : '' }} " href="./calendar.html">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18">
                            <defs>
                                <style>
                                .a {
                                    fill: none;
                                    stroke: currentColor;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 1.5px;
                                }
                                </style>
                            </defs>
                            <title>calendar</title>
                            <rect class="a" x="0.752" y="3.75" width="22.5" height="19.5" rx="1.5" ry="1.5"/>
                            <line class="a" x1="0.752" y1="9.75" x2="23.252" y2="9.75"/>
                            <line class="a" x1="6.752" y1="6" x2="6.752" y2="0.75"/>
                            <line class="a" x1="17.252" y1="6" x2="17.252" y2="0.75"/>
                        </svg>
                        <span>Calendar</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <hr>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="nav-link border-0 bg-transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="nav-link-icon" fill="none" viewBox="0 0 24 24" height="18" width="18"><g id="logout-1--arrow-exit-frame-leave-logout-rectangle-right"><path id="Vector" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M16.285714285714285 18v3.4285714285714284c0 0.4546285714285714 -0.18061714285714284 0.8907428571428571 -0.5020971428571428 1.2121714285714285 -0.32149714285714287 0.3214285714285714 -0.7575257142857142 0.5021142857142856 -1.2121885714285714 0.5021142857142856h-12c-0.45466285714285715 0 -0.8906914285714285 -0.18068571428571426 -1.2121834285714286 -0.5021142857142856C1.0377548571428572 22.319314285714285 0.8571428571428571 21.8832 0.8571428571428571 21.428571428571427v-18.857142857142858c0 -0.45466285714285715 0.180612 -0.8906914285714285 0.5021022857142857 -1.2121834285714286C1.6807371428571427 1.0377548571428572 2.116765714285714 0.8571428571428571 2.571428571428571 0.8571428571428571h12c0.45466285714285715 0 0.8906914285714285 0.180612 1.2121885714285714 0.5021022857142857C16.105097142857144 1.6807371428571427 16.285714285714285 2.116765714285714 16.285714285714285 2.571428571428571v3.4285714285714284" stroke-width="1.5"></path><path id="Vector_2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M11.142857142857142 12h12" stroke-width="1.5"></path><path id="Vector_3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m19.71428571428571 8.571428571428571 3.4285714285714284 3.4285714285714284 -3.4285714285714284 3.4285714285714284" stroke-width="1.5"></path></g></svg>
                            <span> Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
            <!-- End of Navigation -->
        </div>
        <!-- End of Collapse -->
    </div>
</nav>