@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Reports</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Reports</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row mb-4">
      <div class="col-lg-3 col-6">
        <div class="card">
          <div class="card-body text-center">
            <i class="fas fa-file-pdf text-danger" style="font-size:2rem;"></i>
            <h5 class="mt-2">Sales Report</h5>
            <p class="text-muted" style="font-size:0.8rem;">Monthly sales summary</p>
            <a href="#" class="btn btn-sm btn-agro-outline">Download</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card">
          <div class="card-body text-center">
            <i class="fas fa-file-excel text-success" style="font-size:2rem;"></i>
            <h5 class="mt-2">Farmer Report</h5>
            <p class="text-muted" style="font-size:0.8rem;">Farmer performance data</p>
            <a href="#" class="btn btn-sm btn-agro-outline">Download</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card">
          <div class="card-body text-center">
            <i class="fas fa-file-csv text-info" style="font-size:2rem;"></i>
            <h5 class="mt-2">Buyer Report</h5>
            <p class="text-muted" style="font-size:0.8rem;">Buyer activity summary</p>
            <a href="#" class="btn btn-sm btn-agro-outline">Download</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card">
          <div class="card-body text-center">
            <i class="fas fa-file-alt text-warning" style="font-size:2rem;"></i>
            <h5 class="mt-2">System Activity</h5>
            <p class="text-muted" style="font-size:0.8rem;">Platform activity log</p>
            <a href="#" class="btn btn-sm btn-agro-outline">Download</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-chart-bar mr-2"></i>Sales Report</h3>
            <div class="card-tools">
              <select class="form-control form-control-sm" style="width: auto;">
                <option>Last 7 Days</option>
                <option>Last 30 Days</option>
                <option>Last Quarter</option>
                <option>Last Year</option>
              </select>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-container">
              <canvas id="salesReportChart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection