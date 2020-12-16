<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        $response = Http::post('http://nailsmasterstest.com.xsph.ru/api/login', [
            'headers' => [
                'Accept' => 'application/json',
            ],
            'email' => 'admin@admin',
            'password' => '123'
        ]);

        //dd('Bearer '.$response['token'], $response['token_type']);

        $response1 = Http::withToken($response['token'])->get('http://nailsmasterstest.com.xsph.ru/api/place');

        dd(json_decode($response1, true), $response1->json());



        return view('home', ['masters' => User::whereNotNull('master_id')->get()->sortByDesc('master.portfolio.created_at')]);
    }
}
