<?php

namespace App\Http\Controllers;



use Webpatser\Uuid\Uuid;
use App\File;
use App\Routinemodel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Student;
use App\Question;
use App\Dailymodel;
use Auth;
class studentcontroller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:web');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
           $dailymodels=Dailymodel::all();
        return view('student.index',compact('dailymodels'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function download($id)
    {

        $files= File::find('$id');
        return Storage::download($pathToFile,$files->file);


    }

}
