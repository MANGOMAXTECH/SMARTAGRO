@extends('layouts.frontend')

@section('title', 'Why SmartAgro — SmartAgro')

@section('content')
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Why Choose Us</div>
      <h1 class="text-white">Why SmartAgro?</h1>
      <p style="color:rgba(255,255,255,0.9);max-width:600px;">The most trusted digital agricultural marketplace in East Africa.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="feature-card text-center">
          <div class="feature-icon"><i class="fas fa-users"></i></div>
          <h5 class="feature-title">Trusted Farmers</h5>
          <p class="feature-text">Every farmer is verified to ensure quality and reliability.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="feature-card text-center">
          <div class="feature-icon"><i class="fas fa-seedling"></i></div>
          <h5 class="feature-title">Quality Products</h5>
          <p class="feature-text">Fresh, high-quality products sourced directly from farms.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="feature-card text-center">
          <div class="feature-icon"><i class="fas fa-laptop"></i></div>
          <h5 class="feature-title">Digital Marketplace</h5>
          <p class="feature-text">Modern platform making agricultural trade simple and transparent.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="feature-card text-center">
          <div class="feature-icon"><i class="fas fa-handshake"></i></div>
          <h5 class="feature-title">Reliable Connections</h5>
          <p class="feature-text">Building lasting relationships between farmers and buyers.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
