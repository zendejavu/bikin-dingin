<div class="container-fluid bg-primary sticky-top">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-0">
            {{-- <a href="/" class="navbar-brand">
                <img src="{{ asset('/') }}assets/img/bikin-dingin.png" class="navbar-brand-img logo-light logo-large" alt="..." width="160" height="40" class="d-block">
            </a> --}}
            <a href="/" class="navbar-brand">
                <h1 class="text-white fw-bold d-block">Bikin<span class="text-secondary">Dingin</span> </h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-xl-auto p-0">
                    <a href="/#" class="nav-item nav-link {{ request()->is('/') ? ' active text-secondary' : '' }}">Beranda</a>
                    <a href="/#about" class="nav-item nav-link {{ request()->is('#about') ? ' active text-secondary' : '' }}">Tentang</a>
                    <a href="/#services" class="nav-item nav-link {{ request()->is('#services') ? ' active text-secondary' : '' }}">Layanan</a>
                    <a href="/order" class="nav-item nav-link {{ request()->is('order*') ? ' active text-secondary' : '' }}">Pemesanan</a>
                    <a href="/#contact" class="nav-item nav-link {{ request()->is('#contact') ? ' active text-secondary' : '' }}">Kontak</a>
                </div>
                {{-- <div class="navbar-nav ms-auto mx-xl-auto p-0 mb-3 navbar-toggler text-white-50"> --}}
                <div class="navbar-nav">
                    {{-- <hr class="text-left ml-0 bg-secondary p-0 bg-white"> --}}
                    <hr class="dropdown-divider bg-secondary">
                    @auth
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Selamat Datang, {{ auth()->user()->username }}</a>
                        <div class="dropdown-menu rounded">
                            <a href="/" class="dropdown-item"><i class="fa-solid fa-gauge"></i> Dashboard</a>
                            <hr class="dropdown-divider">
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                            </form>
                            {{-- <a href="/logout" class="dropdown-item"><i class="fa-solid fa-right-from-bracket"></i>Logout</a> --}}
                            {{-- <a href="/logout" class="nav-item nav-link">Logout</a> --}}
                        </div>
                    </div>
                    @else
                    <a href="/login" class="nav-item nav-link"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
                    @endauth
                </div>
            </div>
            {{-- <div class="d-none d-xl-flex flex-shirink-0">
                @auth
                 <div class="d-flex flex-column pe-4">
                     <div class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Selamat Datang, {{ auth()->user()->name }}</a>
                         <div class="dropdown-menu rounded">
                             <a href="blog.html" class="dropdown-item">My Dashboard</a>
                             <hr class="dropdown-divider">
                             <a href="/logout" class="dropdown-item">Logout</a>
                         </div>
                     </div>
                 </div>
                @else                    
                <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                    <a href="https://wa.me/+6282249037482" target="_blank" class="position-relative animated tada infinite">
                        <i class="fa-brands fa-whatsapp text-white fa-2x"></i>
                        <div class="position-absolute" style="top: -7px; left: 20px;">
                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                        </div>
                    </a>
                </div>
                <div class="d-flex flex-column pe-4 border-end">
                    <span class="text-white-50">Anda memiliki Pertanyaan?</span>
                    <span class="text-secondary">WA: +62 822-4903-7482</span>
                </div>
                <div class="d-flex align-items-center justify-content-center ms-4 btn btn-sm btn-secondary px-1 rounded-pill">
                    <a href="/login" class="btn text-white">
                        <span><i class="fa-solid fa-arrow-right-to-bracket"></i></span>
                        Login
                    </a>
                </div>
                @endauth

            </div> --}}
        </nav>
    </div>
</div>