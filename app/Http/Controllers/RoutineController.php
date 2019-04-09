<?php

namespace App\Http\Controllers;

use App\Routinemodel;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class RoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $routine=routinemodels::all();
    //     return view('admin',compact('routine'));
    // }

    
    public function create()
    {
        return view('Create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
           'Routine'=>'required',
            'Class1'=>'required',
            'Class2'=>'required',
            'Class3'=>'required',
            'Class4'=>'required',
            'Class5'=>'required',
            'Class6'=>'required'
        ]);
        Routinemodel::create($request->all());
        return redirect()->route('admin.dashboard')->with('success','Routine generated successfully');
    }

    
    public function show($id)
    {
        $routine=Routinemodel::findOrFail($id);
        return view('Show',compact('routine'));
    }

    
    public function edit($id)
    {
        $routinemodel=Routinemodel::findOrFail($id);
        return view('Edit',compact('routinemodel','id'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'Routine'=>'required',
            'Class1'=>'required',
            'Class2'=>'required',
            'Class3'=>'required',
            'Class4'=>'required',
            'Class5'=>'required',
            'Class6'=>'required'
        ]);
            $routine=Routinemodel::find($id);
            $routine->Routine = $request->get('Routine');
            $routine->Class1 = $request->get('Class1');
            $routine->Class2 = $request->get('Class2');
            $routine->Class3 = $request->get('Class3');
            $routine->Class4 = $request->get('Class4');
            $routine->Class5 = $request->get('Class5');
            $routine->Class6 = $request->get('Class6');
            $routine->save();
            return redirect()->route('admin.dashboard')->with('success','Routine updated successfully');


    }

    
    public function destroy($id)
    {
       $routine= Routinemodel::find($id);
       $routine->delete();
        return redirect()->route('admin.dashboard')->with('success','Routine deleted successfully');
    }
    public function remove()
    {
        DB::table('routinemodels')->truncate();
        return redirect()->route('admin.dashboard');
    }
}
