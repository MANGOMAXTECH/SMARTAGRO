@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Product Management</h1>
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
              <button class="btn btn-sm btn-agro"><i class="fas fa-plus mr-1"></i> Add Product</button>
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
                  <option>Approved</option>
                  <option>Pending</option>
                  <option>Rejected</option>
                </select>
              </div>
              <div class="col-md-3">
                <label>Availability</label>
                <select class="form-control">
                  <option>All</option>
                  <option>In Stock</option>
                  <option>Low Stock</option>
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
                  <th>ID</th>
                  <th>Product</th>
                  <th>Category</th>
                  <th>Farmer</th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#101</td>
                  <td>Organic Tomatoes</td>
                  <td>Vegetables</td>
                  <td>Green Valley Farm</td>
                  <td>$3.50/kg</td>
                  <td>150 kg</td>
                  <td><span class="badge badge-approved">Approved</span></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-outline-danger" data-confirm="Delete this product?"><i class="fas fa-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>#102</td>
                  <td>Fresh Corn</td>
                  <td>Grains</td>
                  <td>Sunny Acres</td>
                  <td>$2.80/kg</td>
                  <td>80 kg</td>
                  <td><span class="badge badge-approved">Approved</span></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-outline-danger" data-confirm="Delete this product?"><i class="fas fa-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>#103</td>
                  <td>Organic Honey</td>
                  <td>Organic</td>
                  <td>Bee Happy Farm</td>
                  <td>$12.00/jar</td>
                  <td>25 jars</td>
                  <td><span class="badge badge-pending">Pending</span></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>
                    <button class="btn btn-sm btn-outline-success" data-confirm="Approve this product?"><i class="fas fa-check"></i></button>
                    <button class="btn btn-sm btn-outline-danger" data-confirm="Reject this product?"><i class="fas fa-times"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>#104</td>
                  <td>Avocados</td>
                  <td>Fruits</td>
                  <td>Green Valley Farm</td>
                  <td>$5.00/kg</td>
                  <td>15 kg</td>
                  <td><span class="badge badge-pending">Pending</span></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>
                    <button class="btn btn-sm btn-outline-success" data-confirm="Approve this product?"><i class="fas fa-check"></i></button>
                    <button class="btn btn-sm btn-outline-danger" data-confirm="Reject this product?"><i class="fas fa-times"></i></button>
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
                <li class="page-item"><a class="page-link" href="#">2</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection