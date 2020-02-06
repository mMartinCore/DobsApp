@extends('layouts.app')
@section('content')
  <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

  <style>
      h3{
  font-size:1m;
  font-weight: 300;

  display: block;
  line-height:1em;

  color:  #3c8dbc;
}

  a.btn:hover {
     -webkit-transform: scale(1.1);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 a.btn {
     -webkit-transform: scale(0.8);
     -moz-transform: scale(0.8);
     -o-transform: scale(0.8);
     -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
 }




  .btn-glyphicon {
    padding:8px;
    background:#ffffff;
    margin-right:4px;
}
.icon-btn {
    padding: 1px 15px 3px 2px;
    border-radius:50px;
}

                        </style>


  <br />
  <div class="container col-lg-12 col-lg-offset-0 box box-primary">


   <div class="row">
        <h3>&emsp;All Members <span class=" ion-planet"></span>&emsp;&emsp;&emsp;

        <button type="button" class="btn btnSearch  btn-success" data-toggle="collapse" data-target="#searchForm">
        <span class="glyphicon glyphicon-collapse-down"></span> Open filter  </button>


        <div id="search_bar"  class="pull-right col-xs-4 col-md-8">
          <div class="input-group ">
            <input type="text"  class="form-control" placeholder="Search..." id="txtSearch"/>
            <div class="input-group-btn">
              <button class="btn btn_search btn-primary" type="submit">
                <span class="glyphicon glyphicon-search"></span>
              </button>
            </div>
          </div>
        </div>



      </div>


                     </h3>
        <div class="box text-left box-default">
                <div id="searchForm" class="collapse">
                  <div class="box-header   with-border">
                      <form class='filter-form'>
                            <div class="container " >
                                <div class="form-group">
                                   <div  class="col-lg-10 col-lg-offset-0">
                                  <div class="col col-md-3">
                                      <input type='text' value=''class='filter form-control' placeholder="Search Computer Number " data-column-index='1'>
                                  </div>
                                  <div class="col col-md-3">
                                      <input type='text' value='' class=' filter form-control' placeholder="Search Regulation Number" data-column-index='2'>
                                  </div>
                                  <div class="col col-md-3">
                                      <input type='text' value=''class=' filter form-control'placeholder="Search Last Name" data-column-index='5'>
                                  </div>

                                  <div class="col col-md-3">
                                      <input type='text' value=''class=' filter form-control'placeholder="Search First Name" data-column-index='6'>
                                  </div>
                                </div>
                              </div>

<br><br>
                              <div class="form-group">
                                    <div  class="col-lg-10 col-lg-offset-0">

                                    <div class="col col-md-3">
                                            <input type='text' value=''class=' filter form-control'placeholder="Search Division" data-column-index='8'>
                                        </div>


                                   <div class="col col-md-3">

                                        <select name="rank_id"  class=" filter form-control" data-column-index='3'>
                                            <option value="">-------Select Rank-------</option>
                                                  @foreach($ranks as $rank)
                                                         <option value='{{ $rank->id }}'>{{ $rank->rank}}</option>
                                                  @endforeach
                                           </select>

                                   </div>
                                   <div class="col col-md-3">
                                        <span class="input-group-btn">
                                                <button type="button"    class="btn search btn-default btn-success"><i class="fa fa-search fa-fw"></i> Search</button>
                                                </span>
                                                <span class="input-group-btn">
                                                  <button type="reset"  id="reset" class="btn btn-default btn-primary">
                                                  <i class="fa fa-refresh"></i> Reset</button>
                                                  </span>
                                   </div>
                                   <div class="col col-md-3">
                                        <a class="btn icon-btn btn-primary" href="/officers/create">
                                            <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
                                            Add New Officer
                                            </a>
                                   </div>


                                 </div>
                               </div>





                              </div>
                      </form>
                    </div>
                 </div>
             </div>



             @role('Editor|Administer')
             <input type="hidden" id="eb" value="eb">
             @endrole
             @role('Administer')
             <input type="hidden" id="red" value="red">
             @endrole


     <div class="table-responsive">
      <table  id="datatablex" class="table table-responsive" id="commendations-table " style="width:100%;border-collapse:collapse;background-color:#3c8dbc; font-size:small; color:white" >       <thead>
        <tr>
            <th>Image</th>
            <th>CompNo</th>
            <th>RegNo</th>
            <th>Rank_id</th>
            <th>Rank</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Division</th>
            <th>Status</th>
            <th>&emsp;View</th>
            <th>Edit</th>
            <th>Delete</th>

       <tbody  style=" background-color:white; color:black">

       </tbody>
      </table>


   </div>
  </div>


<script>
$(document).ready(function(){

    var veb= "eb";
     var ver= "red";



  var table =  $('#datatablex').DataTable( {
    "lengthMenu": [[1,2,3,4,5,10, 25, 50,100], [1,2,3,4,5,10, 25, 50,100 ]],
    processing:true,
    serverSide:true,
    ordering: true,
    'searching'   : true,
    'paging'      : true,
    select: true,
    "sDom":"ltipr" ,

    dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
    ajax: '{!! route('officers.data') !!}',
    columns: [
      {

    data: "image", "aTargets": [0],
    'render': function (data, type, full, meta) {
  return '<img  width="125" height="100"  src="/storage/images/'+data+'" style="height:100px;width:100px;"/>';
      //return '<img  width="125" height="100"  src="'+data+'"style="height:100px;width:100px;"/>';
    }},
      {data: 'id', name: 'id'},
      {data: 'reg_no',name: 'reg_no'},
      {data: 'rank_id', name: 'rank_id'},
      {data: 'rank', name: 'rank'},
      {data: 'last_name', name: 'last_name'},
      {data: 'first_name',name: 'first_name'},
      {data: 'middle_name',name: 'middle_name'},
      {data: 'division', name: 'division'},
      {data: 'status', name: 'status'},
      {
      data: null,
      className: "center",
      defaultContent: '<a href=" " editor_edit id="viewX"  class="btn btn-success a-btn-slide-text"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span><span><strong> View</strong></span></a>'
     },
     {
      data: null,
      className: "center",
      defaultContent: '<a href="" editor_edit id="editX" class="btn x btn-primary a-btn-slide-text"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><span><strong> Edit</strong></span></a>'
     } ,
     {
      data: null,
      className: "center",
      defaultContent: '<a href="#" editor_edit  id="deleteX"  class="btn  btn-danger a-btn-slide-text"><span class="fa fa-trash-o fa-lg" aria-hidden="true"></span><span><strong> Delete</strong></span></a>'
     }
    ],
    "columnDefs": [
    { "orderable": false, "targets": 10 },
    { "orderable": false, "targets": 11} ,
    { "orderable": false, "targets": 12 }
  ]
});
//$('#datatablex').DataTable();

          var columnz = table.column(3);
            columnz.visible( ! columnz.visible());

        // Get the column API object

      //  var columny = table.column(10);
      var eb= $('#eb').val();
      var xx= $('#red').val();

       // Toggle the visibility
      //  columnx.visible( ! columnx.visible() );
      if( eb!=veb){
            var columnx = table.column(10);
            columnx.visible( ! columnx.visible());
        }

        if( ver!=xx){
            var columnxx = table.column(11);
            columnxx.visible( ! columnxx.visible());
        }






//////////////////////////////

var row_data;
$('#datatablex tbody').on( 'click', '#viewX', function () {
    row_data = table.row( $(this).parents('tr') ).data();
    window.location.href = '/officers/'+row_data.id;
    return false;
});
$('#datatablex tbody').on( 'click', '#editX', function () {
    row_data = table.row( $(this).parents('tr') ).data();
    window.location.href = '/officers/'+row_data.id+'/edit';
    return false;
});
$('#datatablex tbody').on( 'click', '#deleteX', function () {
    row_data = table.row( $(this).parents('tr') ).data();
    window.location.href =  '/officers/'+row_data.id;
    return false;
});

/////////////////////////////////////////////////////

$( "#reset" ).click(function() {
  window.location.href ='';
});

////////////////////////////////////////////////

     $(".filter").select(function(){
  //clear global search values
  table.search('');
  table.column($(this).data('columnIndex')).search(this.value).draw();
      });
  $(".search").click(function(){
    $(".filter").trigger("select");
  });


  $('.btn_search').on( 'click', function () {
    table.search($('#txtSearch').val()).draw();
    });

});





        $(document).ready(function(){
            $("#search_bar").show();
            $("#searchForm").on("hide.bs.collapse", function(){
            $("#search_bar").show();
            $(".btnSearch").html('<span class="glyphicon glyphicon-collapse-down"></span> Open  filter');
          });
            $("#searchForm").on("show.bs.collapse", function(){
            $('#txtSearch').val('');
            $("#search_bar").hide();
            $(".btnSearch").html('<span class="glyphicon glyphicon-collapse-up"></span> Close filter');
          });

  });
        </script>
<br><br><br><br><br><br><br>
@endsection

