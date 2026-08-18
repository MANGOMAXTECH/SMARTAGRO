@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">My Wishlist</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Wishlist</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row mb-4">
      <div class="col-lg-3 col-6">
        <div class="card stat-card products">
          <div class="card-body text-center">
            <div class="stat-number">23</div>
            <div class="stat-label">Wishlist Items</div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card users">
          <div class="card-body text-center">
            <div class="stat-number">5</div>
            <div class="stat-label">Favorite Farmers</div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card growth">
          <div class="card-body text-center">
            <div class="stat-number">15</div>
            <div class="stat-label">Saved Products</div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card pending">
          <div class="card-body text-center">
            <div class="stat-number">3</div>
            <div class="stat-label">Recently Viewed</div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <img src="{{ asset('dist/img/product-placeholder.png') }}" class="card-img-top" alt="Product" style="height:180px;object-fit:cover;">
          <div class="card-body">
            <h5 class="card-title">Organic Bananas</h5>
            <p class="text-muted" style="font-size:0.85rem;">Green Valley Farm</p>
            <h4 class="text-success mb-0">$2.50/kg</h4>
            <div class="mt-2">
              <button class="btn btn-agro btn-sm btn-block"><i class="fas fa-cart-plus mr-1"></i> Add to Cart</button>
              <button class="btn btn-outline-danger btn-sm btn-block mt-1" data-confirm="Remove from wishlist?"><i class="fas fa-heart-broken mr-1"></i> Remove</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <img src="{{ asset('dist/img/product-placeholder.png') }}" class="card-img-top" alt="Product" style="height:180px;object-fit:cover;">
          <div class="card-body">
            <h5 class="card-title">Free Range Eggs</h5>
            <p class="text-muted" style="font-size:0.85rem;">Sunny Acres</p>
            <h4 class="text-success mb-0">$6.00/dozen</h4>
            <div class="mt-2">
              <button class="btn btn-agro btn-sm btn-block"><i class="fas fa-cart-plus mr-1"></i> Add to Cart</button>
              <button class="btn btn-outline-danger btn-sm btn-block mt-1" data-confirm="Remove from wishlist?"><i class="fas fa-heart-broken mr-1"></i> Remove</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <img src="{{ asset('dist/img/product-placeholder.png') }}" class="card-img-top" alt="Product" style="height:180px;object-fit:cover;">
          <div class="card-body">
            <h5 class="card-title">Sweet Potatoes</h5>
            <p class="text-muted" style="font-size:0.85rem;">Farm Fresh Co.</p>
            <h4 class="text-success mb-0">$1.80/kg</h4>
            <div class="mt-2">
              <button class="btn btn-agro btn-sm btn-block"><i class="fas fa-cart-plus mr-1"></i> Add to Cart</button>
              <button class="btn btn-outline-danger btn-sm btn-block mt-1" data-confirm="Remove from wishlist?"><i class="fas fa-heart-broken mr-1"></i> Remove</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <img src="{{ asset('dist/img/product-placeholder.png') }}" class="card-img-top" alt="Product" style="height:180px;object-fit:cover;">
          <div class="card-body">
            <h5 class="card-title">Almonds</h5>
            <p class="text-muted" style="font-size:0.85rem;">Nut Valley Farms</p>
            <h4 class="text-success mb-0">$12.00/kg</h4>
            <div class="mt-2">
              <button class="btn btn-agro btn-sm btn-block"><i class="fas fa-cart-plus mr-1"></i> Add to Cart</button>
              <button class="btn btn-outline-danger btn-sm btn-block mt-1" data-confirm="Remove from wishlist?"><i class="fas fa-heart-broken mr-1"></i> Remove</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection