

<link rel="stylesheet" href="{{asset('dist/task.css')}}">
<style>
.list-type3{
margin:0 auto;
width:500px;
}
.list-type3 li, .list-type3 a{
float:left;
height:35px;
line-height:35px;
position:relative;
font-size:15px;
margin-bottom: 12px;
font-family: 'Raleway', sans-serif;
transition: background-color 1.5s ease;
}
.list-type3 a{
padding:0 60px 0 12px;
background:#0089e0;
color:#fff;
text-decoration:none;
-moz-border-radius-bottomright:4px;
-webkit-border-bottom-right-radius:4px;
border-bottom-right-radius:4px;
-moz-border-radius-topright:4px;
-webkit-border-top-right-radius:4px;
border-top-right-radius:4px;
}

.list-type3 a:before{
content:"";
float:left;
position:absolute;
top:0;
left:-12px;
width:0;
height:0;
border-color:transparent #0089e0 transparent transparent;
border-style:solid;
border-width: 18px 12px 18px 0;
}

.list-type3 a:after{
content:"";
position:absolute;
top:15px;
left:0;
float:left;
width:6px;
height:6px;
-moz-border-radius:2px;
-webkit-border-radius:2px;
border-radius:2px;
background:#fff;
-moz-box-shadow:-1px -1px 2px #004977;
-webkit-box-shadow:-1px -1px 2px #004977;
box-shadow:-1px -1px 2px #004977;
}
.list-type3 a:hover{
background:#555;
}

.list-type3 a:hover:before{
border-color:transparent #0089e0 transparent transparent;
}
</style>
<script>
function print_webpage()
{
 var printContent = document.getElementsByTagName('body')[0];
 var WinPrint = window.open('', '', 'width=700,height=650');
 WinPrint.document.write(printContent.innerHTML);
 WinPrint.document.close();
 WinPrint.focus();
 WinPrint.print();
 WinPrint.close();
}

function print_div()
{
 var printContent = document.getElementById('print_div');
 var WinPrint = window.open('', '', 'width=700,height=650');
 WinPrint.document.write(printContent.innerHTML);
 WinPrint.document.close();
 WinPrint.focus();
 WinPrint.print();
 WinPrint.close();
}
</script>
  <div id="print_div" class="row">

        <div class="col-sm-3" style="background-color:">

            <h4>   Corpse  Detail</h4>
            <hr>
            @if($corpse->corpse_image)
                <div class=" well" style="background-color:">
                    <img  class="img-thumbnail" src="<?php echo asset("storage/$corpse->corpse_image")?>">
                </div>
            @endif
    <!-- First Name Field -->
    <div class="form-group">
           <Label>Name:</Label>
                @if ($corpse->first_name =="Unidentified")

                        @if ($corpse->suspected_name!='')
                             * {{$corpse->suspected_name}} *
                        @else
                        {{$corpse->first_name }}
                        @endif
                @else
                {{$corpse->first_name .' '.$corpse->middle_name.' '. $corpse->last_name}}
                @endif
                <br>

    {{Form::label('dob', 'Date of Birth:') }}
    {{$corpse->dob }} <br>


            {{Form::label('sex', 'Sex:') }}
        {{$corpse->sex }}
        <br>


            {{Form::label('nationality', 'Citizen of:') }}
            {{$corpse->nationality }}
 <br>

            {{Form::label('death_date', 'Death Date:') }}
            {{$corpse->death_date }}
 <br>


            {{Form::label('address', ' Late of Address:') }}
            {{$corpse->address }}
<br>


            {{Form::label('parish', 'Parish:') }}
            {{$corpse->station->division->parish->parish }}
<br>







       <hr>

        {{Form::label('next_of_kin', 'Next of Kin:') }}
        {{$corpse->next_of_kin }}
        <br>
        {{Form::label('next_of_kin_contact', 'Next of Contact:') }}
        {{$corpse->next_of_kin_contact }}
        <br>
        {{Form::label('next_of_kin_email', 'Next of email:') }}
        {{$corpse->next_of_kin_email }}





</div>
</div>





















<div class="col-sm-3" style="background-color:">

    <h4> Case Detail</h4>
    <hr>


