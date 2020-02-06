@extends('layouts.app')
@section('title', '| Permissions')

@section('content')
 

 <!-- Content Header (Page header) -->
 <div id="load_officer_list"   >


 <section  class="content-header">


        <h4 class="dasboard"><span><i class="	glyphicon glyphicon-dashboard"></i></span> Dashboard </h4>
      </section>

      <!-- Main content -->

      <div class="container">
        @include('dashboard')
      </div>
      <section class="container-fluid">

        <!--------------------------
          | Your Page Content Here |
          -------------------------->


          <div class="box text-left box-primary bg" >
                <div class="box-header   with-border"  >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <h3  class="my-4 text-center blue text-lg-left"><P><b>DOB</b>System</P>      </h3>



                    <script>

                        Echo.channel('channelMessage')
                        .listen('message',(e) => {
                            console.log(e.message);
                        })
                    </script>

                    <h3 class="box-title">
                        </h3>
                     </div>
                 </div>


            <hr>
        <div id="loadDash">

        </div>
           {{-- @include('/dashboard') --}}
      </section>
      <!-- /.content -->

    </div>
@endsection

<script>
    $(document).ready(function() {


             $('#loadDash').load('/dashboard', function(responseTxt, statusTxt, jqXHR){
                    if(statusTxt == "success"){
                    }
                    if(statusTxt == "error"){
                        alert("Error: " + jqXHR.status + " " + jqXHR.statusText);
                    }
              });

    });
    </script>


<script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
