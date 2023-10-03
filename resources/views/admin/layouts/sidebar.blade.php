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
                {{-- master kategori --}}
                <li
                    class="sidebar-item  {{ Request::is('admin/kategori-konten*') || Request::is('admin/kategori-layanan*') ? '' : '' }}">
                    <a class="sidebar-link d-flex justify-content-between {{ Request::is('admin/kategori-konten*') || Request::is('admin/kategori-layanan*') ? '' : '' }}"
                        data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                        aria-controls="collapseExample">
                        <span>
                            <i class="fas fa-project-diagram"></i>
                        </span>
                        <strong><span class="hide-menu"> Kategori</span></strong>
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>
                    <div class="collapse {{ Request::is('admin/kategori-konten*') || Request::is('admin/kategori-layanan*') ? 'show' : '' }}"
                        id="collapseExample">
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
                            <li class="">
                                <a class="sidebar-link {{ Request::is('admin/kategori-layanan*') ? 'bg-primary text-white' : '' }}  d-flex justify-content-between"
                                    href="{{ route('kategori-layanan.index') }}" aria-expanded="false">
                                    <strong><span class="hide-menu">Layanan</span></strong>
                                    <span>
                                       <i class="fas fa-sitemap"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- master pages --}}
                <li
                    class="sidebar-item  {{ Request::is('admin/konten*') || Request::is('admin/pages*') ? '' : '' }}">
                    <a class="sidebar-link d-flex  justify-content-between {{ Request::is('admin/konten*') || Request::is('admin/pages*') ? '' : '' }}"
                        data-bs-toggle="collapse" href="#masterPages" role="button" aria-expanded="false"
                        aria-controls="collapseExample">
                        <span>
                           <i class="fas fa-file-alt"></i>
                        </span>
                        <strong><span class="hide-menu"> Pages</span></strong>
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>
                    <div class="collapse {{ Request::is('admin/konten*') || Request::is('admin/pages*') ? '  show' : '' }}"
                        id="masterPages">
                        <ul class="mt-2">
                            <li class="">
                                <a class="sidebar-link  {{ Request::is('admin/konten*') ? 'bg-primary text-white ' : '' }} d-flex justify-content-between"
                                    href="{{ route('admin.konten.index') }}" aria-expanded="false">
                                    <strong><span class="hide-menu">Artikel  </span></strong>
                                    <span>
                                        <i class="fa-solid fa-newspaper"></i>
                                    </span>
                                </a>
                            </li>
                            @livewire('admin.sidebar.pages-layanan')
                        </ul>
                    </div>
                </li>
                {{-- master dokter --}}
                <li class="sidebar-item  {{ Request::is('admin/dokter*') ? '' : '' }}">
                    <a class="sidebar-link d-flex  justify-content-between {{ Request::is('admin/dokter*') ? '' : '' }}"
                        data-bs-toggle="collapse" href="#masterDokter" role="button" aria-expanded="false"
                        aria-controls="collapseExample">
                        <span>
                           <i class="fas fa-user-md"></i>
                        </span>
                        <strong><span class="hide-menu">Dokter</span></strong>
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>
                    <div class="collapse {{ Request::is('admin/dokter*') ? '  show' : '' }}" id="masterDokter">
                        <ul class="mt-2">
                            <li>
                                <a class="sidebar-link {{ Request::is('admin/dokter/spesialis*') ? 'bg-primary text-white' : '' }} d-flex justify-content-between"
                                    href="{{ route('admin.spesialis') }}" aria-expanded="false">
                                    <strong><span class="hide-menu">Spesialis</span></strong>
                                    <i class="fas fa-stethoscope"></i>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidebar-link {{ Request::is('admin/dokter/daftar-dokter*') ? 'bg-primary text-white' : '' }} d-flex justify-content-between"
                                    href="{{ route('admin.dokter') }}" aria-expanded="false">
                                    <strong><span class="hide-menu">Daftar Dokter</span></strong>
                                    <i class="fas fa-clipboard-list"></i>
                                </a>
                            </li>
                            <li>
                                <a class="sidebar-link {{ Request::is('spesialis*') ? 'bg-primary text-white' : '' }} d-flex justify-content-between"
                                    href="{{ route('admin.jadwal') }}" aria-expanded="false">
                                    <strong><span class="hide-menu">Jadwal Dokter</span></strong>
                                   <i class="fas fa-calendar-alt"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                {{-- master informasi --}}
                <li
                    class="sidebar-item  {{ Request::is('admin/informasi*')  ? '' : '' }}">
                    <a class="sidebar-link d-flex  justify-content-between {{ Request::is('admin/informasi*')  ? '' : '' }}"
                        data-bs-toggle="collapse" href="#masterInformasi" role="button" aria-expanded="false"
                        aria-controls="collapseExample">
                        <span>
                          <i class="fas fa-info"></i>
                        </span>
                        <strong><span class="hide-menu">Informasi</span></strong>
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>
                    <div class="collapse {{ Request::is('admin/informasi*')  ? 'show' : '' }}"
                        id="masterInformasi">
                        <ul class="mt-2">
                            <li>
                                <a class="sidebar-link {{ Request::is('admin/informasi/alur*') ? 'bg-primary text-white' : '' }} d-flex justify-content-between"
                                    href="{{ route('admin.alur') }}" aria-expanded="false">
                                    <strong><span class="hide-menu">Alur</span></strong>
                                    <span>
                                        <i class="fas fa-pen-nib"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="sidebar-link {{ Request::is('admin/informasi/persyaratan*') ? 'bg-primary text-white' : '' }} d-flex justify-content-between"
                                    href="{{ route('admin.persyaratan') }}" aria-expanded="false">
                                    <strong><span class="hide-menu">Persyaratan</span></strong>
                                    <span>
                                       <i class="far fa-file"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="sidebar-link {{ Request::is('admin/informasi/tarif*') ? 'bg-primary text-white' : '' }} d-flex justify-content-between"
                                    href="{{ route('admin.tarif') }}" aria-expanded="false">
                                    <strong><span class="hide-menu">Tarif</span></strong>
                                    <span>
                                       <i class="fas fa-dollar-sign"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="sidebar-link {{ Request::is('admin/informasi/index-kepuasan-masyarakat/*') ? 'bg-primary text-white' : '' }} d-flex justify-content-between"
                                    href="{{ route('admin.index-kepuasan-masyarakat') }}" aria-expanded="false">
                                    <strong><span class="hide-menu">IKM</span></strong>
                                    <span>
                                       <i class="fas fa-chart-bar"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="sidebar-link {{ Request::is('admin/informasi/sakip*') ? 'bg-primary text-white' : '' }} d-flex justify-content-between"
                                    href="{{ route('admin.sakip') }}" aria-expanded="false">
                                    <strong><span class="hide-menu">Sakip</span></strong>
                                    <span>
                                       <i class="far fa-envelope"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- master User --}}
                <li class="sidebar-item  {{ Request::is('admin/user*') ? '' : '' }}">
                    <a class="sidebar-link d-flex  justify-content-between {{ Request::is('admin/user*') ? '' : '' }}"
                        data-bs-toggle="collapse" href="#masterUser" role="button" aria-expanded="false"
                        aria-controls="collapseExample">
                        <span>
                           <i class="fas fa-users"></i>
                        </span>
                        <strong><span class="hide-menu">Users</span></strong>
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>
                    <div class="collapse {{ Request::is('admin/user*') ? '  show' : '' }}" id="masterUser">
                        <ul class="mt-2 mb-5">
                            <li>
                                <a class="sidebar-link d-flex justify-content-between {{ Request::is('admin/user*') ? 'bg-primary text-white' : '' }}"
                                    href="{{ route('admin.user') }}" aria-expanded="false">
                                    <strong><span class="hide-menu">User</span></strong>
                                    <span>
                                        <i class="ti ti-user"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="mt-5"></div>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
{{-- <div class="loader"></div> --}}

@push('link-script-admin')
    @livewireScripts
@endpush
@push('link-css-admin')
    @livewireStyles
@endpush
