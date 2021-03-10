<nav class="nav-menu d-none d-lg-block">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="#">Sejarah</a></li>
        <li><a href="#">Program Kerja</a></li>
        <li><a href="#">Visi & Misi </a></li>

        <li class="active">
            @auth
                <a href="/login">Dashboard</a>
            @endauth
            @guest
                @if (\Request::segment(1) == 'pendaftaran' || \Request::segment(1) == null)
                    <a href="/login">Login</a>
                @else
                    <a href="/pendaftaran">Daftar</a>
                @endif
            @endguest
        </li>
    </ul>
</nav>