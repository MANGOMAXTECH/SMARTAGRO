@extends('layouts.frontend')

<!--
    Seller Benefits Page
    Highlights the advantages of becoming a SmartAgro seller.
-->
@section('title', 'Seller Benefits — SmartAgro')

@section('content')
<!-- Hero Section: Green gradient banner -->
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Benefits</div>
      <h1 class="text-white">Benefits of Selling on SmartAgro</h1>
      <p style="color:rgba(255,255,255,0.9);max-width:600px;">Why thousands of farmers choose SmartAgro as their preferred marketplace to sell agricultural products.</p>
    </div>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="agro-breadcrumb" aria-label="Breadcrumb">
  <a href="{{ route('home') }}">Home</a>
  <span class="breadcrumb-separator">/</span>
  <a href="{{ route('services') }}">Services</a>
  <span class="breadcrumb-separator">/</span>
  <span class="breadcrumb-current">Seller Benefits</span>
</nav>

<!-- Benefits Overview -->
<section class="content-section light">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">Why Choose SmartAgro</div>
      <h2>Advantages of Our Marketplace</h2>
      <p>SmartAgro provides farmers with tools, market access, and support to grow their businesses.</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-globe-americas"></i></div>
          <h3>Nationwide Reach</h3>
          <p>Connect with buyers across Tanzania and East Africa — no geographical boundaries limit your sales potential.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-check-circle"></i></div>
          <h3>Trusted Platform</h3>
          <p>Our verified farmer program builds trust with buyers, leading to higher conversion rates and customer loyalty.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-chart-line"></i></div>
          <h3>Dedicated Analytics</h3>
          <p>Track your sales performance, identify trends, and optimize your product listings with our seller dashboard.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-lock"></i></div>
          <h3>Secure Payments</h3>
          <p>We handle all payment processing securely, protecting both you and your buyers with escrow services.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-headset"></i></div>
          <h3>Dedicated Support</h3>
          <p>Our farmer-focused support team is available to help with product listings, orders, and technical issues.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-tag"></i></div>
          <h3>Low Commissions</h3>
          <p>Competitive commission rates ensure you keep more from every sale. No hidden fees or subscription costs.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="section" style="background:linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);">
  <div class="container text-center">
    <div class="section-header">
      <h2 style="color:var(--agro-text);">Join Our Community of Trusted Sellers</h2>
      <p>Start growing your agricultural business with SmartAgro today.</p>
    </div>
    <a href="{{ route('register') }}" class="btn-hero-primary">Become a Seller <i class="fas fa-arrow-right ml-2"></i></a>
  </div>
</section>
@endsection
