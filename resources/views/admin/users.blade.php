@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">User Management</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Users</li>
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
            <h3 class="card-title"><i class="fas fa-search mr-2"></i>Search Users</h3>
            <div class="card-tools">
              <button class="btn btn-sm btn-agro" data-toggle="modal" data-target="#addUserModal">
                <i class="fas fa-plus mr-1"></i> Add User
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="input-group input-group-sm" style="max-width: 400px;">
              <input type="text" class="form-control" placeholder="Search by name or email...">
              <div class="input-group-append">
                <button class="btn btn-agro"><i class="fas fa-search"></i></button>
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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Registered</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#1</td>
                  <td>Admin User</td>
                  <td>admin@agroagro.com</td>
                  <td><span class="badge badge-approved">Admin</span></td>
                  <td><span class="badge badge-active">Active</span></td>
                  <td>Jan 15, 2025</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-outline-danger" data-confirm="Delete this user?"><i class="fas fa-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>#2</td>
                  <td>Farmer John</td>
                  <td>farmer@agroagro.com</td>
                  <td><span class="badge badge-pending">Farmer</span></td>
                  <td><span class="badge badge-active">Active</span></td>
                  <td>Feb 20, 2025</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-outline-danger" data-confirm="Delete this user?"><i class="fas fa-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>#3</td>
                  <td>Buyer Jane</td>
                  <td>buyer@agroagro.com</td>
                  <td><span class="badge badge-pending">Buyer</span></td>
                  <td><span class="badge badge-active">Active</span></td>
                  <td>Mar 10, 2025</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-outline-danger" data-confirm="Delete this user?"><i class="fas fa-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>#4</td>
                  <td>New User</td>
                  <td>new@agroagro.com</td>
                  <td><span class="badge badge-pending">Buyer</span></td>
                  <td><span class="badge badge-pending">Pending</span></td>
                  <td>Jul 28, 2025</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                    <button class="btn btn-sm btn-outline-danger" data-confirm="Delete this user?"><i class="fas fa-trash"></i></button>
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
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New User</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label>Role</label>
            <select class="form-control">
              <option>Admin</option>
              <option>Farmer</option>
              <option>Buyer</option>
            </select>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Enter password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-agro">Create User</button>
      </div>
    </div>
  </div>
</div>
@endsection