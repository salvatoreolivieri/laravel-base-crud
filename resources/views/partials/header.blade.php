<header class="bg-light border-bottom">
    <nav class="navbar navbar-expand-lg container">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : ''}}" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{ Route::currentRouteName() === 'comics.index' ? 'active' : ''}}" href="{{ route('comics.index')}}">I nostri fumetti</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{ Route::currentRouteName() === 'comics.create' ? 'active' : ''}}" href="{{ route('comics.create')}}">Crea nuovo fumetto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
