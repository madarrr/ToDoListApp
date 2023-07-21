<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function show()
    {
        return view('index');
    }

    public function store(TaskRequest $request)

    {
        $validated= $request->validated();

        Task::create([
            'titre'=>$_POST['titre'],
            'duration'=>$_POST['duration'],
            'description'=>$_POST['description']
        ]);
        return redirect('index');

    }

    public function delete()
    {

    }
}
