<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('home')}}"> 
                  <img src="{{asset('images/dc-logo.png')}}" alt="Logo DC Comics" />
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Characters</a>
                  </li>
                  <li class="nav-item">
                    <a class="{{strrpos(Route::current()->uri(), 'comics') !== false ? 'nav-link active' : 'nav-link'}}" href="{{route('comics.index')}}">Comics</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Movies</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Tv</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Games</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Collectibles</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Videos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Fans</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </div>
</header>