<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('admin.dashboard') }}" class="brand-link">
    <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AGROAGRO</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name ?? 'Admin' }}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">
          <a href="{{ route('admin.dashboard') }}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.users.index') }}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>Users</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.farmers.index') }}" class="nav-link">
            <i class="nav-icon fas fa-seedling"></i>
            <p>Farmers</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.products.index') }}" class="nav-link">
            <i class="nav-icon fas fa-box"></i>
            <p>Products</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.orders.index') }}" class="nav-link">
            <i class="nav-icon fas fa-shopping-bag"></i>
            <p>Orders</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.payments.index') }}" class="nav-link">
            <i class="nav-icon fas fa-money-bill"></i>
            <p>Payments</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.reports.index') }}" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>Reports</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.settings.index') }}" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>Settings</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>
