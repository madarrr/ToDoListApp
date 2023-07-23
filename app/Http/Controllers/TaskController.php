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
        // $task= new Task;
        //    $task->titre = $request->titre;
        //            $task->duration= $request->duration;
        //        $task->description= $request->description;
        //        echo $task->duration;
        //        dd();

        Task::create([
          $titre= 'titre'=>$_POST['titre'],
          $duration= 'duration'=>$_POST['duration'],
          $description='description'=>$_POST['description']
          ]);
        return redirect('home');

    }

    public function delete()
    {

    }
}
