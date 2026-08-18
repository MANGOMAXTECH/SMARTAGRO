@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Sales History</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Sales</li>
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
                <div class="stat-number">$8,320</div>
                <div class="stat-label">Total Earnings</div>
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
                <div class="stat-number">56</div>
                <div class="stat-label">Total Orders</div>
              </div>
              <div class="stat-icon"><i class="fas fa-shopping-bag"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card users">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">48</div>
                <div class="stat-label">Completed Sales</div>
              </div>
              <div class="stat-icon"><i class="fas fa-check-double"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card pending">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">7</div>
                <div class="stat-label">Pending Orders</div>
              </div>
              <div class="stat-icon"><i class="fas fa-clock"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-chart-line mr-2"></i>Revenue Graph</h3>
          </div>
          <div class="card-body">
            <div class="chart-container">
              <canvas id="revenueGraph"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-percentage mr-2"></i>Top Products</h3>
          </div>
          <div class="card-body">
            <div class="list-group">
              <div class="list-group-item d-flex justify-content-between">
                <span>Organic Tomatoes</span>
                <strong>$2,450</strong>
              </div>
              <div class="list-group-item d-flex justify-content-between">
                <span>Fresh Corn</span>
                <strong>$1,820</strong>
              </div>
              <div class="list-group-item d-flex justify-content-between">
                <span>Organic Honey</span>
                <strong>$1,560</strong>
              </div>
              <div class="list-group-item d-flex justify-content-between">
                <span>Avocados</span>
                <strong>$980</strong>
              </div>
              <div class="list-group-item d-flex justify-content-between">
                <span>Sweet Potatoes</span>
                <strong>$750</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-receipt mr-2"></i>Transaction Records</h3>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Transaction ID</th>
                  <th>Order</th>
                  <th>Buyer</th>
                  <th>Amount</th>
                  <th>Commission</th>
                  <th>Net Earnings</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#TXN-101</td>
                  <td>#ORD-101</td>
                  <td>Alice M.</td>
                  <td>$45.00</td>
                  <td>$4.50</td>
                  <td>$40.50</td>
                  <td>Jul 25, 2025</td>
                </tr>
                <tr>
                  <td>#TXN-102</td>
                  <td>#ORD-102</td>
                  <td>Bob K.</td>
                  <td>$32.50</td>
                  <td>$3.25</td>
                  <td>$29.25</td>
                  <td>Jul 24, 2025</td>
                </tr>
                <tr>
                  <td>#TXN-103</td>
                  <td>#ORD-103</td>
                  <td>Carol D.</td>
                  <td>$28.00</td>
                  <td>$2.80</td>
                  <td>$25.20</td>
                  <td>Jul 22, 2025</td>
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