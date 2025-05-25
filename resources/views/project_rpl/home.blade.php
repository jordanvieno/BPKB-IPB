<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Website BPKB</title>
  <link rel="stylesheet" href="{{ asset('project_rpl/external.css') }}" />
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
          <a href="#home">Home</a>
          <div class="dropdown1">
            <a href="#home">Home</a>
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
          <a href="#document">Document</a>
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
      <h1 class ="judului">Journey of UI Green Matic</h1>
      <div class="rank-wrapper">
        <img class ="sertificate" src="{{ asset('project_rpl/asset/Group 11.png') }}"> 
          <div class ="initext">
            <h2 class ="ser2025">2025</h2>
            <p class ="ket2025">keterangan kemenangan 2025</p>
            <hr>
            <h2 class ="ser2024">2024</h2>
            <p class ="ket2024">keterangan kemenangan 2024</p>
            <hr>
            <h2 class ="ser2023">2023</h2>
            <p class ="ket2023">keterangan kemenangan 2023</p>
            <hr>
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

    <section id="dokumentasi">
      
      <div class="containerevent swiper">
      <div class="eventwrap">
        <h1 class="Eventtt">Documentation</h1>
        <ul class="eventcard swiper-wrapper">

          <!-- dokumentasi 1 📷 -->
          <li class="eventphoto swiper-slide">
            <a href="#" class="eventlink">
              <h3 class="eventittle1">FGD Sustainability Forum</h3>
              <img src="{{ asset('project_rpl/asset/dokumentasi/Screenshot 2025-05-12 153450.png') }}" alt="Event 1" class="eventimg1">
              <p class="tanggal1">20/11/2023</p>
            </a>
          </li>
          
          <!-- dokumentasi 1 📷 -->
          <li class="eventphoto swiper-slide">
            <a href="#" class="eventlink">
              <h3 class="eventittle1">Praktik Pembelajaran Pengelolaan Sampah dan Urban Farming di Desa Cibanteng</h3>
              <img src="{{ asset('project_rpl/asset/dokumentasi/Screenshot 2025-05-12 153608.png') }}" alt="Event 1" class="eventimg1">
              <p class="tanggal1">20/11/2023</p>
            </a>
          </li>

          <!-- dokumentasi 1 📷 -->
          <li class="eventphoto swiper-slide">
            <a href="#" class="eventlink">
              <h3 class="eventittle1">Kajian Lapangan Timbulan Sampah di Lingkungan Kampus IPB 2024</h3>
              <img src="{{ asset('project_rpl/asset/dokumentasi/Screenshot 2025-05-12 153711.png') }}" alt="Event 1" class="eventimg1">
              <p class="tanggal1">20/11/2023</p>
            </a>
          </li>

          <!-- dokumentasi 1 📷 -->
          <li class="eventphoto swiper-slide">
            <a href="#" class="eventlink">
              <h3 class="eventittle1">Pelatihan Komunikasi Publik dan Media Sosial untuk Duta Sustainability</h3>
              <img src="{{ asset('project_rpl/asset/dokumentasi/Screenshot 2025-05-12 153815.png') }}" alt="Event 1" class="eventimg1">
              <p class="tanggal1">20/11/2023</p>
            </a>
          </li> 

          <!-- dokumentasi 1 📷 -->
          <li class="eventphoto swiper-slide">
            <a href="#" class="eventlink">
              <h3 class="eventittle1">Pembelajaran Praktik Pengelolaan Sampah Berbasis Komunitas di School of Waste Management (SWAM)</h3>
              <img src="{{ asset('project_rpl/asset/dokumentasi/Screenshot 2025-05-12 153541.png') }}" alt="Event 1" class="eventimg1">
              <p class="tanggal1">20/11/2023</p>
            </a>
          </li>
        </ul>

        <div class="swiper-pagination"></div>
        <div class="swiper-slide-button swiper-button-prev"></div>
        <div class="swiper-slide-button swiper-button-next"></div>
      </div>
      </div>

    </section>

    <section id="ops">
      <img class="bgini" src="{{ asset('project_rpl/asset/bg ops.png') }}">
      <div class="contops">
        <h3 class="tittleops">Green Campus Operations</h3>
        <div class="operation">

          <!-- icon 1 -->
          <div class="ops-item">
            <img src="{{ asset('project_rpl/asset/bangunan.png') }}" alt="icon1" class="icon1">
            <p class="tittlecon">Settings and Infrastructure</p>
            <p class="totdata">1400/1500</p>
          </div>

           <!-- icon 1 -->
          <div class="ops-item">
            <img src="{{ asset('project_rpl/asset/energy.png') }}" alt="icon1" class="icon1">
            <p class="tittlecon">Settings and Infrastructure</p>
            <p class="totdata">1400/1500</p>
          </div>

           <!-- icon 1 -->
          <div class="ops-item">
            <img src="{{ asset('project_rpl/asset/water.png') }}" alt="icon1" class="icon1">
            <p class="tittlecon">Settings and Infrastructure</p>
            <p class="totdata">1400/1500</p>
          </div>

           <!-- icon 1 -->
          <div class="ops-item">
            <img src="{{ asset('project_rpl/asset/education.png') }}" alt="icon1" class="icon1">
            <p class="tittlecon">Settings and Infrastructure</p>
            <p class="totdata">1400/1500</p>
          </div>

          <!-- icon 1 -->
          <div class="ops-item">
            <img src="{{ asset('project_rpl/asset/tutt.png') }}" alt="icon1" class="icon1">
            <p class="tittlecon">Settings and Infrastructure</p>
            <p class="totdata">1400/1500</p>
          </div>

           <!-- icon 1 -->
          <div class="ops-item">
            <img src="{{ asset('project_rpl/asset/waste.png') }}" alt="icon1" class="icon1">
            <p class="tittlecon">Settings and Infrastructure</p>
            <p class="totdata">1400/1500</p>
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
