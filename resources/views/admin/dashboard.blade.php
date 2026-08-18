@extends('layouts.masterdashboardlayout')

@push('styles')
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/agro-dashboard.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
<!-- Modern AGROAGRO Dashboard Content - preserves existing sidebar -->
<div class="agro-header py-4 px-4 d-flex align-items-center justify-content-between">
  <!-- Left: Dynamic Title + Welcome -->
  <div>
    <h2 class="page-title mb-1">Dashboard</h2>
    <div class="page-subtitle text-muted">Welcome Back, <strong>Admin</strong> — Monitor your agricultural ecosystem from one place.</div>
  </div>

  <!-- Right: Global controls -->
  <div class="d-flex align-items-center gap-3">
    <div class="search-box">
      <input type="search" class="form-control" placeholder="Search products, users, orders...">
    </div>
    <button class="btn btn-light btn-icon" title="Notifications"><i class="fas fa-bell"></i></button>
    <button class="btn btn-light btn-icon" title="Messages"><i class="far fa-envelope"></i></button>
    <div class="dropdown">
      <button class="btn btn-light btn-icon dropdown-toggle" data-toggle="dropdown">EN</button>
      <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="#">EN</a>
        <a class="dropdown-item" href="#">ES</a>
      </div>
    </div>
    <button id="themeToggle" class="btn btn-light btn-icon" title="Toggle theme"><i class="fas fa-adjust"></i></button>
    <div class="dropdown">
      <a class="d-flex align-items-center" href="#" data-toggle="dropdown">
        <img src="/dist/img/user2-160x160.jpg" class="rounded-circle" style="width:36px;height:36px;object-fit:cover;margin-right:8px;">
        <span class="d-none d-sm-inline">Admin</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="#">Profile</a>
        <a class="dropdown-item" href="#">Settings</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Logout</a>
      </div>
    </div>
  </div>
</div>

