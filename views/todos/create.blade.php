@extends('layouts.app')

@section('content')

<h1 class="text-center my-5">Create Todos</h1>

@if ($errors->any())

<div class="alert alert-danger">

        <ul class="list-group">
                @foreach($errors->all() as $error)

                    <li class="list-group-item">{{$error}}</li>


                @endforeach
        
        
        </ul>



</div>


@endif

<div class="row justify-content-center">

<div class="col-md-8">
<div class="card card-default">

<div class="card-header">Create new todo</div>

<div class="card-body">

<form action="/store-todo" method="post">

@csrf 


    <div class="form-group">

        <input type="text" class="form-control" placeholder="Enter todo  activity name" name="name">

    </div>

    <div class="form-group my-3">
    <textarea type="text" name="description"  placeholder="Describe here your todo activity"cols="5" rows="5" class="form-control"></textarea>

    </div>

    <div class="form-group text-center">
    
    <button  type="submit"class="btn btn-success">Create todos</button>
    </div>


     </form>
        </div>
    </div>
</div>


</div>


@endsection