@extends('layouts.guest')

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
        <a href="#about">About Us</a>
          <div class="dropdown2">
            <a href="/about-us#Introduction">Introduction</a>
            <a href="/about-us#fungsi">Fungsi BPKB</a>
            <a href="/about-us#struktur">Struktur Organisasi</a>
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

<!-- ===== About Us SECTION ===== -->
<section class="about-us">
  <div class="about-us-header">
    <h2>About Us</h2>
    <p>Welcome to the About Us page. Here you can find information about our organization, mission, and team.</p>
  </div>
  <div class="container">
    <div class="card">
      <img src="{{ asset('Proyek RPL/images/about-us-image.png') }}" alt="About Us Image" />
      <h2>Our Mission</h2>
      <p>We aim to provide sustainable solutions and innovative projects to improve our community and environment.</p>
    </div>
    <div class="card">
      <img src="{{ asset('Proyek RPL/images/team.png') }}" alt="Our Team" />
      <h2>Our Team</h2>
      <p>Meet our dedicated team of professionals committed to excellence and sustainability.</p>
    </div>
    <div class="card">
      <img src="{{ asset('Proyek RPL/images/vision.png') }}" alt="Our Vision" />
      <h2>Our Vision</h2>
      <p>To be a leading organization in sustainable development and community engagement.</p>
    </div>
  </div>
</section>

@endsection
