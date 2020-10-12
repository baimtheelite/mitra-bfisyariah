<div class="bg-primary" style="padding: 3px"></div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="{{ url("/") }}">
      <img src="{{ asset("img/bfi.png") }}" alt="bfi" style="height: 50px; width: auto">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link {{ (request()->segment(1) == 'explore') ? 'active' : '' }}" href="#">Explore</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (request()->segment(1) == 'promo') ? 'active' : '' }}" href="#">Promo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (request()->segment(1) == 'kontak') ? 'active' : '' }}" href="{{ url("kontak") }}">Kontak</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        {{-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
        <a href="https://wa.me/6289655333987?text=Hi,%20saya%20ingin%20bekerjasama%20dengan%20BFI%20Syariah"
        class="btn btn-success">Whatsapp</a>
      </form>
    </div>
  </div>
  </nav>