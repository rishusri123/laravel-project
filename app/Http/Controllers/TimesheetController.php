<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empolyee;

class TimesheetController extends Controller
{
    Public function index()
    {
        return view('timesheet');
    }

    public function Store(Request $request)
    {
        $employee = new Empolyee;
        $employee->projectname=$request->projectname;
        $employee->task=$request->task;
        $employee->descripition=$request->descripition;
        $employee->save();
        
        return redirect('show');
    }

    public function show()
    {
        $show=Empolyee::all();
        return view('show',["team"=>$show]);
    }

    public function edit($id)
    {
        $task=Empolyee::find($id);
          return view('edit',["edit"=>$task]);
    }

    public function update(Request $request,$id)
    {
        $update=Empolyee::find($id);
        $update->projectname=$request->projectname;
        $update->task=$request->task;
        $update->descripition=$request->descripition;
        $update->save();
          
        return redirect('show');        
        
    }
}
