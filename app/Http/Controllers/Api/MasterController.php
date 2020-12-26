<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\MasterCreateRequest;
use App\Master;
use App\Http\Controllers\Api\FileController;
use App\Http\Controllers\Api\PortfolioController;

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
            // 'masters' => UserController::getCustomUsers('master_id', 'master.portfolio', 'master.portfolio.created_at', true),
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
     * @param  App\Http\Requests\Api\MasterCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MasterCreateRequest $request)
    {

        // if($request->hasfile('image')) {
        //     // $url = Storage::disk('private')->put('images/master', );
        //     $url = Storage::putFile('public/images/master', $request->file('image'));
        // }

        //Добавить транзакцию
        $portfolio = PortfolioController::store($request);
        $master = Master::create(array_merge(
            $request->only('confirmation'),
            [
                'portfolio_id' => $portfolio->id,
                'image' => FileController::fileStorage(config('filestorage.private.folders.images.master'), $request->file('image'),'private')
        ],
        ));

        UserController::setMaster($master->id);

        return response()->json(['master' => $master->with(['portfolio'])->findOrFail($master->id)], 200);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            'masters' => array('master' => Master::select('id','image','portfolio_id')->with(['user' => function ($query){
                $query->select('id', 'name', 'master_id');
            }])->where('confirmation', 1)->findOrFail($id)) ,
        ], 200);
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
    public function update(MasterCreateRequest $request)
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
        // $master = Master::find($id);
        // //Добавить транзакцию

        // FileController::deleteFileStorage('private', $master ->image);
        // PortfolioController::delete($master->portfolio_id);
        // // UserController::setMaster(null);

        // return response()->json();
    }
}
