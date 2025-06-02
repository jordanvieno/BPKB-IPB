<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  @stack('styles')
</head>
<body>
  <nav class="sidebar close">
    <header>
      <div class="imgtext">
        <span class="image1"><img class="apaya1" src="{{ asset('asset/logo2.png') }}" alt="logo1" /></span>
        <span class="image2"><img class="apaya2" src="{{ asset('asset/2.png') }}" alt="logo2" /></span>
      </div>
      <i class='bx bx-chevron-right toggle'></i>
    </header>
    <div class="menu-bar">
      <div class="menu">
        <ul class="menu-links">
          <li class="nav-link"><a href="{{ url('/admin/dashboard') }}"><i class='bx bxs-dashboard icon'></i><span class="text nav-text">Dashboard</span></a></li>
          <li class="nav-link"><a href="{{ url('/admin/dokumentasi') }}"><i class='bx bx-camera icon'></i><span class="text nav-text">Dokumentasi</span></a></li>
          <li class="nav-link"><a href="{{ url('/admin/articles') }}" target="_self"><i class='bx bx-news icon'></i><span class="text nav-text">Berita</span></a></li>
          <li class="nav-link"><a href="{{ url('/admin/operasi') }}"><i class='bx bx-calendar-event icon'></i><span class="text nav-text">Operasi</span></a></li>
        </ul>
      </div>
      <div class="bottom-content">
        <li class="nav-link"><a href="{{ url('/profile') }}"><i class='bx bx-user-circle icon'></i><span class="text nav-text">Profil</span></a></li>
        <li class="nav-link"><a href="#" id="logout-link"><i class='bx bx-log-out icon'></i><span class="text nav-text">Logout</span></a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </div>
  </nav>
  <section class="home">
    <div id="content-area" class="content-area">
      @yield('content')
    </div>
  </section>
  <script src="{{ asset('js/main.js') }}"></script>
  @stack('scripts')
  <script>
    document.getElementById('logout-link').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('logout-form').submit();
    });
  </script>
</body>
</html>
