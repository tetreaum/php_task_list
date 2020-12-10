<?php
namespace App\Http\Controllers;
use App\TaskInsert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class TaskInsertController extends Controller {
    public function insert(){
        return view('welcome');
    }

    public function create(Request $request){
        $validate = $request->validate([
            'TaskDesc' => 'required|string|min:1|max:200',
            'PrioId' => 'required',
            'NameAssigned' => 'required|string|min:1|max:100',
            'DueDate' => 'required',
            'StatusId' => 'required',
        ]);

        DB::insert("INSERT INTO Task (`TaskDesc`, `PrioId`, `NameAssigned`, `DueDate`, `StatusId`) VALUES (?, ?, ?, ?, ?)", [
            $request->input('TaskDesc'),
            $request->input('PrioId'),
            $request->input('NameAssigned'),
            $request->input('DueDate'),
            $request->input('StatusId')
        ]);
        
        return redirect('/')->with('status', "Insert success");
    }
}
