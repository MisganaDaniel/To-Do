<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;
class taskController extends Controller
{
    //This function displays the tasks page
    public function task(){
       // return 'Task Controller';
       return view('tasks');
    }

    //This function adds tasks to the database
    function addTask(Request $request){
            $task = new Task;
            $task->task_name=$request->task;
            $task->Due_data=$request->due_date;
            $task->save();

           
           return redirect('task');
    }

    //This function displays all the data in the task database 
    //table in an html table.
    function showTask(){
        $tasks=task::all();

        //this line code displays the task in red if the due date is close to the current date

        if(due_date==date("Y-m-d")){
            
        }
        return view('tasks',['tasks'=>$tasks]);
    }

    function deleteTask(){
        $tasks=task::all();
        return view('tasks',['tasks'=>$tasks]);
    }
    function delete($id){
        $tasks=task::find($id);
        $tasks->delete();
        return redirect('task');

       
    }
    function edit($id){
        $tasks=task::find($id);
        return view('update',['task'=>$tasks]);
    }

    function update(Request $request){
        $tasks=task::find($request->id);
        $tasks->task_name=$request->task;
        $tasks->Due_data=$request->due_date;
        $tasks->save();
        return redirect('task');
        
    }

    function done($id){
         //Moving the deleted data to the completed_tasks table
        
        
        return redirect('completedtask');
    }

    function showCompletedTask(){
        $tasks=completedtask::all();
        return view('completedtasks',['completedtasks'=>$tasks]);
    }
}

