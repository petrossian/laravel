<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

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
    public function index(Request $request)
    {
        // dd(session('id'));

        // return response()
        //     ->view('home', [5,5,5,6], 200)
        //     ->header('Content-Type', 'ssssss');

        // return response()
        // ->json(['name' => 'Abigail', 'state' => 'CA'])
        // ->withCallback($request->input('callback'));

        return view('home');
    }

    public function account(User $user,$id)
    {
        // $u = Auth::user();
        // $id = $u->id;
        // return redirect("/home")->with('id', $id);
        $user = User::find($id);
        return view('account', compact('user', 'id'));
    }


}
