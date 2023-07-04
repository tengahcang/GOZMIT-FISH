<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        // return view('home');
        $id = Auth::user()->id;
        $data = DB::table('users')
                ->where('id','=', $id)
                ->first();
        $role = $data->role;
        if ($role=="NELAYAN"){
            return view('home',['data'=>$data]);
        }elseif ($role=="PENAMBAK"){
            return view('home',['data'=>$data]);
        }elseif ($role=="PEMBELI"){
            return view('home',['data'=>$data]);
        }
    }
}
