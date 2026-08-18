@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">My Products</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Products</li>
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
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-filter mr-2"></i>Filter Products</h3>
            <div class="card-tools">
              <a href="{{ route('farmer.products.create') }}" class="btn btn-sm btn-agro">
                <i class="fas fa-plus mr-1"></i> Add Product
              </a>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <label>Category</label>
                <select class="form-control">
                  <option>All Categories</option>
                  <option>Fruits</option>
                  <option>Vegetables</option>
                  <option>Grains</option>
                  <option>Seeds</option>
                  <option>Organic</option>
                </select>
              </div>
              <div class="col-md-3">
                <label>Status</label>
                <select class="form-control">
                  <option>All</option>
                  <option>Active</option>
                  <option>Inactive</option>
                  <option>Out of Stock</option>
                </select>
              </div>
              <div class="col-md-3 d-flex align-items-end">
                <button class="btn btn-agro"><i class="fas fa-search mr-1"></i> Filter</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body p-0">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Product</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img src="{{ asset('dist/img/product-placeholder.png') }}" alt="Product" style="width:40px;height:40px;border-radius:8px;"></td>
                  <td>Organic Tomatoes</td>
                  <td>Vegetables</td>
                  <td>$3.50/kg</td>
                  <td>150 kg</td>
                  <td><span class="badge badge-active">Active</span></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-outline-danger" data-confirm="Delete this product?"><i class="fas fa-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td><img src="{{ asset('dist/img/product-placeholder.png') }}" alt="Product" style="width:40px;height:40px;border-radius:8px;"></td>
                  <td>Fresh Corn</td>
                  <td>Grains</td>
                  <td>$2.80/kg</td>
                  <td>80 kg</td>
                  <td><span class="badge badge-active">Active</span></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-outline-danger" data-confirm="Delete this product?"><i class="fas fa-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td><img src="{{ asset('dist/img/product-placeholder.png') }}" alt="Product" style="width:40px;height:40px;border-radius:8px;"></td>
                  <td>Organic Honey</td>
                  <td>Organic</td>
                  <td>$12.00/jar</td>
                  <td>25 jars</td>
                  <td><span class="badge badge-active">Active</span></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-outline-danger" data-confirm="Delete this product?"><i class="fas fa-trash"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card-footer">
            <nav>
              <ul class="pagination pagination-sm justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection