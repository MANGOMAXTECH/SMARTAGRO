@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Farm Profile</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Farm Profile</li>
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
            <img src="{{ asset('dist/img/farm-placeholder.png') }}" alt="Farm" class="img-fluid rounded mb-3" style="max-height:200px;">
            <h3>Green Valley Farm</h3>
            <p class="text-muted">Established 2018</p>
            <span class="badge badge-approved"><i class="fas fa-check mr-1"></i> Verified</span>
            <span class="badge badge-active ml-1"><i class="fas fa-check mr-1"></i> Active</span>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-info-circle mr-2"></i>Farm Information</h3>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Farm Name</label>
                    <input type="text" class="form-control" value="Green Valley Farm">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Owner Name</label>
                    <input type="text" class="form-control" value="Farmer John">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Location</label>
                    <input type="text" class="form-control" value="Nairobi, Kenya">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Farm Size</label>
                    <input type="text" class="form-control" value="50 acres">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Farming Categories</label>
                    <select class="form-control" multiple>
                      <option selected>Vegetables</option>
                      <option selected>Fruits</option>
                      <option>Grains</option>
                      <option>Organic</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Verification Status</label>
                    <select class="form-control">
                      <option>Verified</option>
                      <option>Pending</option>
                      <option>Rejected</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Farm Description</label>
                <textarea class="form-control" rows="3">Green Valley Farm is a family-owned organic farm specializing in fresh vegetables and fruits. We use sustainable farming practices and deliver directly to our customers.</textarea>
              </div>
              <button type="submit" class="btn btn-agro"><i class="fas fa-save mr-1"></i> Save Profile</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection