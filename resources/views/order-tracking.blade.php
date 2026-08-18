@extends('layouts.frontend')

<!--
    Order Tracking Page
    Allows buyers and farmers to track order status and delivery progress.
-->
@section('title', 'Order Tracking — SmartAgro')

@section('content')
<!-- Hero Section -->
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Tracking</div>
      <h1 class="text-white">Track Your Order</h1>
      <p style="color:rgba(255,255,255,0.9);max-width:600px;">Real-time tracking for your agricultural product orders from farm to doorstep.</p>
    </div>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="agro-breadcrumb" aria-label="Breadcrumb">
  <a href="{{ route('home') }}">Home</a>
  <span class="breadcrumb-separator">/</span>
  <a href="{{ route('services') }}">Services</a>
  <span class="breadcrumb-separator">/</span>
  <span class="breadcrumb-current">Order Tracking</span>
</nav>

<!-- Tracking Search -->
<section class="content-section light">
  <div class="container">
    <div class="section-header">
      <h2>Find Your Order</h2>
      <p>Enter your order number to track delivery progress.</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="agro-card">
          <div class="agro-card-body">
            <form>
              <div class="mb-3">
                <label for="order-number" class="form-label fw-bold">Order Number</label>
                <input type="text" class="form-control" id="order-number" placeholder="Enter order number (e.g. SA-2026-001234)" style="border-radius:var(--agro-radius);">
              </div>
              <button type="submit" class="btn-agro w-100">Track Order</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Order Status Guide -->
<section class="content-section">
  <div class="container">
    <div class="section-header">
      <h2>Order Status Guide</h2>
      <p>Understand where your order is in the delivery process.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="info-card text-center h-100">
          <div class="info-card-icon"><i class="fas fa-check-double"></i></div>
          <h3>Order Placed</h3>
          <p>Your order has been received and is being processed by the farmer.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="info-card text-center h-100">
          <div class="info-card-icon"><i class="fas fa-box-open"></i></div>
          <h3>Processing</h3>
          <p>The farmer is preparing your order for pickup or delivery.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="info-card text-center h-100">
          <div class="info-card-icon"><i class="fas fa-shipping-fast"></i></div>
          <h3>In Transit</h3>
          <p>Your order is on its way with our logistics partner.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="info-card text-center h-100">
          <div class="info-card-icon"><i class="fas fa-home"></i></div>
          <h3>Delivered</h3>
          <p>Your order has been delivered. Confirm receipt and leave a review.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Link -->
<section class="section" style="background:var(--agro-bg);">
  <div class="container text-center">
    <div class="section-header">
      <h2 style="color:var(--agro-text);">Questions About Your Order?</h2>
      <p>Visit our FAQ or contact support for assistance.</p>
    </div>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="{{ route('faqs') }}" class="btn-agro">FAQs</a>
      <a href="{{ route('farmer-support') }}" class="btn-agro-outline">Support</a>
    </div>
  </div>
</section>
@endsection
