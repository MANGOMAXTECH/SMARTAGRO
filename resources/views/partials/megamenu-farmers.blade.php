<div class="mega-menu">
  <div class="mega-menu-inner">
    <div class="mega-menu-section">
      <h4>Discover Farmers</h4>
      <ul>
        <li><a href="{{ route('farmers.index') }}"><i class="fas fa-users menu-icon"></i> Browse Farmers</a></li>
        <li><a href="{{ route('farmers.index', ['filter' => 'location']) }}"><i class="fas fa-map-marker-alt menu-icon"></i> Farmer Locations</a></li>
        <li><a href="{{ route('farmers.index', ['filter' => 'products']) }}"><i class="fas fa-box-open menu-icon"></i> Farmer Products</a></li>
        <li><a href="{{ route('farmers.index', ['filter' => 'verified']) }}"><i class="fas fa-check-circle menu-icon"></i> Verified Farmers</a></li>
      </ul>
    </div>

    <div class="mega-menu-section">
      <h4>Featured Farmers</h4>
      <ul>
        <li><a href="{{ route('farmers.index', ['filter' => 'top-sellers']) }}"><i class="fas fa-trophy menu-icon"></i> Top Sellers</a></li>
        <li><a href="{{ route('farmers.index', ['filter' => 'popular']) }}"><i class="fas fa-heart menu-icon"></i> Popular Farmers</a></li>
        <li><a href="{{ route('farmers.index', ['filter' => 'new']) }}"><i class="fas fa-user-plus menu-icon"></i> New Farmers</a></li>
      </ul>
    </div>

    <div class="mega-menu-section">
      <h4>Sell With SmartAgro</h4>
      <ul>
        <li><a href="{{ route('register') }}"><i class="fas fa-id-card menu-icon"></i> Become a Farmer</a></li>
        <li><a href="{{ route('seller-benefits') }}"><i class="fas fa-gift menu-icon"></i> Seller Benefits</a></li>
        <li><a href="{{ route('selling-guide') }}"><i class="fas fa-book menu-icon"></i> How Selling Works</a></li>
      </ul>
    </div>

    <div class="mega-menu-section mega-menu-highlight">
      <div>
        <h5>Support Local Farmers</h5>
        <p>Discover quality products directly from trusted farmers in your community.</p>
        <ul class="highlight-resources-list">
          <li><a href="{{ route('resources') }}"><i class="fas fa-tractor menu-icon"></i> Farmer Resources</a></li>
          <li><a href="{{ route('how-it-works') }}"><i class="fas fa-graduation-cap menu-icon"></i> Training Programs</a></li>
          <li><a href="{{ route('faqs') }}"><i class="fas fa-life-ring menu-icon"></i> Farm Support</a></li>
        </ul>
      </div>
      <a href="{{ route('farmers.index') }}" class="btn-sm">Explore Farmers</a>
    </div>
  </div>
</div>
