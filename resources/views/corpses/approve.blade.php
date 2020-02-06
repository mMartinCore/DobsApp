@extends('layouts.app')



@section('content')


@include('corpses.showModal')

<link rel="stylesheet" href="{{asset('dist/task.css')}}">



<div class="col-lg-10 col-lg-offset-1">

    <h3><i class="fa fa-corpses"></i> Pauper's Burial {{$listType}} List </h3>
    <div id="output"></div>
    <hr>
    <div  class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead  style=" width:100%;border-collapse:collapse;background-color:#3c8dbc; font-size:small; color:white" >
                <tr style="test-align:center" >
                    <th>Reference No</th>
                    <th>Name</th>
                     <th>Division</th>
                     <th>Pickup Date</th>
                     <th>Status</th>
                     <th>Storage</th>
                    <Th>Excess</Th>
                    <th>Actions</th>

                </tr>
            </thead>

            <tbody style="font-size:small;" >
                @foreach ($corpses as $corpse)
                <tr class="col">
<?php
$name='';

if ($corpse->first_name == "Unidentified") {

if ($corpse->suspected_name != '')
    $name = '*' . $corpse->suspected_name . '*';
else {
    $name = 'Unidentified';
}
} else {
$name = $corpse->first_name . ' ' . $corpse->middle_name . ' ' . $corpse->last_name;
}
// $corpse->created_at->format('F d, Y h:ia')




$storagedays = '';
$excess = 0;



            $storagedays = $corpse->storagedays();
            if ($storagedays >= 30) {

                $storagedays =  $storagedays;

                if ($storagedays > 30) {

                    $excess = $storagedays - 30;


                    if ($excess > 0) {

                    } else {
                        $excess = 0;
                    }
                } else {
                    $excess = 0;
                }

                // $overThirty=
            } elseif ($storagedays >= 20 &&  $storagedays < 30) {
                $excess = 0;
                $storagedays = $storagedays;
            }






                 ?>

                     <td>
                        @hasrole('SuperAdmin|Admin|viewer|writer')
                            <a href="#" onclick="getViewId({!!$corpse->id!!});" class='btn btn-success btn-xs'>    {!!$corpse->id!!}</a>
                          @endrole
                       </td>
                      <td>{!! $name!!}</td>
                      <td>{!!$corpse->station->division->division!!}</td>
                      <td>{!! $corpse->pickup_date!!}</td>

                      <td>{!! $corpse->pauper_burial_approved!!}</td>
                      <td>{!!  $storagedays!!}</td>
                      <td>{!!   $excess!!}</td>
                   <td>
                    <div class='btn-group'>

                                @hasrole('SuperAdmin')

                                @if ( $listType=="Not Approval" ||  $listType=="No-Request" )
                                <a href="#"  class='btn btn-success btn-xs'> No Action</a>
                                @else
                                  <a href="#" onclick="approved({!!$corpse->id!!});" class='btn btn-success btn-xs'> Approve</a>
                                  <a href="#" onclick="deny({!!$corpse->id!!});" class='btn   btn-danger btn-xs'> Deny </a>
                                @endif

                                @endrole
                            </div>

                        </td>
                </tr>
                @endforeach
            </tbody>

        </table>

{!! $corpses->links()  !!}
    </div>

{{--
    <a href="{{ route('corpses.create') !!}" class="btn btn-success">Add corpse</a> --}}

</div>







    <!-- The Modal  _Vacation -->
    <div class="my_Modal_Vacation">
        <div class="Modal_Vacation-content">
         <div class="modal_Vacation-header">
           <span class="modal_Vacation_close" onclick="closeModal();">&times;</span>
           </div>
                <div class="my_Modal_Vacation-body">
                  <div id = "Confirm_contentVacation">
                   <div class="form-group"> </div>
                    <div class ="messageVacation">
                      <div id="vacationStatusUpdate"  style="color:green;">  </div>
                      <span class="taskMess"></span>
                      <h4 id="vacationStatusTxt" > Enter a Task</h4> <span style="color:red" class="task_error"></span>
                      <input type="text" class="task form-control"name="task" id="task" ><br>

                      </div>
                   <hr>
               <button id="btnConfirmVacation" class="saved" onclick="SubmitTask();" >Submit</button>  &emsp;

               <button id="cancelVacation" onclick=" myFunction();" class = "cancelTask yes">Cancel</button> &emsp;
          </div>
           <div>
           </div>
         </div>
       </div>
     </div>





<input type="hidden" id="getId">




@endsection












