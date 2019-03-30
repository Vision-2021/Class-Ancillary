<?php

namespace App\Http\Controllers;

use Webpatser\Uuid\Uuid;

use Illuminate\Http\Request;
use App;
use Input;
use Validator;
use Illuminate\Support\Facades\Storage;
use App\File;
use Auth;
use DB;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
                     $files=File::all();
        return view('Upload.admin',compact('files'));


    }

    
    public function create()
    {
        return view('Upload.create');
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

        $filename=$request->file->getClientOriginalName();
        $filesize=$request->file->getClientSize();
        $request->file->storeAs('public',$filename);
          $files=new File;
          $files->file=$filename;
          $files->size=$filesize;
          $files->save();
          return redirect()->route('file');

         // $url= Storage::url('pic.jpg');
          //return "<img src='".$url."'/>";
        //return  storage::putFile('public',$request->file('file'));
       //return  $request->file->extension();

        // return $request->file->store('public');
     }else return "There is no file";
    }




  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }


    public function show($id)
    {
        
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
       $files= File::find($id);
       $files->delete();
        return redirect()->route('file')->with('success','File deleted successfully');
    }
 
  // public function download($file_name) {
  //   $file_path = storage_path('app/public/'.$file_name);
    
  //   return response()->download($file_path);
  // }

     public function remove()
    {
        DB::table('files')->truncate();
        return redirect()->route('file');
    }

}
