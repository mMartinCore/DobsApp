

  @extends('layouts.app')


  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>PLACEJCF</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <style>

  h3.box-title {
    font-size:1m;
    font-weight: 300;

    display: block;
    line-height:1em;

    color:  #3c8dbc;
  }

  #modalBg{


    background: #03a9f4;
    color: #fff;

  }
  body{margin-top:20px;}



  </style>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
  @section('content')









<style>

body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal_View {
   display: none; /* Hidden by default */
   position: fixed; /* Stay in place */
   z-index: 999; /* Sit on top */
   padding-top: 55px; /* Location of the box */
   left: 0;
   top: 0;
   width: 100%; /* Full width */
   height: 100%; /* Full height */
   overflow: auto; /* Enable scroll if needed */
   background-color: rgb(0,0,0); /* Fallback color */
   background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal_View-content {
   position: relative;
   background-color: #fefefe;
   margin: auto;
   padding: 0;
   border: 1px solid #888;
   width: 80%; /* Full width */
   height: 70%; /* Full height */
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
   -webkit-animation-name: animatetop;
   -webkit-animation-duration: 0.4s;
   animation-name: animatetop;
   animation-duration: 0.4s
}



p{ background-color: ;
  background-color:  ;
  padding-top:  2px;
  padding-right:0px;
  padding-bottom:  2px;
  padding-left: 20px;
  width: 100%;
}
table { width: 100%;
   margin: 0px auto;
}​


/* Add Animation */
@-webkit-keyframes animatetop {
   from {top:-300px; opacity:0}
   to {top:0; opacity:5}
}

@keyframes animatetop {
   from {top:-300px; opacity:0}
   to {top:0; opacity:5}
}

/* The Close Button */
.close {
    color:#CC0000;
   float: right;
   font-size: 38px;
   font-weight: bold;   background-color: #233656;
}

.close:hover,
.close:focus {
   color:#CC0000;
   text-decoration: none;
   cursor: pointer;
}

.modal_View-header {
   padding: 1px 16px;
   background-color: #233656;
   color: white;
}

.modal_View-body {
    background: #FFF;
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    padding: 2px 16px;
    }

.modal_View-footer {
  height: 40px;
   padding: 2px 10px;
   background-color: #233656;
   color: white;
}
.overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    min-height: 100%;
    background: #1A3BB0;
background: -moz-linear-gradient(top, #1A3BB0 0%, #48BCCF 84%, #4C40FF 100%);
background: -webkit-linear-gradient(top, #1A3BB0 0%, #48BCCF 84%, #4C40FF 100%);
background: linear-gradient(to bottom, #1A3BB0 0%, #48BCCF 84%, #4C40FF 100%);
    z-index: 997;
    cursor: pointer;
    opacity: 1;
}

#btnBack{
    color: white;
    background: #1A3BB0;
background: -moz-linear-gradient(top, #1A3BB0 0%, #48BCCF 84%, #4C40FF 100%);
background: -webkit-linear-gradient(top, #1A3BB0 0%, #48BCCF 84%, #4C40FF 100%);
background: linear-gradient(to bottom, #1A3BB0 0%, #48BCCF 84%, #4C40FF 100%);
    z-index: 997;
    cursor: pointer;
    opacity: 1;

}

</style>




<div id="my_Modal_View" class="modal_View overlay">
        <!-- Modal content -->
            <div class="modal_View-content">
                <div class="modal_View-header">
                        <a   type="btn" id="btnBack" class="btn btn-sm btn-default pull-left" > << Back</a>   <span id="modal_View_close" class="close">&times;</span>

                 <h4 id="title">&emsp;Member list </h4>

            </div>
                 <div class="modal_View-body">
             <div class="form-group ">
                <table class="load" >    </table>
             </div>


               </div>
             <div class="modal_View-footer">
          <h4>  &copy; <?php  echo date('Y')  ?> PLACE<b>JCF</b>   <a   type="btn" id=" " class="btn btn-sm btn-danger pull-right " > close</a></h4>
       </div>
      </div>
    </div>










<script>
        $(document).ready(function(){
            var pre_link='';
        //      $("#mv").click(function(){

        //        var modal = document.getElementById('my_Modal_View');
        //        $('.load').load('/skills/'+44003+ '/skill', function(responseTxt, statusTxt, jqXHR){
        //     if(statusTxt == "success"){

        //     }
        //     if(statusTxt == "error"){
        //         alert("Error: " + jqXHR.status + " " + jqXHR.statusText);
        //     }
        //       });

        //       modal.style.display = "block";
        //    });







 // When the user clicks on <span> (x), close the modal
        $("#modal_View_close").click( function() {
            $('.load').html('');

            var modal = document.getElementById('my_Modal_View');
            modal.style.display = "none";
            });



// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    var modal = document.getElementById('my_Modal_View');
        if (event.target == modal) {
            $('.load').html('');
            modal.style.display = "none";
        }
}
 });




function getPersonal_List(link) {
    //    var success=false;
            var modal = document.getElementById('my_Modal_View');
                pre_link=link;
                $('.load').load(link, function(responseTxt, statusTxt, jqXHR){
                if(statusTxt == "success"){ }

                if(statusTxt == "error"){
                success=false;
                alert("Error: " + jqXHR.status + " " + jqXHR.statusText);
                }
                });
            // if (success!=false) {
                    modal.style.display = "block";
            //  }else{}
            }




    $("#btnBack").click( function() {

        if(pre_link !=''){
            $('.load').html('');
            getPersonal_List(pre_link);
        }else{
            var modal = document.getElementById('my_Modal_View');
            modal.style.display = "none";
       }

    });


       </script>






















































































































  <!-- Posting -->
  <div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div  class="modal-dialog modal-dialog-centered" role="document">
      <div id="modalBg" class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" >Posting</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="modalBg" class="modal-body">

          @if (count($officer->posting)>0)


            @foreach ($officer->posting as $posting)
            <br/>

            <a href="/postings/{{$posting->id}}/edit" class="btn btn-default btn-primary">Edit</a>
                        <div class="well" id="modalBg">
                               <br/>
                                 <div class="row">
                                      <div class="col-3 col-sm-3">
                                        <div class="form-group">
                                         {{Form::label('start_date', ' Start Date :')}}
                                          <b> {{  $posting->start_date }}</b>
                                </div></div>
                                <div class="col-3 col-sm-3">   <div class="form-group">
                                       {{Form::label('end_date', 'End Date :')}}
                                       <b> {{ $posting->end_date }}</b>
                                </div> </div>
                               <div class="col-3 col-sm-3">    <div class="form-group">
                                       {{Form::label('force_order_no', ' Force Order Number :')}}
                                       <b>{{ $posting->force_order_no }}</b>
                                </div></div>
                              </div>
                            <div class="row">
                                <div class="col-6 col-sm-6">   <div class="form-group">
                                       {{Form::label('unit', 'Unit :')}}
                                       <b>{{  $posting->unit }}</b>
                                </div> </div>
                                <div class="col-6 col-sm-6">   <div class="form-group">
                                       {{Form::label('section', ' Section :')}}
                                       <b> {{ $posting->section }}</b>
                                </div> </div>
                             </div>
                             <div class="form-group">
                                   {{Form::label('is_current', ' Is Current :')}}
                                   <b> {{  $posting->is_current}}</b>
                            </div>

               <div class="form-group">
                   {{Form::label('division', ' Division :')}}
                   <b>  {{  $posting->division }}</b>
               </div>
               <div class="form-group">
                   {{Form::label('remarks', ' Remarks :')}} <b>
                     <b>  {!! $posting->remarks !!}</b>
               </div>
              <br/>
               <small>Created on {{$posting->created_at}} by {{$posting->user_id}}</small>
                               </div>
                 @endforeach

         @endif

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>


















  <!-- Button trigger modal -->


  <!-- skills -->
  <div class="modal fade" id="dependentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Dependent</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">



            @if ( count($officer->dependent)>0)
            <br>
          <h1> Dependent </h1>
          @foreach ($officer->dependent as $dependent)
          <br/>

          <a href="/dependents/{{$dependent->id}}/edit" class="btn btn-default">Edit</a>
                      <div class="well" style="background:white">
                             <br/>

                             <div class="row">
                                     <div class="col-4 col-sm-4">
                                           <h5>  <b>{{ $dependent->first_name }} </b></h5>
                                      </div>
                                      <div class="col-4 col-sm-4">
                                             <h5><b>{{ $dependent->middle_name}}</b></h5>
                                      </div>
                                     <div class="col-4 col-sm-4">
                                             <h5><b>{{$dependent->last_name }}</b></h5>
                                      </div>
                                     </div>                         <br/>
                                     <small>Created on {{$dependent->created_at}} by {{$dependent->user_id}}</small>
                             </div>
                        @endforeach
                  @endif


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>















      <!-- skills -->

     <div class="modal skillModal fade bd-example-modal-lg" id="skillModal" tabindex="-1" role="dialog"  data-backdrop="static"  aria-labelledby="myLargeModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-lg " role="document">
          <div  id="modalBg" class="modal-content ">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Skill</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div  class="modal-body">


            @if ( count($officer->skill)>0)

              @foreach ($officer->skill as $skills)
             <form action="#" method="get">
             <input type="hidden" value="{{$skills->id}}">
             <button type="submit">View</button>


                @foreach ($officer->skill as $skill)
                @if ( $skill->id== $skills->id)
                 <h1>Yes</h1>
                @endif
                @endforeach


             </form>
             <form action="#" method="get">

                <a href="/skills/{{$skills->id}}/edit" class="btn btn-default">Edit</a>
             </form>


              <a href="/skills/{{$skills->id}}/edit" class="btn btn-default">Edit</a>
              <div class="well"   id="modalBg" >


                            <h1> Skill </h1>
                           <hr>


                           <div class="row">
                              <div  class="col-6 col-sm-6">
                                  <div class="form-group">
                                          <b>    {{Form::label('skill_name', 'Skill Name')}} :</b>
                                               {{  $skills->skill_name}}

                                        </div></div>
                                        <div  class="col-6 col-sm-6">   <div class="form-group">
                                            <b>  {{Form::label('institution', 'Institution')}} :</b>
                                               {{  $skills->institution}}

                                        </div>
                                      </div>
                            </div>



                        <div class="row">
                                       <div  class="col-6 col-sm-6">
                                          <div class="form-group">
                                              <b>  {{Form::label('app_date', 'Application Date ')}} :</b>
                                               {{   $skills->app_date }}
                                          </div>
                                      </div>

                         <div  class="col-6 col-sm-6">    <div class="form-group">
                            <b>  {{Form::label('qualification', 'Qualification')}} :</b>
                                          {{  $skills->qualification}}

                            </div></div>
                        </div>




                                 <div class="row">
                                              <div  class="col-6 col-sm-6">   <div class="form-group">
                                                  <b>   {{Form::label('type', 'Type')}} :</b>
                                                     {{  $skills->type}}

                                              </div> </div>
                                             <div  class="col-6 col-sm-6">    <div class="form-group">
                                                <b> {{Form::label('level', 'Level')}} :</b>
                                                     {{$skills->level}}

                                              </div></div>
                                    </div>




                           <div class="row">
                              <div  class="col-6 col-sm-6">    <div class="form-group">
                                  <b>  {{Form::label('force_order_no', 'Force Order No')}} :</b>
                                          {{  $skills->force_order_no}}

                                  </div></div>
                                  <div  class="col-6 col-sm-6">   <div class="form-group">
                                      <b> {{Form::label('force_order_date', 'Force Order Date')}} :</b>
                                          {{ $skills->force_order_date}}

                                  </div> </div>

                               </div>





                               <div class="row">
                                  <div  class="col-6 col-sm-6">    <div class="form-group">
                                      <b> {{Form::label('exp_date', 'Expiry  Date')}} &emsp;&emsp;:</b>
                                      {{$skills->exp_date}}

                              </div></div>

                              <div  class="col-6 col-sm-6">

                                  <b> {{Form::label('issue_date', 'Issue Date')}} &emsp;&emsp;:</b>
                                  {{  $skills->issue_date}}

                              </div>

                                </div>






                              <div class="row">
                               <div class="form-group">
                                  <div  class="col-6 col-sm-6">
                                      <b>  {{Form::label('grade', 'Grade')}} :</b>
                                        {{  $skills->grade}}
                                </div>
                             </div>
                            </div>

                        <div class="form-group">
                            <b> {{Form::label('remarks', 'Remarks')}} :</b>
                          {!!$skills->remarks!!}
                      </div>
            </div>


                            @endforeach
                   @endif
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
          </div>
        </div>
      </div>









  <!-- Button trigger modal -->


    <!-- skills -->
    <div class="modal fade" id="spouseModal" tabindex="-1"  data-backdrop="static" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Spouse</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">


              @if (count($officer->spouse)>0)
              <br/>
              <h1> Spouse </h1>
              @foreach ($officer->spouse as $spouse)


              <a href="/spouses/{{$spouse->id}}/edit" class="btn btn-default">Edit</a>
                          <div class="well" style="background:white">
                                 <br/>

                                 <div class="row">
                                         <div class="col-4 col-sm-4">
                                          <h5>  <b>{{ $spouse->first_name }} </b></h5>
                                          </div>
                                          <div class="col-4 col-sm-4">
                                          <h5><b>{{ $spouse->middle_name}}</b></h5>
                                          </div>
                                         <div class="col-4 col-sm-4">
                                         <h5><b>{{$spouse->last_name }}</b></h5>
                                          </div>
                                         </div>                         <br/>
                                     @if ( count($spouse->address)>0)
                                     <h3>Spouse's Address</h3>
                                           @foreach ($spouse->address as $address)
                                           {{Form::label('parish', ' Parish :')}}
                                           <b> {{ $address->parish}} </b><br>
                                           {{Form::label('address', ' Address :')}}
                                           <b> {{ $address->address}} </b><br><hr>
                                             @endforeach
                                     @endif
                 <small>Created on {{$spouse->created_at}} by {{$spouse->user_id}}</small>
                                 </div>
                   @endforeach

              @endif


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-link">Save changes</button>
            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>













      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-3">
            <a href="{{route('officers.index')}}" class="btn btn-primary btn-block margin-bottom">Back to Main</a>
            @role('Reader|Editor|Administer')
            <div class="box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">  Personal Folder </h3>

                <div class="box-tools">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="box-body loadTable no-padding">
                <ul class="nav nav-pills nav-stacked">



  <table class="  table responsive" number-per-page="3" class="display stripe hover compact" cellspacing="0" width="100%" current-page="0">
    <thead>
       <tr>
            <th><small>Contents applicatable to member</small></th>
        </tr>
</thead>
<tbody>

            @if (count($officer->posting)>0)
            <?php
            $countPost=0;
            ?>
        @foreach ($officer->posting as $posting)
        <?php
        $countPost++;
        ?>
        @endforeach
            @if ($countPost>0)
            {{-- onclick="window.location = '/postings/{{$officer->id}}/post';" --}}
            <tr  onclick="getPersonal_List('/postings/{{$officer->id}}/post')">
                 <td>
                      <i class="fa fa-file-text-o"></i> Posting<span class="label pull-right bg-blue" >{{$countPost}}</span>
                </td>
            </tr>
         @endif
    @endif




            @if (count($officer->skill)>0)
            <?php
            $countSkill=0;
            ?>
        @foreach ($officer->skill as $skillOfficer)
          <?php
          $countSkill++;
          ?>
          @endforeach
              @if ($countSkill>0)
              <tr       onclick="getPersonal_List('/skills/{{$officer->id}}/skill')">
                    <td>
                  <i class="fa fa-file-text-o"></i> Skill <span class="label pull-right bg-blue">{{$countSkill}}</span>
                </td>
            </tr>
          @endif
      @endif





            @if (count($officer->leave)>0)
            <?php
            $countleave=0;
            ?>
        @foreach ($officer->leave as $leave)
          <?php
        $countleave++;
          ?>
          @endforeach
              @if ($countleave>0)
              <tr onclick=" window.location = '/leaves';">
               {{-- onclick="getPersonal_List('/leaves')" --}}
                <td>
                   <i class="fa fa-file-text-o"></i> Leaves<span class="label pull-right bg-blue" >{{$countleave}}</span>
                </td>
            </tr>
              @endif
       @endif





        @if (count($officer->commendation)>0)
        <?php
        $countCommendation=0;
        ?>
    @foreach ($officer->commendation as $comd)
        <?php
        $countCommendation++;
        ?>
        @endforeach
            @if ($countCommendation > 0)
            <tr   onclick="getPersonal_List('/commendations')">
            <td>
            <i class="fa fa-file-text-o"></i> Commendation <span class="label pull-right bg-blue" >{{$countCommendation}}</span>
            </td>
        </tr>
            @endif
    @endif



    @if (count($officer->promotion)>0)
            <?php
            $countPromo=0;
            ?>
        @foreach ($officer->promotion as $promo)
          <?php
        $countPromo++;
          ?>
          @endforeach
              @if ($countPromo>0)
              <tr    onclick="getPersonal_List('/promotions')">
                <td>
                   <i class="fa fa-file-text-o"></i> Promotion<span class="label pull-right bg-blue" >{{$countPromo}}</span>
                </td>
            </tr>
              @endif
       @endif






    @if (count($officer->complaint)>0)
       <?php
       $countCompliants=0;
       ?>
   @foreach ($officer->complaint as $promo)
     <?php
   $countCompliants++;
     ?>
     @endforeach
         @if ($countCompliants>0)
         <tr   onclick="getPersonal_List('/complaints')">
           <td>
              <i class="fa fa-file-text-o"></i> Complaint<span class="label pull-right bg-blue" >{{$countCompliants}}</span>
           </td>
       </tr>
         @endif
   @endif


   @if (count($officer->course)>0)
   <?php
   $countCourse=0;
   ?>
@foreach ($officer->course as $course)
 <?php
$countCourse++;
 ?>
 @endforeach
     @if ($countCourse>0)
     <tr   onclick="getPersonal_List('/courses')">
       <td>
          <i class="fa fa-file-text-o"></i> Course<span class="label pull-right bg-blue" >{{$countCourse}}</span>
       </td>
   </tr>
     @endif
@endif






@if (count($officer->courtcase )>0)
<?php
$countcourtcase =0;
?>
@foreach ($officer->courtcase  as $courtcase )
<?php
$countcourtcase ++;
?>
@endforeach
  @if ($countcourtcase >0)
  <tr    onclick="getPersonal_List('/courtcases')">
    <td>
       <i class="fa fa-file-text-o"></i> Court Case <span class="label pull-right bg-blue" >{{$countcourtcase }}</span>
    </td>
</tr>
  @endif
@endif


@if (count($officer->discipline )>0)
<?php
$countdiscipline =0;
?>
@foreach ($officer->discipline  as $discipline )
<?php
$countdiscipline ++;
?>
@endforeach
  @if ($countdiscipline >0)
  <tr      onclick="getPersonal_List('/disciplines')">
    <td>
       <i class="fa fa-file-text-o"></i> Discipline <span class="label pull-right bg-blue" >{{$countdiscipline }}</span>
    </td>
</tr>
  @endif
@endif



@if (count($officer->exam )>0)
<?php
$countexam =0;
?>
@foreach ($officer->exam  as $examx )
<?php
$countexam ++;
?>
@endforeach
  @if ($countexam >0)
  <tr     onclick="getPersonal_List('/exams')">
    <td>
       <i class="fa fa-file-text-o"></i> Exam <span class="label pull-right bg-blue" >{{$countexam }}</span>
    </td>
</tr>
  @endif
@endif




@if (count($officer->firearmbooklet )>0)
<?php
$countfirearmbooklet =0;
?>
@foreach ($officer->firearmbooklet  as $firearmbooklet )
<?php
$countfirearmbooklet ++;
?>
@endforeach
  @if ($countfirearmbooklet >0)
  <tr    onclick="getPersonal_List('/firearmbooklets')">
    <td>
       <i class="fa fa-file-text-o"></i> Firearm Booklet <span class="label pull-right bg-blue" >{{$countfirearmbooklet }}</span>
    </td>
</tr>
  @endif
@endif


@if (count($officer->firearmkeepcare )>0)
<?php
$countfirearmkeepcare =0;
?>
@foreach ($officer->firearmkeepcare  as $firearmkeepcare )
<?php
$countfirearmkeepcare ++;
?>
@endforeach
  @if ($countfirearmkeepcare >0)
  <tr     onclick="getPersonal_List('/firearmkeepcares')">
    <td>
       <i class="fa fa-file-text-o"></i>  Keep & Care Firearm <span class="label pull-right bg-blue" >{{$countfirearmkeepcare }}</span>
    </td>
</tr>
  @endif
@endif




@if (count($officer->interdiction )>0)
<?php
$countinterdiction =0;
?>
@foreach ($officer->interdiction  as $interdiction )
<?php
$countinterdiction ++;
?>
@endforeach
  @if ($countinterdiction >0)
  <tr     onclick="getPersonal_List('/interdictions')">
    <td>
       <i class="fa fa-file-text-o"></i> Interdiction <span class="label pull-right bg-blue" >{{$countinterdiction }}</span>
    </td>
</tr>
  @endif
@endif







@if (count($officer->firearmprivate )>0)
<?php
$countfirearmprivate =0;
?>
@foreach ($officer->firearmprivate  as $firearmprivate )
<?php
$countfirearmprivate ++;
?>
@endforeach
  @if ($countfirearmprivate >0)
  <tr   onclick="getPersonal_List('/firearmprivates')">
    <td>
       <i class="fa fa-file-text-o"></i> Private Firearm  <span class="label pull-right bg-blue" >{{$countfirearmprivate }}</span>
    </td>
</tr>
  @endif
@endif




@if (count($officer->pmas )>0)
<?php
$countpmas =0;
?>
@foreach ($officer->pmas  as $pmas )
<?php
$countpmas ++;
?>
@endforeach
  @if ($countpmas >0)
  <tr  onclick="getPersonal_List('/pmas')">
    <td>
       <i class="fa fa-file-text-o"></i> Pmas <span class="label pull-right bg-blue" >{{$countpmas }}</span>
    </td>
</tr>
  @endif
@endif





@if (count($officer->preservice )>0)
<?php
$countpreservice =0;
?>
@foreach ($officer->preservice  as $preservice )
<?php
$countpreservice ++;
?>
@endforeach
  @if ($countpreservice >0)
  <tr  onclick="getPersonal_List('/preservices')">
    <td>
       <i class="fa fa-file-text-o"></i> Pre-Service <span class="label pull-right bg-blue" >{{$countpreservice }}</span>
    </td>
</tr>
  @endif
@endif



@if (count($officer->retire )>0)
<?php
$countretire =0;
?>
@foreach ($officer->retire  as $retire )
<?php
$countretire ++;
?>
@endforeach
  @if ($countretire >0)
  <tr   onclick="getPersonal_List('/retires')">
    <td>
       <i class="fa fa-file-text-o"></i> Retire <span class="label pull-right bg-blue" >{{$countretire }}</span>
    </td>
</tr>
  @endif
@endif


@if (count($officer->suspension )>0)
<?php
$countsuspension =0;
?>
@foreach ($officer->suspension  as $suspension )
<?php
$countsuspension ++;
?>
@endforeach
  @if ($countsuspension >0)
  <tr  onclick="getPersonal_List('/suspensions')">
    <td>
       <i class="fa fa-file-text-o"></i> Suspension <span class="label pull-right bg-blue" >{{$countsuspension }}</span>
    </td>
</tr>
  @endif
@endif



                    @if (count($officer->dependent)>0)
                    <?php
                    $countDependent=0;
                    ?>
                @foreach ($officer->dependent as $dependent)
                  <?php
                  $countDependent++;
                  ?>
                  @endforeach
                      @if ($countDependent>0)
                      <tr    onclick="getPersonal_List('/dependents')">
                        <td>
                          <i class="fa fa-file-text-o"></i> Dependent<span class="label pull-right bg-blue" >{{$countDependent}}</span>

                        </td>
                    </tr>
                      @endif
                  @endif
            </td>
        </tr>







                  @if (count($officer->spouse)>0)
                        <?php
                        $countSpouse=0;
                        ?>
                   @foreach ($officer->spouse as $spouse)
                      <?php
                      $countSpouse++;
                      ?>
                  @endforeach
                          @if ($countSpouse>0)
                          <tr  onclick="getPersonal_List('/spouses/{{$officer->id}}/spouse')">
                            <td>
                                <i class="fa fa-file-text-o"></i> Spouse<span class="label pull-right bg-blue">{{$countSpouse}}</span>

                            </td>
                        </tr>
                     @endif
                   @endif
                </td>
            </tr>







              <?php
                $countEmail=0;
                $countPhone=0;
                ?>

                @foreach ($officer->phone as $phone)
                      <?php
                     $countPhone++;
                      ?>
                  @endforeach
                  @foreach ($officer->email as $mail)
                  <?php
                  $countEmail++;
                  ?>
              @endforeach
                 @if ( $countEmail>0|| $countPhone>0 )
                 <tr    onclick="window.location = ' {{ route('emails.index') }}';">
                 <td>
                    <i class="fa fa-file-text-o"></i>Contact <i class="fa fa-envelope-o" aria-hidden="true"></i> <span class="label  bg-green">{{ $countEmail}}</span>&ensp;
                    <i class="fa fa-phone " aria-hidden="true"></i><span class="label  bg-yellow">{{$countPhone}}</span>
                </td>
            </tr>
              @endif


</ul>


</tbody>
</table>


    </div>
              <!-- /.box-body -->
</div>

  @endrole






























  <div class="modal xx fade modal-top" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">

  <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
  <div class="  modal-frame modal-full-height modal-top" role="document">
  <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <br><br>  <br><br>  <br><br>  <br><br>  <br><br>
          <div class="col col-md-8" id="load">

          </div>
            Hello, i just wanted to let you know that i'll be home at lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

            Best Regards,
            Borge Refsnes
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     </div>
    </div>
  </div>
</div>


<button type="button" data-toggle="modal" data-target="#myModal">Launch modal</button>

<script>

jQuery(document).ready(function($) {


$("#click").click(function() {
    $('#load').load('/skills/'+44003+ '/skill', function(responseTxt, statusTxt, jqXHR){
            if(statusTxt == "success"){
             alert(66);
             $('.xx').css({"data-toggle":"modal","data-target":"myModal"});
             $('.xx').modal("show");
            }
            if(statusTxt == "error"){
                alert("Error: " + jqXHR.status + " " + jqXHR.statusText);
            }
        });
});



});

</script>








  <div class="box box-solid">
    <div class="box-header with-border">
      <h2 class="box-title"><b>ACTION FORMS</b></h2>
<a href="#" class="btn" id="click"> modal open</a>
      <div class="box-tools">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="box-body loadTableOption no-padding">
      <ul class="nav nav-pills nav-stacked">
        <li>
         <table class="  table responsive" number-per-page="3" class="display stripe hover compact" cellspacing="0" width="100%" current-page="0">
                <thead>
                  <tr>
                    <th><small>Select desire form below</small></th>
                  </tr>
                </thead>
                <b>
                <tbody>
                    <tr  onclick="window.location = ' {{ route('skills.create')  }}';">
                        <td> <ul class="lu ul"><li class="li list">
                         Skill <i class="fa fa-certificate" aria-hidden="true"></i>
                      </li></ul></td>
                   </tr>
                    <tr  onclick="window.location = ' {{ route('postings.create')  }}';"> <td> <ul class="lu ul"><li  class="li list">
                      Posting <i class="fa fa-map-marker" aria-hidden="true"></i>
                      </li></ul></td>
                  </tr>



                  <tr  onclick="window.location = ' {{ route('commendations.create')  }}';"> <td> <ul class="lu ul"><li  class="li list">
                     Commendations <i class="fa fa-star-o" aria-hidden="true"></i>
                  </li></ul></td>
                 </tr>


                 <tr  onclick="window.location = ' {{ route('emails.index') }}';"> <td> <ul class="lu ul"><li  class="li list">
                    Contact
                      </li></ul></td>
                  </tr>
                   <tr  onclick="window.location = ' {{ route('spouses.create')  }}';"> <td> <ul class="lu ul"><li  class="li list">
                      </i> Spouse
                    </li></ul></td>
                </tr>

                 <tr  onclick="window.location = ' {{ route('dependents.create') }}';"> <td> <ul class="lu ul"><li  class="li list">
                   </i> Dependent
                </li></ul></td>
            </tr>






               <tr   onclick="window.location = ' {{ route('complaints.create') }}';"> <td> <ul class="lu ul"><li  class="li list">
                    </i>Complaint
                  </li></ul></td>
              </tr>

               <tr  onclick="window.location = ' {{ route('disciplines.create')  }}';"> <td> <ul class="lu ul"><li  class="li list">
                      </i>Discipline
                  </li></ul></td>
              </tr>


               <tr  onclick="window.location = ' {{ route('courtcases.create')  }}';"> <td> <ul class="lu ul"><li  class="li list">
                      </i>Court Case
                  </li></ul></td>
              </tr>


               <tr  onclick="window.location = ' {{ route('courses.create')  }}';"> <td> <ul class="lu ul"><li  class="li list">
                     </i>Course
                  </li></ul></td>
              </tr>
              <tr  onclick="window.location = ' {{ route('exams.create')  }}';"> <td> <ul class="lu ul"><li  class="li list">
            </i>Exam
            </li></ul></td>
        </tr>

        <tr  onclick="window.location = '{{ route('promotions.create')  }}';"> <td> <ul class="lu ul"><li  class="li list">
                Promotion
             </li></ul></td>
          </tr>

               <tr  onclick="window.location = ' {{ route('firearmbooklets.create')  }}';"> <td> <ul class="lu ul"><li  class="li list">
                    </i>Firearm Booklet
                  </li></ul></td>
              </tr>


               <tr  onclick="window.location = ' {{ route('firearmprivates.create')  }}';"> <td> <ul class="lu ul"><li  class="li list">
                    </i>Firearm Private
                  </li></ul></td>
              </tr>


               <tr  onclick="window.location = ' {{ route('firearmkeepcares.create') }}';"> <td> <ul class="lu ul"><li  class="li list">
                    </i>Firearm keep & care
                  </li></ul></td>
              </tr>





               <tr  onclick="window.location = ' {{ route('pmas.create')  }}';"> <td> <ul class="lu ul"><li  class="li list">
                     </i>Pmas
                  </li></ul></td>
              </tr>


               <tr  onclick="window.location = ' {{ route('retires.create')  }}';"> <td> <ul class="lu ul"><li  class="li list">
                    </i>Retire
                  </li></ul></td>
              </tr>


               <tr  onclick="window.location = ' {{ route('suspensions.create')  }}';"> <td> <ul class="lu ul"><li  class="li list">
                    </i>Suspension
                  </li></ul></td>
              </tr>

               <tr  onclick="window.location = '{{ route('interdictions.create') }}';"> <td> <ul class="lu ul"><li  class="li list">
                    </i>Interdiction
                  </li></ul></td>
              </tr>

               <tr onclick="window.location = '{{ route('preservices.create') }}';" > <td> <ul class="lu ul"><li  class="li list">
                      </i>Pre-service
                  </li></ul></td>
              </tr>
         </b>





                </tbody>
              </table>









        </li>
      </ul>
    </div>
    <!-- /.box-body -->
  </div>








       <style>
            th {
                background-color:dodgerblue;
                Color:white;
            }
            th  {
                width:150px;
                height: 10;

                padding:1px
            }




tr:hover {
    cursor: pointer;
    text-align:center;
    font-weight:bold;
    -webkit-box-shadow: 0 6px 6px -6px #F4E23A;
    -moz-box-shadow: 0 6px 6px -6px #F4E23A;
    box-shadow: 0 6px 6px -6px #F4E23A;
    padding-left: .2em;
    box-shadow: dodgerblue -1px 1px, dodgerblue -2px 2px, dodgerblue -3px 3px, dodgerblue -4px 4px, dodgerblue -5px 5px, dodgerblue -6px 6px;
    transform: translate3d(0px, 0px,0px);
    transition-delay: 0s;
    transition-duration: 0.s;
    transition-property: all;
    transition-timing-function: line;
}


tr{
    width:2px;
    height:2px;
    padding:2px;

}

  ul {
    list-style: none;
    margin-top: 0px;
    padding: 0;
  }

  .li {
    border-radius: 5px;
    color: black;

    cursor: pointer;
    display: inline;
    font-weight: 200;

    padding: 3px;

  }

  table {border: none;}

  /* .li{
      display:table-cell;
      } */
  /* .lu {
    border: none;
      padding: 0;
      display:table;
      width:100%;
      box-sizing:border-box;
      -moz-box-sizing:border-box;
      -webkit-box-sizing:border-box;
  } */



   .dataTables_paginate {
    float: left !important;
    border: none;
    border-radius: 15px;
    margin-top: -20px;
  }


    .dataTables_wrapper {
     height: 102px;
     min-height: 102px;
     border: none;
     }

  </style>











      <script type="text/javascript" src=""></script>
      <script type="text/javascript">
  $(document).ready(function(){
          $('.table').DataTable({
            "dom": '<"row"<"col-sm-4"l><"col-sm-4 text-center"p><"col-sm-4"f>>tip',
              'dom': 'tp',
              "ordering": false,
              "autoWidth": false,
          "lengthMenu": [[    6 ], [ 6 ]], "autoWidth": false,
          "pagingType": "numbers",
                    });


          });





          jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data('href');
        });
});



// $(document).ready(function() {

// $('#table tr').click(function() {
//     var href = $(this).find("tr").attr("href");
//     if(href) {
//         window.location = href;
//     }
// });

// });
  </script>





          </div>




          <div class="col-md-9">
            <div class="box box-primary">
                     <br> <div class="container">
                <div class="col-lg-10 col-lg-offset-0" style="background:white">



                         <div class="box text-left box-default">
                          <div class="box-header   with-border">
                            <h3 class="box-title">

                                <a href="/officers" class="btn btn-default   "> <i class="fa fa-angle-double-left" aria-hidden="true"></i> Go Back</a>
                                @role('Editor|Reader|Administer')
                                <a href="/officers/{{$officer->id}}/edit" class="btn btn-default btn-primary"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                @endrole
                            Member  Profile</h3>
                           </div>
                       </div>




                         {!! Form::open(['action' => ['OfficersController@update', $officer->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                         @role('Editor|Reader|Administer')
                              <input type="hidden" id="age" value="{{ $officer->dob}}">
                         @endrole
                          <input type="hidden" id="enlist_date" value="{{$officer->enlist_date}}">



                     <?php
                             // Global helper
                           //  <img width="265" height="295 "src="/storage/images/{{$officer->image}}">
                             Session::put('officer_id', $officer->id);
                            ?>

                                 <div id="webPage" class="well  col-lg-12">


                               <div class="row">
                                        <div class="col col-md-4" >   <br>
                                                <div class="img-thumbnail" >

                                                    <img width="265" height="295 "src="/storage/images/{{$officer->image}}">

                                                </div>


                                            <div class="row col-12 col-xs-12">
                                                @foreach ($ranks as $rank)
                                                        @if ( $rank->id== $officer->rank_id)
                                                        <h4 class="card-title"><b>&nbsp;&nbsp;  {{ $rank->rank}}</b></h4>
                                                        @endif
                                                    @endforeach
                                                <h4 class="card-title"> &nbsp;{{ $officer->first_name }}    {{substr($officer->middle_name, 0, 1)}}.  {{$officer->last_name }}</h4>
                                                </div>
                                        </div>


                      <div class="col col-md-4"><br>
                              <div class="form-group">
                                      &nbsp;  {{Form::label('id','Computer Number :')}} {{ $officer->id}}
                                  </div>

                                  @role('Editor|Reader|Administer')
                                      <div class="form-group">
                                          &nbsp;    {{Form::label('nis', 'NIS :')}}
                                          {{ $officer->nis}}
                                      </div>
                                   @endrole

                                  <div class="form-group">
                                          &nbsp; {{Form::label('enlist_date', 'Enlistment Date :')}}  {{ $officer->enlist_date}}
                                      </div>
                                      @role('Editor|Reader|Administer')
                                          <div class="form-group">
                                              &nbsp;{{Form::label('original_rank', ' Original Rank :')}} {{ $officer->original_rank}}
                                            </div>
                                      @endrole
                                      <div class="form-group">
                                              &nbsp;  {{Form::label('sex', 'Gender :')}} {{ $officer->sex}}
                                      </div>
                                     <div class="form-group">
                                          &nbsp;  {{Form::label('status', 'Status :')}}

                                            @foreach ($status as $state)
                                                @if ( $state->id== $officer->status_id)
                                                    {{ $state->status}}
                                                @endif
                                            @endforeach
                                     </div>

                                  <div class="form-group">
                                          &nbsp;  {{Form::label('title', 'Title :')}} {{ $officer->title}}
                                  </div>

                                  <div class="form-group">
                                          &nbsp; {{Form::label('suffix', 'Suffix :')}} {{ $officer->suffix}}
                                  </div>

                                  @role('Editor|Reader|Administer')
                                      <div class="form-group">
                                          &nbsp;     {{Form::label('Age', 'Age :')}}
                                          <span id="getAge"> </span>
                                      </div>
                                  @endrole
                          </div>
                              <div class="col col-md-4"><br>
                              <div class="form-group">
                                      {{Form::label('reg_no', 'Regulation Number :')}} {{ $officer->reg_no}}
                                  </div>
                                  @role('Editor|Reader|Administer')
                                      <div class="form-group">
                                              {{Form::label('trn', 'TRN :')}}
                                              {{ $officer->trn}}
                                      </div>
                                      <div class="form-group">
                                              {{Form::label('dob', 'Date of Birth :')}}
                                              {{ $officer->dob}}
                                      </div>
                                      <div class="form-group">
                                              {{Form::label('cob', 'Country Of Birth :')}} {{ $officer->cob}}
                                      </div>
                                      <div class="form-group">
                                              {{Form::label('nationality', 'Nationality :')}} {{ $officer->nationality}}
                                      </div>
                                   @endrole
                                      <div class="form-group">
                                              {{Form::label('division', 'Division :')}}
                                              @foreach($divisions as $division)
                                              @if ($officer->division == $division->id)
                                                {{ $division->division}}
                                              @endif
                                              @endforeach

                                       </div>

                                       <div class="form-group">
                                             {{Form::label('station', 'Station :')}} {{ $officer->station}}
                                       </div>
                                       <div class="form-group">
                                                  {{Form::label('section', 'Section :')}} {{ $officer->section}}
                                       </div>
                               @role('Editor|Reader|Administer')
                                      <div class="form-group">
                                       {{Form::label('getYearsOfService', 'Years Of Service :')}} <p id="getYearsOfService"> </p>
                                      </div>
                                @endrole

                               </div>
                          </div>




             <br><hr>

                 <div class="panel panel-primary">

                         <div class="panel-heading"> {{Form::label('remarks', 'Remarks :')}}</div>
                         @role('Editor|Reader|Administer')
                         <div class="panel-body">   {!!$officer->remarks !!}
                        <?php
                        substr($officer->remarks,0,10)

                        ?>
                        </div>
                        @endrole
                   </div>




            </div>
         </div>


            <br><br>

                </div>
            </div>
          </div>
        </div>

  </body>

  </html>
  <br><br>

  <script>



jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
         $("#webPage").load($(this).data('href'));

        });
});


  $(window).load(function() {



  jQuery.noConflict();


  $('.edit').click(function(){
    $('#skillModal').modal('show');
  });

  $('#postClick').click(function(){
    $('#postModal').modal('show');
  });

  $('#spouseClick').click(function(){
    $('#spouseModal').modal('show');
  });



  $('#dependentClick').click(function(){
    $('#dependentModal').modal('show');
  });




    function calculate_ServiceTime(myVar){
    var user_date = Date.parse(myVar);
    var today_date = new Date();
    var diff_date =   today_date - user_date;
    var num_years = diff_date/31536000000;
    var num_months = (diff_date % 31536000000)/2628000000;
    var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;
  //  document.write("Number of months: " + Math.floor(num_months) + "<br>");
  ///  document.write("Number of days: " + Math.floor(num_days) + "<br>");
    return  Math.floor(num_years) +" year(s) " + Math.floor(num_months)+" month(s) and "+Math.floor(num_days)+"  day(s)";
    }



    var enlist_date =   $('#enlist_date').val();
    $("#getYearsOfService").html(calculate_ServiceTime(enlist_date));






  function calculate_Age1(valx){
    jQuery.noConflict();

  var today = new Date();
   var dob= valx;
   var birthDate = new Date(dob);
   var age1 = today.getFullYear()- new Date(dob).getFullYear();
   alert(  age1 );
   var m = today.getMonth() - birthDate.getMonth();
   if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
       age1--;
     }

     return age1;
    }

    var dobIn = $("#age").val();

    $("#getAge").html(calculate_Age(dobIn));


    function calculate_Age(valx){
         var mdate = valx;
          var yearThen = parseInt(mdate.substring(0,4), 10);
          var monthThen = parseInt(mdate.substring(5,7), 10);
          var dayThen = parseInt(mdate.substring(8,10), 10);
          var today = new Date();
          var birthday = new Date(yearThen, monthThen-1, dayThen);
          var differenceInMilisecond = today.valueOf() - birthday.valueOf();
          var year_age = Math.floor(differenceInMilisecond / 31536000000);
          var day_age = Math.floor((differenceInMilisecond % 31536000000) / 86400000);
          if ((today.getMonth() == birthday.getMonth()) && (today.getDate() == birthday.getDate())) {
              alert("Happy B'day!!!");
          }
          var month_age = Math.floor(day_age/30);
          day_age = day_age % 30;
          $("#getAge").html(" <span id=\"age\">" + year_age + " years " + month_age +" days</span> old");

     }








     $(document).ready(function(){

            $('.loadTable').show();
            $('.loadTableOption').show();
          //  $('.content').show();


        });






  });
  //$('.content').hide();
  $('.loadTable').hide();
  $('.loadTableOption').hide();




// <div>
//     <img src="book.png" alt="Book" id="book" />
//     <span id="spanLoading">Loading...</span>
// </div>



//     $(function(){
//         //animate loading text
//         $("#spanLoading").animate({left: '+=50'},500);

//         //On img loaded, remove loading text
//         $("#book").load(){
//             $("#spanLoading").remove();
//         }
//     });
//


  </script>

         @endsection
