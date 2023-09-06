<style>
    /* .scroll-hidden {
        margin: 0 -300px 15px 15px;
        padding-right: 300px;
    } */
</style>
<aside class="left-sidebar overflow-hidden">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between my-4">
            <a href="{{ route('admin.dashboard') }}" class="text-nowrap logo-img">
                <img src="{{ asset('./RSUD-logo1.png') }}" alt="logo-rsud" loading="lazy" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar scroll-hidden" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('dashboard') ? 'active' : '' }}"
                        href="{{ route('admin.dashboard') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <strong><span class="hide-menu">Dashboard</span></strong>
                    </a>
                </li>

                {{-- master Data --}}
                <li class="nav-small-cap">
                    <i class="ti ti-dots-solid nav-small-cap-icon fs-5"></i>
                    <strong><span class="hide-menu">Master Data</span></strong>
                </li>
                <li class="sidebar-item  {{ Request::is('admin/kategori-konten*') ||  Request::is('admin/kategori-layanan*') ? 'bg-white p-2 rounded-1' : '' }}">
                    <a class="sidebar-link d-flex justify-content-between {{ Request::is('admin/kategori-konten*') ||  Request::is('admin/kategori-layanan*') ? 'bg-white text-dark' : '' }}"
                        data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                        aria-controls="collapseExample">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <strong><span class="hide-menu"> Master kategori</span></strong>
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>
                    <div class="collapse {{ Request::is('admin/kategori-konten*') ||  Request::is('admin/kategori-layanan*') ? 'show' : '' }}" id="collapseExample">
                        <ul class="mt-2">
                            <li class="">
                                <a class="sidebar-link  {{ Request::is('admin/kategori-konten*') ? 'bg-primary text-white' : '' }} d-flex justify-content-between"
                                    href="{{ route('kategori-konten.index') }}" aria-expanded="false">
                                    <strong><span class="hide-menu">Konten</span></strong>
                                    <span>
                                        <i class="fa-solid fa-newspaper"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidebar-link {{ Request::is('admin/kategori-layanan*') ? 'bg-primary text-white' : '' }}  d-flex justify-content-between"
                                    href="{{ route('kategori-layanan.index') }}" aria-expanded="false">
                                    <strong><span class="hide-menu">Layanan</span></strong>
                                    <span>
                                        <i class="fa-solid fa-person-rays"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-item  {{ Request::is('admin/kategori-konten*') ||  Request::is('admin/kategori-layanan*') ? 'bg-white p-2 rounded-1' : '' }}">
                    <a class="sidebar-link d-flex  justify-content-between {{ Request::is('admin/kategori-konten*') ||  Request::is('admin/kategori-layanan*') ? 'bg-white text-dark' : '' }}"
                        data-bs-toggle="collapse" href="#masterPages" role="button" aria-expanded="false"
                        aria-controls="collapseExample">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <strong><span class="hide-menu"> Master pages</span></strong>
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>
                    <div class="collapse {{ Request::is('admin/pages-artikel*') ||  Request::is('admin/pages-layanan*') ? ' p-2 show' : '' }}" id="masterPages">
                        <ul class="mt-2">
                            <li class="">
                                <a class="sidebar-link  {{ Request::is('admin/kategori-konten*') ? 'bg-primary text-white' : '' }} d-flex justify-content-between"
                                    href="{{ route('kategori-konten.index') }}" aria-expanded="false">
                                    <strong><span class="hide-menu">Artikel</span></strong>
                                    <span>
                                        <i class="fa-solid fa-newspaper"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>




                {{-- dokter --}}
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <strong><span class="hide-menu">Dokter</span></strong>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('dokter*') ? 'active' : '' }}"
                        href="{{ route('admin.dokter') }}" aria-expanded="false">
                        <span>
                            <img src="{{ asset('images/icon/icon_daftar-dokter.svg') }}" alt="">
                        </span>
                        <strong><span class="hide-menu">Daftar Dokter</span></strong>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('spesialis*') ? 'active' : '' }}"
                        href="{{ route('admin.jadwal') }}" aria-expanded="false">
                        <span>
                            <img src="{{ asset('images/icon/icon_jadwal-dokter.svg') }}" alt="">
                        </span>
                        <strong><span class="hide-menu">Jadwal Dokter</span></strong>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('spesialis*') ? 'active' : '' }}"
                        href="{{ route('admin.artikel') }}" aria-expanded="false">
                        <span>
                            <img src="{{ asset('images/icon/icon_spesialis.svg') }}" alt="" width="25px;">
                        </span>
                        <strong><span class="hide-menu">Spesialis</span></strong>
                    </a>
                </li>



                
                {{-- <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <strong><span class="hide-menu">Informasi</span></strong>
                </li>
                <li class="sidebar-item mb">
                    <a class="sidebar-link {{ Request::is('alur*') ? 'active' : '' }}"
                        href="{{ route('admin.alur') }}" aria-expanded="false">
                        <span>
                            <img src={{ asset('images/icon/icon_alur.svg') }} alt="">
                        </span>
                        <strong><span class="hide-menu">Alur</span></strong>
                    </a>
                </li>
                <li class="sidebar-item mb">
                    <a class="sidebar-link {{ Request::is('persyaratan*') ? 'active' : '' }}"
                        href="{{ route('admin.persyaratan') }}" aria-expanded="false">
                        <span>
                            <img src={{ asset('images/icon/icon_persyaratan.svg') }} alt="">
                        </span>
                        <strong><span class="hide-menu">Persyaratan</span></strong>
                    </a>
                </li>
                <li class="sidebar-item mb">
                    <a class="sidebar-link {{ Request::is('tarif*') ? 'active' : '' }}"
                        href="{{ route('admin.tarif') }}" aria-expanded="false">
                        <span>
                            <img src={{ asset('images/icon/icon_tarif.svg') }} alt="">
                        </span>
                        <strong><span class="hide-menu">Tarif</span></strong>
                    </a>
                </li>
                <li class="sidebar-item mb">
                    <a class="sidebar-link {{ Request::is('index-kepuasan-masyarakat/*') ? 'active' : '' }}"
                        href="{{ route('admin.index-kepuasan-masyarakat') }}" aria-expanded="false">
                        <span>
                            <img src={{ asset('images/icon/icon_ikm.svg') }} alt="">
                        </span>
                        <strong><span class="hide-menu">IKM</span></strong>
                    </a>
                </li>
                <li class="sidebar-item mb">
                    <a class="sidebar-link {{ Request::is('sakip*') ? 'active' : '' }}"
                        href="{{ route('admin.sakip') }}" aria-expanded="false">
                        <span>
                            <img src={{ asset('images/icon/icon_sakip.svg') }} alt="">
                        </span>
                        <strong><span class="hide-menu">Sakip</span></strong>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <strong><span class="hide-menu">Master Data User</span></strong>
                </li>
                <li class="sidebar-item mb-5">
                    <a class="sidebar-link {{ Request::is('user*') ? 'active' : '' }}"
                        href="{{ route('admin.user') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-user"></i>
                        </span>
                        <strong><span class="hide-menu">User</span></strong>
                    </a>
                </li> --}}


            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
{{-- <div class="loader"></div> --}}
