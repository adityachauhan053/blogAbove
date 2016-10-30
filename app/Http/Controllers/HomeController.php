<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   
	public function index(Request $request){
		
        $data = User::orderBy('id','DESC')->paginate(2);
        return view('home.index',  compact('data'))->with('i',($request->input('page',1)-1)*5);
        
    }
}
