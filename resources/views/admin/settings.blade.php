@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">System Settings</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Settings</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-cog mr-2"></i>Website Settings</h3>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label>Site Name</label>
                <input type="text" class="form-control" value="AgroSmart">
              </div>
              <div class="form-group">
                <label>Site Description</label>
                <textarea class="form-control" rows="3">Agriculture Marketplace & E-commerce Platform</textarea>
              </div>
              <div class="form-group">
                <label>Contact Email</label>
                <input type="email" class="form-control" value="contact@agroagro.com">
              </div>
              <div class="form-group">
                <label>Contact Phone</label>
                <input type="text" class="form-control" value="+254 700 000 000">
              </div>
              <button type="submit" class="btn btn-agro">Save Changes</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-credit-card mr-2"></i>Payment Settings</h3>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label>Commission Rate (%)</label>
                <input type="number" class="form-control" value="5" step="0.5">
              </div>
              <div class="form-group">
                <label>Minimum Payout</label>
                <input type="number" class="form-control" value="50" step="1">
              </div>
              <div class="form-group">
                <label>Payout Method</label>
                <select class="form-control">
                  <option>Bank Transfer</option>
                  <option>Mobile Money</option>
                  <option>PayPal</option>
                </select>
              </div>
              <div class="form-group">
                <label>Payment Currency</label>
                <select class="form-control">
                  <option>KES - Kenyan Shilling</option>
                  <option>USD - US Dollar</option>
                  <option>EUR - Euro</option>
                </select>
              </div>
              <button type="submit" class="btn btn-agro">Save Changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-bell mr-2"></i>Notification Settings</h3>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" checked>
                  <span class="custom-control-label">Email notifications for new orders</span>
                </label>
              </div>
              <div class="form-group">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" checked>
                  <span class="custom-control-label">Email notifications for payments</span>
                </label>
              </div>
              <div class="form-group">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input">
                  <span class="custom-control-label">SMS notifications for order updates</span>
                </label>
              </div>
              <div class="form-group">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" checked>
                  <span class="custom-control-label">Weekly summary reports</span>
                </label>
              </div>
              <button type="submit" class="btn btn-agro">Save Changes</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-shield-alt mr-2"></i>Security Settings</h3>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label>Session Timeout (minutes)</label>
                <input type="number" class="form-control" value="60">
              </div>
              <div class="form-group">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" checked>
                  <span class="custom-control-label">Two-factor authentication</span>
                </label>
              </div>
              <div class="form-group">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" checked>
                  <span class="custom-control-label">IP whitelisting</span>
                </label>
              </div>
              <div class="form-group">
                <label>Max Login Attempts</label>
                <input type="number" class="form-control" value="5">
              </div>
              <button type="submit" class="btn btn-agro">Save Changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection