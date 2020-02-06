  @extends('layouts.app')
  @section('content')
           <br><br>   <div class="container">
           <div class="col-lg-12 col-lg-offset-0" style="background:white">
           <br><br>

            <a href="/officers" class="btn btn-default btn-success ">Go Back</a>
            @role('Editor|Administer')
            <a href="/officers/{{$officer->id}}/edit" class="btn btn-default btn-primary">Edit</a>
           @endrole
                    <h1> Officer Profile</h1>
                    {!! Form::open(['action' => ['OfficersController@update', $officer->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                    <?php
                    // Global helper

                     Session::put('officer_id', $officer->id);
                    ?>

                            <div class="well col-lg-12">

                                    <div class="row">
                                          <div class="col col-md-4" >   <br>
                                                       <img width="350" height="336 "class="img-thumbnail"src="/storage/images/{{$officer->image}}">

                                                <br>
                                                <h4><b> &nbsp;   &nbsp; &nbsp; {{ $officer->rank}} </b>   </h4>


                                          <div class="row">
                                                 <b>
                                                        <div class="col-4 col-xs-4">
                                                               {{ $officer->first_name }}
                                                         </div>
                                                         <div class="col-4 col-xs-4">
                                                              {{ $officer->middle_name}}
                                                         </div>
                                                        <div class="col-4 col-xs-4">
                                                               {{$officer->last_name }}
                                                         </div>

                                                        </div>
                                                        </b>
                                                        <br>
                                         </div>


                                         <div class="col col-md-4">
                                                <div class="form-group">
                                                        &nbsp;  {{Form::label('id','Computer Number :')}} <b>{{ $officer->id}} </b>
                                                    </div>


                                                    <div class="form-group">
                                                            &nbsp;    {{Form::label('nis', 'NIS :')}} <b>{{ $officer->nis}} </b>
                                                     </div>

                                                     <div class="form-group">
                                                            &nbsp;    {{Form::label('enlist_date', 'Enlistment Date :')}} <b>{{ $officer->enlist_date}} </b>
                                                        </div>

                                                           <div class="form-group">
                                                                &nbsp;   {{Form::label('original_rank', 'Original Rank :')}}<b>{{ $officer->original_rank}} </b>
                                                         </div>
                                                         <div class="form-group">
                                                                &nbsp;  {{Form::label('sex', 'Gender :')}}<b>{{ $officer->sex}} </b>
                                                    </div>
                                                    <div class="form-group">
                                                            &nbsp;     {{Form::label('status', 'Status :')}}<b>{{ $officer->status}} </b>
                                                     </div>

                                                     <div class="form-group">
                                                            &nbsp;     {{Form::label('title', 'Title :')}}<b>{{ $officer->title}} </b>
                                                     </div>

                                                     <div class="form-group">
                                                            &nbsp;     {{Form::label('suffix', 'Suffix :')}}<b>{{ $officer->suffix}} </b>
                                                     </div>
                                          </div>
                                                 <div class="col col-md-4">
                                                <div class="form-group">
                                                      {{Form::label('reg_no', 'Regulation Number :')}}<b>{{ $officer->reg_no}} </b>
                                                   </div>

                                                   <div class="form-group">
                                                        {{Form::label('trn', 'TRN :')}} <b>{{ $officer->trn}} </b>
                                                    </div>


                                                     <div class="form-group">
                                                            {{Form::label('dob', 'Date of Birth :')}}<b>{{ $officer->dob}} </b>
                                                        </div>
                                                        <div class="form-group">
                                                                {{Form::label('cob', 'Country Of Birth :')}}<b>{{ $officer->cob}} </b>
                                                         </div>
                                                         <div class="form-group">
                                                                {{Form::label('nationality', 'Nationality :')}}<b>{{ $officer->nationality}} </b>
                                                         </div>
                                                         <div class="form-group">
                                                                {{Form::label('division', 'Division :')}}<b>{{ $officer->division}} </b>
                                                            </div>  <div class="form-group">
                                                                    {{Form::label('station', 'Station :')}}<b>{{ $officer->station}} </b>
                                                             </div>
                                                            <div class="form-group">
                                                                    {{Form::label('section', 'Section :')}}<b>{{ $officer->section}} </b>
                                                             </div>
                                          </div>




                                    </div>




        <br><hr>

            <div class="panel panel-primary">
                    <div class="panel-heading"> {{Form::label('remarks', 'Remarks :')}}</div>
                    <div class="panel-body">  <b>{{ $officer->remarks}} </b> </div>
              </div>
              @if (count($officer->posting)>0)
               <hr>
              <br/>
                 <h1> Posting </h1>
                 @foreach ($officer->posting as $posting)
                 <br/>

                 <a href="/postings/{{$posting->id}}/edit" class="btn btn-default">Edit</a>
                             <div class="well" style="background:white">
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
    </div>
</div>

       <br><br>












       @endsection
