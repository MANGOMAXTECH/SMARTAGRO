@extends('layouts.frontend')

<!--
    Agricultural Resources Page
    Educational and informational resources for farmers and buyers.
-->
@section('title', 'Agricultural Resources — SmartAgro')

@section('content')
<!-- Hero Section -->
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Resources</div>
      <h1 class="text-white">Agricultural Resources</h1>
      <p style="color:rgba(255,255,255,0.9);max-width:600px;">Expert guides, best practices, and educational content to help farmers grow better and buyers make informed decisions.</p>
    </div>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="agro-breadcrumb" aria-label="Breadcrumb">
  <a href="{{ route('home') }}">Home</a>
  <span class="breadcrumb-separator">/</span>
  <a href="{{ route('services') }}">Services</a>
  <span class="breadcrumb-separator">/</span>
  <span class="breadcrumb-current">Resources</span>
</nav>

<!-- Resources Overview -->
<section class="content-section light">
  <div class="container">
    <div class="section-header">
      <h2>Resource Categories</h2>
      <p>Browse our library of agricultural resources organized by topic.</p>
    </div>
    <div class="row g-4">
      <div class="col-sm-6 col-lg-4">
        <div class="agro-card h-100">
          <div class="agro-card-img">
            <img src="{{ asset('dist/img/crop-production.jpg') }}" alt="Farming Best Practices" class="img-fluid" style="width:100%;height:200px;object-fit:cover;">
          </div>
          <div class="agro-card-body">
            <h5 class="agro-card-title">Farming Best Practices</h5>
            <p class="agro-card-text">Expert advice on crop management, soil health, pest control, and sustainable farming techniques.</p>
            <a href="{{ route('how-it-works') }}" class="agro-card-link">Explore <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="agro-card h-100">
          <div class="agro-card-img">
            <img src="{{ asset('dist/img/sustainable-farm.jpg') }}" alt="Sustainable Farming" class="img-fluid" style="width:100%;height:200px;object-fit:cover;">
          </div>
          <div class="agro-card-body">
            <h5 class="agro-card-title">Sustainable Agriculture</h5>
            <p class="agro-card-text">Learn about eco-friendly farming methods, water conservation, and organic certification.</p>
            <a href="{{ route('agro-news') }}" class="agro-card-link">Explore <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="agro-card h-100">
          <div class="agro-card-img">
            <img src="{{ asset('dist/img/farm-machinery.jpg') }}" alt="Farm Technology" class="img-fluid" style="width:100%;height:200px;object-fit:cover;">
          </div>
          <div class="agro-card-body">
            <h5 class="agro-card-title">Farm Technology</h5>
            <p class="agro-card-text">Discover the latest agricultural tools, machinery, and digital solutions for modern farming.</p>
            <a href="{{ route('marketplace.index') }}" class="agro-card-link">Explore Tools</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Market Insights -->
<section class="content-section">
  <div class="container">
    <div class="section-header">
      <h2>Latest Insights</h2>
      <p>Stay informed with the latest agricultural news and market updates.</p>
    </div>
    <div class="row g-4 justify-content-center text-center">
      <div class="col-md-4">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-chart-line"></i></div>
          <h3>Market Prices</h3>
          <p>Daily updates on produce prices across major markets in Tanzania.</p>
          <a href="{{ route('agro-news') }}" class="agro-card-link">View Prices</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-calendar-alt"></i></div>
          <h3>Seasonal Guide</h3>
          <p>Planting and harvesting calendars for Tanzania's key crops.</p>
          <a href="{{ route('agro-news') }}" class="agro-card-link">View Calendar</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-book-open"></i></div>
          <h3>Growing Guides</h3>
          <p>Detailed cultivation guides for vegetables, fruits, and grains.</p>
          <a href="{{ route('agro-news') }}" class="agro-card-link">Read Guides</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="section" style="background:linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);">
  <div class="container text-center">
    <div class="section-header">
      <h2 style="color:var(--agro-text);">Need More Information?</h2>
      <p>Contact our agricultural experts or read the latest from our blog.</p>
    </div>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="{{ route('contact') }}" class="btn-agro">Contact Experts</a>
      <a href="{{ route('agro-news') }}" class="btn-agro-outline">Read Agro News</a>
    </div>
  </div>
</section>
@endsection
