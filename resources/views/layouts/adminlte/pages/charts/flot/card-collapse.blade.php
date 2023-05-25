<div class="card {{$clascard}}">
    <div class="card-header">
        <h3 class="card-title">
            <i class="far fa-chart-bar"></i>
            {{$cardtitl}}
        </h3>

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
        <div id="{{$chartidx}}" style="height: 300px;"></div>
    </div>
    <!-- /.card-body-->
</div>