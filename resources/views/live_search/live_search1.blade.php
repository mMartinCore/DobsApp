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
                     
                        <input type='text' value=''class=' filter form-control'placeholder="Search Last Name" data-column-index='3'>
                    </div>
                 
                    <div class="col col-md-3">                     
                        <input type='text' value=''class=' filter form-control'placeholder="Search First" data-column-index='4'>
                    </div>
                  </div>
                </div>

  <br><br>

                <div class=" form-group">
                    <div  class="col-lg-10 col-lg-offset-0">
                 
                      <div class="col col-md-3">
                       
                          <input type='text' value=''class=' filter form-control'placeholder="Search Division" data-column-index='7'>
                      </div>
                      <div class="col col-md-3">
                       <button type="reset"  id="reset" class="btn btn-default btn-primary">Reset</button>
                       </div>
                  </div>
                </div>


                </div> 
        </form><hr>
 
    
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Live Search" />
     </div>
     <div class="table-responsive">
      <h5 align="center">Total Data : <span id="total_records"></span></h5>
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
       
       </thead>
       <tbody style="color:black"> 

       </tbody>
      </table>
   
      
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

       
  $('#datatablex').DataTable( {
    processing:true,
    serverSide:true,
    ajax: '{!! route('live_search.data') !!}',
    columns: [
      {data: 'image', name: 'image'},
      {data: 'id', name: 'id'},
      {data: 'reg_no',name: 'reg_no'}, 
      {data: 'rank', name: 'rank'}, 
      {data: 'last_name', name: 'last_name'}, 
      {data: 'first_name',name: 'first_name'}, 
      {data: 'middle_name',name: 'middle_name'}, 
      {data: 'division', name: 'division'}, 
      {data: 'status', name: 'status'}
    ]
});   


});





 
</script>

<br><br><br><br><br><br><br> 
@endsection          