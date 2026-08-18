@extends('layouts.frontend')

@section('title', 'SmartAgro — Connecting Farmers, Markets and Communities')

@section('content')

<!-- Hero Slider -->
<section class="hero-slider" aria-label="Hero banner">
  <div class="swiper heroSwiper">
    <div class="swiper-wrapper">

      <!-- Slide 1 -->
      <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/hero/hero-farmer-tablet.webp') }}');">
        <div class="hero-slide-overlay"></div>
        <div class="container position-relative">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <div class="hero-slide-content animate-fade-up">
                <h1 class="hero-slide-title" data-text="Empowering Farmers Through Technology"><span class="typed-text"></span><span class="typewriter-cursor">|</span></h1>
                <p class="hero-slide-desc" data-text="Connect farmers, buyers, suppliers and agricultural experts on one intelligent platform."><span class="typed-text"></span><span class="typewriter-cursor">|</span></p>
                <div class="hero-slide-buttons">
                  <a href="{{ route('register') }}" class="btn-hero-primary">Get Started</a>
                  <a href="{{ route('marketplace.index') }}" class="btn-hero-secondary">Explore Marketplace</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/hero/hero-agriculture-drone.webp') }}');">
        <div class="hero-slide-overlay"></div>
        <div class="container position-relative">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <div class="hero-slide-content animate-fade-up">
                <h1 class="hero-slide-title" data-text="Smart Farming for Better Harvests"><span class="typed-text"></span><span class="typewriter-cursor">|</span></h1>
                <p class="hero-slide-desc" data-text="Increase productivity using modern agricultural technology and precision farming."><span class="typed-text"></span><span class="typewriter-cursor">|</span></p>
                <div class="hero-slide-buttons">
                  <a href="{{ route('how-it-works') }}" class="btn-hero-primary">Learn More</a>
                  <a href="{{ route('register') }}" class="btn-hero-secondary">Start Farming</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/hero/hero-marketplace.webp') }}');">
        <div class="hero-slide-overlay"></div>
        <div class="container position-relative">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <div class="hero-slide-content animate-fade-up">
                <h1 class="hero-slide-title" data-text="Buy & Sell Agricultural Products"><span class="typed-text"></span><span class="typewriter-cursor">|</span></h1>
                <p class="hero-slide-desc" data-text="Trade crops, livestock and farming supplies through one trusted marketplace."><span class="typed-text"></span><span class="typewriter-cursor">|</span></p>
                <div class="hero-slide-buttons">
                  <a href="{{ route('marketplace.index') }}" class="btn-hero-primary">Browse Products</a>
                  <a href="{{ route('register') }}" class="btn-hero-secondary">Sell Products</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/hero/hero-irrigation.webp') }}');">
        <div class="hero-slide-overlay"></div>
        <div class="container position-relative">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <div class="hero-slide-content animate-fade-up">
                <h1 class="hero-slide-title" data-text="Efficient Farm Management"><span class="typed-text"></span><span class="typewriter-cursor">|</span></h1>
                <p class="hero-slide-desc" data-text="Manage your farm with intelligent tools for irrigation, monitoring and planning."><span class="typed-text"></span><span class="typewriter-cursor">|</span></p>
                <div class="hero-slide-buttons">
                  <a href="{{ route('dashboard') }}" class="btn-hero-primary">Manage Farm</a>
                  <a href="{{ route('how-it-works') }}" class="btn-hero-secondary">View Services</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 5 -->
      <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/hero/hero-greenhouse.webp') }}');">
        <div class="hero-slide-overlay"></div>
        <div class="container position-relative">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <div class="hero-slide-content animate-fade-up">
                <h1 class="hero-slide-title" data-text="Growing Agriculture Together"><span class="typed-text"></span><span class="typewriter-cursor">|</span></h1>
                <p class="hero-slide-desc" data-text="Helping farmers build sustainable, profitable and technology-driven businesses."><span class="typed-text"></span><span class="typewriter-cursor">|</span></p>
                <div class="hero-slide-buttons">
                  <a href="{{ route('register') }}" class="btn-hero-primary">Join Today</a>
                  <a href="{{ route('contact') }}" class="btn-hero-secondary">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Navigation -->
    <div class="swiper-button-prev" aria-label="Previous slide"></div>
    <div class="swiper-button-next" aria-label="Next slide"></div>

    <!-- Pagination -->
    <div class="swiper-pagination"></div>
  </div>
