<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TaskUpdateController extends Controller
{
    public function showSelection($TaskId)
    {
        $tasks = DB::select('SELECT * FROM Task where TaskId = ?', [$TaskId]);
        return view('taskupdate', ['tasks' => $tasks]);
    }
    public function update(Request $request, $TaskId)
    {
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
