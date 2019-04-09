<?php

namespace App\Http\Controllers;



use Webpatser\Uuid\Uuid;
use App\File;
use App\Question;
use App\Routinemodel;
use Illuminate\Http\Request;
use App\Dailymodel;
use App\Student;
use App\Subject;
use Auth;
class studentcontroller extends Controller
{
   
    
    public function index()
    {
        $subjects=Subject::all();
         $dailymodels=Dailymodel::all();
        return view('student.index',compact('dailymodels','subjects'));
    }
    

    
    
    
    public function examples()
    {

        $routinemodel= Routinemodel::all()->toArray();
        return view('student.examples',compact('routinemodel'));
    }
    public function page()
    {
           $files=File::all();
        return view ('student.page',compact('files'));
    }
    public function another_page()
    {
                $questions=Question::all();
        return view('student.another_page',compact('questions'));
    }

    public function contact()
    {
        return view('student.contact');

    }

    
    public function store(Request $request)
    {
        $this->validate($request,[

            'name'=>'required',
            'email'=>'required',
            'institution'=>'required',
            'reg_no'=>'required',
            'ses'=>'required',
            'pass'=>'required'

        ]);

        $s = new Student([

            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'institution'=>$request->get('institution'),
            'reg_no'=>$request->get('reg_no'),
            'ses'=>$request->get('ses'),
            'pass'=>$request->get('pass')

        ]);
        $s->save();
        return redirect()->route('index');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }

   

}
