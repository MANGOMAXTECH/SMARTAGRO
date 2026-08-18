@extends('layouts.frontend')

<!--
    Farmer Support Page
    Dedicated support resources for farmers using SmartAgro.
-->
@section('title', 'Farmer Support — SmartAgro')

@section('content')
<!-- Hero Section -->
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Support</div>
      <h1 class="text-white">Farmer Support Center</h1>
      <p style="color:rgba(255,255,255,0.9);max-width:600px;">Get help with your SmartAgro farmer account, product listings, orders, and payments.</p>
    </div>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="agro-breadcrumb" aria-label="Breadcrumb">
  <a href="{{ route('home') }}">Home</a>
  <span class="breadcrumb-separator">/</span>
  <a href="{{ route('services') }}">Services</a>
  <span class="breadcrumb-separator">/</span>
  <span class="breadcrumb-current">Farmer Support</span>
</nav>

<!-- Support Overview -->
<section class="content-section light">
  <div class="container">
    <div class="section-header">
      <h2>How Can We Help?</h2>
      <p>Browse our support resources or contact our farmer-focused support team.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="info-card text-center h-100">
          <div class="info-card-icon"><i class="fas fa-user-cog"></i></div>
          <h3>Account Help</h3>
          <p>Registration, verification, profile updates, and account recovery assistance.</p>
          <a href="{{ route('faqs') }}" class="agro-card-link">Learn More</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="info-card text-center h-100">
          <div class="info-card-icon"><i class="fas fa-box-tissue"></i></div>
          <h3>Product Listings</h3>
          <p>Guidance on creating quality listings, adding photos, and pricing products.</p>
          <a href="{{ route('selling-guide') }}" class="agro-card-link">View Guide</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="info-card text-center h-100">
          <div class="info-card-icon"><i class="fas fa-receipt"></i></div>
          <h3>Order Management</h3>
          <p>Managing orders, confirmations, cancellations, and fulfillment instructions.</p>
          <a href="{{ route('order-tracking') }}" class="agro-card-link">Track Orders</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="info-card text-center h-100">
          <div class="info-card-icon"><i class="fas fa-wallet"></i></div>
          <h3>Payments</h3>
          <p>Payout schedules, payment methods, and financial reporting.</p>
          <a href="{{ route('faqs') }}" class="agro-card-link">FAQs</a>
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
          <h2>Contact Our Farmer Support Team</h2>
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
              <p class="text-muted mb-0">farmers@smartagro.co.tz</p>
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
