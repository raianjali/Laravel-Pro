<nav class="navbar navbar-expand-xl navbar-dark bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample06">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link {{ Request::route()->getName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/Contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('contact/messages') ? 'active' : '' }}" href="{{ route('get-messages') }}">View Messages</a>
      </li>
    </ul>

  </div>
</nav>
