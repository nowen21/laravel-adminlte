@extends('layouts.app')

@section('content')
@section('styles')

@endsection

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- interactive chart -->
            @include('layouts.adminlte.pages.charts.flot.card',['clascard'=>'card-primary card-outline','cardtitl'=>'Interactive Area Chart','chartidx'=>'interactive','buttitle'=>'Real time'])
           
            
            <!-- /.card -->

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-6">
            <!-- Line chart -->
            @include('layouts.adminlte.pages.charts.flot.card-collapse',['clascard'=>'card-primary card-outline','cardtitl'=>'Line Chart','chartidx'=>'line-chart'])
            <!-- /.card -->

            <!-- Area chart -->
            @include('layouts.adminlte.pages.charts.flot.card-collapse',['clascard'=>'card-primary card-outline','cardtitl'=>'Area Chart','chartidx'=>'area-chart'])
            <!-- /.card -->

        </div>
        <!-- /.col -->

        <div class="col-md-6">
            <!-- Bar chart -->
            @include('layouts.adminlte.pages.charts.flot.card-collapse',['clascard'=>'card-primary card-outline','cardtitl'=>'Bar Chart','chartidx'=>'bar-chart'])
         
            <!-- /.card -->

            <!-- Donut chart -->
            @include('layouts.adminlte.pages.charts.flot.card-collapse',['clascard'=>'card-primary card-outline','cardtitl'=>'Donut Chart','chartidx'=>'donut-chart'])
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->



@section('scripts')
@include('layouts.adminlte.pages.charts.flot.scripts')
@endsection
@endsection