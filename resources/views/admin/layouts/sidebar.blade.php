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
                <li class="nav-small-cap">
                    <i class="ti ti-dots-solid nav-small-cap-icon fs-5"></i>
                    <strong><span class="hide-menu">PELAYANAN</span></strong>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('unggulan*') ? 'active' : '' }}"
                        href="{{ route('admin.unggulan') }}" aria-expanded="false">
                        <span>
                           <img src="{{asset('images/icon/icon_unggulan.svg')}}" alt="">
                        </span>
                        <strong><span class="hide-menu">Unggulan</span></strong>
                    </a>
                </li>
                <li class="sidebar-item">
                      <a class="sidebar-link {{ Request::is('mcu*') ? 'active' : '' }}"
                    href="{{ route('admin.mcu') }}" aria-expanded="false">
                        <span>
                          <img src="{{asset('images/icon/icon_mcu.svg')}}" alt="">
                        </span>
                        <strong><span class="hide-menu">MCU</span></strong>
                    </a>
                </li>
                <li class="sidebar-item">
                   <a class="sidebar-link {{ Request::is('rawat-inap*') ? 'active' : '' }}"
                    href="{{ route('admin.rawatInap') }}" aria-expanded="false">
                        <span>
                           <img src="{{asset('images/icon/icon_rawat-inap.svg')}}" alt="">
                        </span>
                        <strong><span class="hide-menu">Rawat Inap</span></strong>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('rawat-jalan*') ? 'active' : '' }}"
                        href="{{ route('admin.rawatJalan') }}" aria-expanded="false">

                        <span>
                           <img src="{{asset('images/icon/icon_rawat-jalan.svg')}}" alt="">
                        </span>
                        <strong><span class="hide-menu">Rawat Jalan</span></strong>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <strong><span class="hide-menu">Dokter</span></strong>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('dokter*') ? 'active' : '' }}"
                        href="{{ route('admin.dokter') }}" aria-expanded="false">
                        <span>
                           <img src="{{asset('images/icon/icon_daftar-dokter.svg')}}" alt="">
                        </span>
                        <strong><span class="hide-menu">Daftar Dokter</span></strong>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('spesialis*') ? 'active' : '' }}"
                        href="{{ route('admin.jadwal') }}" aria-expanded="false">
                        <span>
                            <img src="{{asset('images/icon/icon_jadwal-dokter.svg')}}" alt="">
                        </span>
                        <strong><span class="hide-menu">Jadwal Dokter</span></strong>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('admin/artikel/*') ? 'active' : '' }}"
                        href="{{ route('admin.artikel') }}" aria-expanded="false">
                        <span>
                            <img src="{{asset('images/icon/icon_spesialis.svg')}}" alt="" width="25px;">
                        </span>
                        <strong><span class="hide-menu">Spesialis</span></strong>
                    </a>
                </li>


                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <strong><span class="hide-menu">Konten</span></strong>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('admin/kategori/*') ? 'active' : '' }}"
                        href="{{ route('admin.kategori') }}" aria-expanded="false">
                        <span>
                           <img src="{{asset('images/icon/icon_kategori.svg')}}" alt="">
                        </span>
                        <strong><span class="hide-menu">Kategori</span></strong>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('admin/berita/*') ? 'active' : '' }}"
                        href="{{ route('admin.berita') }}" aria-expanded="false">
                        <span>
                           <img src="{{asset('images/icon/icon_berita.svg')}}" alt="">
                        </span>
                        <strong><span class="hide-menu">Berita</span></strong>
                    </a>
                </li>
                <li class="sidebar-item mb">
                    <a class="sidebar-link {{ Request::is('admin/artikel/*') ? 'active' : '' }}"
                        href="{{ route('admin.artikel') }}" aria-expanded="false">
                        <span>
                           <img src="{{asset('images/icon/icon_artikel.svg')}}" alt="">
                        </span>
                        <strong><span class="hide-menu">Artikel</span></strong>
                    </a>
                </li>
                <li class="nav-small-cap">
                   <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                   <strong><span class="hide-menu">Informasi</span></strong>
               </li>
               <li class="sidebar-item mb">
                   <a class="sidebar-link {{ Request::is('admin/alur/*') ? 'active' : '' }}"
                       href="{{ route('admin.alur') }}" aria-expanded="false">
                       <span>
                          <img src={{asset('images/icon/icon_alur.svg')}} alt="">
                       </span>
                       <strong><span class="hide-menu">Alur</span></strong>
                   </a>
               </li>
               <li class="sidebar-item mb">
                   <a class="sidebar-link {{ Request::is('admin/persyaratan/*') ? 'active' : '' }}"
                       href="{{ route('admin.persyaratan') }}" aria-expanded="false">
                       <span>
                          <img src={{asset('images/icon/icon_persyaratan.svg')}} alt="">
                       </span>
                       <strong><span class="hide-menu">Persyaratan</span></strong>
                   </a>
               </li>
               <li class="sidebar-item mb">
                   <a class="sidebar-link {{ Request::is('admin/tarif/*') ? 'active' : '' }}"
                       href="{{ route('admin.tarif') }}" aria-expanded="false">
                       <span>
                          <img src={{asset('images/icon/icon_tarif.svg')}} alt="">
                       </span>
                       <strong><span class="hide-menu">Tarif</span></strong>
                   </a>
               </li>
               <li class="sidebar-item mb">
                   <a class="sidebar-link {{ Request::is('admin/index-kepuasan-masyarakat/*') ? 'active' : '' }}"
                       href="{{ route('admin.index-kepuasan-masyarakat') }}" aria-expanded="false">
                       <span>
                          <img src={{asset('images/icon/icon_ikm.svg')}} alt="">
                       </span>
                       <strong><span class="hide-menu">IKM</span></strong>
                   </a>
               </li>
               <li class="sidebar-item mb">
                   <a class="sidebar-link {{ Request::is('admin/sakip/*') ? 'active' : '' }}"
                       href="{{ route('admin.sakip') }}" aria-expanded="false">
                       <span>
                          <img src={{asset('images/icon/icon_sakip.svg')}} alt="">
                       </span>
                       <strong><span class="hide-menu">Sakip</span></strong>
                   </a>
               </li>
               <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <strong><span class="hide-menu">Master Data User</span></strong>
            </li>
            <li class="sidebar-item mb-5">
                <a class="sidebar-link {{ Request::is('admin/user/*') ? 'active' : '' }}"
                    href="{{ route('admin.user') }}" aria-expanded="false">
                    <span>
                        <i class="ti ti-user"></i>
                    </span>
                    <strong><span class="hide-menu">User</span></strong>
                </a>
            </li>


            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
