<?php

namespace App\Http\Controllers;

use App\Master;
use App\User;
use Illuminate\Http\Request;

class MasterController extends Controller
{

    public function __construct()
    {
        $this->middleware('cafw');
    }

    public function update(Request  $request)
    {
        
        // User::find($request->id)->master->update(['confirmation' => $request->confirmation]);
        Master::find(User::find($request->id)->master_id)->update([
            'confirmation' => !$request->confirmation
            ]);

        return  !$request->confirmation;
    }
}
