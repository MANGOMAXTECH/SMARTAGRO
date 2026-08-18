<footer class="site-footer">
  <div class="footer-cta">
    <div class="container">
      <h3>Grow Better. Trade Better. Connect Through SmartAgro.</h3>
      <p>Join thousands of farmers and buyers already using our marketplace.</p>
      <div>
        <a href="{{ route('marketplace.index') }}" class="btn-hero-primary">Explore Marketplace</a>
        <a href="{{ route('register') }}" class="btn-hero-secondary">Become a Farmer</a>
      </div>
    </div>
  </div>

  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="footer-brand">
            <h4>SMARTAGRO</h4>
            <p>Connecting farmers, buyers and agricultural markets through digital technology. Building trust, transparency, and growth for the agricultural community.</p>
            <div class="footer-social">
              <a href="https://www.facebook.com/smartagro" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/smartagro" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
              <a href="https://www.youtube.com/smartagro" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
              <a href="https://www.twitter.com/smartagro" aria-label="X"><i class="fab fa-x-twitter"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 mb-4">
          <div class="footer-column">
            <h5>Marketplace</h5>
            <ul>
              <li><a href="{{ route('marketplace.index') }}">Shop Products</a></li>
              <li><a href="{{ route('marketplace.index') }}">Categories</a></li>
              <li><a href="{{ route('marketplace.index', ['category' => 'Fresh Produce']) }}">Fresh Produce</a></li>
              <li><a href="{{ route('marketplace.index', ['category' => 'Farm Inputs']) }}">Farm Inputs</a></li>
              <li><a href="{{ route('marketplace.index', ['filter' => 'featured']) }}">Featured Products</a></li>
              <li><a href="{{ route('marketplace.index', ['filter' => 'deals']) }}">Special Offers</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 mb-4">
          <div class="footer-column">
            <h5>For Farmers</h5>
            <ul>
              <li><a href="{{ route('register') }}">Become a Farmer</a></li>
              <li><a href="{{ route('farmer-benefits') }}">Farmer Benefits</a></li>
              <li><a href="{{ route('selling-guide') }}">Seller Guide</a></li>
              <li><a href="{{ route('farmer-support') }}">Farmer Support</a></li>
              <li><a href="{{ route('resources') }}">Farmer Resources</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 mb-4">
          <div class="footer-column">
            <h5>Customer Support</h5>
            <ul>
              <li><a href="{{ route('how-it-works') }}">How It Works</a></li>
              <li><a href="{{ route('delivery') }}">Delivery</a></li>
              <li><a href="{{ route('order-tracking') }}">Order Tracking</a></li>
              <li><a href="{{ route('returns') }}">Returns</a></li>
              <li><a href="{{ route('faqs') }}">FAQs</a></li>
              <li><a href="{{ route('contact') }}">Contact Support</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-6 mb-4">
          <div class="footer-column">
            <h5>Contact SmartAgro</h5>
            <div class="footer-contact-item">
              <i class="fas fa-map-marker-alt"></i>
              <span>Tanzania</span>
            </div>
            <div class="footer-contact-item">
              <i class="fas fa-phone-alt"></i>
              <span>+255 XXX XXX XXX</span>
            </div>
            <div class="footer-contact-item">
              <i class="fas fa-envelope"></i>
              <span>info@smartagro.co.tz</span>
            </div>
            <div class="footer-contact-item">
              <i class="fas fa-clock"></i>
              <span>Mon – Sat<br>8:00 AM – 6:00 PM</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row py-4 border-top border-secondary border-opacity-10">
      <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
        <span>&copy; {{ date('Y') }} SmartAgro. All Rights Reserved.</span>
      </div>
      <div class="col-md-6 text-center text-md-end">
        <a href="{{ route('privacy') }}">Privacy Policy</a>
        <a href="{{ route('terms') }}">Terms & Conditions</a>
        <a href="{{ route('contact') }}">Contact</a>
      </div>
    </div>
  </div>
</footer>
