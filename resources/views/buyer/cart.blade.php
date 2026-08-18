@extends('layouts.masterdashboardlayout')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Shopping Cart</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Cart</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-body p-0">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Farmer</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Subtotal</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Organic Tomatoes</td>
                  <td>Green Valley Farm</td>
                  <td>$3.50/kg</td>
                  <td>
                    <div class="input-group input-group-sm" style="width:100px;">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary btn-sm" type="button">-</button>
                      </div>
                      <input type="text" class="form-control text-center" value="2">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary btn-sm" type="button">+</button>
                      </div>
                    </div>
                  </td>
                  <td>$7.00</td>
                  <td><button class="btn btn-sm btn-outline-danger" data-confirm="Remove from cart?"><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr>
                  <td>Fresh Corn</td>
                  <td>Sunny Acres</td>
                  <td>$2.80/kg</td>
                  <td>
                    <div class="input-group input-group-sm" style="width:100px;">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary btn-sm" type="button">-</button>
                      </div>
                      <input type="text" class="form-control text-center" value="1">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary btn-sm" type="button">+</button>
                      </div>
                    </div>
                  </td>
                  <td>$2.80</td>
                  <td><button class="btn btn-sm btn-outline-danger" data-confirm="Remove from cart?"><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr>
                  <td>Organic Honey</td>
                  <td>Bee Happy Farm</td>
                  <td>$12.00/jar</td>
                  <td>
                    <div class="input-group input-group-sm" style="width:100px;">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary btn-sm" type="button">-</button>
                      </div>
                      <input type="text" class="form-control text-center" value="1">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary btn-sm" type="button">+</button>
                      </div>
                    </div>
                  </td>
                  <td>$12.00</td>
                  <td><button class="btn btn-sm btn-outline-danger" data-confirm="Remove from cart?"><i class="fas fa-trash"></i></button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Order Summary</h3>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between mb-2">
              <span>Subtotal</span>
              <strong>$21.80</strong>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <span>Shipping</span>
              <strong>$5.00</strong>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <span>Tax</span>
              <strong>$1.74</strong>
            </div>
            <hr>
            <div class="d-flex justify-content-between mb-2">
              <strong>Total</strong>
              <strong class="text-success">$28.54</strong>
            </div>
            <a href="#" class="btn btn-agro btn-block mt-3"><i class="fas fa-credit-card mr-1"></i> Checkout</a>
            <a href="{{ route('buyer.marketplace') }}" class="btn btn-agro-outline btn-block mt-1">Continue Shopping</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection