<div class="table-responsive">

  <table id="corpses-table" class="table stripe" id="commendations-table " style="width:100%;border-collapse:collapse;background-color:#3c8dbc; font-size:small; color:white" >       <thead>

        <thead>
            <tr>
        <th>Reference No.</th>
        <th>Name</th>
        <th>Date Of Death</th>
        <th>Pick Up Date</th>
        <th>Anatomy</th>
        <th>Condition</th>
        <th>Post Mortem</th>
        <th>Burial Requested</th>
        <th>Burial Approved</th>
        <th>Buried</th>
        <th>Storage</th>
        <th>Action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

</div>

<script src="{{ asset('bower_components/jquery/dist/jquery-1.11.1.min.js')}}"></script>
<script>
$(document).ready(function() {
 //   getCorpses(1)
    $('#postForm').on('submit', function(event){
         event.preventDefault();
        var form_data = $(this).serialize();

        $.ajax({
        url:"{{ route('corpses.getCorpse') }}",
        method:"POST",
        data:form_data,
       // dataType:"json",
    success:function(data){
        $("tbody").html('');
       // $("tbody").html(data);
      // storagedays = '';
                $.each(data, function(i, corpse) {
                    $("tbody").append(



                //     $storagedays = $this->storageday(corpse.pickup_date) ;
                // if ( $storagedays >= 30) {
                //     $storagedays =  $storagedays;
                // } elseif ( $storagedays >= 20 &&  $storagedays < 25) {
                //     $storagedays = $storagedays;
                // }
                '<tr>'
                    +'<td>'+corpse.id+'</td>'
                    +'<td>' + corpse.first_name +' ' + corpse.middle_name +' ' + corpse.last_name + '</td>'
                    +'<td>' +corpse.death_date +'</td>'
                    +'<td>' + corpse.pickup_date +'</td>'
                    +'<td>' + corpse.anatomy + '</td>'
                    +'<td>' + corpse.condition + '</td>'
                    +'<td>' + corpse.postmortem_status + '</td>'
                    +'<td>' + corpse.pauper_burial_requested + '</td>'
                    +'<td>' + corpse.pauper_burial_approved + '</td>'
                    +'<td>' + corpse.buried + '</td>'
                    +'<td>' +     moment(corpse.pickup_date).diff(moment(corpse.pickup_date), 'days') +'</td>'
                    +'<td>'
                        +'<div class="btn-group">'
                              +'<a  class="btn btn-default btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>'
                              +'<a  class="btn btn-default btn-xs"><i class="glyphicon glyphicon-edit"></i></a>'
                              +'<a  class="btn btn-default btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>'
                        +'</div>'
                    +'</td>'

                +'</tr>'
          //  }








                    );




                   });


       }

       });
        //  getCorpse(1);
    });


    $(".reset").click(function(e) {
        e.preventDefault();
        $('#postForm')[0].reset();
    });

});





function getCorpses(corpse_id) {
     $.ajax({
    type: "GET",
    url: "/getCorpses",
    data: {
    'corpse_id':corpse_id,
    "_token": "{{ csrf_token() }}",
    },
    // dataType: "json",
    success:function(data){
        $("tbody").html(data);
       }

       });
    }




function getCorpse(corpse_id) {
  var container= $("#getTask");
    $.ajax({
    type: "post",
    url: "/getCorpse",
    data: {
    'corpse_id':corpse_id,
    "_token": "{{ csrf_token() }}",
    },
    // dataType: "json",
    success:function(data){
 console.log(data);
        $("tbody").html(data);
                // $.each(data, function(i, item) {
                //     $("#getTask").append('<div class="list-type3">  <ul> <li> <a href="#"> '+item.task+' '+timeAgo(item.created_at)+' </a>    </li>  </ul>   </div>');
                // });
                //  $("#getTask").append('<br>');

       }

       });   // $("#getTask").html(data);///.delay(3000).fadeOut();
    }

</script>





<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script>


$(document).ready(function(){


var table =  $('#corpses-table').DataTable();






//////////////////////////////

var row_data;
$('#datatablex tbody').on( 'click', '#viewX', function () {
  row_data = table.row( $(this).parents('tr') ).data();
  window.location.href = '/skills/'+row_data.id;
  return false;
});
$('#datatablex tbody').on( 'click', '#editX', function () {
  row_data = table.row( $(this).parents('tr') ).data();
  window.location.href = '/skills/'+row_data.id+'/edit';
  return false;
});
$('#datatablex tbody').on( 'click', '#deleteX', function () {
  row_data = table.row( $(this).parents('tr') ).data();
  window.location.href = '/skills/'+row_data.id+'/destroy';
  return false;
});

/////////////////////////////////////////////////////


});

</script>



