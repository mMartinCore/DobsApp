@extends('layouts.app')
@section('content')
<style>
        .myStyle{
            -webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);
              box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);
        }</style>
<div class="container">
        <div class="col-lg-10 col-lg-offset-2">
                <br><br>


        <div class=" myStyle col-md-8">
            <div class="card">
                    <div class="card-header  " >
                      <h3 style="text-align:center; box-sizing: border-box; font-family: sans-serif; font-weight: 500; line-height: 1.1;
                         color: #333333; margin-top: 20px; margin-bottom: 10px; font-size: 30px; background-color: #ecf0f5; ">All Read updated Corpse Notification</h3>
                        <hr>
                    </div>

                <div class=" card-body">
                    <ul class="item-group">

                        @foreach ($corpses as $corpse)

                        <li class="list-group-item">
                                @foreach ($stations as $station)
                                      @if ($station->id == $corpse->data['updateCorpse']['station_id'])
                                          {{$station->station }} of {{$station->division->division}} formation updated
                                      @endif
                                @endforeach

                                   @if ( $corpse->data['updateCorpse']['first_name']==="Unidentified")
                                   an unidentified corpse info..
                                   @else
                                   {{ $corpse->data['updateCorpse']['first_name'] }} {{ $corpse->data['updateCorpse']['last_name'] }} corpse info..
                                   @endif

                                   <b>{{ $corpse->created_at->diffForHumans()}}</b> <a href="{{ route('corpses.show',$corpse->data['updateCorpse']['id'] ) }}"><i>View</i></a>
                                 </li><hr>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
    </div> <br><br><br>
@endsection




