<?php

namespace App\Http\Controllers;

use Webpatser\Uuid\Uuid;
use App;
use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Input;
use Validator;
use DB;

class FileController extends Controller
{
   
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

    
    public function store(Request $request)
    {
          $this->validate($request, [

                'file' => 'required|file|max:204800'

    ]);



        if($request->hasFile('file'))

         {
           $filename= $request->file->getClientOriginalName();
           $filesize= $request->file->getClientSize();
           $request->file->storeAs('public',$filename);
           $files=new File;
           $files->file=$filename;
           $files->size=$filesize;
           $files->save();
           return redirect()->route('file');
       }


           else return "There is no file!";
        
    }




  public function download($file_name)
    {
          $file_path  = storage_path('app/public/'.$file_name);
          
          return response()->download($file_path); 



    }
    
    public function edit($id)
    {
       
    }


    public function show($id)
    {
        $file=File::findOrFail($id);
        return view('Show',compact('file'));
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
    public function remove()
    {
        DB::table('files')->truncate();
        return redirect()->route('file');
    }

}
