<header>
    <div class="logo-container">
      <img class="logo" src="{{ asset('project_rpl/asset/2-removebg-preview.png') }}" alt="Logo BPKB" />
    </div>

    <div class="header-right">

        <nav>
        <!-- HOME -->
        <div class="nav-item">
          <a href="/#home">Home</a>
          <div class="dropdown1">
            <a href="/#home">Home</a>
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
          <a href="{{ url('/document') }}">Document</a>
        </div>
      </nav>

      <div class="searchbar">
        <input type="text" placeholder="search..." />
        <img class="searchicon" src="{{ asset('project_rpl/asset/352091_search_icon 1.png') }}" alt="search icon" />
      </div>

    </div>
  </header>
