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
                    {!! Form::open(['route' => 'ranks.store']) !!}

                        @include('ranks.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
