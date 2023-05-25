@extends('layouts.app')

@section('content')
@section('styles')

@endsection
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <!-- AREA CHART -->
            @include('layouts.adminlte.pages.charts.chartjs.card',['clascard'=>'card-primary','cardtitl'=>'Area Chart','chartidx'=>'areaChart'])
            <!-- /.card -->

            <!-- DONUT CHART -->
            @include('layouts.adminlte.pages.charts.chartjs.card',['clascard'=>'card-danger','cardtitl'=>'Donut Chart','chartidx'=>'donutChart'])
            <!-- /.card -->

            <!-- PIE CHART -->
            @include('layouts.adminlte.pages.charts.chartjs.card',['clascard'=>'card-danger','cardtitl'=>'Pie Chart','chartidx'=>'pieChart'])
           
            <!-- /.card -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
            <!-- LINE CHART -->
            @include('layouts.adminlte.pages.charts.chartjs.card',['clascard'=>'card-info','cardtitl'=>'Line Chart','chartidx'=>'lineChart'])
         
            <!-- /.card -->

            <!-- BAR CHART -->
            @include('layouts.adminlte.pages.charts.chartjs.card',['clascard'=>'card-success','cardtitl'=>'Bar Chart','chartidx'=>'barChart'])
            <!-- /.card -->

            <!-- STACKED BAR CHART -->
            @include('layouts.adminlte.pages.charts.chartjs.card',['clascard'=>'card-success','cardtitl'=>'Stacked Bar Chart','chartidx'=>'stackedBarChart'])
          
            <!-- /.card -->

        </div>
        <!-- /.col (RIGHT) -->
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->


@section('scripts')
@include('layouts.adminlte.pages.charts.chartjs.card')
@endsection
@endsection