
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
  <div class="container col-xs-12 col-sm-12 col-md-10  col-md-offset-1 box box-primary">


   <div class="row">
        <h3>&emsp;All Members <span class=" ion-planet"></span>&emsp;&emsp;&emsp;

        <button type="button" class="btn btnSearch  btn-success" data-toggle="collapse" data-target="#searchForm">
        <span class="glyphicon glyphicon-collapse-down"></span> Open filter  </button>


        <div id="search_bar"  class="pull-right col-xs-8 col-md-8">
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
                                  <div class="col col-xs-3  col-sm-3  col-md-3">
                                      <input type='text' id="compNo" value=''class='filter form-control' placeholder="Search Computer Number "  >
                                  </div>
                                  <div class="col col-xs-3  col-sm-3  col-md-3">
                                      <input type='text' id="regNo" value='' class=' filter form-control' placeholder="Search Regulation Number"  >
                                  </div>
                                  <div class="col col-xs-3  col-sm-3  col-md-3">
                                      <input type='text' id="lName" value=''class=' filter form-control'placeholder="Search Last Name"  >
                                  </div>

                                  <div class="col col-xs-3  col-sm-3  col-md-3">
                                      <input type='text'id="fName" value=''class=' filter form-control'placeholder="Search First Name"  >
                                  </div>
                                </div>
                              </div>

<br><br>
                              <div class="form-group">
                                    <div  class="col-lg-10 col-lg-offset-0">

                                    <div class="col col-xs-3  col-sm-3  col-md-3">
                                            <select name="div"  class=" filter div form-control"  >
                                                    <option value="">-------Select Division-------</option>
                                                          @foreach($divisions as $division)
                                                                 <option value='{{ $division->id }}'>{{ $division->division}}</option>
                                                          @endforeach
                                                   </select>
                                        </div>


                                   <div class="col col-xs-3  col-sm-3  col-md-3">

                                        <select name="rank"  class=" filter rank form-control"  >
                                            <option value="">-------Select Rank-------</option>
                                                  @foreach($ranks as $rank)
                                                         <option value='{{ $rank->id }}'>{{ $rank->rank}}</option>
                                                  @endforeach
                                           </select>

                                   </div>
                                   <div class="col col-xs-3  col-sm-3  col-md-3">
                                        <span class="input-group-btn">
                                                <button type="button"    class="btn search btn-default btn-success"><i class="fa fa-search fa-fw"></i> Search</button>
                                                </span>
                                                <span class="input-group-btn">
                                                  <button type="reset"  id="reset" class="btn btn-default btn-primary">
                                                  <i class="fa fa-refresh"></i> Reset</button>
                                                  </span>
                                   </div>
                                   <div class="col col-xs-3  col-sm-3  col-md-3">
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






     <div id="loadTable">

   </div>
   <div id="pagination_link">

</div>
  </div>

  <script>
        $(document).ready(function(){

            var CompNo=0;  regNo=0;  rank=0;    div=0;
            var lName='';
            var fName='';

             $('#loadTable').load('/load_All_Officers/'+0+'/'+ 0+'/'+ 0+'/'+ 0+'/'+0+'/'+0, function(responseTxt, statusTxt, jqXHR){
            if(statusTxt == "success"){
             }
            if(statusTxt == "error"){
                alert("Error: " + jqXHR.status + " " + jqXHR.statusText);
            }
              });


              $("select.rank").change(function(){
                rank = $(this).children("option:selected").val();

                });


              $("select.div").change(function(){
               div = $(this).children("option:selected").val();

                });



              $('.search').click(function () {

               var CompNo= $("#compNo").val();
               var  regNo= $("#regNo").val();
               var lName=$("#lName").val();
               var fName=$("#fName").val();

                 if ( CompNo!= '' && regNo !=  '' &&   rank!=   '' &&   lName!=   '' &&   fName!= '' &&  div !=   '') {
                     alert("aLL FULL");
                   //  search_x(0 ,  regNo ,  rank ,  lName ,  fName ,  div );
                 }

                 if (CompNo==null && regNo != null &&rank!=  null &&   lName!=  null &&   fName!=null &&  div !=  null) {
                    alert("NoT COMPNO AND REGNO");
                   // search_x(0 ,  0 ,  rank ,  lName ,  fName ,  div );
                 }


                 if ( CompNo==null && regNo == null && CompNo=='' && regNo != null &&   rank!=  null &&   lName!=  null &&   fName!=null &&  div !=  null) {
                    alert("NoT COMPNO, REGNO AND RANK");
                   //  search_x(0 ,  regNo ,  rank ,  lName ,  fName ,  div );
                 }

              });





function search_x(CompNo ,  regNo ,  rank ,  lName ,  fName ,  div ) {

   // alert( 'comp :' +CompNo +'Reg :'+ regNo +" rank :"+ rank +" "+  lName +  fName +  div );
//  if (    CompNo != 0 && regNo!=0){
    $('#loadTable').load('/load_All_Officers/'+CompNo+'/'+ regNo+'/'+ rank+'/'+ lName+'/'+fName+'/'+div, function(responseTxt, statusTxt, jqXHR){
                 if(statusTxt == "success"){
            }
            if(statusTxt == "error"){
                alert("Error: " + jqXHR.status + " " + jqXHR.statusText);
            }
              });
 //}
return false;


}


























            });

       </script>




