@extends('layouts.frontend')

@section('title', 'Marketplace — SmartAgro')

@section('content')
<section class="section-hero-marketplace">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">Marketplace</div>
      <h1>Fresh Agricultural Products</h1>
      <p>Discover quality products directly from verified farmers across Tanzania.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row mb-4">
      <div class="col-lg-3">
        <div class="filter-card">
          <h6 class="filter-title">Categories</h6>
          <div class="filter-list">
            <a href="{{ route('marketplace.index') }}" class="filter-item active">All Products</a>
            <a href="{{ route('marketplace.index', ['category' => 'Vegetables']) }}" class="filter-item">Vegetables</a>
            <a href="{{ route('marketplace.index', ['category' => 'Fruits']) }}" class="filter-item">Fruits</a>
            <a href="{{ route('marketplace.index', ['category' => 'Grains']) }}" class="filter-item">Grains</a>
            <a href="{{ route('marketplace.index', ['category' => 'Farm Inputs']) }}" class="filter-item">Farm Inputs</a>
            <a href="{{ route('marketplace.index', ['category' => 'Livestock']) }}" class="filter-item">Livestock</a>
            <a href="{{ route('marketplace.index', ['category' => 'Dairy']) }}" class="filter-item">Dairy</a>
            <a href="{{ route('marketplace.index', ['category' => 'Honey']) }}" class="filter-item">Honey</a>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div>
            <span style="font-weight:600;">Showing 1-8 of 124 products</span>
          </div>
          <div class="d-flex gap-2">
            <select class="form-select form-select-sm" style="width:auto;">
