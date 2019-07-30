<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserManagement;
use Illuminate\Support\Facades\Hash;

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
        $users = UserManagement::all();
        return view('home')->with("users", $users);
    }

    public function delete($id)
    {
        UserManagement::where('id', $id)
            ->delete();
        $users = UserManagement::all();

        return view('home')->with("users", $users);
    }
}
