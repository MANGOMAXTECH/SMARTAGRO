@extends('layouts.frontend')

@section('title', 'Our Services — SmartAgro')

@section('content')
<!-- Hero Section: Green gradient banner introducing SmartAgro's service suite -->
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Services</div>
      <h1 class="text-white">Comprehensive Agricultural Services</h1>
      <p style="color:rgba(255,255,255,0.9);max-width:600px;">End-to-end support for farmers and buyers — from product delivery to expert resources.</p>
    </div>
  </div>
</section>

<!-- Breadcrumb: Helps users understand their location in the site hierarchy -->
<nav class="agro-breadcrumb" aria-label="Breadcrumb">
  <a href="{{ route('home') }}">Home</a>
  <span class="breadcrumb-separator">/</span>
  <span class="breadcrumb-current">Services</span>
</nav>

<!-- Services Overview: Cards linking to individual service pages -->
<section class="content-section">
