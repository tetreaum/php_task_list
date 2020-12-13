<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TaskDeleteController extends Controller {
    public function delete($TaskId)
    {
        //Select the task with the chosen id and delete it
        DB::delete('DELETE FROM Task WHERE TaskId = ?', [$TaskId]);
        return redirect('/')->with('status', "Insert success");
    }
}

