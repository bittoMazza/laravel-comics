<header>
    <div class="d-flex justify-content-between align-items-center nav-container py-4 container">
      <img class="header-logo" src="../assets/img/dc-logo.png" alt="Logo dc">
      <nav class="header-nav">
        <ul>
          @foreach ($header_links as $link)
          <li>
            {{ $link }}
          </li>
          @endforeach
        </ul>
      </nav>
      <input class="ms_searchbar" type="text" placeholder="search">
    </div>
    <div class="hero-container">
    </div>
  </header>