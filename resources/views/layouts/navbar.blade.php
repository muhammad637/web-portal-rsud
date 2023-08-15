<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		<img src="{{ asset('images/navbar/logo.png') }}" alt="" style="width: 50px;">
	      <a class="navbar-brand" href="/home">RSUD<span>Blambangan</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="/profil" class="nav-link"><strong>Profil</strong></a></li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
					aria-expanded="false"><strong>
					Pasien & Pengunjung</strong>
				</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="/caridokter">Dokter</a></li>
					<li><a class="dropdown-item" href="/ketersediaantempat">Ketersediaan Kamar</a></li>
					<li><a class="dropdown-item" href="/informasikunjungan">Informasi Kunjungan</a></li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
					aria-expanded="false"><strong>
					Berita</strong>
				</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="/berita">Berita</a></li>
					<li><a class="dropdown-item" href="/artikel">Artikel</a></li>
				</ul>
			</li>
	          {{-- <li class="nav-item"><a href="" class="nav-link">Pasien & Pengunjung</a></li> --}}
	          {{-- <li class="nav-item"><a href="" class="nav-link">Layanan</a></li>
		 --}}
		 <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
				aria-expanded="false"><strong>
				Layanan</strong>
			</a>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="/layanan-unggulan">Layanan Unggulan</a></li>
				<li><a class="dropdown-item" href="/rawat-inap">Layanan Rawat Inap</a></li>
				<li><a class="dropdown-item" href="/rawat-jalan">Layanan Rawat Jalan</a></li>
				<li><a class="dropdown-item" href="/layanan-mcu">Layanan Medical Check Up</a></li>
			</ul>
		</li>
	          {{-- <li class="nav-item"><a href="" class="nav-link">Berita</a></li> --}}
	        </ul>
	      </div>
	    </div>
	  </nav>	
    <!-- END nav -->