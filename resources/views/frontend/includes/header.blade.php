<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <button class="btn text-white border-0 p-0" id="openMenu">
        <i class="bi bi-list fs-4"></i>
      </button>
      <a class="navbar-brand mx-auto" href="#">
        <img src="{{asset("frontend/assets/img/logo.png")}}" alt="The Crazies" />
      </a>
      <div class="cart-icon">
        <i class="bi bi-bag fs-5 text-white"></i>
        <span class="cart-count" id="cartCount">0</span>
      </div>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="sidebar-overlay" id="sidebarOverlay">
    <div class="sidebar" id="sidebar">
      <button class="close-btn" id="closeMenu" aria-label="Close menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24">
          <path d="M18 6L6 18M6 6l12 12" stroke-width="2" stroke-linecap="round"/>
        </svg>
      </button>
      <h5 class="sidebar-title">MENU</h5>
      <a href="{{route("home")}}">Home</a>
      <a href="collections.html">Collections</a>
      <a href="{{route("about-us")}}">About</a>
      <a href="{{route("contact")}}">Contact</a>
      <a href="{{route("newsletter")}}">Newsletter</a>
    </div>
  </div>