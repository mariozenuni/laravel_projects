@extends('layouts.app')

@section('content')


@section('title')


        List of todos


@endsection

<a href="todos/create" class="btn btn-success float-end me-5">Create Todos</a>
    <h1 class="text-center my-5">Todos List</h1>
    
     <div class="col-md-8 offset-md-2">
     
     <div class="row justify-content-center">
          
          
          <div class="card card-default">
         <div class="card-header">Todos</div>
              <div class="card-body">
                 <ul class="list-group">

                             @foreach($todos as $todo)

                                <li class="list-group-item">
                                            {{$todo->name}}
                                            @if(!$todo->completed)
                                            <a href="/todos/{{$todo->id}}/complete" class="btn btn-success btn-sm float-end ms-1" >Completed</a>
                                          @endif  
                                          <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger btn-sm float-end ms-1" >Delete</a>
                                            <a href="todos/{{$todo->id}}" class="btn btn-primary btn-sm float-end ms-1" >View</a>
                                            
                                         

                                                

                                 
                                            
                                </li>
                              @endforeach

                        </ul>

                </div>

            </div>
          
        </div>




@endsection