@extends('layouts.frontend')

<!--
    Selling Guide Page
    Comprehensive guide for farmers on how to sell on SmartAgro.
    Covers registration, product listing, order management, and best practices.
-->
@section('title', 'Selling Guide — SmartAgro')

@section('content')
<!-- Hero Section: Green gradient banner introducing the selling guide -->
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Guide</div>
      <h1 class="text-white">SmartAgro Selling Guide</h1>
      <p style="color:rgba(255,255,255,0.9);max-width:600px;">Your complete resource for selling agricultural products on SmartAgro. From registration to receiving payments.</p>
    </div>
  </div>
</section>

<!-- Breadcrumb: Shows the user's path through the site -->
<nav class="agro-breadcrumb" aria-label="Breadcrumb">
  <a href="{{ route('home') }}">Home</a>
  <span class="breadcrumb-separator">/</span>
  <a href="{{ route('services') }}">Services</a>
  <span class="breadcrumb-separator">/</span>
  <span class="breadcrumb-current">Selling Guide</span>
</nav>

<!-- Content Section: Step-by-step selling guide -->
<section class="content-section light">
  <div class="container">
    <div class="content-container">
      <div class="content-text">
        <h2>Start Selling on SmartAgro</h2>
        <p>SmartAgro makes it easy for farmers to connect directly with buyers and sell their produce at fair prices. Follow this guide to get started and maximize your sales potential.</p>

        <h3>Step 1: Register Your Farm</h3>
        <p>Create your free SmartAgro farmer account by clicking "Become a Farmer" in the navigation. You'll need to provide basic information about your farm, including location, farm size, and the types of products you grow. Our verification team will review your application within 1-2 business days.</p>

        <h3>Step 2: List Your Products</h3>
        <p>Once verified, start listing your products. Include high-quality photos, accurate descriptions, harvest dates, pricing, and available quantities. The more complete your listings, the more likely buyers will choose your products.</p>

        <h3>Step 3: Manage Orders</h3>
        <p>When buyers place orders, you'll receive notifications via email and SMS. Confirm orders promptly, prepare the products for pickup or delivery, and update the order status. SmartAgro handles secure payments and provides transparent tracking.</p>

        <h3>Step 4: Grow Your Business</h3>
        <p>Use our analytics dashboard to track your sales performance, identify your best-selling products, and find opportunities to expand. Build your reputation with verified badges and positive buyer reviews.</p>

        <h2>Selling Best Practices</h2>
        <ul>
          <li><strong>Quality First:</strong> Deliver fresh, high-quality produce to build trust and encourage repeat buyers.</li>
          <li><strong>Timely Communication:</strong> Respond to buyer inquiries within 24 hours for better conversion rates.</li>
          <li><strong>Accurate Information:</strong> Be precise about harvest dates, product sizes, and pricing to avoid disputes.</li>
          <li><strong>Competitive Pricing:</strong> Research market prices regularly and adjust to stay competitive.</li>
          <li><strong>Fast Fulfillment:</strong> Process and ship orders promptly to earn positive reviews.</li>
        </ul>

        <h2>Pricing & Fees</h2>
        <p>SmartAgro charges a small commission (typically 5-10% of the sale price) plus any applicable payment processing fees. There are no listing fees or subscription costs. View our full <a href="{{ route('terms') }}">Terms & Conditions</a> for details.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section: Encouraging users to start selling -->
<section class="section" style="background:linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);">
  <div class="container text-center">
    <div class="section-header">
      <h2 style="color:var(--agro-text);">Ready to Start Selling?</h2>
      <p>Join thousands of successful farmers on SmartAgro today.</p>
    </div>
    <a href="{{ route('register') }}" class="btn-hero-primary">Become a Seller Today <i class="fas fa-arrow-right ml-2"></i></a>
  </div>
</section>
@endsection
