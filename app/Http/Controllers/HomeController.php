<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('cafw');
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $user = User::whereNotNull('master_id')->get()->sortByDesc('master.portfolio.created_at');

        return view('home', ['masters' => User::whereNotNull('master_id')->get()->sortByDesc('master.portfolio.created_at')]);
    }
}
