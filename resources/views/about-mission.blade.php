@extends('layouts.frontend')

@section('title', 'Our Mission — SmartAgro')

@section('content')
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Mission</div>
      <h1 class="text-white">Our Mission</h1>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="{{ asset('dist/img/agribusiness.jpg') }}" alt="Our Mission" class="img-fluid rounded-lg shadow-lg" style="object-fit:cover;width:100%;height:400px;">
      </div>
      <div class="col-lg-6 ps-lg-5">
        <div class="section-eyebrow">What Drives Us</div>
        <h2 class="mb-3">Empowering Agriculture Through Digital Innovation</h2>
        <p class="text-muted mb-4">SmartAgro was built with a clear mission: to bridge the gap between farmers and markets. We believe that every farmer deserves access to better markets, fair prices, and direct connections with buyers.</p>
        <p class="text-muted mb-4">Through technology, we are transforming agricultural trade in Tanzania and East Africa—making it transparent, efficient, and accessible to everyone.</p>
        <a href="{{ route('about') }}" class="btn-agro">Back to About <i class="fas fa-arrow-right ml-2"></i></a>
      </div>
    </div>
  </div>
</section>
@endsection
