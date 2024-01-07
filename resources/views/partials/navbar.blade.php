<nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <img src="img/alstore.png" alt="Alstore">
      <a class="navbar-brand" style="margin-right: 160px" href="#">Alstore</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Login") ? 'active' : '' }}" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Login") ? 'active' : '' }}" href="/login">Registrasi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>