<section class="container-fluid agro-dashboard">
  <!-- Statistics Overview (4-column desktop, 2-col tablet, 1-col mobile) -->
  <div class="row stats-grid">
    @php
      $cards = [
        ['label'=>'Total Users','value'=>'1,248','icon'=>'fas fa-users','change'=>'+12.5%','color'=>'green','id'=>'card-users'],
        ['label'=>'Total Farmers','value'=>'342','icon'=>'fas fa-seedling','change'=>'+8.3%','color'=>'primary','id'=>'card-farmers'],
        ['label'=>'Total Buyers','value'=>'896','icon'=>'fas fa-shopping-cart','change'=>'+15.2%','color'=>'teal','id'=>'card-buyers'],
        ['label'=>'Total Products','value'=>'1,523','icon'=>'fas fa-box','change'=>'+5.7%','color'=>'orange','id'=>'card-products'],
        ['label'=>'Total Orders','value'=>'487','icon'=>'fas fa-shopping-bag','change'=>'+22.1%','color'=>'purple','id'=>'card-orders'],
        ['label'=>'Revenue','value'=>'$48,290','icon'=>'fas fa-dollar-sign','change'=>'+18.4%','color'=>'green','id'=>'card-revenue'],
        ['label'=>'Active Users','value'=>'1,102','icon'=>'fas fa-user-check','change'=>'+9.8%','color'=>'blue','id'=>'card-active'],
        ['label'=>'Pending Verifications','value'=>'23','icon'=>'fas fa-clock','change'=>'-3','color'=>'warning','id'=>'card-pending'],
      ];
    @endphp

    @foreach($cards as $c)
      <div class="col-xl-3 col-md-6 col-12 mb-4">
        <div class="card agro-card shadow-sm hover-up rounded-lg">
          <div class="card-body d-flex align-items-center justify-content-between">
            <div>
              <div class="card-label text-muted">{{ $c['label'] }}</div>
              <div class="card-value h4 mb-1">{{ $c['value'] }}</div>
              <div class="text-success small"><i class="fas fa-arrow-up"></i> {{ $c['change'] }}</div>
            </div>
            <div class="text-center ml-3">
              <div class="icon-wrapper mb-2"><i class="{{ $c['icon'] }} fa-2x text-{{ $c['color'] }}"></i></div>
              <canvas id="mini-{{ $c['id'] }}" width="120" height="50"></canvas>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <div class="row">
    <!-- Left: Analytics charts -->
    <div class="col-lg-8 col-12 mb-4">
      <div class="card agro-card p-3 rounded-lg shadow-sm">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div>
            <h5 class="mb-0">Revenue Trends</h5>
            <small class="text-muted">Last 12 months</small>
          </div>
          <div class="d-flex gap-2">
            <input type="month" class="form-control form-control-sm" style="max-width:170px;">
            <button class="btn btn-outline-secondary btn-sm">Export</button>
          </div>
        </div>
        <div id="revenue-chart"></div>
      </div>

      <div class="card agro-card mt-3 p-3 rounded-lg shadow-sm">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h5 class="mb-0">Monthly Orders</h5>
          <div class="text-muted small">Comparative view</div>
        </div>
        <canvas id="orders-chart" height="160"></canvas>
      </div>
    </div>

    <!-- Right: Quick actions + Activity + Performance widgets -->
    <div class="col-lg-4 col-12 mb-4">
      <div class="card agro-card p-3 rounded-lg shadow-sm mb-3">
        <h6 class="mb-3">Quick Actions</h6>
        <div class="d-flex flex-wrap gap-2">
          <button class="btn btn-success btn-sm">Add User</button>
          <button class="btn btn-outline-success btn-sm">Verify Farmer</button>
          <button class="btn btn-outline-primary btn-sm">Add Category</button>
          <button class="btn btn-outline-secondary btn-sm">Generate Report</button>
        </div>
      </div>

      <div class="card agro-card p-3 rounded-lg shadow-sm mb-3">
        <h6 class="mb-3">Recent Activity</h6>
        <ul class="activity-list list-unstyled mb-0">
          <li><span class="dot bg-success"></span> New user <strong>kenedy@gmail.com</strong> registered <small class="text-muted">2h ago</small></li>
          <li><span class="dot bg-primary"></span> Product <strong>Organic Tomatoes</strong> uploaded <small class="text-muted">3h ago</small></li>
          <li><span class="dot bg-warning"></span> Order <strong>#3245</strong> placed <small class="text-muted">6h ago</small></li>
          <li><span class="dot bg-info"></span> Farmer <strong>Jane Doe</strong> verified <small class="text-muted">1d ago</small></li>
        </ul>
      </div>

      <div class="card agro-card p-3 rounded-lg shadow-sm">
        <h6 class="mb-3">Performance</h6>
        <div class="mb-2">Sales Performance</div>
        <div class="progress mb-2" style="height:10px;">
          <div class="progress-bar bg-success" role="progressbar" style="width: 72%;"></div>
        </div>
        <div class="mb-2">Inventory Health</div>
        <div class="progress mb-2" style="height:10px;">
          <div class="progress-bar bg-info" role="progressbar" style="width: 54%;"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Data table: Recent Users -->
  <div class="row mt-4">
    <div class="col-12">
      <div class="card agro-card p-3 rounded-lg shadow-sm">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h5 class="mb-0">Recent Users</h5>
          <div>
            <button class="btn btn-outline-secondary btn-sm">Export CSV</button>
          </div>
        </div>
        <div class="table-responsive">
          <table id="recent-users-table" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Joined</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>Kenedy</td><td>kenedy@gmail.com</td><td>Buyer</td><td>Active</td><td>2026-08-10</td></tr>
              <tr><td>Jane Doe</td><td>jane@farm.com</td><td>Farmer</td><td>Verified</td><td>2026-07-29</td></tr>
              <tr><td>John Smith</td><td>john@buyer.com</td><td>Buyer</td><td>Active</td><td>2026-06-11</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</section>

@endsection

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
  <script src="/js/agro-dashboard.js"></script>
@endpush
