@hasrole('SuperAdmin|Admin|writer')
<form   class="sidebar-form">
    <div class="input-group">
      <input type="text" id="searchBtn" name="searchBtn" class="form-control" autocomplete="off" placeholder="Search...">
      <span class="input-group-btn">
          <button type="button" id="clickSearch" name="clickSearch" data-toggle="modal" data-target="#modalQuickSearch"  class="btn btn-flat"

      ><i class="fa fa-search"></i>
          </button>
        </span>
    </div>


  </form>
@endrole

      <!-- search form (Optional) -->

          <!-- /.search form -->

          <script>
                $(document).ready(function(){



                $("#clickSearch").click(function() {
                    var query = $("#searchBtn").val();
                    if ( query!="") {

                        fetch_customer_data(query);
                        query ='';
                    } else{

                          $("#searchXX").html('<h3 style="color:red"> YOU MADE NO DESIRED SEARCH !</h3>');

                        }
                }); //edn clickseacr


                function fetch_customer_data(query = '')
                 {
                    $("#searchXX").html('<h3 style="color:red"> LOADING PLEASE WAIT... !</h3>');
                  $.ajax({
                   url:"{{ route('live_search.action') }}",
                   method:'GET',
                   data:{query:query},
                   dataType:'json',
                   success:function(data)
                   {

                    $('#searchXX').html(data.table_data);
                  //  $('#total_records').text(data.total_data);
                   }
                  })
                 }







                });//end
                </script>
