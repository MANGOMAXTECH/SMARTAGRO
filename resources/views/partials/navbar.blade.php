<nav class="sa-navbar">
  <div class="container">
    <ul class="nav-list d-none d-lg-flex">
      <li class="nav-item">
        <a href="{{ url('/') }}" class="nav-link active">Home</a>
      </li>

        <li class="nav-item">
          <a href="{{ route('marketplace.index') }}" class="nav-link">
            Marketplace <i class="fas fa-chevron-down arrow"></i>
          </a>
          @include('partials.megamenu-shop')
        </li>

        <li class="nav-item">
          <a href="{{ route('marketplace.index') }}" class="nav-link">
            Categories <i class="fas fa-chevron-down arrow"></i>
          </a>
          @include('partials.megamenu-categories')
        </li>

        <li class="nav-item">
          <a href="{{ route('how-it-works') }}" class="nav-link">How It Works</a>
        </li>

        <li class="nav-item dropdown">
          <a href="{{ route('services') }}" class="nav-link" aria-haspopup="true" aria-expanded="false">
            Services <i class="fas fa-chevron-down arrow"></i>
          </a>
          <ul class="dropdown-menu-custom">
            <li><a href="{{ route('delivery') }}"><i class="bi bi-truck"></i> Delivery</a></li>
            <li><a href="{{ route('order-tracking') }}"><i class="bi bi-geo"></i> Order Tracking</a></li>
            <li><a href="{{ route('farmer-support') }}"><i class="bi bi-people"></i> Farmer Support</a></li>
            <li><a href="{{ route('buyer-support') }}"><i class="bi bi-person"></i> Buyer Support</a></li>
            <li><a href="{{ route('resources') }}"><i class="bi bi-info-circle"></i> Agricultural Resources</a></li>
          </ul>
        </li>

      <li class="nav-item dropdown">
        <a href="{{ route('about') }}" class="nav-link" aria-haspopup="true" aria-expanded="false">
          About <i class="fas fa-chevron-down arrow"></i>
        </a>
        <ul class="dropdown-menu-custom">
          <li><a href="{{ route('about') }}"><i class="bi bi-building"></i> About SmartAgro</a></li>
          <li><a href="{{ route('mission') }}"><i class="bi bi-flag"></i> Our Mission</a></li>
          <li><a href="{{ route('vision') }}"><i class="bi bi-eye"></i> Our Vision</a></li>
          <li><a href="{{ route('why-us') }}"><i class="bi bi-star"></i> Why SmartAgro</a></li>
          <li><a href="{{ route('faqs') }}"><i class="bi bi-question-circle"></i> FAQs</a></li>
          <li><a href="{{ route('contact') }}"><i class="bi bi-envelope"></i> Contact</a></li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="{{ route('agro-news') }}" class="nav-link">Agro News</a>
      </li>

      <li class="nav-item">
        <a href="{{ route('contact') }}" class="nav-link">Contact</a>
      </li>

      <li class="nav-item dropdown">
        <a href="{{ route('login') }}" class="nav-link" aria-haspopup="true" aria-expanded="false">
          Account <i class="fas fa-chevron-down arrow"></i>
        </a>
        <ul class="dropdown-menu-custom">
          <li><a href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i> Login</a></li>
          <li><a href="{{ route('register') }}"><i class="bi bi-person-plus"></i> Register</a></li>
        </ul>
      </li>
    </ul>
  </div>

  <button class="sa-mobile-toggle d-lg-none" aria-label="Open menu" aria-expanded="false">
    <i class="fas fa-bars"></i>
  </button>
</nav>

