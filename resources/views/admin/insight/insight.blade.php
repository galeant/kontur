@extends('admin.master.skleton')

@section('title','Home')

@section('css')

@endsection

@section('content')
  <main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item active"><a href=" {{ url('/') }} ">Dashboard</a></li>
    </ol>
    <div class="container-fluid">
      <div class="animated fadeIn">
        <!-- /.row-->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="callout callout-info">
                          <small class="text-muted">All Member</small>
                          <br>
                          <strong class="h4">9,123</strong>
                          <div class="chart-wrapper">
                            <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-4">
                        <div class="callout callout-danger">
                          <small class="text-muted">Subscript Member</small>
                          <br>
                          <strong class="h4">22,643</strong>
                          <div class="chart-wrapper">
                            <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-4">
                        <div class="callout callout-warning">
                          <small class="text-muted">Subscript Member</small>
                          <br>
                          <strong class="h4">22,643</strong>
                          <div class="chart-wrapper">
                            <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                    <!-- /.row-->
                    <hr class="mt-0">
                    <div class="progress-group mb-4">
                      <div class="progress-group-prepend">
                        <span class="progress-group-text">Date</span>
                      </div>
                      <div class="progress-group-bars">
                        <!-- All -->
                        <div class="clearfix">
                          <div class="float-left">
                            <strong>50%</strong>
                          </div>
                          <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                          </div>
                        </div>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- NEW -->
                        <div class="clearfix">
                          <div class="float-left">
                            <strong>50%</strong>
                          </div>
                          <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                          </div>
                        </div>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- Subscript -->
                        <div class="clearfix">
                          <div class="float-left">
                            <strong>50%</strong>
                          </div>
                          <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                          </div>
                        </div>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="callout callout-info">
                          <small class="text-muted">Transaction</small>
                          <br>
                          <strong class="h4">9,123</strong>
                          <div class="chart-wrapper">
                            <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-4">
                        <div class="callout callout-danger">
                          <small class="text-muted">Transaction Pending</small>
                          <br>
                          <strong class="h4">22,643</strong>
                          <div class="chart-wrapper">
                            <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-4">
                        <div class="callout callout-warning">
                          <small class="text-muted">Transaction Success</small>
                          <br>
                          <strong class="h4">22,643</strong>
                          <div class="chart-wrapper">
                            <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                    <!-- /.row-->
                    <hr class="mt-0">
                    <div class="progress-group mb-4">
                      <div class="progress-group-prepend">
                        <span class="progress-group-text">Date</span>
                      </div>
                      <div class="progress-group-bars">
                        <!-- All -->
                        <div class="clearfix">
                          <div class="float-left">
                            <strong>50%</strong>
                          </div>
                          <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                          </div>
                        </div>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- NEW -->
                        <div class="clearfix">
                          <div class="float-left">
                            <strong>50%</strong>
                          </div>
                          <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                          </div>
                        </div>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- Subscript -->
                        <div class="clearfix">
                          <div class="float-left">
                            <strong>50%</strong>
                          </div>
                          <div class="float-right">
                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                          </div>
                        </div>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                </div>
                <!-- /.row-->
                <br>
              </div>
            </div>
          </div>
          <!-- /.col-->
        </div>
        <!-- /.row-->
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-5">
                <h4 class="card-title mb-0">Traffic</h4>
                <div class="small text-muted">November 2017</div>
              </div>
              <!-- /.col-->
              <div class="col-sm-7 d-none d-md-block">
                <button class="btn btn-primary float-right" type="button">
                  <i class="icon-cloud-download"></i>
                </button>
                <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                  <label class="btn btn-outline-secondary">
                    <input id="option1" type="radio" name="options" autocomplete="off"> Day
                  </label>
                  <label class="btn btn-outline-secondary active">
                    <input id="option2" type="radio" name="options" autocomplete="off" checked=""> Month
                  </label>
                  <label class="btn btn-outline-secondary">
                    <input id="option3" type="radio" name="options" autocomplete="off"> Year
                  </label>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="chart-wrapper" style="height:300px;margin-top:40px;">
              <canvas class="chart" id="main-chart" height="300"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <div class="row text-center">
              <div class="col-sm-12 col-md mb-sm-2 mb-0">
                <div class="text-muted">Visits</div>
                <strong>29.703 Users (40%)</strong>
                <div class="progress progress-xs mt-2">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="col-sm-12 col-md mb-sm-2 mb-0">
                <div class="text-muted">Unique</div>
                <strong>24.093 Users (20%)</strong>
                <div class="progress progress-xs mt-2">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="col-sm-12 col-md mb-sm-2 mb-0">
                <div class="text-muted">Pageviews</div>
                <strong>78.706 Views (60%)</strong>
                <div class="progress progress-xs mt-2">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="col-sm-12 col-md mb-sm-2 mb-0">
                <div class="text-muted">New Users</div>
                <strong>22.123 Users (80%)</strong>
                <div class="progress progress-xs mt-2">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="col-sm-12 col-md mb-sm-2 mb-0">
                <div class="text-muted">Bounce Rate</div>
                <strong>40.15%</strong>
                <div class="progress progress-xs mt-2">
                  <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- /.row-->
      </div>
    </div>
  </main>
@endsection

@section('js')

@endsection