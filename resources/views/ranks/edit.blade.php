@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
               Ranks
        </h1>
   </section>
   <div class="content">

       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($rank, ['route' => ['ranks.update', $rank->id], 'method' => 'patch']) !!}

                        @include('ranks.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
