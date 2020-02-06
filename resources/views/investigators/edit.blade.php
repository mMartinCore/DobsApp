@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Investigator
        </h1>
   </section>
   <div class="content"> 
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($investigator, ['route' => ['investigators.update', $investigator->id], 'method' => 'patch']) !!}

                        @include('investigators.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
