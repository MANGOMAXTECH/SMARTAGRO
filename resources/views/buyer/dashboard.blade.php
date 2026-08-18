@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Buyer Dashboard</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row mb-4">
      <div class="col-lg-3 col-6">
        <div class="card stat-card orders">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">12</div>
                <div class="stat-label">Total Orders</div>
              </div>
              <div class="stat-icon"><i class="fas fa-shopping-bag"></i></div>
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
                <div class="stat-label">Pending Orders</div>
              </div>
              <div class="stat-icon"><i class="fas fa-clock"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card growth">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">8</div>
                <div class="stat-label">Completed Orders</div>
              </div>
              <div class="stat-icon"><i class="fas fa-check-circle"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card products">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">23</div>
                <div class="stat-label">Wishlist Items</div>
              </div>
              <div class="stat-icon"><i class="fas fa-heart"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-lg-3 col-6">
        <div class="card stat-card revenue">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">$1,245</div>
                <div class="stat-label">Total Spending</div>
              </div>
              <div class="stat-icon"><i class="fas fa-wallet"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card users">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">15</div>
                <div class="stat-label">Saved Products</div>
              </div>
              <div class="stat-icon"><i class="fas fa-bookmark"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card farmers">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">5</div>
                <div class="stat-label">Favorite Farmers</div>
              </div>
              <div class="stat-icon"><i class="fas fa-star"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card buyers">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">8</div>
                <div class="stat-label">Reviews Written</div>
              </div>
              <div class="stat-icon"><i class="fas fa-comment"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-chart-line mr-2"></i>Monthly Purchases</h3>
            <div class="card-tools">
              <button class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-container">
              <canvas id="buyerPurchasesChart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-chart-pie mr-2"></i>Order Status</h3>
            <div class="card-tools">
              <button class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-container">
              <canvas id="buyerOrderStatusChart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-chart-bar mr-2"></i>Purchase History</h3>
            <div class="card-tools">
              <button class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-container">
              <canvas id="purchaseHistoryChart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-chart-pie mr-2"></i>Favorite Categories</h3>
            <div class="card-tools">
              <button class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-container">
              <canvas id="favCategoriesChart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-chart-area mr-2"></i>Spending Analysis</h3>
            <div class="card-tools">
              <button class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-container">
              <canvas id="spendingChart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const defaults = {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: { labels: { color: '#333', font: { size: 12 } } },
      tooltip: { backgroundColor: '#333', titleColor: '#fff', bodyColor: '#fff', padding: 12, cornerRadius: 8 }
    }
  };

  fetch("{{ route('buyer.charts.purchases') }}")
    .then(r => r.json())
    .then(data => { new Chart(document.getElementById('buyerPurchasesChart'), { type: 'line', data, options: { ...defaults, plugins: { ...defaults.plugins, legend: { display: false } } } }); });

  fetch("{{ route('buyer.charts.order-status') }}")
    .then(r => r.json())
    .then(data => { new Chart(document.getElementById('buyerOrderStatusChart'), { type: 'pie', data, options: defaults }); });

  fetch("{{ route('buyer.charts.purchase-history') }}")
    .then(r => r.json())
    .then(data => { new Chart(document.getElementById('purchaseHistoryChart'), { type: 'bar', data, options: defaults }); });

  fetch("{{ route('buyer.charts.categories') }}")
    .then(r => r.json())
    .then(data => { new Chart(document.getElementById('favCategoriesChart'), { type: 'doughnut', data, options: defaults }); });

  fetch("{{ route('buyer.charts.spending') }}")
    .then(r => r.json())
    .then(data => { new Chart(document.getElementById('spendingChart'), { type: 'line', data, options: { ...defaults, plugins: { ...defaults.plugins, legend: { display: false } } } }); });
});
</script>
@endpush