<div class="form-group">


    {{Form::label('id', 'Corpse Id :') }}
    {{$corpse->id }}
    <br>

    {{Form::label('station', 'Station :') }}
    {{$corpse->station->station }}
<br>



{{Form::label('division', 'Division :') }}
{{$corpse->station->division->division }}
<br>



    {{Form::label('pickup_date', 'Pickup Date:') }}
    {{$corpse->pickup_date }}
<br>


{{Form::label('pickup_location', 'Pickup Location:') }}
{{$corpse->pickup_location }}
<br>


    {{Form::label('type_death', 'Type of Death:') }}
    {{$corpse->type_death }}
<br>

{{Form::label('manner_death', 'Manner Death:') }}
{{$corpse->manner_death }}
<br>
{{Form::label('anatomy', 'Anatomy:') }}
{{$corpse->anatomy }}
<br>
{{Form::label('condition', 'Condition:') }}
{{$corpse->condition }}

<br>
{{Form::label('dr_name', 'Dr Name:') }}
{{ $corpse->dr_name }}

<br>
{{Form::label('dr_contact', 'Dr Contact:') }}
{{$corpse->dr_contact }}
<br>


</div>
</div>




















  <div class="col-sm-3" style="background-color: ">
                <h4> Post Mortem Detail</h4>
                <hr>



<!-- Postmortem Status Field -->
<div class="form-group">
        {{Form::label('postmortem_status', 'Postmortem Status:') }}
        {{$corpse->postmortem_status }}<br>

        {{Form::label('postmortem_date', 'Postmortem Date:') }}
        {{$corpse->postmortem_date }}<br>

        {{Form::label('funeralhome_id', 'Funeral Home:') }}
        {{$corpse->funeralhome->funeralhome }}<br>

        {{Form::label('pathlogist', 'Pathlogist:') }}
        {{$corpse->pathlogist }}<br>

        {{Form::label('cause_of_Death', 'Cause Of Death:') }}
        {{$corpse->cause_of_Death }}<br>
    </div>


<hr>
        @foreach ($corpse->investigator  as $i)



        <div class="form-group">
            {{Form::label('investigator_last_name', 'Investigator:') }}
            {{$i->regNum  }}    {{$i->rank->rank  }} {{$i->investigator_first_name." ".$i->investigator_last_name  }}
            <br>
            {{Form::label('assign_date', 'Assigned Date:') }}
            {{$i->assign_date  }}
            <br>
            {{Form::label('contact_no', 'Contact No:') }}
            {{$i->contact_no  }}
            <br>
            {{Form::label('station_id', 'Station:') }}
            {{$i->station->station  }}
        </div>
                 <hr>
        @endforeach









 </div>


























        <div class="col-sm-3" style="background-color:;">
                <h4> Administrative Detail</h4>
                <hr>



<!-- Condition Field -->
<div class="form-group">
    {{Form::label('Storage', 'Storage :') }}
   @if ($corpse->storagedays() >=30)
        <b style="color:red; font-size:medium">{{$corpse->storagedays() }}</b>
       @elseif ($corpse->storagedays() >=20 && $corpse->storagedays() <25 )
         <b style="color:darkorange; font-size:medium">{{$corpse->storagedays() }}</b>
       @else
         <b style="color:green; font-size:medium">{{$corpse->storagedays() }}</b>
       @endif
       <br>
    {{Form::label('Excess', 'Excess :') }}

   @if ($corpse->excess() >=1)
   <b style="color:red; font-size:medium">{{$corpse->excess() }}</b>
   @else
   <b style="color:green; font-size:medium"> 0 </b>
 @endif
<br>
 {{Form::label('ProcessTime', 'Post Mortem Process Time :') }}

@if ($corpse->processTime() >=1)
<b style="color:red; font-size:medium">{{$corpse->processTime() }}</b>
@else
<b style="color:green; font-size:medium"> 0 </b>
@endif

</div>




