@extends('layouts.frontend')

@section('title', 'New Agricultural Market Trends — SmartAgro')

@section('content')
<!-- Hero Section: Featured image with article title -->
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Insights</div>
      <h1 class="text-white">New Agricultural Market Trends for the Season</h1>
      <p class="text-white-50" style="max-width:600px;">Understanding current market dynamics to help farmers and buyers make informed decisions.</p>
      <div class="d-flex align-items-center justify-content-center gap-3 mt-3" style="font-size:0.85rem;color:rgba(255,255,255,0.7);">
        <span><i class="fas fa-calendar mr-1"></i> June 15, 2026</span>
        <span><i class="fas fa-user mr-1"></i> SmartAgro Editorial</span>
      </div>
    </div>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="agro-breadcrumb" aria-label="Breadcrumb">
  <a href="{{ route('home') }}">Home</a>
  <span class="breadcrumb-separator">/</span>
  <a href="{{ route('agro-news') }}">Agro News</a>
  <span class="breadcrumb-separator">/</span>