</section>
<!-- End Hero Slider -->

<!-- Trust Strip -->
<section class="trust-strip">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-3 text-center mb-3 mb-md-0">
        <div class="trust-item">
          <i class="fas fa-shield-alt trust-icon"></i>
          <div>
            <div style="font-weight:700;font-size:0.9rem;">Verified Farmers</div>
            <div style="font-size:0.8rem;opacity:0.7;">Quality assured</div>
          </div>
        </div>
      </div>
      <div class="col-md-3 text-center mb-3 mb-md-0">
        <div class="trust-item">
          <i class="fas fa-box-open trust-icon"></i>
          <div>
            <div style="font-weight:700;font-size:0.9rem;">Quality Products</div>
            <div style="font-size:0.8rem;opacity:0.7;">Fresh from farm</div>
          </div>
        </div>
      </div>
      <div class="col-md-3 text-center mb-3 mb-md-0">
        <div class="trust-item">
          <i class="fas fa-lock trust-icon"></i>
          <div>
            <div style="font-weight:700;font-size:0.9rem;">Secure Shopping</div>
            <div style="font-size:0.8rem;opacity:0.7;">Protected payments</div>
          </div>
        </div>
      </div>
      <div class="col-md-3 text-center">
        <div class="trust-item">
          <i class="fas fa-shipping-fast trust-icon"></i>
          <div>
            <div style="font-weight:700;font-size:0.9rem;">Reliable Delivery</div>
            <div style="font-size:0.8rem;opacity:0.7;">Nationwide coverage</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Categories Section -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">Explore Categories</div>
      <h2>Agricultural Categories</h2>
      <p>Browse our wide range of agricultural products sourced directly from farmers across the country.</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <a href="{{ route('marketplace.index', ['category' => 'Vegetables']) }}" class="category-card">
          <div class="category-card-img">
            <img src="{{ asset('dist/img/crop-production.jpg') }}" alt="Vegetables">
            <div class="category-card-overlay"></div>
          </div>
          <div class="category-card-body">
            <h5 class="category-card-title">Fresh Vegetables</h5>
            <p class="category-card-text">Locally grown, farm-fresh vegetables delivered daily.</p>
            <span class="category-card-link">Explore <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-6">
        <a href="{{ route('marketplace.index', ['category' => 'Fruits']) }}" class="category-card">
          <div class="category-card-img">
            <img src="{{ asset('dist/img/sustainable-farm.jpg') }}" alt="Fruits">
            <div class="category-card-overlay"></div>
          </div>
          <div class="category-card-body">
            <h5 class="category-card-title">Fresh Fruits</h5>
            <p class="category-card-text">Seasonal fruits sourced from trusted farms.</p>
            <span class="category-card-link">Explore <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-6">
        <a href="{{ route('marketplace.index', ['category' => 'Grains']) }}" class="category-card">
          <div class="category-card-img">
            <img src="{{ asset('dist/img/farm-machinery.jpg') }}" alt="Grains">
            <div class="category-card-overlay"></div>
          </div>
          <div class="category-card-body">
            <h5 class="category-card-title">Grains & Cereals</h5>
            <p class="category-card-text">High-quality grains for every household need.</p>
            <span class="category-card-link">Explore <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-6">
        <a href="{{ route('marketplace.index', ['category' => 'Farm Inputs']) }}" class="category-card">
          <div class="category-card-img">
            <img src="{{ asset('dist/img/agribusiness.jpg') }}" alt="Farm Inputs">
            <div class="category-card-overlay"></div>
          </div>
          <div class="category-card-body">
            <h5 class="category-card-title">Farm Inputs</h5>
            <p class="category-card-text">Seeds, fertilizers, and modern farming tools.</p>
            <span class="category-card-link">Explore <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Featured Products -->
