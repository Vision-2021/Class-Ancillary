<?php

namespace App\Http\Controllers;
use Auth;
use App\Subject;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth:admin');
    }
     public function index()
    {
        
       $subjects=Subject::all();
         return view('Course.admin',compact('subjects'));
    }
    public function create()
    {
        return view('Course.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
           'Course_Code'=>'required',
           'Course_Title'=>'required',
           'Color'=>'required'

        ]);
        Subject::create($request->all());
        return redirect()->route('course')->with('success','Routine generated successfully');
    }


    public function remove()
    {
        DB::table('subjects')->truncate();
        return redirect()->route('course');
    }
}
