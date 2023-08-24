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
                            <img src="/icon-unggulan.png" alt="">
                         </span>
                         <strong><span class="hide-menu">Unggulan</span></strong>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link" href="#" aria-expanded="false">
                         <span>
                           <img src="/icon-mcu.png" alt="">
                         </span>
                         <strong><span class="hide-menu">MCU</span></strong>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                         <span>
                            <img src="/icon-rawatinap.png" alt="">
                         </span>
                         <strong><span class="hide-menu">Rawat Inap</span></strong>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                         <span>
                            <img src="/icon-rawatjalan.png" alt="">
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
                            <img src="/icon-daftardokter.png" alt="">
                         </span>
                         <strong><span class="hide-menu">Daftar Dokter</span></strong>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link {{ Request::is('spesialis*') ? 'active' : '' }}"
                         href="{{ route('admin.dokter') }}" aria-expanded="false">
                         <span>
                             <img src="/icon-jadwaldokter.png" alt="">
                         </span>
                         <strong><span class="hide-menu">Jadwal Dokter</span></strong>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link {{ Request::is('admin/artikel/*') ? 'active' : '' }}"
                         href="{{ route('admin.artikel') }}" aria-expanded="false">
                         <span>
                             <img src="/icon-spesialis.png" alt="">
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
                            <img src="/icon-kategori.png" alt="">
                         </span>
                         <strong><span class="hide-menu">Kategori</span></strong>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link {{ Request::is('admin/berita/*') ? 'active' : '' }}"
                         href="{{ route('admin.berita') }}" aria-expanded="false">
                         <span>
                            <img src="/icon-berita.png" alt="">
                         </span>
                         <strong><span class="hide-menu">Berita</span></strong>
                     </a>
                 </li>
                 <li class="sidebar-item mb-5">
                     <a class="sidebar-link {{ Request::is('admin/artikel/*') ? 'active' : '' }}"
                         href="{{ route('admin.artikel') }}" aria-expanded="false">
                         <span>
                            <img src="/icon-artikel.png" alt="">
                         </span>
                         <strong><span class="hide-menu">Artikel</span></strong>
                     </a>
                 </li>


             </ul>

         </nav>
         <!-- End Sidebar navigation -->
     </div>
     <!-- End Sidebar scroll-->
 </aside>
