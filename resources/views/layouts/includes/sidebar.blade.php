<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ (request()->segment(1) == 'home') ? 'active' : '' }} ">
                    <a href="{{route('home')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Beranda</span>
                    </a>
                </li>

                @if (Auth::user()->role == 'admin')
                <li class="sidebar-title">Master Data</li>

                <li class="sidebar-item {{ (request()->segment(2) == 'pegawai') ? 'active' : '' }}">
                    <a href="{{route('pegawai.index')}}" class='sidebar-link'>
                        <i class="fa fa-user-alt"></i>
                        <span>Data Pegawai</span>
                    </a>
                </li>

                <li class="sidebar-title">Laporan</li>

                <li class="sidebar-item ">
                    <a href="/user-activity" class='sidebar-link'>
                        <i class="fa fa-history"></i>
                        <span>Riwayat Aktifitas</span>
                    </a>
                </li>

                @elseif(Auth::user()->role == 'manajer')
                <li class="sidebar-title">Master Data</li>

                <li class="sidebar-item {{ (request()->segment(2) == 'menu') ? 'active' : '' }}">
                    <a href="{{route('menu.index')}}" class='sidebar-link'>
                        <i class="fa fa-apple-alt"></i>
                        <span>Data Menu</span>
                    </a>
                </li>

                <li class="sidebar-title">Laporan</li>

                <li class="sidebar-item {{ (request()->segment(2) == 'laporan-transaksi') ? 'active' : '' }}">
                    <a href="{{route('laporan-transaksi.index')}}" class='sidebar-link'>
                        <i class="fas fa-book"></i>
                        <span>Data Transaksi</span>
                    </a>
                </li>

                <li class="sidebar-item ">
                    <a href="{{route('laporan-pendapatan.index')}}" class='sidebar-link'>
                        <i class="fa fa-money-bill-wave"></i>
                        <span>Data Pendapatan</span>
                    </a>
                </li>

                <li class="sidebar-item ">
                    <a href="/user-activity" class='sidebar-link'>
                        <i class="fa fa-history"></i>
                        <span>Riwayat Aktifitas</span>
                    </a>
                </li>

                @elseif(Auth::user()->role == 'kasir')

                <li class="sidebar-title">Transaksi</li>

                <li class="sidebar-item ">
                    <a href="{{route('entri-transaksi.index')}}" class='sidebar-link'>
                        <i class="fas fa-cash-register"></i>
                        <span>Entri Transaksi</span>
                    </a>
                </li>

                <li class="sidebar-item ">
                    <a href="{{route('riwayat-transaksi.index')}}" class='sidebar-link'>
                        <i class="fas fa-history"></i>
                        <span>Riwayat Transaksi</span>
                    </a>
                </li>

                @endif

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
