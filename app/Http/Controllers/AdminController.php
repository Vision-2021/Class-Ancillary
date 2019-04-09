<?php

namespace App\Http\Controllers;
use App\Routinemodel;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
      public function __construct()
    {
        $this->middleware('auth:admin');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   // public function index()
   //  {
   //     return view ('admin');
   //  }
    public function index()
    {
                     $routinemodels=Routinemodel::all();
        return view('admin',compact('routinemodels'));
            }
}
