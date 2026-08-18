@extends('layouts.frontend')

@section('title', 'Delivery Information — SmartAgro')

@section('content')
<!-- Hero Section -->
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Delivery</div>
      <h1 class="text-white">Delivery & Logistics</h1>
      <p style="color:rgba(255,255,255,0.9);max-width:600px;">Fresh produce delivery across Tanzania with real-time tracking and cold-chain logistics for agricultural products.</p>
    </div>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="agro-breadcrumb" aria-label="Breadcrumb">
  <a href="{{ route('home') }}">Home</a>
  <span class="breadcrumb-separator">/</span>
  <a href="{{ route('services') }}">Services</a>
  <span class="breadcrumb-separator">/</span>
  <span class="breadcrumb-current">Delivery</span>
</nav>

<!-- Delivery Overview -->
