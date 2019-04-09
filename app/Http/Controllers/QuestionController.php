<?php

namespace App\Http\Controllers;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Input;
use Validator;
use App;
use Auth;
use DB;

class QuestionController extends Controller
{
    
    public function __construct()
    {

        $this->middleware('auth:admin');

    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                    $questions=Question::all();
        return view('Question.admin',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
         $this->validate($request, [

                'file' => 'required|file|max:204800'

    ]);



        if($request->hasFile('file'))
        {
            $questionname= $request->file->getClientOriginalName();
            $questionsize= $request->file->getClientSize();

             $request->file->storeAs('public',$questionname);

            $questions = new Question;
            $questions->file= $questionname;
            $questions->size = $questionsize;
            $questions-> save();
            return redirect()->route('question');

        }
        else return "There is no questions!";
        
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
        $questions= Question::find($id);
       $questions->delete();
        return redirect()->route('question')->with('success','Question deleted successfully');
    }


     public function download($file_name)
    {
          $file_path  = storage_path('app/public/'.$file_name);
          
          return response()->download($file_path); 



    }
    public function remove()
    {
        DB::table('questions')->truncate();
        return redirect()->route('question');
    }
}
