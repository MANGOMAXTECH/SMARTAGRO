@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">My Orders</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Orders</li>
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
            <h3 class="card-title"><i class="fas fa-filter mr-2"></i>Filter Orders</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <label>Status</label>
                <select class="form-control">
                  <option>All</option>
                  <option>New</option>
                  <option>Confirmed</option>
                  <option>Processing</option>
                  <option>Shipped</option>
                  <option>Delivered</option>
                  <option>Cancelled</option>
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
                  <th>Order ID</th>
                  <th>Buyer</th>
                  <th>Product</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#ORD-101</td>
                  <td>Alice M.</td>
                  <td>Organic Tomatoes</td>
                  <td>$45.00</td>
                  <td><span class="badge badge-pending">New</span></td>
                  <td>
                    <button class="btn btn-sm btn-agro-outline" data-confirm="Confirm this order?"><i class="fas fa-check"></i> Confirm</button>
                  </td>
                </tr>
                <tr>
                  <td>#ORD-102</td>
                  <td>Bob K.</td>
                  <td>Fresh Corn</td>
                  <td>$32.50</td>
                  <td><span class="badge badge-approved">Confirmed</span></td>
                  <td>
                    <button class="btn btn-sm btn-agro-outline" data-confirm="Mark as shipped?"><i class="fas fa-truck"></i> Ship</button>
                  </td>
                </tr>
                <tr>
                  <td>#ORD-103</td>
                  <td>Carol D.</td>
                  <td>Organic Honey</td>
                  <td>$28.00</td>
                  <td><span class="badge badge-approved">Shipped</span></td>
                  <td>
                    <button class="btn btn-sm btn-agro-outline" data-confirm="Mark as delivered?"><i class="fas fa-check-double"></i> Deliver</button>
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