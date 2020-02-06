@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
        <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Corpse
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'corpses.store']) !!}

                        @include('corpses.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
