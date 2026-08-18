@extends('layouts.frontend')

<!--
    Buyer Support Page
    Dedicated support resources for buyers using SmartAgro.
-->
@section('title', 'Buyer Support — SmartAgro')

@section('content')
<!-- Hero Section -->
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Support</div>
      <h1 class="text-white">Buyer Support Center</h1>
      <p style="color:rgba(255,255,255,0.9);max-width:600px;">Get help with purchases, payments, delivery, and account management on SmartAgro.</p>
    </div>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="agro-breadcrumb" aria-label="Breadcrumb">
  <a href="{{ route('home') }}">Home</a>
  <span class="breadcrumb-separator">/</span>
  <a href="{{ route('services') }}">Services</a>
  <span class="breadcrumb-separator">/</span>
  <span class="breadcrumb-current">Buyer Support</span>
</nav>

<!-- Support Overview -->
<section class="content-section light">
  <div class="container">
    <div class="section-header">
      <h2>How Can We Help?</h2>
      <p>Browse our support resources or contact our buyer-focused support team.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="info-card text-center h-100">
          <div class="info-card-icon"><i class="fas fa-shopping-cart"></i></div>
          <h3>Placing Orders</h3>
          <p>Guidance on browsing products, adding to cart, and checkout process.</p>
          <a href="{{ route('how-it-works') }}" class="agro-card-link">Learn More</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="info-card text-center h-100">
          <div class="info-card-icon"><i class="fas fa-wallet"></i></div>
          <h3>Payments</h3>
          <p>Accepted payment methods, payout timelines, and refund policies.</p>
          <a href="{{ route('returns') }}" class="agro-card-link">Payment Info</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="info-card text-center h-100">
          <div class="info-card-icon"><i class="fas fa-truck"></i></div>
          <h3>Delivery</h3>
          <p>Delivery options, timelines, and tracking your order status.</p>
          <a href="{{ route('delivery') }}" class="agro-card-link">Delivery Info</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="info-card text-center h-100">
          <div class="info-card-icon"><i class="fas fa-box-open"></i></div>
          <h3>Returns</h3>
          <p>Return and refund policies for agricultural products.</p>
          <a href="{{ route('returns') }}" class="agro-card-link">Returns Info</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Support -->
<section class="content-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-header">
          <h2>Contact Our Buyer Support Team</h2>
        </div>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="contact-info-card">
              <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
              <h5>Phone</h5>
              <p class="text-muted mb-0">+255 XXX XXX XXX</p>
              <p class="text-muted" style="font-size:0.8rem;">Mon–Sat, 8:00 AM – 6:00 PM</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-info-card">
              <div class="contact-icon"><i class="fas fa-envelope"></i></div>
              <h5>Email</h5>
              <p class="text-muted mb-0">support@smartagro.co.tz</p>
              <p class="text-muted" style="font-size:0.8rem;">24-hour response</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-info-card">
              <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
              <h5>Office</h5>
              <p class="text-muted mb-0">Dar es Salaam, Tanzania</p>
              <p class="text-muted" style="font-size:0.8rem;">Visit by appointment</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