<div class="form-group">
    {{Form::label('body_status', 'Body Status:') }}
    {{$corpse->body_status }} <br>

        {{Form::label('finger_print', 'Finger Print:') }}
        {{$corpse->finger_print }}
        <br>
        {{Form::label('finger_print_date', 'Finger Print Date:') }}
        {{$corpse->finger_print_date }}
        <br>
            {{Form::label('dna', 'DNA:') }}
            {{$corpse->dna }}
            <br>
            {{Form::label('dna_date', 'DNA Date:') }}
            {{$corpse->dna_date }}
            <br>
            {{Form::label('gazetted', 'Gazetted:') }}
            {{$corpse->gazetted }}
            <br>
            {{Form::label('gazetted_date', 'Gazetted Date:') }}
            {{$corpse->gazetted_date }}
            <br>
            {{Form::label('pauper_burial_requested', 'Pauper\'s Burial Request :') }}
            {{$corpse->pauper_burial_requested }}
            <br>
            {{Form::label('pauper_burial_requested_date', 'Paupe\'s Burial Request  Date:') }}
            {{$corpse->pauper_burial_requested_date }}
            <input id="pauper_burial_requested_date" type="hidden" value="{{$corpse->pauper_burial_requested_date }}"><br>
            <b>  <div style="color:darkorange" id="requestTimeAgo"> </div></b>

            {{Form::label('pauper_burial_approved', 'Pauper\'s Burial Approve:') }}
            {{$corpse->pauper_burial_approved }} <input type="hidden" value="{{$corpse->pauper_burial_approved }}" id="pauper_burial_approved">
            <br>
            {{Form::label('pauper_burial_approved_date', 'Pauper\'s Burial Approved Date:') }}
            {{$corpse->pauper_burial_approved_date }}
            <br>
            {{Form::label('buried', 'Buried:') }}
            {{$corpse->buried }}
            <br>
            {{Form::label('burial_date', 'Burial Date:') }}
            {{$corpse->burial_date }}
    </div>

        </div>



    </div>






<!-- User Id Field -->
<div class="form-group">
    {{Form::label('created_at', 'Created at:') }}
    {{ $corpse->created_at->diffForHumans() }} <br>

    {{Form::label('user_id', 'Created by:') }}
    {{$corpse->user->firstName." ".$corpse->user->lastName }} <br>

    {{Form::label('modified_by', 'Modified by:') }}
    <?php  $user = App\User::where('users.id',$corpse->modified_by)->get(); ?>
      @foreach ($user as  $modifedby)
      {{  $modifedby->firstName." ". $modifedby->lastName}}
      @endforeach
</div>

<hr>


<input type="hidden" id="user_id" value="{{$corpse->user_id}}">

<input type="hidden" id="corpse_id" class="makeRequestCorpse_id" value="{{$corpse->id}}">








    <!-- The Modal  _Vacation -->
    <div class="my_Modal_Vacation">
        <div class="Modal_Vacation-content">
         <div class="modal_Vacation-header">
           <span class="modal_Vacation_close">&times;</span>
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
               <button id="btnConfirmVacation" class="saved" >Submit</button>  &emsp;

               <button id="cancelVacation" onclick=" myFunction()" class = "cancelTask yes">Cancel</button> &emsp;
          </div>
           <div>
           </div>
         </div>
       </div>
     </div>

     <a href="{{route('corpses.edit', [$corpse->id]) }}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i> Edit</a>




















     <script src="{{ asset('bower_components/jquery/dist/jquery-1.11.1.min.js')}}"></script>
     <script>
        $(document).ready(function() {
            $(".task").val('');
            getTasks($("#corpse_id").val());
            if ($("#pauper_burial_requested_date").val()!='' && $("#pauper_burial_approved").val()=='Processing') {
             //   var since= 'Processing '+timeAgo($("#pauper_burial_requested_date").val());
              //  $("#requestTimeAgo").html(since);
            }


    $(".ShowModal").click(function() {
           $(".my_Modal_Vacation").show();
        });




        $(".saved").click(function(){
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
            }else{
                    if (validatedId($("#user_id").val())==true && validatedId($("#corpse_id").val())==true ) {
                        addTask(taskx,$("#user_id").val(),$("#corpse_id").val());
                        $(".task").css("border","2px solid green");
                        $(".task_error").html("");
                        $(".task").val('');
                    } else {
                        $(".task").css("border","2px solid red");;
                         $(".task_error").html("SOMETHING WENT WRONG !");
                    }
            }

                });



   $(".modal_Vacation_close").click(function()
         {
           $(".my_Modal_Vacation").hide();
            var Stdate = $(".task").val();
            if (Stdate!="") {
                alert("TASK DID NOT SAVED !");
                }
            $(".task").css("border","2px solid green");
            $(".task_error").html("");
        });





 });



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



        function myFunction()
            {
            var r = confirm(" Are you Sure ?");
            if (r == true) {
                $(".my_Modal_Vacation").hide();
                    var Stdate = $(".task").val();
                    if (Stdate!="") {
                        alert("TASK DID SAVED !");
                        }
                    $(".task").css("border","2px solid green");
                    $(".task_error").html("");
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
            $(".taskMess").html('');
            $(".taskMess").css('');

             element.scrollIntoView();
                    }, 1000);

    }
     });
}







