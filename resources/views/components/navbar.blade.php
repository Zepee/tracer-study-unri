<nav class="navbar navbar-expand-lg main-header fixed-top bayangan">
    <div class="container judul">
        <div class="sia-jte">
            <a>
                <img src="/assets/dist/img/unri.png" alt="" width="30" height="30" class="d-inline-block mr-2">
            </a>
            <a class="navbar-brand mt-1" href="/">TRACER STUDY</a>
        </div>

        <span class="navbar-toggler navbar-light bg-white border border-white" role="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars fs-1 fa-lg"></i>
        </span>

        {{-- Wrapper Menus --}}
        <div class="collapse navbar-collapse navbar-toggler-collapse rounded-bottom justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                {{-- MENU BERANDA --}}
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('pengumuman*') ? 'text-success' : '' }}" 
                       aria-current="page" href="{{ route('pengumuman') }}">PENGUMUMAN</a>
                </li>
                
                {{-- MENU ALUMNI --}}
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('alumni') ? 'text-success' : '' }}" 
                       aria-current="page" href="{{ route('alumni') }}">ALUMNI</a>
                </li>
                
                {{-- MENU PETA
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('peta*') ? 'text-success' : '' }}" 
                       aria-current="page" href="{{ route('peta') }}">PETA</a>
                </li> --}}

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        AKUN
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/profil-mhs">Profil</a></li>
                        <li><a class="dropdown-item" href="/profil-mhs/editpasswordmhs">Ubah Password</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Keluar</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