<!-- Mobile Menu -->
<div class="sa-mobile-menu" aria-hidden="true">
  <div class="sa-mobile-menu-header">
    <a href="{{ url('/') }}" class="sa-mobile-brand text-decoration-none">
      <span class="sa-mobile-brand-name">SMARTAGRO</span>
    </a>
    <button class="sa-mobile-menu-close" aria-label="Close menu">
      <i class="fas fa-times"></i>
    </button>
  </div>

  <ul class="mobile-nav-list">
    <li class="mobile-nav-item">
      <a href="{{ url('/') }}" class="mobile-nav-link">Home</a>
    </li>
        <li class="mobile-nav-item">
          <a href="{{ route('marketplace.index') }}" class="mobile-nav-link">Marketplace <i class="fas fa-chevron-down arrow"></i></a>
          <ul class="sa-mobile-submenu">
            <li><a href="{{ route('marketplace.index') }}">All Products</a></li>
            <li><a href="{{ route('marketplace.index', ['filter' => 'new']) }}">New Products</a></li>
            <li><a href="{{ route('marketplace.index', ['filter' => 'featured']) }}">Featured Products</a></li>
            <li><a href="{{ route('marketplace.index', ['filter' => 'bestsellers']) }}">Best Sellers</a></li>
          </ul>
        </li>
        <li class="mobile-nav-item">
          <a href="{{ route('marketplace.index') }}" class="mobile-nav-link">Categories <i class="fas fa-chevron-down arrow"></i></a>
          <ul class="sa-mobile-submenu">
            <li><a href="{{ route('marketplace.index', ['category' => 'Vegetables']) }}">Vegetables</a></li>
            <li><a href="{{ route('marketplace.index', ['category' => 'Fruits']) }}">Fruits</a></li>
            <li><a href="{{ route('marketplace.index', ['category' => 'Grains']) }}">Grains</a></li>
            <li><a href="{{ route('marketplace.index') }}">View All</a></li>
          </ul>
        </li>
        <li class="mobile-nav-item">
          <a href="{{ route('farmers.index') }}" class="mobile-nav-link">Farmers <i class="fas fa-chevron-down arrow"></i></a>
          <ul class="sa-mobile-submenu">
            <li><a href="{{ route('farmers.index') }}">Browse Farmers</a></li>
            <li><a href="{{ route('farmers.index', ['filter' => 'verified']) }}">Verified Farmers</a></li>
            <li><a href="{{ route('register') }}">Become a Farmer</a></li>
          </ul>
        </li>
        <li class="mobile-nav-item">
          <a href="{{ route('how-it-works') }}" class="mobile-nav-link">How It Works</a>
        </li>
        <li class="mobile-nav-item">
          <a href="{{ route('services') }}" class="mobile-nav-link">Services <i class="fas fa-chevron-down arrow"></i></a>
          <ul class="sa-mobile-submenu">
            <li><a href="{{ route('delivery') }}">Delivery</a></li>
            <li><a href="{{ route('order-tracking') }}">Order Tracking</a></li>
            <li><a href="{{ route('farmer-support') }}">Farmer Support</a></li>
            <li><a href="{{ route('buyer-support') }}">Buyer Support</a></li>
            <li><a href="{{ route('resources') }}">Agricultural Resources</a></li>
          </ul>
        </li>
    <li class="mobile-nav-item">
      <a href="{{ route('about') }}" class="mobile-nav-link">About <i class="fas fa-chevron-down arrow"></i></a>
      <ul class="sa-mobile-submenu">
        <li><a href="{{ route('about') }}">About SmartAgro</a></li>
        <li><a href="{{ route('mission') }}">Our Mission</a></li>
        <li><a href="{{ route('vision') }}">Our Vision</a></li>
        <li><a href="{{ route('why-us') }}">Why SmartAgro</a></li>
        <li><a href="{{ route('faqs') }}">FAQs</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </li>
    <li class="mobile-nav-item">
      <a href="{{ route('agro-news') }}" class="mobile-nav-link">Agro News</a>
    </li>
    <li class="mobile-nav-item">
      <a href="{{ route('contact') }}" class="mobile-nav-link">Contact</a>
    </li>
  </ul>

  <div class="sa-mobile-account">
    @auth
      <div class="sa-mobile-user d-flex align-items-center mb-3">
        <div class="sa-mobile-avatar me-3">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="rounded-circle" width="48" height="48" alt="Avatar">
        </div>
        <div class="sa-mobile-user-info">
          <div class="sa-mobile-user-name">{{ auth()->user()->name }}</div>
          <div class="sa-mobile-user-email">{{ auth()->user()->email }}</div>
        </div>
      </div>
      <a href="{{ route('dashboard') }}" class="btn-agro w-100 text-center">Go to Dashboard</a>
    @else
      <a href="{{ route('login') }}" class="btn-agro w-100 text-center mb-2">Login</a>
      <a href="{{ route('register') }}" class="btn-agro-outline w-100 text-center">Create Account</a>
    @endauth
  </div>
</div>
