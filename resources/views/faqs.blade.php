@extends('layouts.frontend')

@section('title', 'Frequently Asked Questions — SmartAgro')

@section('content')
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Support</div>
      <h1 class="text-white">Frequently Asked Questions</h1>
      <p style="color:rgba(255,255,255,0.9);max-width:600px;">Find answers to common questions about SmartAgro.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="faq-item">
          <h6>What is SmartAgro?</h6>
          <p class="text-muted">SmartAgro is a digital agricultural marketplace connecting farmers with buyers across Tanzania and East Africa.</p>
        </div>
        <div class="faq-item">
          <h6>How do I become a farmer on SmartAgro?</h6>
          <p class="text-muted">Click the Become a Farmer button and complete the registration process. Our team will verify your details.</p>
        </div>
        <div class="faq-item">
          <h6>Is SmartAgro free to use?</h6>
          <p class="text-muted">Joining SmartAgro is free for buyers. Farmers pay a small commission only when they make a sale.</p>
        </div>
        <div class="faq-item">
          <h6>How are payments handled?</h6>
          <p class="text-muted">We support secure mobile money and bank transfers to protect both farmers and buyers.</p>
        </div>
        <div class="faq-item">
          <h6>Do you deliver across Tanzania?</h6>
          <p class="text-muted">Yes, we support delivery across major regions. Delivery options are shown at checkout.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