<section class="section section-bg-alt">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">Fresh From Farmers</div>
      <h2>Featured Products</h2>
      <p>Handpicked quality products from our most trusted farmers and sellers.</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="product-card">
          <div class="product-card-img">
            <img src="{{ asset('dist/img/crop-production.jpg') }}" alt="Organic Tomatoes">
            <button class="product-wishlist" aria-label="Add to wishlist">
              <i class="far fa-heart"></i>
            </button>
          </div>
          <div class="product-card-body">
            <div class="product-farmer">
              <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="Farmer" width="24" height="24" style="border-radius:50%;object-fit:cover;">
              <span>Green Valley Farm</span>
            </div>
            <h6 class="product-card-title">Organic Tomatoes</h6>
            <p class="product-card-location"><i class="fas fa-map-marker-alt"></i> Arusha, Tanzania</p>
            <div class="product-card-footer">
              <div>
                <div class="product-price">TZS 2,500<span style="font-size:0.75rem;font-weight:400;">/kg</span></div>
                <div class="product-rating">
                  <i class="fas fa-star"></i>
                  <span>4.8</span>
                </div>
              </div>
              <button class="btn-add-cart">
                <i class="fas fa-cart-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="product-card">
          <div class="product-card-img">
            <img src="{{ asset('dist/img/sustainable-farm.jpg') }}" alt="Fresh Maize">
            <button class="product-wishlist" aria-label="Add to wishlist">
              <i class="far fa-heart"></i>
            </button>
          </div>
          <div class="product-card-body">
            <div class="product-farmer">
              <img src="{{ asset('dist/img/user3-128x128.jpg') }}" alt="Farmer" width="24" height="24" style="border-radius:50%;object-fit:cover;">
              <span>Sunny Acres</span>
            </div>
            <h6 class="product-card-title">Fresh Maize</h6>
            <p class="product-card-location"><i class="fas fa-map-marker-alt"></i> Morogoro, Tanzania</p>
            <div class="product-card-footer">
              <div>
                <div class="product-price">TZS 1,200<span style="font-size:0.75rem;font-weight:400;">/kg</span></div>
                <div class="product-rating">
                  <i class="fas fa-star"></i>
                  <span>4.6</span>
                </div>
              </div>
              <button class="btn-add-cart">
                <i class="fas fa-cart-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="product-card">
          <div class="product-card-img">
            <img src="{{ asset('dist/img/farm-machinery.jpg') }}" alt="Sweet Potatoes">
            <button class="product-wishlist" aria-label="Add to wishlist">
              <i class="far fa-heart"></i>
            </button>
          </div>
          <div class="product-card-body">
            <div class="product-farmer">
              <img src="{{ asset('dist/img/user5-128x128.jpg') }}" alt="Farmer" width="24" height="24" style="border-radius:50%;object-fit:cover;">
              <span>Highland Growers</span>
            </div>
            <h6 class="product-card-title">Sweet Potatoes</h6>
            <p class="product-card-location"><i class="fas fa-map-marker-alt"></i> Iringa, Tanzania</p>
            <div class="product-card-footer">
              <div>
                <div class="product-price">TZS 1,800<span style="font-size:0.75rem;font-weight:400;">/kg</span></div>
                <div class="product-rating">
                  <i class="fas fa-star"></i>
                  <span>4.9</span>
                </div>
              </div>
              <button class="btn-add-cart">
                <i class="fas fa-cart-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="product-card">
          <div class="product-card-img">
            <img src="{{ asset('dist/img/agribusiness.jpg') }}" alt="Farm Fresh Eggs">
            <button class="product-wishlist" aria-label="Add to wishlist">
              <i class="far fa-heart"></i>
            </button>
          </div>
          <div class="product-card-body">
            <div class="product-farmer">
              <img src="{{ asset('dist/img/user7-128x128.jpg') }}" alt="Farmer" width="24" height="24" style="border-radius:50%;object-fit:cover;">
              <span>Coastal Farms</span>
            </div>
            <h6 class="product-card-title">Farm Fresh Eggs</h6>
            <p class="product-card-location"><i class="fas fa-map-marker-alt"></i> Tanga, Tanzania</p>
            <div class="product-card-footer">
              <div>
                <div class="product-price">TZS 400<span style="font-size:0.75rem;font-weight:400;">/pc</span></div>
                <div class="product-rating">
                  <i class="fas fa-star"></i>
                  <span>4.7</span>
                </div>
              </div>
              <button class="btn-add-cart">
                <i class="fas fa-cart-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-5">
      <a href="{{ route('marketplace.index') }}" class="btn-agro-outline">
        View All Products
        <i class="fas fa-arrow-right ml-2"></i>
      </a>
    </div>
  </div>
