<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaskDeleteController extends Controller {
    public function delete($TaskId)
    {
        DB::delete('DELETE FROM Task WHERE TaskId = ?', [$TaskId]);
        return redirect('/')->with('status', "Insert success");
    }
}

