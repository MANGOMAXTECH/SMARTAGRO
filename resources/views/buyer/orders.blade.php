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
                  <option>Pending</option>
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
                  <th>Products</th>
                  <th>Total</th>
                  <th>Payment</th>
                  <th>Status</th>
                  <th>Date</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#ORD-201</td>
                  <td>Organic Tomatoes</td>
                  <td>$45.00</td>
                  <td><span class="badge badge-approved">Paid</span></td>
                  <td><span class="badge badge-approved">Delivered</span></td>
                  <td>Jul 25, 2025</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>#ORD-202</td>
                  <td>Fresh Corn</td>
                  <td>$32.50</td>
                  <td><span class="badge badge-pending">Pending</span></td>
                  <td><span class="badge badge-pending">In Transit</span></td>
                  <td>Jul 28, 2025</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>
                    <button class="btn btn-sm btn-outline-danger" data-confirm="Cancel this order?"><i class="fas fa-times"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>#ORD-203</td>
                  <td>Organic Honey</td>
                  <td>$28.00</td>
                  <td><span class="badge badge-approved">Paid</span></td>
                  <td><span class="badge badge-approved">Delivered</span></td>
                  <td>Jul 20, 2025</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></a>
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