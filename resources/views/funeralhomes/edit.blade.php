@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
              Edite  Funeral Home
        </h1>
   </section>
   <div class="content">

       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($funeralhome, ['route' => ['funeralhomes.update', $funeralhome->id], 'method' => 'patch']) !!}

                        @include('funeralhomes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
