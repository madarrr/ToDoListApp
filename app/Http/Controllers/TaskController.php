<?php

namespace App\Http\Controllers;


use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    //
    public function show()
    {
        return view('index',['tasks' => Task::all()
     
    ]);     
    }

    public function store(TaskRequest $request)

    {
        $validated= $request->validated();
        Task::create([
          $titre= 'titre'=>$_POST['titre'],
          $duration= 'duration'=>$_POST['duration'],
          $description='description'=>$_POST['description']
          ]);
          return redirect()->route('home');

    }

    // public function destroy(Task $id)
    // {
    
    //     $id->delete();
    //     return redirect()->route('home');


    // }
}
