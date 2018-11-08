<?php

namespace App\Http\Controllers;

use App\project;
use App\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request,Project $project){
        $project->tasks()->create([
            'title'=>$request['title'],
            'completed'=>$request->has('completed')
        ]);
        return back();
    }
    public function update(Request $request,Task $task){
        $task->update([
            'completed'=>$request->has('completed')
        ]);
        return back();
    }
    public function destroy(Task $task)
    {
        $task->delete();
        return back();
    }
}
