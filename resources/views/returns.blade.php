@extends('layouts.frontend')

<!--
    Returns Policy Page
    Details SmartAgro's return and refund policies for agricultural products.
-->
@section('title', 'Returns Policy — SmartAgro')

@section('content')
<!-- Hero Section -->
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Returns</div>
      <h1 class="text-white">Returns & Refunds Policy</h1>
      <p style="color:rgba(255,255,255,0.9);max-width:600px;">We want you to be completely satisfied with your SmartAgro purchases. Review our returns and refund policy.</p>
    </div>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="agro-breadcrumb" aria-label="Breadcrumb">
  <a href="{{ route('home') }}">Home</a>
  <span class="breadcrumb-separator">/</span>
  <span class="breadcrumb-current">Returns Policy</span>
</nav>

<!-- Policy Content -->
<section class="content-section light">
  <div class="container">
    <div class="content-container">
      <div class="content-text">
        <h2>Our Commitment to Quality</h2>
        <p>SmartAgro is committed to ensuring you receive fresh, high-quality agricultural products. If for any reason you are not satisfied with your purchase, we offer a fair returns and refund process.</p>

        <h3>Eligibility for Returns</h3>
        <p>Returns are accepted within 24 hours of delivery for perishable products (vegetables, fruits, dairy, poultry) and within 3 days of delivery for non-perishable items (seeds, fertilizers, farm tools). Products must be in their original condition and packaging.</p>

        <h3>Non-Returnable Items</h3>
        <ul>
          <li>Products that have been opened, used, or damaged after delivery</li>
          <li>Seeds that have been planted or compromised</li>
          <li>Custom or special-order items</li>
          <li>Products with expired shelf life</li>
        </ul>

        <h3>Return Process</h3>
        <ol>
          <li>Contact our support team within the eligible return period</li>
          <li>Provide your order number and photos of the product condition</li>
          <li>Receive return instructions and authorization</li>
          <li>Return the product using the designated shipping method</li>
          <li>Receive refund or replacement upon inspection</li>
        </ol>

        <h2>Refund Policy</h2>
        <p>Refunds are processed within 3-5 business days after we receive and inspect your returned item. Refunds will be issued to the original payment method used during checkout. Please note that shipping costs are non-refundable unless the return is due to our error (wrong item shipped, damaged goods, etc.).</p>

        <h3>Farmer Returns</h3>
        <p>If you are a farmer and need to return farm inputs (seeds, fertilizers, tools), please contact our farmer support team. Some items may be eligible for exchange or store credit depending on the product and reason for return.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="section" style="background:linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);">
  <div class="container text-center">
    <div class="section-header">
      <h2 style="color:var(--agro-text);">Need to Return an Item?</h2>
      <p>Contact our support team and we'll help you with the return process.</p>
    </div>
    <a href="{{ route('farmer-support') }}" class="btn-agro">Contact Support</a>
  </div>
</section>
@endsection
