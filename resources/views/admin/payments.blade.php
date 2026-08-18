@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Payment Management</h1>
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
                <div class="stat-number">$48,290</div>
                <div class="stat-label">Total Revenue</div>
              </div>
              <div class="stat-icon"><i class="fas fa-dollar-sign"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card growth">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">$12,450</div>
                <div class="stat-label">Commission Earned</div>
              </div>
              <div class="stat-icon"><i class="fas fa-percentage"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card pending">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">$3,200</div>
                <div class="stat-label">Pending Payouts</div>
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
                <div class="stat-number">156</div>
                <div class="stat-label">Transactions</div>
              </div>
              <div class="stat-icon"><i class="fas fa-exchange-alt"></i></div>
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
                  <th>Transaction ID</th>
                  <th>Farmer</th>
                  <th>Order</th>
                  <th>Amount</th>
                  <th>Commission</th>
                  <th>Status</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#TXN-001</td>
                  <td>Green Valley Farm</td>
                  <td>#ORD-001</td>
                  <td>$125.00</td>
                  <td>$12.50</td>
                  <td><span class="badge badge-approved">Completed</span></td>
                  <td>Jul 25, 2025</td>
                </tr>
                <tr>
                  <td>#TXN-002</td>
                  <td>Sunny Acres</td>
                  <td>#ORD-002</td>
                  <td>$89.50</td>
                  <td>$8.95</td>
                  <td><span class="badge badge-pending">Processing</span></td>
                  <td>Jul 28, 2025</td>
                </tr>
                <tr>
                  <td>#TXN-003</td>
                  <td>Bee Happy Farm</td>
                  <td>#ORD-003</td>
                  <td>$210.00</td>
                  <td>$21.00</td>
                  <td><span class="badge badge-approved">Completed</span></td>
                  <td>Jul 20, 2025</td>
                </tr>
                <tr>
                  <td>#TXN-004</td>
                  <td>Green Valley Farm</td>
                  <td>#ORD-004</td>
                  <td>$67.25</td>
                  <td>$6.73</td>
                  <td><span class="badge badge-pending">Pending</span></td>
                  <td>Jul 29, 2025</td>
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