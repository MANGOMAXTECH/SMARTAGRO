@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">My Profile</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body text-center">
            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" alt="Profile" class="img-circle img-fluid mb-3" style="width:120px;height:120px;">
            <h3>{{ auth()->user()->name }}</h3>
            <p class="text-muted">Buyer</p>
            <span class="badge badge-active"><i class="fas fa-check mr-1"></i> Verified</span>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-user mr-2"></i>Personal Information</h3>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" value="{{ auth()->user()->name }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" value="{{ auth()->user()->email }}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" placeholder="+254 700 000 000">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" class="form-control">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-agro"><i class="fas fa-save mr-1"></i> Save Changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-map-marker-alt mr-2"></i>Address Management</h3>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label>Street Address</label>
                <input type="text" class="form-control" placeholder="Enter street address">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" placeholder="City">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Postal Code</label>
                    <input type="text" class="form-control" placeholder="Postal Code">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-agro">Save Address</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-lock mr-2"></i>Account Security</h3>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label>Current Password</label>
                <input type="password" class="form-control" placeholder="Enter current password">
              </div>
              <div class="form-group">
                <label>New Password</label>
                <input type="password" class="form-control" placeholder="Enter new password">
              </div>
              <div class="form-group">
                <label>Confirm New Password</label>
                <input type="password" class="form-control" placeholder="Confirm new password">
              </div>
              <button type="submit" class="btn btn-agro">Update Password</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection