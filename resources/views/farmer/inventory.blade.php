@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Inventory Management</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Inventory</li>
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
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">24</div>
                <div class="stat-label">Total Products</div>
              </div>
              <div class="stat-icon"><i class="fas fa-box"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card growth">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">18</div>
                <div class="stat-label">In Stock</div>
              </div>
              <div class="stat-icon"><i class="fas fa-check-circle"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card pending">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">4</div>
                <div class="stat-label">Low Stock</div>
              </div>
              <div class="stat-icon"><i class="fas fa-exclamation-triangle"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card revenue">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">2</div>
                <div class="stat-label">Out of Stock</div>
              </div>
              <div class="stat-icon"><i class="fas fa-times-circle"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-exclamation-triangle mr-2 text-warning"></i>Low Stock Alerts</h3>
          </div>
          <div class="card-body">
            <div class="alert alert-warning alert-agro">
              <strong>Warning:</strong> The following products are running low on stock.
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Current Stock</th>
                  <th>Minimum Stock</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Avocados</td>
                  <td>15 kg</td>
                  <td>20 kg</td>
                  <td><span class="badge badge-pending">Low Stock</span></td>
                  <td><button class="btn btn-sm btn-agro-outline">Restock</button></td>
                </tr>
                <tr>
                  <td>Organic Bananas</td>
                  <td>10 kg</td>
                  <td>25 kg</td>
                  <td><span class="badge badge-pending">Low Stock</span></td>
                  <td><button class="btn btn-sm btn-agro-outline">Restock</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-history mr-2"></i>Inventory History</h3>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Product</th>
                  <th>Action</th>
                  <th>Quantity</th>
                  <th>Notes</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jul 28, 2025</td>
                  <td>Organic Tomatoes</td>
                  <td><span class="badge badge-active">Restocked</span></td>
                  <td>+50 kg</td>
                  <td>New harvest delivery</td>
                </tr>
                <tr>
                  <td>Jul 25, 2025</td>
                  <td>Fresh Corn</td>
                  <td><span class="badge badge-active">Sold</span></td>
                  <td>-20 kg</td>
                  <td>Order #ORD-102</td>
                </tr>
                <tr>
                  <td>Jul 22, 2025</td>
                  <td>Organic Honey</td>
                  <td><span class="badge badge-active">Restocked</span></td>
                  <td>+10 jars</td>
                  <td>New batch produced</td>
                </tr>
                <tr>
                  <td>Jul 20, 2025</td>
                  <td>Avocados</td>
                  <td><span class="badge badge-pending">Sold</span></td>
                  <td>-5 kg</td>
                  <td>Order #ORD-101</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection