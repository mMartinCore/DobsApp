var unidentified = false;
var first_name  = false;
var middle_name = false;
var last_name  = false;
var sex = false;
var nationality = false;
var death_date = true; //set true to accept no date
var address = false;
var parish = false;
var corpse_stn_id=false;
var dob = true;  //set true to accept no date


var pickup_date =false;
var condition =false;
var type_death =false;
var manner_death =false;
var anatomy = false;
var pickup_location =false;



// SECTION THREE
var station_id = false;
var  contact_no = false;
var  assign_date = false;
var  investigator_last_name = false;
var  investigator_first_name = false;
var  rank_id = false;
var  regNum = false;


var body_status=false;
var postmortem_status =false;
var postmortem_date=true;
var funeralhome_id=false;
var pathlogist=false;

var cause_of_Death =false;

//DISABLE  postmortem_date FIELD

var finger_print_date =true;
var finger_print =false;
var gazetted =false;
var gazetted_date =true;
var pauper_burial_requested  =false;
var pauper_burial_requested_date =true;
var pauper_burial_approved =true;
var pauper_burial_approved_date =true;
var buried= false;
var burial_date= true;











// IF A BODY HAS BEEN GAZETTED IT SLIDEDOWN

$("#approvePauperBurialShow").slideUp();
$("#pauper_burial_requested_show").slideUp();
$(".cause_of_Death").attr("disabled", true);
$(".pathlogist").attr("disabled", true);





function bodyStatus() {
    body_status = isTrueCheckRequireDrop('body_status');
}

function fingerPrint() {
    finger_print = isTrueCheckRequireDrop('finger_print');
}


function isGazetted() {
    gazetted = isTrueCheckRequireDrop("gazetted");
}
function pauperBurialRequested() {
    pauper_burial_requested = isTrueCheckRequireDrop("pauper_burial_requested");

}
function pauperBurialApproved() {
    pauper_burial_approved = isTrueCheckRequireDrop("pauper_burial_approved");
}
function isBuried() {
    buried  = isTrueCheckRequireDropBurial("buried");
}










function gender()
{
  var  gender = $(".sex").val();
    if (gender.length < 1) {
        $(".sex").css("border","2px solid red");
        $("#Error_sex").html("<small style='color:red'>Choose an option..</small>");
        $("#Error_sex").show();
        return   sex =false;
    } else {
        $(".sex").css("border","2px solid green");
        $("#Error_sex").hide();
        return   sex =true;

    }
}




function country()
{
  var  national = $(".nationality").val();
    if (national.length < 1) {
        $(".nationality").css("border","2px solid red");
          $("#Error_nationality").html("<small style='color:red'>Choose an option..</small>");
          $("#Error_nationality").show();
          return   nationality = false;
    } else {
        $(".nationality").css("border","2px solid green");
        $("#Error_nationality").hide();
        return  nationality = true;
    }
}





function parishFound()
{
  var  par = $(".parish").val();
    if (par.length < 1) {
        $(".parish").css("border","2px solid red");
          $("#Error_parish").html("<small style='color:red'>Choose an option..</small>");
          $("#Error_parish").show();
        return  parish = false;
    } else {
        $(".parish").css("border","2px solid green");
        $("#Error_parish").hide();
       return parish = true;
    }
}







function resetValue() {
    first_name  = false;
    middle_name = false;
    last_name  = false;
    nationality = false;
    address = false;
    dob = true;  //set true to accept no date
}





 function  is_unidentiied()
 {
     if ( $("#unidentified").val()=='Yes') {
        $(".first_name").val("");
        $(".middle_name").val("");
        $(".middle_name").val("");
        $(".last_name").val("");
        $(".dob").val("");
        $(".nationality").val("");
        $(".address").val("");

        resetValue();


        $("#Error_first_name").html("");
        $("#Error_middle_name").html("");
        $("#Error_middle_name").html("");
        $("#Error_last_name").html("");
        $("#Error_dob").html("");
        $("#Error_nationality").html("");
        $("#Error_address").html("");

        $(".first_name").css({"border":""});
        $(".middle_name").css({"border":""});
        $(".last_name").css({"border":""});
        $(".dob").css({"border":""});
        $(".nationality").css({"border":""});
        $(".address").css({"border":""});

         $(".first_name").attr("disabled", true);
         $(".last_name").attr("disabled", true);
         $(".middle_name").attr("disabled", true);
         $(".dob").attr("disabled", true);
         $(".nationality").attr("disabled", true);
         $(".address").attr("disabled", true);
         $(".unidentified").css("border","2px solid green");
         $("#Error_unidentified").hide();
         return  unidentified = true;
     } else if ( $("#unidentified").val()==="No") {
        enableSeciontOneTxt();
        return  unidentified = false;
        $(".unidentified").css("border","2px solid green");
        $("#Error_unidentified").hide();
        return  unidentified = false;
     } else if ($("#unidentified").val()=="") {
        $(".unidentified").css("border","2px solid red");
        $("#Error_unidentified").html("<small style='color:red'>Choose an option..</small>");
        $("#Error_unidentified").show();
        enableSeciontOneTxt();
        return  unidentified = false;
     } else{
        enableSeciontOneTxt();
       return  unidentified = false;
     }
}


function enableSeciontOneTxt() {
    $(".first_name").attr("disabled", false);
    $(".middle_name").attr("disabled", false);
    $(".middle_name").attr("disabled", false);
    $(".last_name").attr("disabled", false);
    $(".dob").attr("disabled", false);
    $(".nationality").attr("disabled", false);
    $(".address").attr("disabled", false);
}


function name(name,myClass)
{      var letters = /^[A-Za-z]+$/;
        var nameValue=false;
    namex=$("."+name).val();
    var my_val= $.trim(namex.length);
   if (my_val!=0) {
    if(my_val < 3 || my_val > 15) {
        $("#Error_"+myClass).html("<small style='color:red'>Should be between 3-15 letters</small>");
        $("#Error_"+myClass).show();
        $("."+name).css("border","2px solid red");
        return nameValue  = false;
    }else if( namex.indexOf(' ')>=0){
        $("#Error_"+myClass).html("<small style='color:red'>No spacing required... </small>");
        $("#Error_"+myClass).show();
        $("."+name).css("border","2px solid red");
         return nameValue  = false;
    }else if(!letters.test(namex)){
        $("#Error_"+myClass).html("<small style='color:red'>Only letters allowed... </small>");
        $("#Error_"+myClass).show();
        $("."+name).css("border","2px solid red");
       return nameValue  = false;
    }

    else if(my_val <=0){
        $("#Error_"+myClass).hide();
        $("."+name).css({"border":""});
        return nameValue  = true;
    } else {
        $("."+name).css("border","2px solid green");
        $("#Error_"+myClass).hide();
        return nameValue = true;
    }
  }else {
        if ($("#unidentified").val()==="No") {
            $("#Error_"+myClass).html("<small style='color:red'> is allowed here... </small>");
            $("#Error_"+myClass).show();
            $("."+name).css("border","2px solid red");
            return nameValue  = false;
        } else {
            $("#Error_"+myClass).hide();
            $("."+name).css({"border":""});
            return nameValue=true;
        }



}
}









function corpseAddress(name,myClass)
{  var addVal=false;
    namex=$("."+name).val();
    var my_val= $.trim(namex.length);
   if (my_val!=0) {
    if(my_val < 12 || my_val > 150) {
        $("#Error_"+myClass).html("<small style='color:red'>Should be between 12-150 letters</small>");
        $("#Error_"+myClass).show();
        $("."+name).css("border","2px solid red");
        return   addVal =false;
    }
    else if(my_val <=0){
        $("#Error_"+myClass).hide();
        $("."+name).css({"border":""});
        return  addVal =true;
    } else {
        $("."+name).css("border","2px solid green");
        $("#Error_"+myClass).hide();
        return  addVal =true;
    }
  }else {

    if ($("#unidentified").val()==="No") {
        $("#Error_"+myClass).html("<small style='color:red'> is allowed here... </small>");
        $("#Error_"+myClass).show();
        $("."+name).css("border","2px solid red");
        return addVal  = false;
    } else {
        $("#Error_"+myClass).hide();
        $("."+name).css({"border":""});
          return  addVal =true;
    }

}
}







function isDateGreaterNow(getDate) {
    var today = new Date();

    if (new Date(getDate) >= new Date(today)) {
      return   true;
    }else{
      return   false;
    }
}


function isFirstDateGreaterThanSecDate(firstDate,secDate) {// GOOD
  if (new Date(firstDate)== new Date(secDate)) {
      return   true;
    }else if(new Date(firstDate) > new Date(secDate)){
          return   false;
    }else
        {
        return  true;
        }
}



function dateCheck(getDate)
{
     var ref=getDate;
     if ($("."+getDate).val()!='') {
        if (isDateGreaterNow( $("."+getDate).val())==true) {
            $("."+ref).css("border","2px solid red");
              $("#Error_"+ref).html("<small style='color:red'> Can't be prior today..</small>");
              $("#Error_"+ref).show();
            return   false;
        } else {
            $("."+ref).css("border","2px solid green");
            $("#Error_"+ref).hide();
            return    true;
        }
     } else {
        $("."+ref).css({"border":""});
        $("#Error_"+ref).hide();
        return       true;

     }


}

function resetDisable(field) {
    $("."+field).attr("disabled", true);
    $("#Error_"+field).hide();
    $("."+field).css({"border":""});
    $("."+field).val("");
    return field=true;
}


function resetDateErorrBorder(field) {

    $("."+field+"_date").attr("disabled", true);
    $("#Error_"+field+"_date").hide();
    $("."+field+"_date").css({"border":""});
    $("."+field+"_date").val("");
      field= field+"_date";
      alert(field);
    return field=true;
}



function postMortemDate()
{

    if ( $(".postmortem_status").val()==="Pending") {
        resetDisable("pathlogist");
        resetDisable("cause_of_Death");
        postmortem_date = isfirstDateGreaterThanSecondPendingDate("pickup_date","postmortem_date");
        if (postmortem_date) {//IF THE POSTMORTEM DATE IS PENDING THEN SET PAUPER DROPDOWN TO TRUE.THIS IS SO BECAUSE THE
            //                 REQUEST MUST BE MADE AFTER THE POSTMORTEM.
            pauper_burial_requested=true;
            $("#pauper_burial_requested_show").slideUp();
        }
    } else if( $(".postmortem_status").val()==="Completed"){
        $(".pathlogist").attr("disabled", false);
        $(".cause_of_Death").attr("disabled", false);
            postmortem_date = isfirstDateGreaterThanSecondCompletedDate("pickup_date","postmortem_date");
            if (postmortem_date)
            {
                pauper_burial_requested=false;
                $("#pauper_burial_requested_show").slideDown();
            }
    } else if( $(".postmortem_date").val()==''){
        postmortem_date = true;
        resetDisable("pathlogist");
        resetDisable("cause_of_Death");
    }
    else{
        postmortem_date = true;
        resetDisable("pathlogist");
        resetDisable("cause_of_Death");

    }
}





function fingerPrintDate()
{
    if (isfirstDateGreaterThanSecondDate("pickup_date","finger_print_date")== true && isfirstDateGreaterThanSecondDateNotReq("finger_print_date","postmortem_date")== true )
     {     // TESTIG FOR TRUE
            finger_print_date =true;
     } else {
            finger_print_date =false;
            }

  }






  function  gazettedDate()
{
    // && isfirstDateGreaterThanSecondDate("postmortem_date","gazetted_date")== true
    if (isfirstDateGreaterThanSecondDate("pickup_date","gazetted_date")== true && isfirstDateGreaterThanSecondDateNotReq("gazetted_date","pauper_burial_requested_date")== true  )
     {
            gazetted_date =true;
     }else{
        gazetted_date =true;
     }

  }





  function  pauperBurialRequestedDate()
{
    if (isfirstDateGreaterThanSecondDate( "gazetted_date","pauper_burial_requested_date")== true &&
          isfirstDateGreaterThanSecondDate("postmortem_date","pauper_burial_requested_date" )== true
        && isfirstDateGreaterThanSecondDateNotReq("pauper_burial_requested_date","pauper_burial_approved_date")== true  )
     {     // TESTIG FOR TRUE
             pauper_burial_requested_date =true;
            if ( pauper_burial_requested_date) {
               $("#approvePauperBurialShow").slideDown();
            }

     } else {
              $("#approvePauperBurialShow").slideUp();
              $("#pauper_burial_requested_date").val('');
              pauper_burial_requested_date =false;
            }

  }






  function  pauperApprovedtDate()
{
    if (isfirstDateGreaterThanSecondDate( "gazetted_date","pauper_burial_approved_date")== true &&
     isfirstDateGreaterThanSecondDate("pauper_burial_requested_date","pauper_burial_approved_date")== true &&
       isfirstDateGreaterThanSecondDate("postmortem_date","pauper_burial_approved_date")== true
        && isfirstDateGreaterThanSecondDateNotReq("pauper_burial_approved_date","burial_date")== true  )
     {     // TESTIG FOR TRUE
        pauper_burial_approved_date =true;

     } else {
        pauper_burial_approved_date =false;
            }

  }





  function  burialDate()
{
    if (isfirstDateGreaterThanSecondDate( "pickup_date","burial_date")== true &&
        isfirstDateGreaterThanSecondDate("pauper_burial_requested_date","burial_date")== true &&
        isfirstDateGreaterThanSecondDate("postmortem_date","burial_date")== true &&
        isfirstDateGreaterThanSecondDate("pauper_burial_approved_date","burial_date")== true  )
     {     // TESTIG FOR TRUE
        burial_date =true;

     } else {
        burial_date =false;
            }

  }













function checkDob(getDeath,getDob)
 {
    var dobResult=false;
    var ref=getDob;
    var deadDate= $("."+getDeath).val();
    var dobDate= $("."+getDob).val();
    if (dobDate!='')
       {
                if (dateCheck(getDob)==true)
                {
                       if (deadDate!='') {
                            if ( isFirstDateGreaterThanSecDate(deadDate,dobDate) ==true)
                            {
                                $("."+ref).css("border","2px solid green");
                                $("#Error_"+ref).hide();
                                return dobResult=true;
                            }
                                else {
                                        $("."+ref).css("border","2px solid red");
                                        $("#Error_"+ref).html("<small style='color:red'>Inconcievable D.O.B post death..</small>");
                                        $("#Error_"+ref).show();
                                        return dobResult=false;
                                    }
                       }
                       else
                          {

                            $("."+ref).css("border","2px solid green");
                            $("#Error_"+ref).hide();
                            return dobResult=true;
                          }
                }else{
                      return dobResult=false;
                     }
     }
      else
        {
            $("."+ref).css({"border":""});
            $("#Error_"+ref).hide();
            return   dobResult=true;
        }
}















  //////////////////SECTION TWO











function corpse_stn()
{
  var  stn = $(".corpse_stn_id").val();
    if (stn.length < 1) {
        $(".corpse_stn_id").css("border","2px solid red");
          $("#Error_corpse_stn_id").html("<small style='color:red'>Choose an option..</small>");
          $("#Error_corpse_stn_id").show();
        return   corpse_stn_id=false;
    } else {
        $(".corpse_stn_id").css("border","2px solid green");
        $("#Error_corpse_stn_id").hide();
        return   corpse_stn_id=true;
    }
}


function getRequiredField(require)
{
     var  value = $("."+require).val();
    if (value.length < 1) {
        $("."+require).css("border","2px solid red");
          $("#Error_"+require).html("<small style='color:red'>Choose an option..</small>");
          $("#Error_"+require).show();
        return  false;
    } else {
        $("."+require).css("border","2px solid green");
        $("#Error_"+require).hide();
        return   true;
    }
}




function CorpseCondition() {
    condition=  getRequiredField("condition");
}


function typeDeath() {
    type_death=  getRequiredField("type_death");
}


function mannerDeath() {
    manner_death= getRequiredField("manner_death");
}


function anotomMethod() {
 anatomy = getRequiredField("anatomy");
}








function pickupLocation(name)
{
    myClass=name;
    namex=$("."+name).val();
    var my_val= $.trim(namex.length);
   if (my_val!=0) {
            if(my_val < 12 || my_val > 190)
              {
                $("#Error_"+myClass).html("<small style='color:red'>Should be between 12-190 letters</small>");
                $("#Error_"+myClass).show();
                $("."+myClass).css("border","2px solid red");
                return   false;
              }else {
                    $("."+myClass).css("border","2px solid green");
                    $("#Error_"+myClass).hide();
                    return  true;
                  }
    }else {
        $("#Error_"+myClass).html("<small style='color:red'> is mandatory... </small>");
        $("#Error_"+myClass).show();
        $("."+myClass).css("border","2px solid red");
        return  false;
}
}







function causeOfDeath(name)
{
    myClass=name;
    namex=$("."+name).val();
    var my_val= $.trim(namex.length);
   if ( my_val > 0 ) {
            if(my_val < 10 || my_val > 190)
              {
                $("#Error_"+myClass).html("<small style='color:red'>Should be between 10-190 letters</small>");
                $("#Error_"+myClass).show();
                $("."+myClass).css("border","2px solid red");
                return   false;
              }else {
                    $("."+myClass).css("border","2px solid green");
                    $("#Error_"+myClass).hide();
                    return  true;
                  }
      } else if ( my_val <= 0 && !$(".cause_of_Death").prop("disabled"))
            {
                $("#Error_"+myClass).html("<small style='color:red'> is now *mandatory... </small>");
                $("#Error_"+myClass).show();
                $("."+myClass).css("border","2px solid red");
                return  false;
          }else {
                    $("."+myClass).css("border","2px solid green");
                    $("#Error_"+myClass).hide();
                    return  true;
                }
}











  function dateCheckRequired(getDate)
  {
       var ref=getDate;
       if ($("."+getDate).val()!='') {
          if (isDateGreaterNow($("."+getDate).val())==true) {
              $("."+ref).css("border","2px solid red");
                $("#Error_"+ref).html("<small style='color:red'> Can't be prior today..</small>");
                $("#Error_"+ref).show();
              return   false;
          } else {
              $("."+ref).css("border","2px solid green");
              $("#Error_"+ref).hide();
              return    true;
          }
       } else {
          $("."+ref).css("border","2px solid red");
          $("#Error_"+ref).html("<small style='color:red'> Is Mandatory *..</small>");
          $("#Error_"+ref).show();
        return   false;

       }

  }








  function checkPickUpdate(getDeath,pickup_dateValue)
   {

      var ref=pickup_dateValue;
      var pickUpDate= $("."+pickup_dateValue).val();
      if (pickUpDate!='')
         {
                  if (dateCheckRequired(pickup_dateValue)==true)
                  {
                         if ($("."+getDeath).val()!='') {
                              if ( isFirstDateGreaterThanSecDate($("."+getDeath).val(),pickUpDate) ==false)
                              {    // THE DEATH DATE IS GREATER WHICH IS WRONG
                                    $("."+ref).css("border","2px solid red");
                                    $("#Error_"+ref).html("<small style='color:red'>Inconcievable date..</small>");
                                    $("#Error_"+ref).show();
                                    return  pickup_date = false;
                              }
                                  else {
                                        $("."+ref).css("border","2px solid green");
                                        $("#Error_"+ref).hide();
                                        return  pickup_date = true;
                                        }
                         }
                         else
                            {

                              $("."+ref).css("border","2px solid green");
                              $("#Error_"+ref).hide();
                              return  pickup_date = true;
                            }
                  }else{
                        return  pickup_date = false;
                       }
       }
        else
          {
            $("."+ref).css("border","2px solid red");
            $("#Error_"+ref).html("<small style='color:red'>Date is mandatory..</small>");
            $("#Error_"+ref).show();
            return  pickup_date = false;
          }
  }



  function isfirstDateGreaterThanSecondDateNotReq(firstDate,SecondDate)// first date not required
  {   //   TESTING FOR TRUE
    var ref=firstDate;
    var sec_Date= $("."+SecondDate).val();
    if (sec_Date!='')
       {
                if (dateCheckRequired(SecondDate)==true) //CHECK IF THE DATE IS VALID OR not GREATER THAN NOW
                {    console.log(1);
                       if ($("."+firstDate).val()!='') {
                          console.log(2);
                            if ( isFirstDateGreaterThanSecDate($("."+firstDate).val(),sec_Date) ==false)
                            {    console.log(3);
                                // THIS WILL RUN HERE ONLY IF THE FIRST IS BIGGER
                                  $("."+ref).css("border","2px solid red");
                                  $("#Error_"+ref).html("<small style='color:red'>Inconcievable date..</small>");
                                  $("#Error_"+ref).show();
                                  return false;
                            }
                                else {
                                  console.log(4);
                                    //SECOND DATE MUST BE BIGGER
                                      $("."+ref).css("border","2px solid green");
                                      $("#Error_"+ref).hide();
                                      return true;
                                      }
                       }
                       else
                          { console.log(5);

                            $("."+ref).css("border","2px solid green");
                            $("#Error_"+ref).hide();
                            return true;
                          }
                }else{ console.log(6);
                      return false;// THE DATE IS BIGGER THAN NOW
                     }
     }
      else
        {
            //$("."+ref).css("border","2px solid green");
            $("#Error_"+ref).hide();
            return true;
        }
 }




  function isfirstDateGreaterThanSecondDate(firstDate,SecondDate)
   {   //   TESTING FOR TRUE

      var ref=SecondDate;
      var pickUpDate= $("."+SecondDate).val();
      if (pickUpDate!='')
         {
                  if (dateCheckRequired(SecondDate)==true) //CHECK IF THE DATE IS VALID OR not GREATER THAN NOW
                  {    console.log("a");
                         if ($("."+firstDate).val()!='') {
                            console.log("b");
                              if ( isFirstDateGreaterThanSecDate($("."+firstDate).val(),pickUpDate) ==false)
                              {    console.log("ab");
                                  // THIS WILL RUN HERE ONLY IF THE FIRST IS BIGGER
                                    $("."+ref).css("border","2px solid red");
                                    $("#Error_"+ref).html("<small style='color:red'>Inconcievable date..</small>");
                                    $("#Error_"+ref).show();
                                    return false;
                              }
                                  else {
                                    console.log("c");
                                      //SECOND DATE MUST BE BIGGER
                                        $("."+ref).css("border","2px solid green");
                                        $("#Error_"+ref).hide();
                                        return true;
                                        }
                         }
                         else
                            { console.log("d");

                              $("."+ref).css("border","2px solid green");
                              $("#Error_"+ref).hide();
                              return true;
                            }
                  }else{ console.log("e");
                        return false;// THE DATE IS BIGGER THAN NOW
                       }
       }
        else
          {
            $("."+ref).css("border","2px solid red");
            $("#Error_"+ref).html("<small style='color:red'>Date is mandatory..</small>");
            $("#Error_"+ref).show();
            return false;
          }
  }





  function isfirstDateGreaterThanSecondPendingDate(firstDate,SecondDate)
  {   //   TESTING FOR TRUE

     var ref=SecondDate;
     var sec_Date= $("."+SecondDate).val();
     if (sec_Date!='')
        {


            var today = new Date();

                 if (new Date(sec_Date) >= new Date(today)) //CHECK IF THE DATE IS VALID
                 {    console.log("a");
                        if ($("."+firstDate).val()!='') {
                           console.log("b");
                             if ( isFirstDateGreaterThanSecDate($("."+firstDate).val(),sec_Date) ==false)
                             {    console.log("ab");
                                 // THIS WILL RUN HERE ONLY IF THE FIRST IS BIGGER
                                   $("."+ref).css("border","2px solid red");
                                   $("#Error_"+ref).html("<small style='color:red'>Inconcievable date..</small>");
                                   $("#Error_"+ref).show();
                                   return false;
                             }
                                 else
                                      {
                                        console.log("c");
                                        //SECOND DATE MUST BE BIGGER
                                        $("."+ref).css("border","2px solid green");
                                        $("#Error_"+ref).hide();
                                        return true;
                                       }
                        }
                        else
                           {
                            console.log("d");
                             $("."+ref).css("border","2px solid green");
                             $("#Error_"+ref).hide();
                             return true;
                           }
                 }else{
                        console.log("e");
                        $("."+ref).css("border","2px solid red");
                        $("#Error_"+ref).html("<small style='color:red'>Inconcievable date..</small>");
                        $("#Error_"+ref).show();
                        return false;

                      }
      }else if ($(".pathlogist").attr("disabled", false) && sec_Date=='') {
            $("."+ref).css("border","2px solid red");
            $("#Error_"+ref).html("<small style='color:red'>Inconcievable date..</small>");
            $("#Error_"+ref).show();
            return false;
      }
       else
         {
            $("."+ref).css("border","2px solid green");
            $("#Error_"+ref).hide();
            return true;
         }
 }




 function isfirstDateGreaterThanSecondCompletedDate(firstDate,SecondDate)
 {   //   TESTING FOR TRUE

    var ref=SecondDate;
    var pickUpDate= $("."+SecondDate).val();
    if (pickUpDate!='')
       {
                if (dateCheckRequired(SecondDate)==true) //CHECK IF THE DATE IS VALID OR not GREATER THAN NOW
                {    console.log("a");
                       if ($("."+firstDate).val()!='') {
                          console.log("b");
                            if ( isFirstDateGreaterThanSecDate($("."+firstDate).val(),pickUpDate) ==false)
                            {    console.log("ab");
                                // THIS WILL RUN HERE ONLY IF THE FIRST IS BIGGER
                                  $("."+ref).css("border","2px solid red");
                                  $("#Error_"+ref).html("<small style='color:red'>Inconcievable date..</small>");
                                  $("#Error_"+ref).show();
                                  return false;
                            }
                                else {
                                  console.log("c");
                                    //SECOND DATE MUST BE BIGGER
                                      $("."+ref).css("border","2px solid green");
                                      $("#Error_"+ref).hide();
                                      return true;
                                      }
                       }
                       else
                          { console.log("d");

                            $("."+ref).css("border","2px solid green");
                            $("#Error_"+ref).hide();
                            return true;
                          }
                }else{ console.log("e");
                      return false;// THE DATE IS BIGGER THAN NOW
                     }
     }
      else
        {
            $("."+ref).css("border","2px solid green");
            $("#Error_"+ref).hide();
            return true;
        }
}


/// IO


function requireDropDown(myVa){
    var value= $("."+myVa).val();
    if (value.length < 1) {
        $("."+myVa).css("border","2px solid red");
        $("#Error_"+myVa).html("<small style='color:red'>Choose an option..</small>");
          $("#Error_"+myVa).show();
        return  false;
    } else {
        console.log(value);
        $("."+myVa).css("border","2px solid green");
        $("#Error_"+myVa).hide();
        return   true;
    }
}
//////////////////////

//Morgue Section





$(".postmortem_date").attr("disabled", true);
$(".finger_print_date").attr("disabled", true);
$(".pauper_burial_requested_date").attr("disabled", true);
$(".pauper_burial_approved_date").attr("disabled", true);
$(".burial_date").attr("disabled", true);
$(".gazetted_date").attr("disabled", true);

function postmortemStatus(){
    if (requireDropDown("postmortem_status"))
       {   var post_status= $(".postmortem_status").val();
                    if (post_status==="Completed"|| post_status==="Pending") {
                        // $(".postmortem_date").val('');
                        // resetDisable("pathlogist");
                        // resetDisable("cause_of_Death");
                        $(".postmortem_date").attr("disabled", false);
                        postmortem_date=false;

                    } else {
                        postmortem_date=true;
                        resetDisable("postmortem_date");
                        resetDisable("pathlogist");
                        resetDisable("cause_of_Death");
                        pathlogist=true;
                        cause_of_Death=true;

                    }

        return postmortem_status=true;
       } else {
                postmortem_date=true;
                resetDisable("postmortem_date");
                return postmortem_status=false;
             }
}


function isTrueCheckRequireDrop(status)
{
    if (requireDropDown(status))
       {
                if ($("."+status).val()==="Yes")
                 {
                    $("."+status+"_date").attr("disabled", false);
                    return true;

                    } else  if ($("."+status).val()=="No")
                                {
                                    resetDateErorrBorder(status);
                                     return true;
                                }
                                    else
                                        {
                                            $("."+status+"_date").attr("disabled", true);
                                            $("."+status).val('');
                                            return  false;
                                        }
       } else
             {
                $("."+status+"_date").attr("disabled", true);
               return  false;
             }
}






function isTrueCheckRequireDropBurial(status)
{
    if (requireDropDown(status))
       {
                if ($("."+status).val()=="Yes")
                 {
                    $(".burial_date").attr("disabled", false);
                    return true;

                    } else  if ($("."+status).val()=="No")
                                {
                                    $(".burial_date").attr("disabled", true);
                                     return true;
                                }
                                    else
                                        {
                                            $(".burial_date").attr("disabled", true);
                                            $("."+status).val('');
                                            return  false;
                                        }
       } else
             {
                $(".burial_date").attr("disabled", true);
               return  false;
             }
}



















function funeralHome() {
    funeralhome_id= requireDropDown("funeralhome_id");

}

//////////////////////////

function investigator_stn()
{
       station_id=  requireDropDown("station_id");
}


function investigatorRank(){
      rank_id=  requireDropDown("rank_id");

}


function investigator(myClass)
{      var letters = /^[A-Za-z]+$/;

    namex=$("."+myClass).val();
    var my_val= $.trim(namex.length);
   if (my_val!=0)
       {
         if(my_val < 3 || my_val > 15) {
            $("#Error_"+myClass).html("<small style='color:red'>Should be between 3-15 letters</small>");
            $("#Error_"+myClass).show();
            $("."+myClass).css("border","2px solid red");
            return false;
          }else if( namex.indexOf(' ')>=0)
            {
                $("#Error_"+myClass).html("<small style='color:red'>No spacing required... </small>");
                $("#Error_"+myClass).show();
                $("."+myClass).css("border","2px solid red");
                return false;

            }else if(!letters.test(namex)){
                    $("#Error_"+myClass).html("<small style='color:red'>Only letters allowed... </small>");
                    $("#Error_"+myClass).show();
                    $("."+myClass).css("border","2px solid red");
                   return false;
                }else{
                    $("."+myClass).css("border","2px solid green");
                    $("#Error_"+myClass).hide();
                    return   true;
                }

    }  else
          {
            $("#Error_"+myClass).html("<small style='color:red'> is allowed here... </small>");
            $("#Error_"+myClass).show();
            $("."+myClass).css("border","2px solid red");
            return  false;
           }

}



function investFirstName(myClass) {
    investigator_first_name= investigator(myClass) ;
}
function investLastName(myClass) {
    investigator_last_name= investigator(myClass) ;
}



function validatePhone(phoneNumber){
    var phoneNumberPattern = /(\d{1,2}[-\s]?)?(\d{3}[-]?){2}\d{4}/ ;
    return phoneNumberPattern.test(phoneNumber);

 }


 function validateRegNum(validateRegNum){
    var validateRegNumPattern = /^(\(?\+?[0-9]*\)?)?[0-9_\- \(\)]*$/ ;
    return validateRegNumPattern.test(validateRegNum);

 }



function contactNum() {
    var phoneNumber =$(".contact_no").val();
        if ( phoneNumber!="") {

                      if (validatePhone(phoneNumber)) {
                                if (phoneNumber.length==12)
                                {
                                    $(".contact_no").css("border","2px solid green");
                                    $("#Error_contact_no").hide();
                                    return   true;
                                } else {

                                        $("#Error_contact_no").html("<small style='color:red'> Invalid format... </small>");
                                        $("#Error_contact_no").show();
                                        $(".contact_no").css("border","2px solid red");
                                        return  false;
                                        }

                        }
                        else{
                            $("#Error_contact_no").html("<small style='color:red'> Invalid format... </small>");
                            $("#Error_contact_no").show();
                            $(".contact_no").css("border","2px solid red");
                            return  false;
                            }

     } else{
            $("#Error_contact_no").html("<small style='color:red'> is allowed here... </small>");
            $("#Error_contact_no").show();
            $(".contact_no").css("border","2px solid red");
            return  false;
           }

}






















function regulationNum() {
    var regNo =$(".regNum").val();
        if ( regNo!="") {

                      if (validateRegNum(regNo)) {
                                if (regNo.length <=5 && regNo.length >=3)
                                {
                                    $(".regNum").css("border","2px solid green");
                                    $("#Error_regNum").hide();
                                    return   true;
                                } else {

                                        $("#Error_regNum").html("<small style='color:red'> Invalid number... </small>");
                                        $("#Error_regNum").show();
                                        $(".regNum").css("border","2px solid red");
                                        return  false;
                                        }

                        }
                        else{
                            $("#Error_regNum").html("<small style='color:red'> Invalid number... </small>");
                            $("#Error_regNum").show();
                            $(".regNum").css("border","2px solid red");
                            return  false;
                            }

     } else{
            $("#Error_regNum").html("<small style='color:red'> is allowed here... </small>");
            $("#Error_regNum").show();
            $(".regNum").css("border","2px solid red");
            return  false;
           }

}






function pathlogistName(myClass)
{
    var letters = /^[A-Za-z]+$/;

    namex=$("."+myClass).val();
    var my_val= $.trim(namex.length);
   if (my_val!=0)
       { console.log(1);
         if(my_val < 3 || my_val > 15) {
            $("#Error_"+myClass).html("<small style='color:red'>Should be between 3-15 letters</small>");
            $("#Error_"+myClass).show();
            $("."+myClass).css("border","2px solid red");
            return false;
          }else if( namex.indexOf(' ')>=0)
            {
                $("#Error_"+myClass).html("<small style='color:red'>No spacing required... </small>");
                $("#Error_"+myClass).show();
                $("."+myClass).css("border","2px solid red");
                return false;

            }else if(!letters.test(namex)){
                    $("#Error_"+myClass).html("<small style='color:red'>Only letters allowed... </small>");
                    $("#Error_"+myClass).show();
                    $("."+myClass).css("border","2px solid red");
                   return false;
                }else{
                    $("."+myClass).css("border","2px solid green");
                    $("#Error_"+myClass).hide();
                    console.log(2);
                    return   true;

                }

    }else   if (my_val <= 0 && !$(".pathlogist").prop("disabled"))
             { console.log(4);

                $("#Error_"+myClass).html("<small style='color:red'> Now *required</small>");
                $("#Error_"+myClass).show();
                $("."+myClass).css("border","2px solid red");
                return false;
             }

    else
          {
            console.log(5);
            $("#Error_"+myClass).hide();
            return   true;
           }

}







