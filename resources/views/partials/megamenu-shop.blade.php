<div class="mega-menu">
  <div class="mega-menu-inner">
    <div class="mega-menu-section">
      <h4>Products</h4>
      <ul>
        <li><a href="{{ route('marketplace.index') }}"><i class="fas fa-th-large menu-icon"></i> All Products</a></li>
        <li><a href="{{ route('marketplace.index', ['filter' => 'new']) }}"><i class="fas fa-sparkles menu-icon"></i> New Products</a></li>
        <li><a href="{{ route('marketplace.index', ['filter' => 'featured']) }}"><i class="fas fa-star menu-icon"></i> Featured Products</a></li>
        <li><a href="{{ route('marketplace.index', ['filter' => 'bestsellers']) }}"><i class="fas fa-fire menu-icon"></i> Best Sellers</a></li>
        <li><a href="{{ route('marketplace.index', ['filter' => 'deals']) }}"><i class="fas fa-tags menu-icon"></i> Special Offers</a></li>
        <li><a href="{{ route('marketplace.index', ['filter' => 'recommended']) }}"><i class="fas fa-thumbs-up menu-icon"></i> Recommended</a></li>
        <li><a href="{{ route('marketplace.index', ['filter' => 'popular']) }}"><i class="fas fa-chart-line menu-icon"></i> Popular Products</a></li>
      </ul>
    </div>

    <div class="mega-menu-section">
      <h4>Categories</h4>
      <ul>
        <li><a href="{{ route('marketplace.index', ['category' => 'Fresh Produce']) }}"><i class="fas fa-leaf menu-icon"></i> Fresh Produce</a></li>
        <li><a href="{{ route('marketplace.index', ['category' => 'Fruits']) }}"><i class="fas fa-apple-alt menu-icon"></i> Fruits</a></li>
        <li><a href="{{ route('marketplace.index', ['category' => 'Vegetables']) }}"><i class="fas fa-carrot menu-icon"></i> Vegetables</a></li>
        <li><a href="{{ route('marketplace.index', ['category' => 'Grains']) }}"><i class="fas fa-wheat menu-icon"></i> Grains</a></li>
      </ul>
    </div>

    <div class="mega-menu-section">
      <h4>Farm Inputs</h4>
      <ul>
        <li><a href="{{ route('marketplace.index', ['category' => 'Seeds']) }}"><i class="fas fa-seedling menu-icon"></i> Seeds</a></li>
        <li><a href="{{ route('marketplace.index', ['category' => 'Fertilizers']) }}"><i class="fas fa-flask menu-icon"></i> Fertilizers</a></li>
        <li><a href="{{ route('marketplace.index', ['category' => 'Farm Tools']) }}"><i class="fas fa-tractor menu-icon"></i> Farm Tools</a></li>
        <li><a href="{{ route('marketplace.index') }}"><i class="fas fa-box-open menu-icon"></i> View All</a></li>
      </ul>
    </div>

    <div class="mega-menu-section">
      <h4>Sell &amp; Services</h4>
      <ul>
        <li><a href="{{ route('register') }}"><i class="fas fa-user-plus menu-icon"></i> Become a Seller</a></li>
        <li><a href="{{ route('farmers.index') }}"><i class="fas fa-store menu-icon"></i> Seller Dashboard</a></li>
        <li><a href="{{ route('selling-guide') }}"><i class="fas fa-book menu-icon"></i> Selling Guide</a></li>
        <li><a href="{{ route('delivery') }}"><i class="fas fa-truck menu-icon"></i> Delivery</a></li>
        <li><a href="{{ route('farmer-support') }}"><i class="fas fa-headset menu-icon"></i> Customer Support</a></li>
      </ul>
    </div>
  </div>
</div>
