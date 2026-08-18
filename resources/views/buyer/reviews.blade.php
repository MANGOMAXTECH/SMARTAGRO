@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">My Reviews</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Reviews</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row mb-4">
      <div class="col-lg-3 col-6">
        <div class="card stat-card users">
          <div class="card-body text-center">
            <div class="stat-number">8</div>
            <div class="stat-label">Reviews Written</div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card growth">
          <div class="card-body text-center">
            <div class="stat-number">4.6</div>
            <div class="stat-label">Avg Rating Given</div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card products">
          <div class="card-body text-center">
            <div class="stat-number">23</div>
            <div class="stat-label">Products Reviewed</div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card stat-card pending">
          <div class="card-body text-center">
            <div class="stat-number">2</div>
            <div class="stat-label">Awaiting Reply</div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="media mb-4">
              <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="User" class="img-circle mr-3" style="width:48px;height:48px;">
              <div class="media-body">
                <h5 class="mt-0">You <span class="text-warning"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></span></h5>
                <p>Excellent tomatoes! Very fresh and delicious. Will definitely order again.</p>
                <small class="text-muted">On Organic Tomatoes - Jul 25, 2025</small>
              </div>
            </div>
            <div class="media mb-4">
              <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="User" class="img-circle mr-3" style="width:48px;height:48px;">
              <div class="media-body">
                <h5 class="mt-0">You <span class="text-warning"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i></span></h5>
                <p>Good quality corn, fast delivery. Would recommend.</p>
                <small class="text-muted">On Fresh Corn - Jul 24, 2025</small>
              </div>
            </div>
            <div class="media mb-4">
              <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="User" class="img-circle mr-3" style="width:48px;height:48px;">
              <div class="media-body">
                <h5 class="mt-0">You <span class="text-warning"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></span></h5>
                <p>Best organic honey I've ever bought! Amazing quality.</p>
                <small class="text-muted">On Organic Honey - Jul 22, 2025</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection