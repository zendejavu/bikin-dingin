<div class="container-fluid bg-primary">
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
                    <a href="/#" class="nav-item nav-link active text-secondary">Beranda</a>
                    <a href="/#about" class="nav-item nav-link">Tentang</a>
                    <a href="/#services" class="nav-item nav-link">Layanan</a>
                    <a href="/#project" class="nav-item nav-link">Pemesanan</a>
                    {{-- <div class="nav-item dropdown">
                        <a href="/#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded">
                            <a href="blog.html" class="dropdown-item">Our Blog</a>
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div> --}}
                    <a href="/#contact" class="nav-item nav-link">Kontak</a>
                </div>
            </div>
            <div class="d-none d-xl-flex flex-shirink-0">
                <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                    <a href="https://wa.me/+6282249037482" class="position-relative animated tada infinite">
                        <i class="fa fa-phone-alt text-white fa-2x"></i>
                        <div class="position-absolute" style="top: -7px; left: 20px;">
                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                        </div>
                    </a>
                </div>
                <div class="d-flex flex-column pe-4 border-end">
                    <span class="text-white-50">Anda memiliki Pertanyaan?</span>
                    <span class="text-secondary">WA: +62 822-4903-7482</span>
                </div>
                <div class="d-flex align-items-center justify-content-center ms-4">
                    {{-- <a href="/#"><i class="bi bi-search text-white fa-2x"></i> </a> --}}
                    <a href="/login" class="btn btn-success">Login</a>
                </div>
            </div>
        </nav>
    </div>
</div>