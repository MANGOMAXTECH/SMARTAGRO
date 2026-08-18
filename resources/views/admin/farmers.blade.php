@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Farmer Management</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Farmers</li>
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
            <h3 class="card-title"><i class="fas fa-filter mr-2"></i>Filter Farmers</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <label>Status</label>
                <select class="form-control">
                  <option>All</option>
                  <option>Verified</option>
                  <option>Pending</option>
                  <option>Suspended</option>
                </select>
              </div>
              <div class="col-md-3">
                <label>Approval</label>
                <select class="form-control">
                  <option>All</option>
                  <option>Approved</option>
                  <option>Pending</option>
                  <option>Rejected</option>
                </select>
              </div>
              <div class="col-md-3">
                <label>Search</label>
                <input type="text" class="form-control" placeholder="Search farmers...">
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
                  <th>ID</th>
                  <th>Farm Name</th>
                  <th>Farmer</th>
                  <th>Email</th>
                  <th>Products</th>
                  <th>Verification</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#1</td>
                  <td>Green Valley Farm</td>
                  <td>Farmer John</td>
                  <td>farmer@agroagro.com</td>
                  <td>12</td>
                  <td><span class="badge badge-approved">Verified</span></td>
                  <td><span class="badge badge-active">Active</span></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-outline-danger" data-confirm="Suspend this farmer?"><i class="fas fa-ban"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>#2</td>
                  <td>Sunny Acres</td>
                  <td>Farmer Jane</td>
                  <td>jane@agroagro.com</td>
                  <td>8</td>
                  <td><span class="badge badge-pending">Pending</span></td>
                  <td><span class="badge badge-active">Active</span></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-outline-danger" data-confirm="Suspend this farmer?"><i class="fas fa-ban"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>#3</td>
                  <td>Organic Harvest</td>
                  <td>Farmer Bob</td>
                  <td>bob@agroagro.com</td>
                  <td>15</td>
                  <td><span class="badge badge-rejected">Rejected</span></td>
                  <td><span class="badge badge-suspended">Suspended</span></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-outline-success" data-confirm="Reactivate this farmer?"><i class="fas fa-check"></i></button>
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