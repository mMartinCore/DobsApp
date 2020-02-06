


@extends('layouts.app')


@section('content')

<!DOCTYPE html>
<html>
 <head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



  <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

  <style>
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
 </head>
 <body>
  <br />
  <div class="container box">

      <hr>
      <form class='filter-form'>
              <div class="container">
                  <div class="form-group">
                     <div  class="col-lg-10 col-lg-offset-0">
                    <div class="col col-md-3">
                        <input type='text' value=''class='filter form-control' placeholder="Search Computer Number " data-column-index='1'>
                    </div>
                    <div class="col col-md-3">
                        <input type='text' value='' class=' filter form-control' placeholder="Search Regulation Number" data-column-index='2'>
                    </div>
                    <div class="col col-md-3">
                        <input type='text' value=''class=' filter form-control'placeholder="Search Last Name" data-column-index='4'>
                    </div>

                    <div class="col col-md-3">
                        <input type='text' value=''class=' filter form-control'placeholder="Search First Name" data-column-index='5'>
                    </div>
                  </div>
                </div>

  <br><br>

                <div class=" form-group">
                    <div  class="col-lg-10 col-lg-offset-0">

                        <div class="col col-md-3">
                            <input type='text' value=''class=' filter form-control'placeholder="Search Rank" data-column-index='3'>
                        </div>
                      <div class="col col-md-3">
                          <input type='text' value=''class=' filter form-control'placeholder="Search Division" data-column-index='7'>
                      </div>
                      <div class="col col-md-3">
                          <button type="reset"  id="reset" class="btn btn-default btn-primary">Reset</button>

                          <button type="button"    class="btn search btn-default btn-success">Search</button>

                        </div>   <a class="btn icon-btn btn-primary" href="/officers/create">
                          <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
                          Add New Officer
                          </a>
                  </div>
                </div>


                </div>
        </form><hr>


     <div class="table-responsive">
      <table  id="datatablex" class="table table-board"style="width:100%;border-collapse:collapse;background-color:#3c8dbc; color:white" >
        <thead>
        <tr>
            <th>Image</th>
            <th>CompNo</th>
            <th>RegNo</th>
            <th>Rank</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Division</th>
            <th>Status</th>

            <th>Edit</th>

            <th>View</th>
           <th>Delete</th>

       </thead>
       <tbody  style=" background-color:white; color:black">

       </tbody>
      </table>


   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){





  var table =  $('#datatablex').DataTable( {
    processing:true,
    serverSide:true,
    ordering: true,
    'searching'   : true,
    'paging'      : true,


    ajax: '{!! route('live_search.data') !!}',
    columns: [ 
      {

    data: "image", "aTargets": [0],
    'render': function (data, type, full, meta) {
      return '<img  width="125" height="100"  src="/storage/images/'+data+'" style="height:100px;width:100px;"/>';
    }},
      {data: 'id', name: 'id'},
      {data: 'reg_no',name: 'reg_no'},
      {data: 'rank', name: 'rank'},
      {data: 'last_name', name: 'last_name'},
      {data: 'first_name',name: 'first_name'},
      {data: 'middle_name',name: 'middle_name'},
      {data: 'division', name: 'division'},
      {data: 'status', name: 'status'},
      {
      data: null,
      className: "center",
      defaultContent: '<a href=" " editor_edit id="viewX"  class="btn btn-success a-btn-slide-text"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span><span><strong>View</strong></span></a>'
     },
     {
      data: null,
      className: "center",
      defaultContent: '<a href="" editor_edit id="editX" class="btn x btn-primary a-btn-slide-text"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><span><strong>Edit</strong></span></a>'
     },
     {
      data: null,
      className: "center",
      defaultContent: '<a href="#" editor_edit  id="deleteX"  class="btn  btn-danger a-btn-slide-text"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span><strong>Delete</strong></span></a>'
     }
    ]
});
//$('#datatablex').DataTable();


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
    window.location.href = '#'+row_data.id;
    return false;
});

/////////////////////////////////////////////////////

$( "#reset" ).click(function() {
  window.location.href = '';

});

////////////////////////////////////////////////





 // DataTable
 //var dtable = $('#datatablex').DataTable();
     $(".filter").select(function(){
  //clear global search values
  table.search('');
  table.column($(this).data('columnIndex')).search(this.value).draw();
      });
  $(".search").click(function(){
    $(".filter").trigger("select");
  });






});






</script>

<br><br><br><br><br><br><br>
@endsection

