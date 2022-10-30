<nav class="navbar navbar-expand-lg navbar-dark bg-danger" style="height: 65px">
    <div class="container">
      <a class="navbar-brand mb-0 fs-4" href="/home">
        <img src="img/red-logos.png" alt="" width="auto" height="28" class="d-inline-block align-text-top">
        TelNews</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav fs-5 ">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="/">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="/">Video</a>
          </li>
          @auth
            @if (auth()->user()->roles == 'WRITER')
            <li class="nav-item">
              <a class="nav-link" href="write-article">Make Article</a>
            </li>
            @endif
          @endauth
        </ul>
        @auth
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ substr(auth()->user()->name, -11) }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        @else
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="{{ route("login") }}" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Sign in</a>
            </li>
          </ul>
        @endauth
        
      </div>
    </div>
  </nav>