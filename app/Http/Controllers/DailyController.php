<?php

namespace App\Http\Controllers;

use App\Dailymodel;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class DailyController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        
       $dailymodels=Dailymodel::all();
         return view('Daily.admin',compact('dailymodels'));
    }
    public function create()
    {
        return view('daily.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
           'Routine'=>'required',
           'class'=>'required'
           
        ]);
        Dailymodel::create($request->all());
        return redirect()->route('daily')->with('success','Routine generated successfully');
    }

    
    

    
    public function edit($id)
    {
        $dailymodel=Dailymodel::findOrFail($id);
        return view('Daily.Edit',compact('dailymodel','id'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'Routine'=>'required',
            'class'=>'required',
            'Status'=>'required'
            
        ]);
        
            $routine=Dailymodel::find($id);
            $routine->Routine = $request->get('Routine');
            $routine->class = $request->get('class');
            $routine->Status = $request->get('Status');
            
            $routine->save();
            return redirect()->route('daily')->with('success','Routine updated successfully');


    }

    
    public function destroy($id)
    {
       $routine= Dailymodel::find($id);
       $routine->delete();
        return redirect()->route('daily')->with('success','Routine deleted successfully');
    }

    public function remove()
    {
        DB::table('dailymodels')->truncate();
        return redirect()->route('daily');
    }
}
