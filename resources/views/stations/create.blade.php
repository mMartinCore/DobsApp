@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
                <i class="fa fa-building-o" aria-hidden="true"></i> Add New Station
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'stations.store']) !!}

                        @include('stations.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