<script>


     function SubmitTask(){
            checkTask();
                }





    function closeModal()
            {

                var Stdate = $(".task").val();
                if (Stdate!="") {
                    var r = confirm(" Are you Sure ?");
                    if (r == true) {
                        $(".my_Modal_Vacation").hide();
                        $(".task").val('');
                         alert("TASK DID SAVED !");
                         $(".task").css("border","2px solid green");
                       $(".task_error").html("");
                      }
                    }else{
                        $(".my_Modal_Vacation").hide();
                        $(".task").val('');

                         $(".task").css("border","2px solid green");
                       $(".task_error").html("");
                    }


            }


            function myFunction()
            {

                var Stdate = $(".task").val();
                if (Stdate!="") {
                    var r = confirm(" Are you Sure ?");
                    if (r == true) {
                        $(".my_Modal_Vacation").hide();
                        $(".task").val('');
                         alert("TASK DID SAVED !");
                         $(".task").css("border","2px solid green");
                       $(".task_error").html("");
                      }
                    }else{
                        $(".my_Modal_Vacation").hide();
                        $(".task").val('');

                         $(".task").css("border","2px solid green");
                       $(".task_error").html("");
                    }


            }


    function getViewId(id) {
  $("#load_show_view").load("corpses/"+id, function(responseTxt, statusTxt, xhr){
      if(statusTxt == "success")
       {    document.getElementById('demo02').click(); // Works!
           return false;
    }
      if(statusTxt == "error"){
        alert("Error: " + xhr.status + ": " + xhr.statusText);
      }
      return false;

    });
     }











    function approved(id){
       if (id!='') {

        $.ajax({
            url:"{{ route('corpses.approved') }}",  
            method:"POST",
            data: {
                'corpse_id':id,
                "_token": "{{ csrf_token() }}",
            },

            dataType:"json",
            success:function(data)
            {
                if(data.error.length > 0)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<br><div class="alert alert-danger">'+data.error[count]+'</div> <br>';
                    }
                    $('#output').html(error_html);
                }
                else
                {
                    $('#output').html(data.success);

                    setTimeout(function(){
                    $('#output').html('');
                    window.location.reload();
                    }, 7000);
                }
            }
        })

       } else {
            alert("No Id");
       }

      }







      function addTask(taskName,addresTo_id,corpse_id) {

$.ajax({
type: "POST",
url:"{{ route('corpses.task') }}",  
data: {
'task' : taskName,
'address_to_id':addresTo_id,
'corpse_id':corpse_id,
"_token": "{{ csrf_token() }}",
},
dataType: "json",
success:function(data){
    $("#getTask").html('');
    getTasks(corpse_id);
    $(".taskMess").html(data);
    $(".taskMess").css("color","solid green");


    setTimeout(function(){
        var element = document.getElementById("getTask");
        $(".my_Modal_Vacation").hide();
        $(".task_error").html("");
        $(".task").val('');
         element.scrollIntoView();
                }, 1000);

}
 });
}















function checkTask() {
id=$("#getId").val();
            $(".taskMess").html('');
            var taskx = $(".task").val();
            if(taskx==''){
                $(".task_error").text("NO TASK ENTERED!");
                 $(".task").css("border","2px solid red");

            }else  if(taskx.length > 150){
                    $(".task").css("border","2px solid red");;
                    $(".task_error").html("TASK  IS TOO WORDY!");
            }else if( taskx.length !=null && taskx.length < 7){
                    $(".task").css("border","2px solid red");;
                    $(".task_error").html("TASK NOT READABLE!");
            }else if (validatedId(id)) {
                    addTaskMethod(id);
                    $(".task").css("border","2px solid green");
                    $(".task_error").html("");
                    $(".task").val('');
                }  else {
                        $(".task").css("border","2px solid red");;
                         $(".task_error").html("SOMETHING WENT WRONG !");
                    }



}









      function deny( id){
        $(".my_Modal_Vacation").show();
        $("#getId").val(id);
      }






function addTaskMethod(id) {
    if (id!='') {
                    var taskName = $(".task").val();
                    $.ajax({
                        url:"{{ route('corpses.deny') }}",  
                        method:"POST",
                        data: {
                            'corpse_id':id,
                            'task' : taskName,
                            "_token": "{{ csrf_token() }}",
                        },

                        dataType:"json",
                        success:function(data)
                        {
                            if(data.error.length > 0)
                            {
                                var error_html = '';
                                for(var count = 0; count < data.error.length; count++)
                                {
                                    error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                                }
                                $('#output').html(error_html);
                            }
                            else
                            {
                                $(".my_Modal_Vacation").hide();
                                $('#output').html(data.success);

                                setTimeout(function(){
                                $('#output').html('');
                                window.location.reload();
                                }, 5000);
                            }
                        }
                    })

} else {
    alert("No Id");

      }
}







function validatedId(params) {
    if (params==null || params==""){
  $(".task_error").text("ID CAN BE BLANK!");
  $(".task").css("border","2px solid red");

  return false;
}else if(params.length>6){
    $(".task_error").text("ID FOR USER OR CORPSE IN VALID!");
    $(".task").css("border","2px solid red");

     return false;
  }else{
    $(".task").css("border","2px solid green");
   $(".task_error").html("");

     return true;
  }

}



    </script>

{{-- <script>
    $(document).ready(function(){

     $(document).on('click', '.page-link', function(event){
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        fetch_data(page);
     });

     function fetch_data(page)
     {
      var _token = "{{ csrf_token() }}",
      $.ajax({
          url:"{{ route('pagination.fetch') }}",
          method:"POST",
          data:{_token:_token, page:page},
          success:function(data)
          {
           $('#table_data').html(data);
          }
        });
     }

    });
    </script> --}}
