@extends('layouts.frontend')

<!--
    Terms & Conditions Page
    Governs the use of the SmartAgro platform by all users.
-->
@section('title', 'Terms & Conditions — SmartAgro')

@section('content')
<!-- Hero Section -->
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Legal</div>
      <h1 class="text-white">Terms & Conditions</h1>
      <p style="color:rgba(255,255,255,0.9);max-width:600px;">The terms and conditions governing the use of the SmartAgro agricultural marketplace platform.</p>
    </div>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="agro-breadcrumb" aria-label="Breadcrumb">
  <a href="{{ route('home') }}">Home</a>
  <span class="breadcrumb-separator">/</span>
  <span class="breadcrumb-current">Terms & Conditions</span>
</nav>

<!-- Terms Content -->
<section class="content-section light">
  <div class="container">
    <div class="content-container">
      <div class="content-text">
        <p><strong>Last Updated:</strong> August 4, 2026</p>

        <h2>1. Acceptance of Terms</h2>
        <p>These Terms & Conditions ("Terms") govern your access to and use of the SmartAgro agricultural marketplace platform. By accessing or using our services, you agree to be bound by these Terms. If you do not agree with any part of these Terms, you may not use our services.</p>

        <h2>2. Eligibility</h2>
        <p>To use SmartAgro, you must be at least 18 years old and capable of forming a legally binding agreement. Farmers must be registered producers of agricultural products in Tanzania or East Africa. Buyers must be legitimate businesses or individuals purchasing for legitimate purposes.</p>

        <h2>3. Account Registration</h2>
        <p>You must register for an account to access certain features of our platform. You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account. You agree to notify us immediately of any unauthorized use of your account.</p>

        <h2>4. Marketplace Transactions</h2>
        <p><strong>For Farmers:</strong> You are responsible for accurately listing your products, including photos, descriptions, pricing, and availability. You must deliver products that match your listings in quality and quantity.</p>
        <p><strong>For Buyers:</strong> You are responsible for reviewing product listings carefully before placing orders. Payment is processed through our secure payment system.</p>

        <h2>5. Fees and Commissions</h2>
        <p>SmartAgro charges a commission fee on successful transactions. The current commission rate is 8% for standard listings, with variations for premium features. All fees are disclosed clearly before listing or purchasing.</p>

        <h2>6. Prohibited Activities</h2>
        <p>You agree not to:</p>
        <ul>
          <li>List products that are illegal, unsafe, or misrepresented</li>
          <li>Use our platform for fraudulent or misleading purposes</li>
          <li>Interfere with or disrupt our platform's functionality</li>
          <li>Violate any applicable laws or regulations</li>
          <li>Upload harmful content or malware</li>
        </ul>

        <h2>7. Intellectual Property</h2>
        <p>All content, trademarks, logos, and intellectual property on SmartAgro are owned by or licensed to us. You may not use, copy, or modify any content without our prior written consent.</p>

        <h2>8. Limitation of Liability</h2>
        <p>SmartAgro is not liable for any indirect, incidental, or consequential damages arising from your use of our platform. Our total liability for any claim shall not exceed the amount paid by you for the product or service giving rise to the claim.</p>

        <h2>9. Governing Law</h2>
        <p>These Terms are governed by the laws of Tanzania. Any disputes shall be resolved through arbitration in Dar es Salaam, Tanzania.</p>

        <h2>10. Changes to Terms</h2>
        <p>We may update these Terms from time to time. We will notify you of any material changes by posting the new Terms on our platform with an updated "Last Updated" date.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="section" style="background:linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);">
  <div class="container text-center">
    <div class="section-header">
      <h2 style="color:var(--agro-text);">Have Questions About Our Terms?</h2>
      <p>Contact our legal team for any questions regarding these terms.</p>
    </div>
    <a href="{{ route('contact') }}" class="btn-agro">Contact Legal Team</a>
  </div>
</section>
@endsection
