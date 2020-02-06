                         @extends('layouts.app')

                       
                        @section('content') 
                        
     <style>
  .btn-glyphicon {
    padding:8px;
    background:#ffffff;
    margin-right:4px;
}
.icon-btn {
    padding: 1px 15px 3px 2px;
    border-radius:50px;
}
                        </style><br><br>

                        <div class="container">
                        <div class="col-lg-12 col-lg-offset-0">                            
                                    <div class="panel panel-default">                                
                                          <div class="panel-body">                                               
                                             @role('Writer|Administer')
                                          <!--   <a href="/officers/create" class="btn btn-primary">Add New Officer</a> -->
                                             <a class="btn icon-btn btn-primary" href="/officers/create">
                                                <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
                                                Add New Officer
                                                </a>
                                            @endrole
                                            <h3>All Officers</h3>
                                            @if(count($officers) > 0)
                                                <table class="table table-border" style="width=100px; hight=100px;">
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>CompNo</th>
                                                        <th>RegNo</th>
                                                        <th>Rank</th>
                                                        <th>Last Name</th>
                                                        <th>First Name</th>
                                                        <th>Middle Name</th>
                                                        <th>Division</th>
                                                        <th>Status</th>
                                                        @role('Editor|Administer')
                                                        <th>Edit</th>
                                                        @endrole
                                                        @role('Reader|Administer')
                                                        <th>View</th>
                                                        @endrole
                                                        @role('Administer')
                                                        <th>Delete</th>
                                                        @endrole
                                                    </tr>
                                                    @foreach($officers as $Officer)
                                                        <tr>
                                                          <td><img  width="125" height="100"  src="/storage/images/{{$Officer->image}}"></td>
                                                            <td>{{$Officer->id}}</td>
                                                            <td>{{$Officer->reg_no}}</td>
                                                            <td>{{$Officer->rank}}</td>
                                                            <td>{{$Officer->last_name}}</td>
                                                            <td>{{$Officer->middle_name}}</td>
                                                            <td>{{$Officer->first_name}}</td>
                                                            <td>{{$Officer->division}}</td>
                                                            <td>{{$Officer->status}}</td>
                                                            @role('Editor|Administer')
                                                           <td><a href="/officers/{{$Officer->id}}/edit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                                           @endrole
                                                           @role('Reader|Administer')
                                                           <td><a href="/officers/{{$Officer->id}}" class="btn btn-default btn-success">View</a></td>
                                                           @endrole
                                                           @role('Administer')
                                                           <td>     {{ Form::open(['route' => ['officers.destroy', $Officer->id], 'method' => 'DELETE']) }}
                                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger ']) }}
                                                            
                                                            {{ Form::close() }}</td>
                                                           @endrole 

                                                           @endforeach
                                                           
                                                        </tr>
                                                
                                                </table>
                                            @else
                                                <p>You have no officers</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <br><br><br><br><br><br><br> 
                        @endsection          