@extends('layouts.app')

@section('content')


<style>
    div {
      font-family: sans-serif;
    }


    .loader {
        position: fixed;
        z-index: 99;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #ECF0F5;
        opacity: 7;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .loader > img {
        width: 100px;
    }

    .loader.hidden {
        animation: fadeOut 0s;
        animation-fill-mode: forwards;
    }

    @keyframes fadeOut {
        100% {
            opacity: 0;
            visibility: hidden;
        }
    }


    </style>


    <script>

    window.addEventListener("load", function () {
        const loader = document.querySelector(".loader");
        loader.className += " hidden"; // class "loader hidden"
    });

    </script>

    <div class="loader">
            <img src="{{asset('/dist/img/loading.gif')}}"   alt="Loading...">
          </div>








<link rel="stylesheet" href="{{asset('dist/task.css')}}">
    <div class="content" style="background:white">
            <div class="panel panel-default">
                    <div class="panel-heading"> <i class="fa fa-plus-circle" aria-hidden="true"></i>  New Corpse Detail </div>
                    <div id="output"></div>
                    <div   class="panel-body" style="background:white">
                        <span id="form_output"></span>
                <div class="row" >
                    {!! Form::open(['route' => 'corpses.store','id'=>'postForm']) !!}
                       {{csrf_field()}}
                       @include('corpses.fields')


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


    @include('corpses.showModal')

@endsection
