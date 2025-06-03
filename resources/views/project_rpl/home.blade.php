<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Website BPKB</title>
  <link rel="stylesheet" href="{{ asset('project_rpl/external.css') }}" />
  <link rel="stylesheet" href="{{ asset('project_rpl/patch_ops_fix.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- link js swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>

<!-- ===== HEADER SECTION ===== -->

  <header>
    <div class="logo-container">
      <img class="logo" src="{{ asset('project_rpl/asset/2-removebg-preview.png') }}" alt="Logo BPKB" />
    </div>

    <div class="header-right">

        <nav>
        <!-- HOME -->
        <div class="nav-item">
          <a href="/">Home</a>
          <div class="dropdown1">
            <a href="/">Home</a>
            <a href="#rank">Rangking</a>
            <a href="#news">News</a>
            <a href="#dokumentasi">Dokumentasi</a>
            <a href="#ops">Operations</a>
          </div>
        </div>

        <!-- ABOUT US -->
        <div class="nav-item">
          <a href="/about-us">About Us</a>
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
        <a href="{{ url('/document') }}">Document</a>
      </div>
      </nav>

      <div class="searchbar">
        <input type="text" placeholder="search..." />
        <img class="searchicon" src="{{ asset('project_rpl/asset/352091_search_icon 1.png') }}" alt="search icon" />
      </div>

    </div>
  </header>

  <!-- ===== MAIN SECTION ===== -->
  <main>
    <section id="home">
      <!-- background image moved to CSS -->
      <div class="bg home"></div>
      <h3>IPB University</h3>
      <h1>BPKB</h1>
      <h2>Badan Pengembangan Kampus Berkelanjutan</h2>
      <a href="#about" class="selengkapnya">Selengkapnya</a>
    </section>

    <section id="rank"> 
      <h1 class ="judului">Journey of UI GreenMetric</h1>
      <div class="rank-wrapper">
