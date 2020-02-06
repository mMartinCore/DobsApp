@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
                Parishes
        </h1>
    </section>
    <div class="content">

        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'parishes.store']) !!}

                        @include('parishes.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
