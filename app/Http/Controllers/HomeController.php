<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\About;

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
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin','migrant','volunteer']);
        return view('home');
    }

    public function profile(Request $request){
        $users = User::all();

        //return $users;//view('profile',$users);
        return view('profile',$users);
    }

    public function about(Request $request){
        $users = User::all();

        //return $users;//view('profile',$users);
        return view('about',$users);
    }


    /*
    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        return view(‘some.view’);
    }
    */
}