<img class ="certificate" src="{{ asset('project_rpl/asset/Group 11.jpg') }}" width="563px" height="422px"> 
          <div class ="initext">

            <h2 class ="ser2024">2024</h2>
            <p class ="ket2024">IPB University meraih peringkat 29 di dunia sebagai Kampus Hijau</p>
            <p class ="ket2024">Berkelanjutan versi UI GreenMetric World University Rankings 2024</p>
            <p class ="ket2024">Posisi tersebut meningkat dari peringkat 34 pada tahun 2023 lalu.</p>
            <p class ="ket2024">Prestasi ini diberikan pada UI GreenMetric   World   University </p>
            <p class ="ket2024">Rankings 2024 yang dilaksanakan di Sao Paulo University, Brazil.</p>
 
          </div>
    </div>
    </section>

    <section id="news">
      <div class ="news-container">
        
        <h1 class="Ini-artikel">News</h1>
    
        <div class="news-list">
          @foreach ($articles as $article)
          <article class="news-card">
            <div class="news-image" style="background-image: url('{{ asset('storage/' . $article->image_path) }}');"></div>
            <div class="news-content">
              <h3 class="news-title">{{ $article->title }}</h3>
              <p class="news-excerpt">{{ Str::limit($article->content, 100) }}</p>
              <a class="news-button" href="{{ route('articles.detail', ['article' => $article->id]) }}">Read More</a>
            </div>
          </article>
          @endforeach
        </div>
      </div>
    </section>

    <div class="section-separator"></div>

    <section id="dokumentasi">
      
      <div class="containerevent swiper">
      <div class="eventwrap">
        <h1 class="Eventtt">Documentation</h1>
        <ul class="eventcard swiper-wrapper">

          @foreach ($documentations as $documentation)
          <li class="eventphoto swiper-slide">
            <a href="#" class="eventlink" style="display: inline-block; width: 260px; margin-right: 20px;">
              <h3 class="eventittle1">{{ $documentation->description }}</h3>
              <img src="{{ asset('storage/' . $documentation->photo_path) }}" alt="{{ $documentation->description }}" class="eventimg1">
              <p class="tanggal1">{{ \Carbon\Carbon::parse($documentation->date)->format('d/m/Y') }}</p>
            </a>
          </li>
          @endforeach
        </ul>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
      </div>

    </section>

    <section id="ops" style="background-image: url('{{ asset('project_rpl/asset/bg-ops.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed; width: 100vw; height: 100vh;">
      <div class="contops">
        <h3 class="tittleops">Green Campus Operations</h3>
        <div class="operation">

          <!-- Settings and Infrastructure -->
          <div class="ops-item">
            <img src="{{ asset('project_rpl/asset/bangunan.png') }}" alt="Settings and Infrastructure" class="icon1">
            <p class="tittlecon">Setting and Infrastructure</p>
            <p class="totdata">{{ $data['Setting and Infrastructure'] ?? 140 }}/{{ $maxValues['Setting and Infrastructure'] ?? 1500 }}</p>
          </div>

          <!-- Energy Conversion -->
          <div class="ops-item">
            <img src="{{ asset('project_rpl/asset/energy.png') }}" alt="Energy Conversion" class="icon1">
            <p class="tittlecon">Energy Conversion</p>
            <p class="totdata">{{ $data['Energy Conversion'] ?? 140 }}/{{ $maxValues['Energy Conversion'] ?? 1500 }}</p>
          </div>

          <!-- Water -->
          <div class="ops-item">
            <img src="{{ asset('project_rpl/asset/water.png') }}" alt="Water" class="icon1">
            <p class="tittlecon">Water</p>
            <p class="totdata">{{ $data['Water'] ?? 140 }}/{{ $maxValues['Water'] ?? 1500 }}</p>
          </div>

          <!-- Education and Research -->
          <div class="ops-item">
            <img src="{{ asset('project_rpl/asset/education.png') }}" alt="Education and Research" class="icon1">
            <p class="tittlecon">Education and Research</p>
            <p class="totdata">{{ $data['Education and Research'] ?? 140 }}/{{ $maxValues['Education and Research'] ?? 1500 }}</p>
          </div>

          <!-- Transportation -->
          <div class="ops-item">
            <img src="{{ asset('project_rpl/asset/tutt.png') }}" alt="Transportation" class="icon1">
            <p class="tittlecon">Transportation</p>
            <p class="totdata">{{ $data['Transportation'] ?? 140 }}/{{ $maxValues['Transportation'] ?? 1500 }}</p>
          </div>

          <!-- Waste -->
          <div class="ops-item">
            <img src="{{ asset('project_rpl/asset/sampah.png') }}" alt="Waste" class="icon1" style="width: 150px; height: 150px; object-fit: contain;">
            <p class="tittlecon">Waste</p>
            <p class="totdata">{{ $data['Waste'] ?? 140 }}/{{ $maxValues['Waste'] ?? 1500 }}</p>
          </div>

        </div>
      </div>
    </section>
    
    
  </main>

  <!-- ===== FOOTER SECTION ===== -->
  <footer id="footer">
    <div class="footer">
      


    <div class="bpkbf">
      <h4 class="titbpkb">BPKB IPB University</h4>
      <p class="judulf">Badan Pengembangan Kampus Berkelanjutan IPB University</p>

      <div class="contactus">
      <h4 class="tittlec">Contact Us:</h4>  
      
      <div class="emailll">
        <img src="{{ asset('project_rpl/asset/mailcon.png') }}" alt="mail icon" class="mail">
        <a href="mailto:bpkb@apps.ipb.ac.id?subject=Pertanyaan%20dari%20Website" class="email">bpkb@apps.ipb.ac.id</a>
      </div>

      <div class="telppp">
        <img src="{{ asset('project_rpl/asset/callcon.png') }}" alt="call icon" class="telp">
        <a href="tel:+6281454575">+62-8145-4575</a>
      </div>

      <div class="instagrammmm">
        <img src="{{ asset('project_rpl/asset/igcon.png') }}" alt="instagram icon" class="iggg">
        <a href="https://www.instagram.com/bpkbipb?igsh=YnNxcnZwZmNyZjFh" class="ig">@bpkbipb</a>
      </div>
    </div>

    </div>

    <div class="alamatb">
      <h4 class="titalamat">Location</h4>
      <div class="alamatttssss">
        <img src="{{ asset('project_rpl/asset/loccon.png') }}" alt="icon location" class="loccon">
        <a class="alamat" href="https://maps.app.goo.gl/WREwn5KjrmAi8rdMA" target="_blank">Gedung B Perpustakaan Lt. 4, Kampus IPB Dramaga, Dramaga, Bogor, Jawa Barat, Indonesia, 16680</a>
      </div>
    </div>

    <div class="campus-location">
      <h4>Campus Location</h4>
      <ul>
        <li><a href="https://maps.app.goo.gl/Pmt6GtwjoD71S1M19" target="_blank">IPB Dramaga</a></li>
        <li><a href="https://maps.app.goo.gl/tH5zvpEaG71hm93n9" target="_blank">IPB Baranangsiang</a></li>
        <li><a href="https://maps.app.goo.gl/QEMyNJCdAvfng39D6" target="_blank">IPB Taman Kencana</a></li>
        <li><a href="https://maps.app.goo.gl/i6HqNLEUosaGkqtBA" target="_blank">IPB Gunung Gede</a></li>
        <li><a href="https://maps.app.goo.gl/r3LB6zvrGQuSTwQz8" target="_blank">IPB Cilibende</a></li>
        <li><a href="https://maps.app.goo.gl/f6mR3qRSXQLbHUCb7" target="_blank">IPB Sukabumi</a></li>
      </ul>
    </div>

    </div>

    <div class="br">
      <p class="tulisan">© 2025 Badan Pengembangan Kampus Berkelanjutan. All rights reserved.</p>
    </div>
  </footer>

  <!-- link swiper js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- link custom script -->
  <script src="{{ asset('project_rpl/script.js') }}"></script>
</body>
</html>
