@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
                Parish
        </h1>
   </section>
   <div class="content">

       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($parish, ['route' => ['parishes.update', $parish->id], 'method' => 'patch']) !!}

                        @include('parishes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
