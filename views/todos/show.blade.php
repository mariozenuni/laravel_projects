@extends('layouts.app')

@section('content')

@section('title')

        Single todo {{$todo->name}}}

@endsection

    <h1 class="text-center my-5">{{$todo->name}}</h1>
    
     <div class="col-md-8 offset-md-2">
     
     <div class="row justify-content-center">
          
          
          <div class="card card-default">
                     <div class="card-header">Details</div>
              <div class="card-body">

                     <ul class="list-group">

                             
                                <li class="list-group-item">
                                {{$todo->description}}
                                           
                                            
                                </li>
                          

                        </ul>

                                            <a href="/todos"class="btn btn-primary my-5">Back</a>
                                            <a href="/todos/{{$todo->id}}/edit"class="btn btn-info my-2">Edit</a>
                                            <a href="/todos/{{$todo->id}}/delete"class="btn btn-danger my-2">Delete</a>
                                            @if(!$todo->completed)
                                         <a href="/todos/{{$todo->id}}/complete"class="btn btn-success my-2">Completed</a>
                </div>                      @endif

            </div>
          
        </div>




@endsection


