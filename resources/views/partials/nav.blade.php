<header id="header">
  <h1><a href="{{ url('/') }}">Operettek</a></h1>
  <nav id="nav">
    <ul>
      <li><a href="{{ url('/') }}">Főoldal</a></li>
      <li><a href="{{ url('/kapcsolat') }}">Kapcsolat</a></li>
      <li><a href="{{ url('/crud') }}">CRUD</a></li>
      <li><a href="{{ url('/diagram') }}">Diagram</a></li>
      <li><a href="{{ url('/admin') }}">Admin</a></li>

      {{--autentikáció--}}
    @auth
      <li><a href="{{ url('/logout') }}">Kijelentkezés</a></li>
      <li><a href="{{ url('/uzenetek') }}">Üzenetek</a></li>

    @else
      <li><a href="{{ url('/login') }}">Bejelentkezés</a></li>
      <li><a href="{{ url('/register') }}">Regisztráció</a></li>
    @endauth

    <li><a href="{{ route('adatbazis') }}">Adatbázis</a></li>

    </ul>
  </nav>
</header>
