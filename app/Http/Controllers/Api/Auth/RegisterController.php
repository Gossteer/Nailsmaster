<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\RegisterFormRequest;
use App\User;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RegisterFormRequest $request)
    {
        // $user = User::create(array_merge(
        //     $request->only('email'),
        //     ['password' => bcrypt($request->password)],
        // ));

        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        // $accessToken = $user->createToken('authToken')->accessToken;
        $token = $user->createToken($request->email);
        // $token->token->expires_at = Carbon::now()->addMonth();
        $token->token->save();

        return response()->json([
            'message' => 'You were successfully registered. Use your email and password to sign in.',
            'token_type' => 'Bearer',
            'token' => $token->accessToken,
            // 'access_token' => $accessToken
        ], 200);
    }
}
