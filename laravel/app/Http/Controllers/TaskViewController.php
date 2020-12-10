<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TaskViewController extends Controller
{
    public function index()
    {
        $tasks = DB::select('SELECT t.TaskId, t.UpdateTime, t.TaskDesc, p.PrioType, t.NameAssigned, t.DueDate, s.StatusType
        FROM Task t, Priority p, TaskStatus s
        WHERE t.PrioId = p.PrioId AND t.StatusId = s.StatusId');
        return view('welcome', compact('tasks'));
    }
}
