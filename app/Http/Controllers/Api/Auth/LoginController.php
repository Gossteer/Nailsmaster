<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
// use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psr\Log\LoggerInterface;
// use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, LoggerInterface $logger)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'You cannot sign with those credentials',
                'errors' => 'Unauthorised'
            ], 401);
        }

        $token = Auth::user()->createToken($request->email);
        // $token->token->expires_at = Carbon::now()->addMonth();

        $token->token->save();

        // Log::channel('authlogin')->info('Авторизация пользователя', ['user_id' => Auth::user()->id]);
        $logger->log('info', 'Авторизация пользователя', [
            'type_id' => 'register',
            'user_id' => Auth::user()->id
            ]);

        return response()->json( [
            'User' => Auth::user(),
            'token_type' => 'Bearer',
            'token' => $token->accessToken,
            // 'expires_at' => Carbon::parse($token->token->expires_at)->toDateTimeString()
        ], 200);
    }
}
