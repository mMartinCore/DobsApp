@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <br><br><br>
        <div class="col-md-8">
            <div class="card">
                    <div class="card-header  " >
                        <h2>Read New Corpse</h2>
                    </div>

                <div class="card-body">
                    <ul class="item-group">
                        @foreach ($corpses as $corpse)
                           <li class="list-group-item">
                                {{ $corpse->first_name }}{{ $corpse->created_at}}
                           </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
