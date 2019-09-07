@extends('layouts.admin')

@section('content')
<div class="card card-dashboard-seven">
  <div class="card-header">
<div class="row row-sm">
  <div class="col-6 col-md-4 col-xl">
    <div class="media">
      <div><i class="icon ion-ios-calendar"></i></div>
      <div class="media-body">
        <label>Start Date</label>
        <div class="date">
          <span>Sept 01, 2018</span> <a href="#"><i class="icon ion-md-arrow-dropdown"></i></a>
        </div>
      </div>
    </div><!-- media -->
  </div>
  <div class="col-6 col-md-4 col-xl">
    <div class="media">
      <div><i class="icon ion-ios-calendar"></i></div>
      <div class="media-body">
        <label>End Date</label>
        <div class="date">
          <span>Sept 30, 2018</span> <a href="#"><i class="icon ion-md-arrow-dropdown"></i></a>
        </div>
      </div>
    </div><!-- media -->
  </div>
  <div class="col-6 col-md-4 col-xl mg-t-15 mg-md-t-0">
    <div class="media">
      <div><i class="icon ion-logo-usd"></i></div>
      <div class="media-body">
        <label>Sales Measure</label>
        <div class="date">
          <span>Revenue</span> <a href="#"><i class="icon ion-md-arrow-dropdown"></i></a>
        </div>
      </div>
    </div><!-- media -->
  </div>
  <div class="col-6 col-md-4 col-xl mg-t-15 mg-xl-t-0">
    <div class="media">
      <div><i class="icon ion-md-person"></i></div>
      <div class="media-body">
        <label>Customer Type</label>
        <div class="date">
          <span>All Customers</span> <a href="#"><i class="icon ion-md-arrow-dropdown"></i></a>
        </div>
      </div>
    </div><!-- media -->
  </div>
  <div class="col-md-4 col-xl mg-t-15 mg-xl-t-0">
    <div class="media">
      <div><i class="icon ion-md-stats"></i></div>
      <div class="media-body">
        <label>Transaction Type</label>
        <div class="date">
          <span>All Transactions</span> <a href="#"><i class="icon ion-md-arrow-dropdown"></i></a>
        </div>
      </div>
    </div><!-- media -->
  </div>
</div>
</div>
<div class="card-body">
  <div class="row row-sm">
    <div class="col-6 col-lg-3">
      <label class="az-content-label">Total Quantity</label>
      <h2>110,000</h2>
      <div class="desc up">
        <i class="icon ion-md-stats"></i>
        <span><strong>2.00%</strong> (30 days)</span>
      </div>
      <span id="compositeline2">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
    </div><!-- col -->
    <div class="col-6 col-lg-3">
      <label class="az-content-label">Total Cost</label>
      <h2><span>$</span>523,200</h2>
      <div class="desc up">
        <i class="icon ion-md-stats"></i>
        <span><strong>12.09%</strong> (30 days)</span>
      </div>
      <span id="compositeline">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
    </div><!-- col -->
    <div class="col-6 col-lg-3 mg-t-20 mg-lg-t-0">
      <label class="az-content-label">Total Revenue</label>
      <h2><span>$</span>753,098</h2>
      <div class="desc down">
        <i class="icon ion-md-stats"></i>
        <span><strong>0.51%</strong> (30 days)</span>
      </div>
      <span id="compositeline4">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
    </div><!-- col -->
    <div class="col-6 col-lg-3 mg-t-20 mg-lg-t-0">
      <label class="az-content-label">Total Profit</label>
      <h2><span>$</span>331,886</h2>
      <div class="desc up">
        <i class="icon ion-md-stats"></i>
        <span><strong>5.32%</strong> (30 days)</span>
      </div>
      <span id="compositeline3">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
    </div><!-- col -->
  </div><!-- row -->
</div><!-- card-body -->

</div><!-- row -->

@stop
