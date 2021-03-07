<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">{{ Auth::user()->myRole() }} PGSI</a>
    </div>

    <ul class="sidebar-menu">
      <li class="menu-header">Menu</li>

      <li>
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="fas fa-fire"></i>
          <span>Dashboard</span>
        </a>
      </li>

    <!-- ======= Role Sidebar ======= -->

    <!-- ADMIN -->
    @if (Auth::user()->hasRole('Admin'))
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown">
          <i class="fas fa-fire"></i>
          <span>Arsip Surat</span>
        </a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="index-0.html">Surat Masuk</a></li>
          <li><a class="nav-link" href="index.html">Surat Keluar</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown">
          <i class="fas fa-fire"></i>
          <span>Agenda Kegiatan</span>
        </a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="index-0.html">Tambah Agenda</a></li>
          <li><a class="nav-link" href="index.html">Daftar Agenda</a></li>
          <li><a class="nav-link" href="index.html">Kalendar Agenda</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown">
          <i class="fas fa-fire"></i>
          <span>Anggota</span>
        </a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="index-0.html">Semua Anggota</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown">
          <i class="fas fa-fire"></i>
          <span>Usulan</span>
        </a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="index-0.html">Belum Disetujui</a></li>
          <li><a class="nav-link" href="index.html">Semua Usulan</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown">
          <i class="fas fa-fire"></i>
          <span>Manajemen User</span>
        </a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="index-0.html">Operator Wilayah</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown">
          <i class="fas fa-fire"></i>
          <span>Pengaturan</span>
        </a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="index-0.html">Profile Organisasi</a></li>
        </ul>
      </li>
    @endif

    <!-- OPEARTOR WILAYAH -->
    @if (Auth::user()->hasRole('OperatorWilayah'))
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown">
        <i class="fas fa-fire"></i>
        <span>Agenda Kegiatan</span>
      </a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="index-0.html">Daftar Agenda</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown">
        <i class="fas fa-fire"></i>
        <span>Anggota</span>
      </a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="index-0.html">Data Anggota</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown">
        <i class="fas fa-fire"></i>
        <span>Usulan</span>
      </a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="index-0.html">Menunggu Persetujuan</a></li>
        <li><a class="nav-link" href="index-0.html">Semua Usulan</a></li>
      </ul>
    </li>
    @endif

    <!-- OPERATOR DAERAH -->
    @if (Auth::user()->hasRole('OperatorDaerah'))
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown">
        <i class="fas fa-fire"></i>
        <span>Agenda Kegiatan</span>
      </a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="index-0.html">Daftar Agenda</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown">
        <i class="fas fa-fire"></i>
        <span>Anggota</span>
      </a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="index-0.html">Data Anggota</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown">
        <i class="fas fa-fire"></i>
        <span>Usulan</span>
      </a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="index-0.html">Menunggu Persetujuan</a></li>
        <li><a class="nav-link" href="index-0.html">Semua Usulan</a></li>
      </ul>
    </li>
    @endif

    <!-- ANGGOTA -->
    @if (Auth::user()->hasRole('Anggota'))
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown">
          <i class="fas fa-fire"></i>
          <span>Agenda Kegiatan</span>
        </a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="index-0.html">Daftar Agenda</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown">
          <i class="fas fa-fire"></i>
          <span>Usulan</span>
        </a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="index-0.html">Usulan Baru</a></li>
          <li><a class="nav-link" href="index-0.html">Usulan Saya</a></li>
          <li><a class="nav-link" href="index-0.html">Semua Usulan</a></li>
        </ul>
      </li>
      
      @if (Auth::user()->anggota->operator_sekolah == 1)
        <li class="menu-header">Menu Operator</li>

        <li>
          <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fire"></i>
            <span>Profil Sekolah</span>
          </a>
        </li>
      @endif
    @endif

  </ul>

    {{-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
      <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-rocket"></i> Documentation
      </a>
    </div> --}}

  </aside>
</div>