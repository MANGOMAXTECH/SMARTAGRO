@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Marketplace</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Marketplace</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row mb-3">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search products...">
                  <div class="input-group-append">
                    <button class="btn btn-agro"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <select class="form-control">
                  <option>All Categories</option>
                  <option>Fruits</option>
                  <option>Vegetables</option>
                  <option>Grains</option>
                  <option>Organic</option>
                </select>
              </div>
              <div class="col-md-3">
                <select class="form-control">
                  <option>Price: Low to High</option>
                  <option>Price: High to Low</option>
                  <option>Newest</option>
                  <option>Top Rated</option>
                </select>
              </div>
              <div class="col-md-2">
                <button class="btn btn-agro btn-block"><i class="fas fa-filter mr-1"></i> Filter</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <img src="{{ asset('dist/img/product-placeholder.png') }}" class="card-img-top" alt="Product" style="height:200px;object-fit:cover;">
          <div class="card-body">
            <h5 class="card-title">Organic Tomatoes</h5>
            <p class="text-muted" style="font-size:0.85rem;">Green Valley Farm</p>
            <div class="d-flex justify-content-between align-items-center">
              <h4 class="text-success mb-0">$3.50/kg</h4>
              <span class="badge badge-active">In Stock</span>
            </div>
            <div class="mt-2">
              <span class="text-warning"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i></span>
              <small class="text-muted">(42 reviews)</small>
            </div>
            <div class="mt-2">
              <button class="btn btn-agro btn-sm btn-block"><i class="fas fa-cart-plus mr-1"></i> Add to Cart</button>
              <button class="btn btn-outline-danger btn-sm btn-block mt-1"><i class="fas fa-heart mr-1"></i> Wishlist</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <img src="{{ asset('dist/img/product-placeholder.png') }}" class="card-img-top" alt="Product" style="height:200px;object-fit:cover;">
          <div class="card-body">
            <h5 class="card-title">Fresh Corn</h5>
            <p class="text-muted" style="font-size:0.85rem;">Sunny Acres</p>
            <div class="d-flex justify-content-between align-items-center">
              <h4 class="text-success mb-0">$2.80/kg</h4>
              <span class="badge badge-active">In Stock</span>
            </div>
            <div class="mt-2">
              <span class="text-warning"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i></span>
              <small class="text-muted">(28 reviews)</small>
            </div>
            <div class="mt-2">
              <button class="btn btn-agro btn-sm btn-block"><i class="fas fa-cart-plus mr-1"></i> Add to Cart</button>
              <button class="btn btn-outline-danger btn-sm btn-block mt-1"><i class="fas fa-heart mr-1"></i> Wishlist</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <img src="{{ asset('dist/img/product-placeholder.png') }}" class="card-img-top" alt="Product" style="height:200px;object-fit:cover;">
          <div class="card-body">
            <h5 class="card-title">Organic Honey</h5>
            <p class="text-muted" style="font-size:0.85rem;">Bee Happy Farm</p>
            <div class="d-flex justify-content-between align-items-center">
              <h4 class="text-success mb-0">$12.00/jar</h4>
              <span class="badge badge-active">In Stock</span>
            </div>
            <div class="mt-2">
              <span class="text-warning"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></span>
              <small class="text-muted">(56 reviews)</small>
            </div>
            <div class="mt-2">
              <button class="btn btn-agro btn-sm btn-block"><i class="fas fa-cart-plus mr-1"></i> Add to Cart</button>
              <button class="btn btn-outline-danger btn-sm btn-block mt-1"><i class="fas fa-heart mr-1"></i> Wishlist</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <img src="{{ asset('dist/img/product-placeholder.png') }}" class="card-img-top" alt="Product" style="height:200px;object-fit:cover;">
          <div class="card-body">
            <h5 class="card-title">Avocados</h5>
            <p class="text-muted" style="font-size:0.85rem;">Green Valley Farm</p>
            <div class="d-flex justify-content-between align-items-center">
              <h4 class="text-success mb-0">$5.00/kg</h4>
              <span class="badge badge-pending">Low Stock</span>
            </div>
            <div class="mt-2">
              <span class="text-warning"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i></span>
              <small class="text-muted">(19 reviews)</small>
            </div>
            <div class="mt-2">
              <button class="btn btn-agro btn-sm btn-block"><i class="fas fa-cart-plus mr-1"></i> Add to Cart</button>
              <button class="btn btn-outline-danger btn-sm btn-block mt-1"><i class="fas fa-heart mr-1"></i> Wishlist</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <img src="{{ asset('dist/img/product-placeholder.png') }}" class="card-img-top" alt="Product" style="height:200px;object-fit:cover;">
          <div class="card-body">
            <h5 class="card-title">Free Range Eggs</h5>
            <p class="text-muted" style="font-size:0.85rem;">Sunny Acres</p>
            <div class="d-flex justify-content-between align-items-center">
              <h4 class="text-success mb-0">$6.00/dozen</h4>
              <span class="badge badge-active">In Stock</span>
            </div>
            <div class="mt-2">
              <span class="text-warning"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></span>
              <small class="text-muted">(34 reviews)</small>
            </div>
            <div class="mt-2">
              <button class="btn btn-agro btn-sm btn-block"><i class="fas fa-cart-plus mr-1"></i> Add to Cart</button>
              <button class="btn btn-outline-danger btn-sm btn-block mt-1"><i class="fas fa-heart mr-1"></i> Wishlist</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <img src="{{ asset('dist/img/product-placeholder.png') }}" class="card-img-top" alt="Product" style="height:200px;object-fit:cover;">
          <div class="card-body">
            <h5 class="card-title">Sweet Potatoes</h5>
            <p class="text-muted" style="font-size:0.85rem;">Farm Fresh Co.</p>
            <div class="d-flex justify-content-between align-items-center">
              <h4 class="text-success mb-0">$1.80/kg</h4>
              <span class="badge badge-active">In Stock</span>
            </div>
            <div class="mt-2">
              <span class="text-warning"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i></span>
              <small class="text-muted">(23 reviews)</small>
            </div>
            <div class="mt-2">
              <button class="btn btn-agro btn-sm btn-block"><i class="fas fa-cart-plus mr-1"></i> Add to Cart</button>
              <button class="btn btn-outline-danger btn-sm btn-block mt-1"><i class="fas fa-heart mr-1"></i> Wishlist</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection