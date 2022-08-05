<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function log_out()
    {
        Auth::logout();
        return view('index');
    }


public function updateProfile(Request $request){

       $request->validate([
        'name' => ['required', 'string', 'max:255'],
        // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        "telephone_number" => "required|numeric",
         "address" => "required",
        ]);

        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        // $user->email = $request->email;
        $user->telephone_number = $request->telephone_number;
        $user->address = $request->address;



        $user->update();
        return redirect()->back();
    }
}
