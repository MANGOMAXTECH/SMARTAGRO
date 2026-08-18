@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Payment History</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Payments</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row mb-4">
      <div class="col-lg-3 col-6">
        <div class="card stat-card revenue">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">$1,245</div>
                <div class="stat-label">Total Spent</div>
              </div>
              <div class="stat-icon"><i class="fas fa-wallet"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card growth">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">12</div>
                <div class="stat-label">Total Payments</div>
              </div>
              <div class="stat-icon"><i class="fas fa-exchange-alt"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card pending">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">$85.00</div>
                <div class="stat-label">Pending</div>
              </div>
              <div class="stat-icon"><i class="fas fa-hourglass-half"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card users">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">10</div>
                <div class="stat-label">Completed</div>
              </div>
              <div class="stat-icon"><i class="fas fa-check-circle"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Transaction ID</th>
                  <th>Order</th>
                  <th>Amount</th>
                  <th>Method</th>
                  <th>Status</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#PAY-001</td>
                  <td>#ORD-201</td>
                  <td>$45.00</td>
                  <td>M-Pesa</td>
                  <td><span class="badge badge-approved">Completed</span></td>
                  <td>Jul 25, 2025</td>
                </tr>
                <tr>
                  <td>#PAY-002</td>
                  <td>#ORD-202</td>
                  <td>$32.50</td>
                  <td>Card</td>
                  <td><span class="badge badge-pending">Processing</span></td>
                  <td>Jul 28, 2025</td>
                </tr>
                <tr>
                  <td>#PAY-003</td>
                  <td>#ORD-203</td>
                  <td>$28.00</td>
                  <td>M-Pesa</td>
                  <td><span class="badge badge-approved">Completed</span></td>
                  <td>Jul 20, 2025</td>
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