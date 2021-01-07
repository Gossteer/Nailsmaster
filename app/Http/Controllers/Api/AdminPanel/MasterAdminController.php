<?php

namespace App\Http\Controllers\Api\AdminPanel;

use App\Http\Controllers\Controller;
use App\Master;
use App\User;
use Illuminate\Http\Request;

class MasterAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('cafw');
        // $this->middleware('auth');
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return response()->json([
            'masters' => User::select('id',
            'name',
            'master_id',
            'surname',
            'lastname',
            'phone_number',
            'email')->has('master')->with([
                'master' => function($query) {
                $query->select('id', 'created_at', 'status', 'portfolio_id');
               },
               'master.portfolio' => function($query) {
                $query->select('id', 'login_instagram', 'description');
               },
               'master.masterPoint' => function($query) {
                $query->select('id','master_id')->count();
               }
               ])->get()->sortByDesc('master.created_at'),
        ], 200);
    }

    public function show(int $id)
    {

        return view('masters.mastershow', ['master' => Master::find($id), 'masterPoints' => Master::find($id)->masterPoint]);
    }

    public function updateStatus(Request  $request)
    {

        // User::find($request->id)->master->update(['confirmation' => $request->confirmation]);
        Master::find($request->id)->update([
            'status' => !$request->status
            ]);

        return  !$request->status;
    }
}