function makeRequest(){
    var id= $('.makeRequestCorpse_id').val();
       if (id!='') {

        $.ajax({
            url:"{{ route('corpses.makeRequest') }}",
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
                        error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                    }
                    $('.output').html(error_html);
                }
                else
                {
                    $('.output').html(data.success);

                    setTimeout(function(){
                    $('.output').html('');
                    window.location.reload();
                    }, 3000);
                }
            }
        })

       } else {
            alert("No Id");
       }

      }








function getTasks(corpse_id) {
  var container= $("#getTask");
    $.ajax({
    type: "post",
    url:"{{ route('corpses.getTasks') }}",
    data: {
    'corpse_id':corpse_id,
    "_token": "{{ csrf_token() }}",
    },
    dataType: "json",
    success:function(data){

                $.each(data, function(i, item) {
                    $("#getTask").append('<div class="list-type3">  <ul> <li> <a href="#"> '+item.task+' '+timeAgo(item.created_at)+' </a>    </li>  </ul>   </div>');
                });
                 $("#getTask").append('<br>');

       }

       });   // $("#getTask").html(data);///.delay(3000).fadeOut();
    }




function timeAgo(datex) {
    let date = moment(datex, "YYYY-MM-DD hh-m-s");
return date.fromNow();
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
                        error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                    }
                    $('#output').html(error_html);
                }
                else
                {
                    $('#output').html(data.success);
                    $('.approveSuccess').html( '<div class="alert alert-success"> Approve Successfully </div>');
                    setTimeout(function(){
                    $('#output').html('');
                    $('.approveSuccess').hide();

                   // window.location.reload();
                    }, 3000);
                }
            }
        })

       } else {
            alert("No Id");
       }

      }










        ////////////////////////////









// UPDATED Vacation_DateUpdate method
// function vacation_Date(startDate,endDatein,officerId) {
//      $.ajax({
//       url:'include/vacationDate.inc.php',
//       method:"POST",
//       data:{ vacation_StartDate:startDate,
//          vacation_EndDate:endDatein,
//          officer_id:officerId

//         },
//       success:function(data) {
//         if (data!= "Error Updating") {
//                deleteSatus(getIndex,'Vacation Leave');
//                load_updatedFindIndex_data(officerId);
//                $("#vacationStatusTxt").hide();
//                $('#vacationStatusUpdate').html(data);
//                $('#vacationStatusUpdate').show();
//                $("#cancelVacation").hide();
//                $('#btnConfirmVacation').hide();
//                $("#vacationStatusTxt").hide();
//                $(".modal_Vacation_close").hide();
//                $("#btnVacationOk").show();
//                isVacationDAteUdated=1;
//         }
//       }
//      });
// }











// function vacationCheckData(index) {
//                  $.ajax({
//        url: 'include/vacationDate.inc.php',
//          method: 'POST',
//        dataType: 'json',
//            data: {
//           vacationIndex: index
//                  },
//         success: function (response) {

//       if (response.id!=null) {

//         $(".task").val(response.startDate);
//         $("#vacationEndDate").val(response.endDate);
//             isVacationDAteExisted=response.id;
//        }
//      }
//   });
// }







       </script>
