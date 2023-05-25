@extends('layouts.app')

@section('content')
@section('styles')
 <!-- uPlot -->
 <link rel="stylesheet" href="{{asset('{{asset('plugins/uplot/uPlot.min.css')}}">
@endsection
<div class="container-fluid">
  <!-- AREA CHART -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Area Chart</h3>

      <div class="card-tools')}}">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus')}}"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times')}}"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="chart">
        <div id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

  <!-- LINE CHART -->
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Line Chart</h3>

      <div class="card-tools')}}">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus')}}"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times')}}"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="chart">
        <div id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div><!-- /.container-fluid -->
@section('scripts')
@include('layouts.adminlte.pages.charts.uplot.scripts')
@endsection
@endsection