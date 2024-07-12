<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">sIP TOKO</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">SIPT</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="/dashboard" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data Follow
                        Up</span></a>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="#">Detail Komplain</a>
                    </li>
                    <li class=''>
                        <a class="nav-link" href="#">Aktifitas Komplain</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Pengaduan</span></a>
                <ul class="dropdown-menu">
                    <li class='#'>
                        <a class="nav-link" href="{{ route('pengaduan.create') }}">Buat Pengaduan</a>
                    </li>
                    <li class='#'>
                        <a class="nav-link" href="{{ route('pengaduan.index') }}">Lihat Pengaduan</a>
                    </li>
                </ul>
            </li>

            <!-- sidebar admin -->
            <li class="nav-item">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Master Data</span></a>
                <ul class="dropdown-menu">
                    <li class='#'>
                        <a class="nav-link" href="/data-pengaduan">Data Pengaduan</a>
                    </li>
                    <li class=''>
                        <a class="nav-link" href="#">Data User</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/profile"><i class="fa-solid fa-user"></i> <span>Profile</span></a>
            </li>
        </ul>
    </aside>
</div>
