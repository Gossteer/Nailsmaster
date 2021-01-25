<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginMasterAdminController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $credentials = $request->only('email', 'password');

        return response()->json( [
            'token_type' => Auth::user()->master_id,
            'token' => in_array([0,-1], Auth::user()->master->status),
            'expires_at' => Auth::user()->master->status
        ], 200);

        if (!Auth::attempt($credentials) or Auth::user()->master_id == null or in_array([0,-1], Auth::user()->master->status)) {
            return response()->json([
                'message' => 'You cannot sign with those credentials',
                'errors' => 'Unauthorised'
            ], 401);
        }

        $token = Auth::user()->createToken($request->email);
        // $token->token->expires_at = Carbon::now()->addMonth();

        $token->token->save();

        return response()->json( [
            'token_type' => 'Bearer',
            'token' => $token->accessToken,
            'expires_at' => Carbon::parse($token->token->expires_at)->toDateTimeString()
        ], 200);
    }
}
