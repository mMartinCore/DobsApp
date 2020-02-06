
@extends('layouts.app')

@section('content')
<div class="main-section">
		<div class="breadcrumb flat">
			<a href="/" class="active"><i class="fa fa-home"></i> Dashboard</a>
	 			<a  href="leaves.leaveStats/{{0}}' ">  Statistic</a>
		</div>
    </div>
    <div class="container">
<br><br>
        <div class="panel panel-primary">

{{-- <div class="panel-heading">  Statistic
    <div class=" pull-right">
        <select name="" class=" chart form-control" id="chart">
            <option value=""> Select chart type </option>
            <option value="pie">Pie Chart

            </option>
            <option value="bar">
                    Bar Chart
            </option>
            <option value="donut">Donut Chart</option>
        </select>
    </div> --}}
       </div>
          <div class="panel-body">
            <div class="row">
            <div class="col-md-9">
               {!! $chart->html() !!}
            </div>


            <div class="col-md-3" style="background:mintcream">

                @php ($items= [])<!-- create an array-->




<h3> Division</h3>

            @foreach ($divisions as $division)

                {{-- @if(!in_array($lf->status->id, $items))
                    @php ( $items[] = $lf->status->id) <!--assign value to array-->
                    <h5>    <a href="/leaves/leaveDetails/{{ $lf->status->id }}"><i class="fa fa-filter"></i>  {{$lf->status->status}}
                    <span class="label label-warning pull-right">   {{$lf->status->leave->count() }}</span></a>
                     <hr>
                </h5>
                @endif--}}
    @endforeach





            </div>

            <br/><br/>




         </div>

        </div>

    </div>   </div>

    {!! Charts::scripts() !!}
    {!! $chart->script() !!}


<script>
    $(document).ready(function(){

    var chart='';
    $("select.chart").change(function(){
        chart= $(this).children("option:selected").val();

  if (chart=='pie') {
    location. replace("/leaves/leaveStats/0/pie");
  } if (chart=='bar') {
    location. replace("/leaves/leaveStats/0/bar");
  }  if (chart=='donut') {
    location. replace("/leaves/leaveStats/0/donut");
  }


    });
});

</script>
@endsection
