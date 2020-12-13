<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class TaskUpdateController extends Controller
{
    public function showSelection($TaskId)
    {
        //Select the task with the chosen id and display it
        $tasks = DB::select('SELECT * FROM Task where TaskId = ?', [$TaskId]);
        return view('taskupdate', ['tasks' => $tasks]);
    }
    public function update(Request $request, $TaskId)
    {
        //Validate the update form
        $validator = Validator::make($request->all(), [
            'TaskDesc' => 'required|string|min:1|max:200|unique:Task',
            'PrioId' => 'required',
            'DueDate' => 'required',
            'StatusId' => 'required'
        ]);

        //If validation fails, return to main screen and show errors
        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }

        //Update the database with the entry from the form
        $currentDate = Carbon::now();
        DB::update("UPDATE Task set UpdateTime = ?, TaskDesc = ?, PrioId = ?, DueDate = ?, StatusId = ? WHERE TaskId = ?", [
            $currentDate,
            $request->input('TaskDesc'),
            $request->input('PrioId'),
            $request->input('DueDate'),
            $request->input('StatusId'),
            $TaskId
        ]);

        return redirect('/')->with('status', "Edit success");
    }
}
