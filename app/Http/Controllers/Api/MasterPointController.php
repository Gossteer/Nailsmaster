<?php

namespace App\Http\Controllers\Api;

use App\MasterPoint;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterPointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poinst = array('point' =>MasterPoint::with(['master', 'masterPortfolio'])->get());
        // $poinst = array('point' => MasterPoint::join('masters', 'master_points.master_id', '=', 'masters.id')->join('portfolios', 'masters.portfolio_id', '=', 'portfolios.id')->select('master_points.*', 'masters.*', 'portfolios.*')->get());

        return response()->json([
            'points' => $poinst,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MasterPoint  $masterPoint
     * @return \Illuminate\Http\Response
     */
    public function show(MasterPoint $masterPoint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MasterPoint  $masterPoint
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterPoint $masterPoint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MasterPoint  $masterPoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterPoint $masterPoint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MasterPoint  $masterPoint
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterPoint $masterPoint)
    {
        //
    }
}
