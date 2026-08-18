@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Add New Product</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('farmer.products.index') }}">Products</a></li>
          <li class="breadcrumb-item active">Add Product</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-plus-circle mr-2"></i>Product Details</h3>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" placeholder="Enter product name">
              </div>
              <div class="form-group">
                <label>Category</label>
                <select class="form-control">
                  <option>Fruits</option>
                  <option>Vegetables</option>
                  <option>Grains</option>
                  <option>Seeds</option>
                  <option>Organic</option>
                  <option>Farm Equipment</option>
                </select>
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="4" placeholder="Describe your product..."></textarea>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Price (per kg)</label>
                    <input type="number" class="form-control" placeholder="0.00" step="0.01">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Stock Quantity (kg)</label>
                    <input type="number" class="form-control" placeholder="0" step="1">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Unit</label>
                    <select class="form-control">
                      <option>kg</option>
                      <option>liters</option>
                      <option>pieces</option>
                      <option>dozen</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Availability</label>
                    <select class="form-control">
                      <option>In Stock</option>
                      <option>Low Stock</option>
                      <option>Out of Stock</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Product Images</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="productImage" multiple>
                  <label class="custom-file-label" for="productImage">Choose images</label>
                </div>
              </div>
              <button type="submit" class="btn btn-agro"><i class="fas fa-save mr-1"></i> Save Product</button>
              <a href="{{ route('farmer.products.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-info-circle mr-2"></i>Product Tips</h3>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <i class="fas fa-check text-success mr-2"></i> Use clear, high-quality images
              </li>
              <li class="list-group-item">
                <i class="fas fa-check text-success mr-2"></i> Describe products accurately
              </li>
              <li class="list-group-item">
                <i class="fas fa-check text-success mr-2"></i> Set competitive prices
              </li>
              <li class="list-group-item">
                <i class="fas fa-check text-success mr-2"></i> Keep stock levels updated
              </li>
              <li class="list-group-item">
                <i class="fas fa-check text-success mr-2"></i> Choose the right category
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection