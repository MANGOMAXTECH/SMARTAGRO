@extends('layouts.frontend')

<!--
    Farmer Profile Page
    Displays a single farmer's profile, products, and story.
-->
@section('title', 'Green Valley Farm — SmartAgro')

@section('content')
<!-- Hero Section: Farmer banner with farm image -->
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Farmer Profile</div>
      <h1 class="text-white">Green Valley Farm</h1>
      <p style="color:rgba(255,255,255,0.9);max-width:600px;">Verified farmer specializing in fresh vegetables and fruits from Arusha, Tanzania.</p>
    </div>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="agro-breadcrumb" aria-label="Breadcrumb">
  <a href="{{ route('home') }}">Home</a>
  <span class="breadcrumb-separator">/</span>
  <a href="{{ route('farmers.index') }}">Farmers</a>
  <span class="breadcrumb-separator">/</span>
  <span class="breadcrumb-current">Green Valley Farm</span>
</nav>

<!-- Farmer Header: Profile image, name, location, verified badge -->
<section class="content-section light">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-4 text-center">
        <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="Green Valley Farm" class="img-fluid rounded-circle shadow-lg" style="width:180px;height:180px;object-fit:cover;border:4px solid var(--agro-gold);">
        <div class="farmer-verified" style="margin:0 auto;transform:translateX(0);">
          <i class="fas fa-check-circle"></i> Verified Farmer
        </div>
      </div>
      <div class="col-lg-8">
        <h2 style="color:var(--agro-green);margin-bottom:1rem;">Green Valley Farm</h2>
        <p class="text-muted mb-2"><i class="fas fa-map-marker-alt mr-2"></i> Arusha, Tanzania</p>
        <p class="text-muted mb-2"><i class="fas fa-box-open mr-2"></i> Specializes in Vegetables, Fruits, Herbs</p>
        <p class="text-muted mb-3"><i class="fas fa-award mr-2"></i> Member since 2023</p>
        <p class="text-muted">Green Valley Farm has been supplying fresh, organic produce to the SmartAgro marketplace since 2023. Our farm is located in the fertile Arusha region and specializes in seasonal vegetables and heirloom fruits grown using sustainable farming practices.</p>
      </div>
    </div>
  </div>
</section>

<!-- Farmer Stats -->
<section class="content-section">
  <div class="container">
    <div class="row g-4 text-center">
      <div class="col-6 col-md-3">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-star"></i></div>
          <h3 style="font-size:1.5rem;">4.8</h3>
          <p class="text-muted mb-0">Average Rating</p>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-box"></i></div>
          <h3 style="font-size:1.5rem;">240+</h3>
          <p class="text-muted mb-0">Products Sold</p>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-users"></i></div>
          <h3 style="font-size:1.5rem;">180+</h3>
          <p class="text-muted mb-0">Happy Customers</p>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-award"></i></div>
          <h3 style="font-size:1.5rem;">3 yrs</h3>
          <p class="text-muted mb-0">On SmartAgro</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Available Products -->
<section class="content-section light">
  <div class="container">
    <div class="section-header">
      <h2>Available Products</h2>
      <p>Fresh products currently available from Green Valley Farm.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="agro-card h-100">
          <div class="agro-card-img">
            <img src="{{ asset('dist/img/products/tomatoes.jpg') }}" alt="Fresh Tomatoes" class="img-fluid" style="width:100%;height:180px;object-fit:cover;">
          </div>
          <div class="agro-card-body">
            <h5 class="agro-card-title">Fresh Tomatoes</h5>
            <p class="agro-card-text">Vine-ripened Roma tomatoes, harvested weekly. Sweet and juicy, perfect for cooking and salads.</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="fw-bold" style="color:var(--agro-green);">TZS 8,000/kg</span>
              <a href="{{ route('marketplace.index') }}" class="agro-card-link">View Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="agro-card h-100">
          <div class="agro-card-img">
            <img src="{{ asset('dist/img/products/lettuce.jpg') }}" alt="Fresh Lettuce" class="img-fluid" style="width:100%;height:180px;object-fit:cover;">
          </div>
          <div class="agro-card-body">
            <h5 class="agro-card-title">Green Lettuce</h5>
            <p class="agro-card-text">Crisp, fresh lettuce heads grown in our greenhouse. Harvested daily for maximum freshness.</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="fw-bold" style="color:var(--agro-green);">TZS 5,500/head</span>
              <a href="{{ route('marketplace.index') }}" class="agro-card-link">View Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="agro-card h-100">
          <div class="agro-card-img">
            <img src="{{ asset('dist/img/products/herbs.jpg') }}" alt="Fresh Herbs" class="img-fluid" style="width:100%;height:180px;object-fit:cover;">
          </div>
          <div class="agro-card-body">
            <h5 class="agro-card-title">Fresh Herb Bundle</h5>
            <p class="agro-card-text">Assorted fresh herbs including basil, cilantro, and parsley. Perfect for any kitchen garden.</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="fw-bold" style="color:var(--agro-green);">TZS 3,500/bundle</span>
              <a href="{{ route('marketplace.index') }}" class="agro-card-link">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Reviews Section -->
<section class="content-section">
  <div class="container">
    <div class="section-header">
      <h2>Customer Reviews</h2>
    </div>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="faq-item">
          <div class="d-flex justify-content-between mb-2">
            <strong>Amina Hassan</strong>
            <div style="color:var(--agro-gold);">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
            </div>
          </div>
          <p class="text-muted mb-0">"The tomatoes from Green Valley Farm are the best I've ever purchased! Consistently fresh and full of flavor."</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="faq-item">
          <div class="d-flex justify-content-between mb-2">
            <strong>David Mwangi</strong>
            <div style="color:var(--agro-gold);">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
          </div>
          <p class="text-muted mb-0">"Excellent quality lettuce and the delivery was on time. Will definitely be ordering again."</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="section" style="background:linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);">
  <div class="container text-center">
    <div class="section-header">
      <h2 style="color:var(--agro-text);">Want to Buy From This Farmer?</h2>
      <p>Browse all verified farmer products on SmartAgro.</p>
    </div>
    <a href="{{ route('marketplace.index') }}" class="btn-hero-primary">Shop Products <i class="fas fa-arrow-right ml-2"></i></a>
  </div>
</section>
@endsection
