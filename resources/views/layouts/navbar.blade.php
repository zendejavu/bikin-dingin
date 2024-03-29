<div class="container-fluid bg-primary sticky-top">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-0">
            <a href="/" class="navbar-brand">
                <h1 class="text-white fw-bold d-block">
                    Bikin<span class="text-secondary">Dingin</span> 
                </h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-xl-auto p-0">
                    <a href="/#" class="nav-item nav-link">Beranda</a>
                    <a href="/#about" class="nav-item nav-link">Tentang</a>
                    <a href="/#services" class="nav-item nav-link">Layanan</a>
                    @guest
                    <a href="/order" class="nav-item nav-link {{ request()->is('order*') ? ' active text-secondary' : '' }}">Pemesanan</a>
                    @endguest
                    @auth
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ (request()->is('order*') ? ' active' : (request()->is('history*') ? ' active' : '')) }}" data-bs-toggle="dropdown">Pemesanan</a>
                        <div class="dropdown-menu rounded">
                            <a href="/order" class="dropdown-item {{ request()->is('order*') ? ' active' : '' }}">Daftar Produk Layanan</a>
                            <a href="/history" class="dropdown-item {{ request()->is('history*') ? ' active' : '' }}">Riwayat Pemesanan</a>
                        </div>
                    </div>
                    @endauth
                    <a href="/#contact" class="nav-item nav-link">Kontak</a>
                </div>
                <div class="navbar-nav d-xl-flex flex-shirink-0">
                    <hr class="dropdown-divider bg-secondary">
                    @auth
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            {{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end rounded">
                            <a href="{{ route('profile.edit') }}" class="dropdown-item"><i class="fa-solid fa-user me-2"></i>Profil</a>
                            <hr class="dropdown-divider">
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</button>
                            </form>
                        </div>
                    </div>
                    @else
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-item nav-link"><i class="fa-solid fa-user-plus me-2"></i>Daftar</a>
                        @endif
                    <a href="{{ route('login') }}" class="nav-item nav-link"><i class="fa-solid fa-right-to-bracket me-2"></i>Login</a>
                    @endauth
                </div>
            </div>
        </nav>
    </div>
</div>