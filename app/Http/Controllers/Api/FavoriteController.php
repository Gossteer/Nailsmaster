<?php

namespace App\Http\Controllers\Api;

use App\Favorite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function storeNailsJobs(Request $request)
    {
        $user_id = Auth::user()->id;

        $favorite = Favorite::create([
            'user_id' => $user_id ,
            'nails_jobs_id' => $request->id
        ]);

        $this->logger->log('info', 'Пользователь добавил ногти в избранное', [
            'type_id' => 'AddFavoriteNailsJobs',
            'user_id' => Auth::user()->id,
            'nails_jobs_id' => (int) $user_id
            ]);

        return response()->json(['id' => $favorite->id], 200);
    }

    public function storeMaster(Request $request)
    {
        $favorite = Favorite::create([
            'user_id' => Auth::user()->id,
            'master_id' => $request->id
        ]);

        return response()->json(['id' => $favorite->id], 200);
    }

    public function storeMasterPoint(Request $request)
    {
        $favorite = Favorite::create([
            'user_id' => Auth::user()->id,
            'master_point_id' =>$request->id
        ]);

        return response()->json(['id' => $favorite->id], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function show(Favorite $favorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function edit(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favorite $favorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favorite $favorite)
    {
        //Сделать мидлеваре на проверку чей фаворит
        $favorite->delete();

        return response()->json([], 200);
    }

}
