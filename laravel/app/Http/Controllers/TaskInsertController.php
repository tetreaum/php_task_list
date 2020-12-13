<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TaskInsertController extends Controller
{

    public function create(Request $request)
    {
        //Validate the new entry
        $validator = Validator::make($request->all(), [
            'TaskDesc' => 'required|string|min:1|max:200|unique:Task',
            'PrioId' => 'required',
            'NameAssigned' => 'required|string|min:1|max:100',
            'DueDate' => 'required',
            'StatusId' => 'required'
        ]);

        //If validation fails return to main screen with errors
        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }

        //Insert new entry into database and return to main screen
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
