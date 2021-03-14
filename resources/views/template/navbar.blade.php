<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Log Book</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        @if(Auth::check())
        <li class="nav-item">
          <a class="nav-link" href="#">Add Entry</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">View Log</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        @endif
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::check() ? Auth::user()->name : "Guest" }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @if(Auth::check())
            <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
            <li><a class="dropdown-item" href="{{ url('/logout') }}">Log Out</a></li>
            @endif
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>