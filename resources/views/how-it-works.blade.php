@extends('layouts.frontend')

@section('title', 'How It Works — SmartAgro')

@section('content')
<section class="section-hero-marketplace" style="background:linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);color:#fff;">
  <div class="container">
    <div class="section-header" style="color:#fff;">
      <div class="section-eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">Process</div>
      <h1 class="text-white">How SmartAgro Works</h1>
      <p style="color:rgba(255,255,255,0.9);max-width:600px;">Simple steps to start buying and selling agricultural products.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="journey-card">
          <div class="journey-header">
            <div class="journey-badge buyer">For Buyers</div>
          </div>
          <div class="journey-steps">
            <div class="journey-step">
              <div class="journey-step-number">1</div>
              <div>
                <h6>Discover Products</h6>
                <p style="font-size:0.85rem;color:var(--agro-text-muted);">Browse categories and find fresh agricultural products.</p>
              </div>
            </div>
            <div class="journey-step">
              <div class="journey-step-number">2</div>
              <div>
                <h6>Choose & Order</h6>
                <p style="font-size:0.85rem;color:var(--agro-text-muted);">Select products from verified farmers and place orders.</p>
              </div>
            </div>
            <div class="journey-step">
              <div class="journey-step-number">3</div>
              <div>
                <h6>Pay Securely</h6>
                <p style="font-size:0.85rem;color:var(--agro-text-muted);">Complete payment through our secure payment system.</p>
              </div>
            </div>
            <div class="journey-step">
              <div class="journey-step-number">4</div>
              <div>
                <h6>Receive Delivery</h6>
                <p style="font-size:0.85rem;color:var(--agro-text-muted);">Get your order delivered to your doorstep.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="journey-card">
          <div class="journey-header">
            <div class="journey-badge farmer">For Farmers</div>
          </div>
          <div class="journey-steps">
            <div class="journey-step">
              <div class="journey-step-number">1</div>
              <div>
                <h6>Register Free</h6>
                <p style="font-size:0.85rem;color:var(--agro-text-muted);">Create your farmer account and get verified.</p>
              </div>
            </div>
            <div class="journey-step">
              <div class="journey-step-number">2</div>
              <div>
                <h6>List Products</h6>
                <p style="font-size:0.85rem;color:var(--agro-text-muted);">Upload your products with photos, prices, and descriptions.</p>
              </div>
            </div>
            <div class="journey-step">
              <div class="journey-step-number">3</div>
              <div>
                <h6>Receive Orders</h6>
                <p style="font-size:0.85rem;color:var(--agro-text-muted);">Get orders directly from buyers across the platform.</p>
              </div>
            </div>
            <div class="journey-step">
              <div class="journey-step-number">4</div>
              <div>
                <h6>Grow Revenue</h6>
                <p style="font-size:0.85rem;color:var(--agro-text-muted);">Expand your market reach and increase your sales.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