</section>

<!-- Why SmartAgro -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">Why Choose Us</div>
      <h2>Why SmartAgro?</h2>
      <p>We are building the most trusted digital agricultural marketplace in East Africa.</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="feature-card text-center">
          <div class="feature-icon">
            <i class="fas fa-users"></i>
          </div>
          <h5 class="feature-title">Trusted Farmers</h5>
          <p class="feature-text">Every farmer is verified to ensure quality and reliability for every transaction.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="feature-card text-center">
          <div class="feature-icon">
            <i class="fas fa-seedling"></i>
          </div>
          <h5 class="feature-title">Quality Products</h5>
          <p class="feature-text">Fresh, high-quality agricultural products sourced directly from the farm.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="feature-card text-center">
          <div class="feature-icon">
            <i class="fas fa-laptop"></i>
          </div>
          <h5 class="feature-title">Digital Marketplace</h5>
          <p class="feature-text">A modern platform that makes buying and selling agricultural products simple.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="feature-card text-center">
          <div class="feature-icon">
            <i class="fas fa-handshake"></i>
          </div>
          <h5 class="feature-title">Reliable Connections</h5>
          <p class="feature-text">Building lasting relationships between farmers and buyers across regions.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- How It Works -->
<section class="section section-bg-alt">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">Simple Process</div>
      <h2>How SmartAgro Works</h2>
      <p>Whether you are buying or selling, SmartAgro makes agricultural trade simple and transparent.</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="journey-card">
          <div class="journey-header">
            <div class="journey-badge buyer">For Buyers</div>
          </div>
          <div class="journey-steps">
            <div class="journey-step">
              <div class="journey-step-number">1</div>
              <div>
                <h6>Discover Products</h6>
                <p style="font-size:0.85rem;color:var(--agro-text-muted);">Browse categories and find fresh agricultural products.</p>
              </div>
            </div>
            <div class="journey-step">
              <div class="journey-step-number">2</div>
              <div>
                <h6>Choose & Order</h6>
                <p style="font-size:0.85rem;color:var(--agro-text-muted);">Select products from verified farmers and place orders.</p>
              </div>
            </div>
            <div class="journey-step">
              <div class="journey-step-number">3</div>
              <div>
                <h6>Pay Securely</h6>
                <p style="font-size:0.85rem;color:var(--agro-text-muted);">Complete payment through our secure payment system.</p>
              </div>
            </div>
            <div class="journey-step">
              <div class="journey-step-number">4</div>
              <div>
                <h6>Receive Delivery</h6>
                <p style="font-size:0.85rem;color:var(--agro-text-muted);">Get your order delivered to your doorstep.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="journey-card">
          <div class="journey-header">
            <div class="journey-badge farmer">For Farmers</div>
          </div>
          <div class="journey-steps">
            <div class="journey-step">
              <div class="journey-step-number">1</div>
              <div>
                <h6>Register Free</h6>
                <p style="font-size:0.85rem;color:var(--agro-text-muted);">Create your farmer account and get verified.</p>
              </div>
            </div>
            <div class="journey-step">
              <div class="journey-step-number">2</div>
              <div>
                <h6>List Products</h6>
                <p style="font-size:0.85rem;color:var(--agro-text-muted);">Upload your products with photos, prices, and descriptions.</p>
              </div>
            </div>
            <div class="journey-step">
              <div class="journey-step-number">3</div>
              <div>
                <h6>Receive Orders</h6>
                <p style="font-size:0.85rem;color:var(--agro-text-muted);">Get orders directly from buyers across the platform.</p>
              </div>
            </div>
            <div class="journey-step">
              <div class="journey-step-number">4</div>
              <div>
                <h6>Grow Revenue</h6>
                <p style="font-size:0.85rem;color:var(--agro-text-muted);">Expand your market reach and increase your sales.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Featured Farmers -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">Meet Our Producers</div>
      <h2>Featured Farmers</h2>
      <p>Discover the trusted farmers behind the quality products on our marketplace.</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="farmer-card">
          <div class="farmer-card-img">
            <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="Green Valley Farm" style="object-fit:cover;">
            <div class="farmer-verified">
              <i class="fas fa-check-circle"></i> Verified
            </div>
          </div>
          <div class="farmer-card-body">
            <h6 class="farmer-card-name">Green Valley Farm</h6>
            <p class="farmer-card-location"><i class="fas fa-map-marker-alt"></i> Arusha, Tanzania</p>
            <p class="farmer-card-specialty">Vegetables • Fruits</p>
            <a href="{{ route('marketplace.index') }}" class="farmer-card-link">Shop Products <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="farmer-card">
          <div class="farmer-card-img">
            <img src="{{ asset('dist/img/user3-128x128.jpg') }}" alt="Sunny Acres" style="object-fit:cover;">
            <div class="farmer-verified">
              <i class="fas fa-check-circle"></i> Verified
            </div>
          </div>
          <div class="farmer-card-body">
            <h6 class="farmer-card-name">Sunny Acres</h6>
            <p class="farmer-card-location"><i class="fas fa-map-marker-alt"></i> Morogoro, Tanzania</p>
            <p class="farmer-card-specialty">Grains • Cereals</p>
            <a href="{{ route('marketplace.index') }}" class="farmer-card-link">Shop Products <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="farmer-card">
          <div class="farmer-card-img">
            <img src="{{ asset('dist/img/user5-128x128.jpg') }}" alt="Highland Growers" style="object-fit:cover;">
            <div class="farmer-verified">
              <i class="fas fa-check-circle"></i> Verified
            </div>
          </div>
          <div class="farmer-card-body">
            <h6 class="farmer-card-name">Highland Growers</h6>
            <p class="farmer-card-location"><i class="fas fa-map-marker-alt"></i> Iringa, Tanzania</p>
            <p class="farmer-card-specialty">Fruits • Vegetables</p>
            <a href="{{ route('marketplace.index') }}" class="farmer-card-link">Shop Products <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="farmer-card">
          <div class="farmer-card-img">
            <img src="{{ asset('dist/img/user7-128x128.jpg') }}" alt="Coastal Farms" style="object-fit:cover;">
            <div class="farmer-verified">
              <i class="fas fa-check-circle"></i> Verified
            </div>
          </div>
          <div class="farmer-card-body">
            <h6 class="farmer-card-name">Coastal Farms</h6>
            <p class="farmer-card-location"><i class="fas fa-map-marker-alt"></i> Tanga, Tanzania</p>
            <p class="farmer-card-specialty">Spices • Coconut</p>
            <a href="{{ route('marketplace.index') }}" class="farmer-card-link">Shop Products <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Mission / Storytelling -->
