<link rel="stylesheet" href="{{ asset('assets/app.css')}}">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">{{ Auth::user()->login}}</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a  class="nav-link active" href="{{route('home')}}"><button >Page principale</button></a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}">Déconnexion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
