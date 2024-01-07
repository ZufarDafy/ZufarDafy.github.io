<nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
  <div class="container-fluid">
    <div class="d-flex align-items-center">
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
          
          @auth
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="nav-link {{ ($title == "Login") ? 'active' : '' }}"><div class="title">Log Out</div></button>
          </form>
          @else
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Login") ? 'active' : '' }}" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Login") ? 'active' : '' }}" href="/login">Registrasi</a>
          </li>
          @endauth
        </ul>
      </div>
      <a class="navbar-brand" href="/">Alstore</a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarsExample04">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title == "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        
        @auth
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="nav-link {{ ($title == "Login") ? 'active' : '' }}"><div class="title">Log Out</div></button>
        </form>
        @else
        <li class="nav-item">
          <a class="nav-link {{ ($title == "Login") ? 'active' : '' }}" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title == "Login") ? 'active' : '' }}" href="/login">Registrasi</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
