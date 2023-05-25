@extends('layouts.app')

@section('content')
@section('styles')
 <!-- flag-icon-css -->
 <link rel="stylesheet" href="{{asset('{{asset('plugins/flag-icon-css/css/flag-icon.min.css')}}">
@endsection

<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools')}}">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus')}}"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times')}}"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        Check the Header part you can find Language Changing Options with Icon.
        <br>
        Start creating your amazing application!
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->

@section('scripts')

@endsection
@endsection