@extends('layouts.frontend')

@section('title', 'Agro News — SmartAgro')

@section('content')
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Insights</div>
      <h1 class="text-white">Agro News & Insights</h1>
      <p style="color:rgba(255,255,255,0.9);max-width:600px;">Latest agricultural news, market updates, and farming insights.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4">
        <div class="news-card">
          <div class="news-card-img">
            <img src="{{ asset('dist/img/crop-production.jpg') }}" alt="News">
          </div>
          <div class="news-card-body">
            <div class="news-card-meta">
              <span class="news-card-category">Market Update</span>
              <span class="news-card-date">Jun 2026</span>
            </div>
            <h6 class="news-card-title">New Agricultural Market Trends for the Season</h6>
            <p class="news-card-text">Understanding current market dynamics to help farmers and buyers make informed decisions.</p>
            <a href="{{ route('agro-news') }}" class="news-card-link">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="news-card">
          <div class="news-card-img">
            <img src="{{ asset('dist/img/sustainable-farm.jpg') }}" alt="News">
          </div>
          <div class="news-card-body">
            <div class="news-card-meta">
              <span class="news-card-category">Farming Tips</span>
              <span class="news-card-date">Jun 2026</span>
            </div>
            <h6 class="news-card-title">Sustainable Farming Practices for Higher Yields</h6>
            <p class="news-card-text">Expert advice on modern techniques that improve productivity while protecting the environment.</p>
            <a href="{{ route('agro-news') }}" class="news-card-link">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="news-card">
          <div class="news-card-img">
            <img src="{{ asset('dist/img/farm-machinery.jpg') }}" alt="News">
          </div>
          <div class="news-card-body">
            <div class="news-card-meta">
              <span class="news-card-category">Farmer Opportunity</span>
              <span class="news-card-date">May 2026</span>
            </div>
            <h6 class="news-card-title">Expanding Market Access for Smallholder Farmers</h6>
            <p class="news-card-text">How digital platforms are creating new opportunities for small and medium-scale farmers.</p>
            <a href="{{ route('agro-news') }}" class="news-card-link">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
