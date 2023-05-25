<div class="card {{$clascard}}">
    <div class="card-header">
        <h3 class="card-title">
            <i class="far fa-chart-bar"></i>
            {{$cardtitl}}
        </h3>

        <div class="card-tools')}}">
        {{$buttitle}}
            <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                <button type="button" class="btn btn-default btn-sm active" data-toggle="on">On</button>
                <button type="button" class="btn btn-default btn-sm" data-toggle="off">Off</button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div id="{{$chartidx}}" style="height: 300px;"></div>
    </div>
    <!-- /.card-body-->
</div>