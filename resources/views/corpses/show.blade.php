
    <section class="content-header">
        <h4>
        View  {!! $corpse->cr_no !!}    Corpse Detail

        <span class='approveSuccess'> </span>

    @hasrole('SuperAdmin|Admin')
    <div class="pull-right">
        <button class="btn btn-primary btn-sm ShowModal">Add Task</button>&ensp;
        {{-- <button class="btn btn-default btn-sm" id="printbutton" onclick="window.print();" ><i class="fa fa-print" aria-hidden="true"></i> Print with task  </button>&ensp; --}}
        <button class="btn btn-success btn-sm"   onclick="print_div();" ><i class="fa fa-print" aria-hidden="true"></i>  Print </button>&ensp;
    @endrole
            @if ( $corpse->pauper_burial_approved == 'No-Request'||$corpse->pauper_burial_approved == 'No')
                @hasrole('SuperAdmin|Admin|writer')
                <button  onclick="makeRequest();" class="btn btn-info btn-sm  pull-right">Make Request</button>
                @endrole
           @endif
           @if ( $corpse->pauper_burial_approved == 'Processing')
           @hasrole('SuperAdmin')
           <button  onclick="approved({!!$corpse->id!!});" class="btn btn-info btn-sm approveSuccess  ">Approve</button>&ensp;
           <button href="#" onclick="deny({!!$corpse->id!!});" class='btn   btn-danger btn-sm pull-right'> Deny </button>
           @endrole
      @endif

    </div>


        </h4>

    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="output"></div>
                <div class="row" style="padding-left: 20px">

                    @include('corpses.show_fields')

                    <div class="output"></div>
                    <hr>
                    <h3 style="color:cadetblue">You Have received <b>Task</b> from Admin </h3>
                    <hr>

                    <div class="pull-left " id="getTask"> </div>
                </div>


            </div>

        </div>
    </div>