<section class="section section-split">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="{{ asset('dist/img/agribusiness.jpg') }}" alt="Our Mission" class="img-fluid rounded-lg shadow-lg" style="object-fit:cover;width:100%;height:400px;">
      </div>
      <div class="col-lg-6 ps-lg-5">
        <div class="section-eyebrow">Our Mission</div>
        <h2 class="mb-3">Empowering Agriculture Through Digital Innovation</h2>
        <p class="text-muted mb-4">SmartAgro was built with a clear mission: to bridge the gap between farmers and markets. We believe that every farmer deserves access to better markets, fair prices, and direct connections with buyers.</p>
        <p class="text-muted mb-4">Through technology, we are transforming agricultural trade in Tanzania and East Africa—making it transparent, efficient, and accessible to everyone.</p>
        <a href="{{ route('about') }}" class="btn-agro">
          Learn More About Us
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Agro News -->
<section class="section section-bg">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">Stay Updated</div>
      <h2>Agro News & Insights</h2>
      <p>Latest agricultural news, market updates, and farming insights.</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-4">
        <div class="news-card">
          <div class="news-card-img">
            <img src="{{ asset('dist/img/crop-production.jpg') }}" alt="News">
          </div>
          <div class="news-card-body">
            <div class="news-card-meta">
              <span class="news-card-category">Market Update</span>
              <span class="news-card-date">Jun 2026</span>
            </div>
            <h6 class="news-card-title">New Agricultural Market Trends for the Season</h6>
            <p class="news-card-text">Understanding current market dynamics to help farmers and buyers make informed decisions.</p>
            <a href="{{ route('agro-news') }}" class="news-card-link">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="news-card">
          <div class="news-card-img">
            <img src="{{ asset('dist/img/sustainable-farm.jpg') }}" alt="News">
          </div>
          <div class="news-card-body">
            <div class="news-card-meta">
              <span class="news-card-category">Farming Tips</span>
              <span class="news-card-date">Jun 2026</span>
            </div>
            <h6 class="news-card-title">Sustainable Farming Practices for Higher Yields</h6>
            <p class="news-card-text">Expert advice on modern techniques that improve productivity while protecting the environment.</p>
            <a href="{{ route('agro-news') }}" class="news-card-link">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="news-card">
          <div class="news-card-img">
            <img src="{{ asset('dist/img/farm-machinery.jpg') }}" alt="News">
          </div>
          <div class="news-card-body">
            <div class="news-card-meta">
              <span class="news-card-category">Farmer Opportunity</span>
              <span class="news-card-date">May 2026</span>
            </div>
            <h6 class="news-card-title">Expanding Market Access for Smallholder Farmers</h6>
            <p class="news-card-text">How digital platforms are creating new opportunities for small and medium-scale farmers.</p>
            <a href="{{ route('agro-news') }}" class="news-card-link">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Farmer CTA -->
<section class="section-cta">
  <div class="container">
    <div class="cta-card">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h2 class="cta-title">Ready to Grow Your Market?</h2>
          <p class="cta-text">Join SmartAgro and connect your agricultural products with more buyers. Start selling today and grow your agricultural business.</p>
        </div>
        <div class="col-lg-4 text-center mt-4 mt-lg-0">
          <a href="{{ route('register') }}" class="btn-hero-primary">
            Become a Farmer
            <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Newsletter -->
<section class="section-newsletter">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 mb-4 mb-lg-0">
        <div class="section-eyebrow text-white">Stay Connected</div>
        <h2 class="text-white mb-0">Agricultural Insights & Market Updates</h2>
      </div>
      <div class="col-lg-7">
        <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Newsletter subscription coming soon.');">
          <div class="newsletter-input-group">
            <input type="email" placeholder="Enter your email address" required>
            <button type="submit" class="btn-hero-primary">
              Subscribe
              <i class="fas fa-paper-plane ml-2"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
