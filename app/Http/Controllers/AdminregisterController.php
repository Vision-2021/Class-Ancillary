<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminregisterController extends Controller
{
    public function __construct()
    {

    	$this->middleware('guest:admin');

    }
    public function showRegistrationForm()
    {
    	return view('admin-register');
    }
    public function register(Request $request)
    	{
    		$this->validate($request,[

    			'name' => 'required',
    			'email' => 'required',
    			'password' => 'required'
    		]);

    		$admins = new Admin;
    		$admins->name = $request->name;
    		$admins->email = $request->email;
    		$admins->password =bcrypt($request->password);
    		$admins->save();
    		return redirect()->route('admin.login'); 

    	}



    	protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    protected function guard()
    {
        return Auth::guard();
    } 
}
