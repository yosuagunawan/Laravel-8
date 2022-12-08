<nav class="sticky-top navbar navbar-expand bg-primary navbar-dark border-bottom border-5 border-light">
    <div class="container-fluid text-center">
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="collapse navbar-collapse text-center
        {{-- d-flex justify-content-center" --}}
        id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/posts">
                        Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdwon-toggle active" href="/posts" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/posts?category=programming">Programming</a></li>
                        <li><a class="dropdown-item" href="/posts?category=web-programming">Web Programming</a></li>
                        <li><a class="dropdown-item" href="/posts?category=personal">Personal</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/authors">
                        Publisher
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/dashboard">
                                    <i class="bi bi-layout-text-sidebar-reverse mx-1"></i>
                                    My Dashboard
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-box-arrow-right mx-1"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>
