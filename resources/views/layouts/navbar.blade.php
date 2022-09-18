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
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="/">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="/">Video</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="{{ route("login") }}" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Sign in</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>