<?php


namespace App\Http\Controllers;

use App\Http\Requests\Todos\CreateTodosRequest;
use Illuminate\Http\Request;

use App\Models\Todo;
use Database\Seeders\TodosSeeder;

class TodosController extends Controller{

        public function index(){

            //fetch all the todos data from the database calling the Todo model on its controller 
            // passing the data to the view using the key todos  
                $todos=Todo::all();
                return view('todos.index')->with('todos',$todos);
        }

        public function create()
        {

           return view('todos.create');

        }

        public function store(CreateTodosRequest $request){


          $todos=new Todo();

         //$data=request()->all();

            $todos->name=$request->input('name');
            $todos->description=$request->input('description');
            $todos->completed=false;
            $todos->save();

            session()->flash('success','Todo created successfully');
                
           return redirect('todos');
        }

        

        public function show(Todo $id){

            //$todo=Todo::find($id);

            //var_dump($todos);

            return view('todos.show')->with('todo',$id);


        }
        
       

        public function edit(Todo $id){

           //$todo=Todo::find($id);

          //var_dump($todo);

        

          return view('todos.edit')->with('todo',$id);

          

        }


        public function update(CreateTodosRequest $request, Todo $id){

         
            //$todo=Todo::find($id);

            $id->name=$request->input('name');
            $id->description=$request->input('description');

           

            $id->save();

            session()->flash('success','Todo updated successfully');

            return redirect('todos');



        }


       
         public function destroy(Todo $id)
        {

            $id->delete();
            session()->flash('success','Todo deleted successfully');

       // var_dump($todo);

           return redirect('todos');


        }

        public function complete(Todo $id){

         $id->completed=true;

         $id->save();

         session()->flash('success','Todo successfully completed');


        return redirect('todos');

    

            
         

            
            }
       

}