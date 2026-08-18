@extends('layouts.frontend')

<!--
    Farmer Benefits Page
    Highlights the advantages of joining SmartAgro as a farmer.
-->
@section('title', 'Farmer Benefits — SmartAgro')

@section('content')
<!-- Hero Section -->
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">For Farmers</div>
      <h1 class="text-white">Benefits for Farmers on SmartAgro</h1>
      <p style="color:rgba(255,255,255,0.9);max-width:600px;">SmartAgro empowers farmers with fair prices, direct market access, and digital tools to grow their businesses.</p>
    </div>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="agro-breadcrumb" aria-label="Breadcrumb">
  <a href="{{ route('home') }}">Home</a>
  <span class="breadcrumb-separator">/</span>
  <span class="breadcrumb-current">Farmer Benefits</span>
</nav>

<!-- Benefits Overview -->
<section class="content-section light">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">Why SmartAgro for Farmers</div>
      <h2>Grow Your Farm with SmartAgro</h2>
      <p>We remove the middlemen and connect you directly with buyers for better prices and faster payments.</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-tag"></i></div>
          <h3>Fair Prices</h3>
          <p>Get fair prices by selling directly to buyers. No middleman markups — you set competitive rates with market transparency.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-mobile-alt"></i></div>
          <h3>Mobile Commerce</h3>
          <p>List products, manage orders, and receive payments all from your mobile phone — no computer needed.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-wallet"></i></div>
          <h3>Fast Payments</h3>
          <p>Secure mobile money and bank transfers with fast payouts so you can reinvest in your farm immediately.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-chart-pie"></i></div>
          <h3>Sales Analytics</h3>
          <p>Track your sales performance, identify best-selling products, and discover new market opportunities.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-shield-alt"></i></div>
          <h3>Verified Trust</h3>
          <p>Earn verified farmer badges to build buyer confidence and command premium prices for your produce.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="info-card h-100">
          <div class="info-card-icon"><i class="fas fa-truck"></i></div>
          <h3>Logistics Support</h3>
          <p>We help coordinate pickup and delivery with trusted logistics partners at affordable rates.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- How It Works for Farmers -->
<section class="content-section">
  <div class="container">
    <div class="section-header">
      <h2>How It Works for Farmers</h2>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="agro-card text-center h-100">
          <div class="agro-card-body">
            <div class="journey-step-number" style="margin:0 auto 1rem;">1</div>
            <h5 class="agro-card-title">Register</h5>
            <p class="agro-card-text">Create your free farmer profile and get verified by our team.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="agro-card text-center h-100">
          <div class="agro-card-body">
            <div class="journey-step-number" style="margin:0 auto 1rem;">2</div>
            <h5 class="agro-card-title">List Products</h5>
            <p class="agro-card-text">Add your products with photos, prices, and harvest details.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="agro-card text-center h-100">
          <div class="agro-card-body">
            <div class="journey-step-number" style="margin:0 auto 1rem;">3</div>
            <h5 class="agro-card-title">Receive Orders</h5>
            <p class="agro-card-text">Get orders directly from buyers across the region.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="agro-card text-center h-100">
          <div class="agro-card-body">
            <div class="journey-step-number" style="margin:0 auto 1rem;">4</div>
            <h5 class="agro-card-title">Get Paid</h5>
            <p class="agro-card-text">Receive fast payments and grow your farm business.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="section" style="background:linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);">
  <div class="container text-center">
    <div class="section-header">
      <h2 style="color:var(--agro-text);">Ready to Grow Your Farm?</h2>
      <p>Join SmartAgro today and start connecting with buyers directly.</p>
    </div>
    <a href="{{ route('register') }}" class="btn-hero-primary">Become a Farmer <i class="fas fa-arrow-right ml-2"></i></a>
  </div>
</section>
@endsection
