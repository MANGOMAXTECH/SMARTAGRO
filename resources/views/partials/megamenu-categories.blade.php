<div class="mega-menu">
  <div class="mega-menu-inner">
    <div class="mega-menu-section">
      <h4>Fresh Produce</h4>
      <ul>
        <li><a href="{{ route('marketplace.index', ['category' => 'Vegetables']) }}"><i class="fas fa-carrot menu-icon"></i> Vegetables</a></li>
        <li><a href="{{ route('marketplace.index', ['category' => 'Fruits']) }}"><i class="fas fa-apple-alt menu-icon"></i> Fruits</a></li>
        <li><a href="{{ route('marketplace.index', ['category' => 'Herbs']) }}"><i class="fas fa-mortar-pestle menu-icon"></i> Herbs</a></li>
      </ul>
    </div>

    <div class="mega-menu-section">
      <h4>Food Products</h4>
      <ul>
        <li><a href="{{ route('marketplace.index', ['category' => 'Grains']) }}"><i class="fas fa-wheat menu-icon"></i> Grains</a></li>
        <li><a href="{{ route('marketplace.index', ['category' => 'Cereals']) }}"><i class="fas fa-bread-slice menu-icon"></i> Cereals</a></li>
        <li><a href="{{ route('marketplace.index', ['category' => 'Legumes']) }}"><i class="fas fa-seedling menu-icon"></i> Legumes</a></li>
      </ul>
    </div>

    <div class="mega-menu-section">
      <h4>Farm Inputs</h4>
      <ul>
        <li><a href="{{ route('marketplace.index', ['category' => 'Seeds']) }}"><i class="fas fa-seedling menu-icon"></i> Seeds</a></li>
        <li><a href="{{ route('marketplace.index', ['category' => 'Fertilizers']) }}"><i class="fas fa-flask menu-icon"></i> Fertilizers</a></li>
        <li><a href="{{ route('marketplace.index', ['category' => 'Farm Tools']) }}"><i class="fas fa-tractor menu-icon"></i> Farm Tools</a></li>
      </ul>
    </div>

    <div class="mega-menu-section">
      <h4>More Categories</h4>
      <ul>
        <li><a href="{{ route('marketplace.index', ['category' => 'Honey']) }}"><i class="fas fa-jar menu-icon"></i> Honey</a></li>
        <li><a href="{{ route('marketplace.index', ['category' => 'Dairy']) }}"><i class="fas fa-cow menu-icon"></i> Dairy</a></li>
        <li><a href="{{ route('marketplace.index', ['category' => 'Poultry']) }}"><i class="fas fa-feather menu-icon"></i> Poultry</a></li>
        <li><a href="{{ route('marketplace.index') }}"><i class="fas fa-th-large menu-icon"></i> View All Categories</a></li>
      </ul>
    </div>
  </div>
</div>
