@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Farmer Dashboard</h1>
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
        <div class="card stat-card products">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">24</div>
                <div class="stat-label">Total Products</div>
              </div>
              <div class="stat-icon"><i class="fas fa-box"></i></div>
            </div>
            <div class="mt-2">
              <span class="stat-change positive"><i class="fas fa-arrow-up"></i> 3 new</span>
              <span class="text-muted" style="font-size:0.75rem;">this month</span>
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
                <div class="stat-label">Active Products</div>
              </div>
              <div class="stat-icon"><i class="fas fa-check-circle"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card orders">
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

    <div class="row mb-4">
      <div class="col-lg-3 col-6">
        <div class="card stat-card revenue">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">$12,450</div>
                <div class="stat-label">Completed Sales</div>
              </div>
              <div class="stat-icon"><i class="fas fa-check-double"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card users">
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
        <div class="card stat-card farmers">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="stat-number">4.8</div>
                <div class="stat-label">Avg Rating</div>
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
                <div class="stat-number">89</div>
                <div class="stat-label">Customer Reviews</div>
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
            <h3 class="card-title"><i class="fas fa-chart-line mr-2"></i>Sales Overview</h3>
            <div class="card-tools">
              <button class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-container">
              <canvas id="farmerSalesChart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-chart-pie mr-2"></i>Top Products</h3>
            <div class="card-tools">
              <button class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-container">
              <canvas id="productPerfChart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-chart-bar mr-2"></i>Inventory</h3>
            <div class="card-tools">
              <button class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-container">
              <canvas id="inventoryChart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-chart-area mr-2"></i>Revenue Trend</h3>
            <div class="card-tools">
              <button class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-container">
              <canvas id="revenueTrendChart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-star mr-2"></i>Ratings</h3>
            <div class="card-tools">
              <button class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-container">
              <canvas id="ratingsChart"></canvas>
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

  fetch("{{ route('farmer.charts.sales') }}")
    .then(r => r.json())
    .then(data => { new Chart(document.getElementById('farmerSalesChart'), { type: 'line', data, options: { ...defaults, plugins: { ...defaults.plugins, legend: { display: false } } } }); });

  fetch("{{ route('farmer.charts.product-performance') }}")
    .then(r => r.json())
    .then(data => { new Chart(document.getElementById('productPerfChart'), { type: 'bar', data, options: { ...defaults, indexAxis: 'y' } }); });

  fetch("{{ route('farmer.charts.inventory') }}")
    .then(r => r.json())
    .then(data => { new Chart(document.getElementById('inventoryChart'), { type: 'doughnut', data, options: defaults }); });

  fetch("{{ route('farmer.charts.revenue') }}")
    .then(r => r.json())
    .then(data => { new Chart(document.getElementById('revenueTrendChart'), { type: 'line', data, options: { ...defaults, plugins: { ...defaults.plugins, legend: { display: false } } } }); });

  fetch("{{ route('farmer.charts.ratings') }}")
    .then(r => r.json())
    .then(data => { new Chart(document.getElementById('ratingsChart'), { type: 'pie', data, options: defaults }); });
});
</script>
@endpush
