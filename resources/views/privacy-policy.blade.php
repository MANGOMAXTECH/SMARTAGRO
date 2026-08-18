@extends('layouts.frontend')

<!--
    Privacy Policy Page
    Outlines how SmartAgro collects, uses, and protects user data.
-->
@section('title', 'Privacy Policy — SmartAgro')

@section('content')
<!-- Hero Section -->
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Privacy</div>
      <h1 class="text-white">Privacy Policy</h1>
      <p style="color:rgba(255,255,255,0.9);max-width:600px;">How SmartAgro collects, uses, and protects your personal information.</p>
    </div>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="agro-breadcrumb" aria-label="Breadcrumb">
  <a href="{{ route('home') }}">Home</a>
  <span class="breadcrumb-separator">/</span>
  <span class="breadcrumb-current">Privacy Policy</span>
</nav>

<!-- Policy Content -->
<section class="content-section light">
  <div class="container">
    <div class="content-container">
      <div class="content-text">
        <p><strong>Last Updated:</strong> August 4, 2026</p>

        <h2>Introduction</h2>
        <p>SmartAgro ("we", "us", or "our") operates the SmartAgro agricultural marketplace platform. This Privacy Policy describes how we collect, use, and disclose your personal information when you use our services.</p>

        <h2>Information We Collect</h2>
        <p>We collect information you provide directly to us, including:</p>
        <ul>
          <li><strong>Account Information:</strong> Name, email address, phone number, farm details, and location</li>
          <li><strong>Payment Information:</strong> Transaction history and payment details processed through our payment partners</li>
          <li><strong>Product Information:</strong> Product listings, photos, descriptions, and pricing data</li>
          <li><strong>Communications:</strong> Any messages, reviews, or feedback you provide through our platform</li>
          <li><strong>Usage Data:</strong> Information about how you use our platform, including pages visited and actions taken</li>
        </ul>

        <h3>How We Use Your Information</h3>
        <p>We use your information to:</p>
        <ul>
          <li>Create and manage your account</li>
          <li>Facilitate transactions between buyers and farmers</li>
          <li>Process payments and prevent fraud</li>
          <li>Send important updates about your orders and account</li>
          <li>Improve our platform and develop new features</li>
          <li>Respond to your inquiries and support requests</li>
        </ul>

        <h2>Data Protection & Security</h2>
        <p>We implement industry-standard security measures including encryption, secure servers, and access controls to protect your personal information. Your data is stored on secure servers located within East Africa.</p>

        <h2>Sharing Your Information</h2>
        <p>We do not sell your personal information. We may share your information with:</p>
        <ul>
          <li><strong>Farmers or Buyers:</strong> Only information necessary to complete your transactions</li>
          <li><strong>Service Providers:</strong> Trusted partners who assist with payments, delivery, and platform operations</li>
          <li><strong>Legal Requirements:</strong> When required by law or to protect our rights and safety</li>
        </ul>

        <h2>Your Rights</h2>
        <p>You have the right to access, correct, or delete your personal information. You may also opt out of non-essential communications at any time by contacting us at privacy@smartagro.co.tz.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="section" style="background:linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);">
  <div class="container text-center">
    <div class="section-header">
      <h2 style="color:var(--agro-text);">Questions About Privacy?</h2>
      <p>Contact our data protection team for any privacy-related inquiries.</p>
    </div>
    <a href="{{ route('contact') }}" class="btn-agro">Contact Us</a>
  </div>
</section>
@endsection