$(function() {

	$("#username_error_message").hide();
	$("#password_error_message").hide();
	$("#retype_password_error_message").hide();
    $("#email_error_message").hide();





	var error_username = false;
	var error_password = false;
	var error_retype_password = false;
	var error_email = false;

	$(".first_name").focusout(function() {
    first_name  =  name("first_name","first_name");
    });

	$(".first_name").keyup(function() {
     first_name  =  name("first_name","first_name");
     });


     $(".middle_name").focusout(function() {
        middle_name =  name("middle_name","middle_name");
     });

     $(".middle_name").keyup(function() {
        middle_name =  name("middle_name","middle_name");
      });



      $(".last_name").focusout(function() {
        last_name  = name("last_name","last_name");
     });


     $(".last_name").keyup(function() {
        last_name  = name("last_name","last_name");
      });



           ////////  ADDRESS
      $(".address").focusout(function() {
        address = corpseAddress("address","address");
     });


     $(".address").keyup(function() {
        address =  corpseAddress("address","address");
      });





      $(".death_date").focusout(function() {
        death_date  =    dateCheck("death_date");
     });


     $(".death_date").mouseleave(function() {
        death_date  =  dateCheck("death_date");
      });


      $(".dob").focusout(function() {
        dob =    checkDob("death_date","dob");

     });


     $(".dob").mouseleave(function() {
        dob  =  checkDob("death_date","dob");

      });


/////SECTION TWO





$(".pickup_date").focusout(function() {
     checkPickUpdate("death_date","pickup_date");
 });


 $(".pickup_date").mouseleave(function() {
     checkPickUpdate("death_date","pickup_date");

  });



  $(".pickup_location").focusout(function() {
    pickup_location = pickupLocation("pickup_location");
 });


 $(".pickup_location").keyup(function() {
    pickup_location = pickupLocation("pickup_location");

  });



///I.O



  $(".investigator_first_name").focusout(function() {

    investFirstName("investigator_first_name");
 });


 $(".investigator_first_name").keyup(function() {

    investFirstName("investigator_first_name");
  });




  $(".investigator_last_name").focusout(function() {
    investLastName("investigator_last_name");
   });


 $(".investigator_last_name").keyup(function() {
    investLastName("investigator_last_name");
  });




  $(".contact_no").focusout(function() {
    contact_no= contactNum();
   });


 $(".contact_no").keyup(function() {
    contact_no= contactNum();
  });



  $(".regNum").focusout(function() {
    regNum=   regulationNum();
   });


 $(".regNum").keyup(function() {
    regNum=  regulationNum();
  });



  $(".assign_date").focusout(function() {
    assign_date =    isfirstDateGreaterThanSecondDate("pickup_date","assign_date");
 });


 $(".assign_date").mouseleave(function() {
    assign_date  =  isfirstDateGreaterThanSecondDate("pickup_date","assign_date");

  });




//// MORGUE SECTION













$(".pathlogist").focusout(function() {
    pathlogist =  pathlogistName("pathlogist");
 });


 $(".pathlogist").keyup(function() {
     pathlogist =  pathlogistName("pathlogist");

  });



  $(".cause_of_Death").focusout(function() {
    cause_of_Death =   causeOfDeath("cause_of_Death");
 });


 $(".cause_of_Death").keyup(function() {
    cause_of_Death =   causeOfDeath("cause_of_Death");

  });

////////////////////////

  $(".postmortem_date").focusout(function() {
    postmortem_date =   postMortemDate();
 });


 $(".cause_of_Death").keyup(function() {
    postmortem_date =   postMortemDate();

  });



////////////////////////

$(".finger_print_date").focusout(function() {
      fingerPrintDate();
});


$(".finger_print_date").mouseleave(function() {
      fingerPrintDate();

});




$(".gazetted_date").focusout(function() {
    gazettedDate();

});


$(".gazetted_date").mouseleave(function() {
    gazettedDate();

});






$(".pauper_burial_requested_date").focusout(function() {
    pauperBurialRequestedDate();

});


$(".pauper_burial_requested_date").mouseleave(function() {
    pauperBurialRequestedDate();

});







$(".pauper_burial_approved_date").focusout(function() {
    pauperApprovedtDate();

});

$(".pauper_burial_approved_date").mouseleave(function() {
    pauperApprovedtDate();

});





$(".burial_date").focusout(function() {
    burialDate();

});

$(".burial_date").mouseleave(function() {
    burialDate();

});




    });//END





