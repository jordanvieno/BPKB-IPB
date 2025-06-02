@extends('layouts.app')

@section('content')
<header>
  <div class="logo-container">
    <img class="logo" src="{{ asset('project_rpl/asset/2-removebg-preview.png') }}" alt="Logo BPKB" />
  </div>

  <div class="header-right">

      <nav>
      <!-- HOME -->
      <div class="nav-item">
        <a href="{{ url('/project-rpl/home#home') }}">Home</a>
        <div class="dropdown1">
          <a href="{{ url('/project-rpl/home#home') }}">Home</a>
          <a href="#rank">Rangking</a>
          <a href="#news">News</a>
          <a href="#dokumentasi">Dokumentasi</a>
          <a href="#ops">Operations</a>
        </div>
      </div>

      <!-- ABOUT US -->
      <div class="nav-item">
        <a href="{{ url('/about-us') }}">About Us</a>
        <div class="dropdown2">
          <a href="#Introduction">Introduction</a>
          <a href="#fungsi">Fungsi BPKB</a>
          <a href="#struktur">Struktur Organisasi</a>
        </div>
      </div>

      <!-- BERITA -->
      <div class="nav-item">
        <a href="{{ route('articles.index') }}">Berita</a>
      </div>

      <!-- DOCUMENT -->
      <div class="nav-item">
        <a href="/document#home">Document</a>
      </div>
    </nav>

    <div class="searchbar">
      <input type="text" placeholder="search..." />
      <img class="searchicon" src="{{ asset('project_rpl/asset/352091_search_icon 1.png') }}" alt="search icon" />
    </div>

  </div>
</header>

<!-- ===== Road Map SECTION ===== -->
<section class="roadmap">
  <div class="roadmap-bpkb">
    <h2>Road Map</h2>
  </div>
  <div class="container">
    <!-- Card 1 -->
      <div class="card">
        <img src="{{ asset('project_rpl/asset/road-map.png') }}" alt="Gambar Roadmap" />
        <h2>Rencana Jangka Panjang IPB<br>2019 - 2025</h2>
        <a href="https://drive.google.com/file/d/1S40vBaUNF5KCWKvRkoYhvQxFDvCw-uuz/view?usp=drive_link" target="_blank" class="button" rel="noopener noreferrer">Read More</a>
      </div>
  </div>
</section>

<!-- ===== Naskah Akademik SECTION ===== -->
<section class="naskah-akademik">
  <div class="naskah-bpkb">
    <h2>Magazine</h2>
  </div>
  <div class="container">
    <!-- Card 1 -->
      <div class="card">
        <img src="{{ asset('project_rpl/asset/ipb-suv.png') }}" alt="Gambar Roadmap" />
        <h2>IPB SUV</h2>
        <a href="https://drive.google.com/file/d/124m44iyncjnRudxFP-w15ejV02AVlCo4/view?usp=drive_link" target="_blank" class="button" rel="noopener noreferrer">Read More</a>
      </div>

    <!-- Duplikasi card untuk lainnya -->
      <div class="card">
        <img src="{{ asset('project_rpl/asset/ipb-town.png') }}" alt="Gambar Roadmap" />
        <h2>IPB TOWN</h2>
        <a href="https://drive.google.com/file/d/10DBc1m6SYkJZG08EjVAU1TeZgLkZSoW9/view?usp=drive_link" target="_blank" class="button" rel="noopener noreferrer">Read More</a>
      </div>
  </div>
</section>

<!-- ===== Sustainability Module SECTION ===== -->
<section class="naskah-akademik">
  <div class="naskah-bpkb">
    <h2>Integrated Sustainability Report and Learning Module</h2>
  </div>
  <div class="container">
    <!-- Card 1 -->
      <div class="card">
        <img src="{{ asset('project_rpl/asset/sustainability-report.png') }}" alt="Gambar Roadmap" />
        <h2>Sustainability Report</h2>
        <a href="https://drive.google.com/file/d/1EYa9b2eEGOHBS76WzQq5E81VNZvNQL5z/view?usp=drive_link" target="_blank" class="button" rel="noopener noreferrer">Read More</a>
      </div>

    <!-- Duplikasi card untuk lainnya -->
      <div class="card">
        <img src="{{ asset('project_rpl/asset/life-action.png') }}" alt="Gambar Roadmap" />
        <h2>Sustainable Lifestyle Action</h2>
        <a href="https://drive.google.com/file/d/12E9UyQNOc9yBtYM8Zlzzi3MI24bLDbCw/view?usp=drive_link" target="_blank" class="button" rel="noopener noreferrer">Read More</a>
      </div>

      <div class="card">
        <img src="{{ asset('project_rpl/asset/mindful-sustainability.png') }}" alt="Gambar Roadmap" />
        <h2>Mindful Sustainability Compass</h2>
        <a href="https://drive.google.com/file/d/1qjcaa0xKjOGoG7ZvqXhWUxPkh1x3izNs/view?usp=drive_link" target="_blank" class="button" rel="noopener noreferrer">Read More</a>
      </div>
  </div>
</section>

<!-- ===== Policy Brief SECTION ===== -->
<section class="naskah-akademik">
  <div class="naskah-bpkb">
    <h2>Policy Brief</h2>
  </div>
  <div class="container">
    <!-- Card 1 -->
      <div class="card">
        <img src="{{ asset('project_rpl/asset/tata-ruang.png') }}" alt="Gambar Roadmap" />
        <h2>Penguatan Tata Ruang Kota dalam Mitigasi Dampak Perubahan Iklim</h2>
        <a href="https://journal.ipb.ac.id/index.php/agro-maritim/article/view/59033/29430" target="_blank" class="button" rel="noopener noreferrer">Read More</a>
      </div>

    <!-- Duplikasi card untuk lainnya -->
      <div class="card">
        <img src="{{ asset('project_rpl/asset/waste.png') }}" alt="Gambar Roadmap" />
        <h2>Wujudkan Kampus Berkelanjutan melalui Regenerative Waste Governance</h2>
        <a href="https://journal.ipb.ac.id/index.php/agro-maritim/article/view/56638/29270" target="_blank" class="button" rel="noopener noreferrer">Read More</a>
      </div>

      <div class="card">
        <img src="{{ asset('project_rpl/asset/polbrief-nature.png') }}" alt="Gambar Roadmap" />
        <h2>Komitmen IPB University sebagai Nature Positive Universities</h2>
        <a href="https://journal.ipb.ac.id/index.php/agro-maritim/article/view/56649/29268" target="_blank" class="button" rel="noopener noreferrer">Read More</a>
      </div>
  </div>
</section>

@endsection
