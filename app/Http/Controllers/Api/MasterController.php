<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\MasterCreateRequest;
use App\Master;
use App\Portfolio;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'masters' => User::whereNotNull('master_id')->join('masters', 'users.master_id', '=', 'masters.id')->with(['master'])->orderBy('masters.created_at', 'desc')->get(),
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(MasterCreateRequest $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MasterCreateRequest $request)
    {
        $portfolio = Portfolio::create($request->only('description', 'login_instagram'));
        $master = Master::create(array_merge(
            $request->only('confirmation'),
            ['portfolio_id' => $portfolio->id],
        ));
        User::find(Auth::user()->id)->update(['master_id' => $master->id]);

        return response()->json([ 'master' => $master->with(['portfolio'])->findOrFail($master->id) ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
