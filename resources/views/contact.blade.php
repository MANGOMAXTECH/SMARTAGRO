@extends('layouts.frontend')

@section('title', 'Contact Us — SmartAgro')

@section('content')
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Contact Us</div>
      <h1 class="text-white">Get In Touch</h1>
      <p style="color:rgba(255,255,255,0.9);max-width:600px;">Have questions or need support? Our team is here to help farmers and buyers succeed.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4">
        <div class="contact-info-card">
          <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
          <h5>Our Location</h5>
          <p class="text-muted mb-0">Tanzania</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="contact-info-card">
          <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
          <h5>Phone</h5>
          <p class="text-muted mb-0">+255 XXX XXX XXX</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="contact-info-card">
          <div class="contact-icon"><i class="fas fa-envelope"></i></div>
          <h5>Email</h5>
          <p class="text-muted mb-0">info@smartagro.co.tz</p>
        </div>
      </div>
    </div>
  </div>
</section>
