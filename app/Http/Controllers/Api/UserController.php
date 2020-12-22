<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Update user (set master_id)
     *
     * @param  int or null $master_id
     */
    public static function setMaster($id)
    {
        User::find(Auth::user()->id)->update(['master_id' => $id]);
    }

        /**
     * Update user (set master_id)
     *
     * @param  string $custom_id
     * @param  string $with
     * @param  string $sortBy
     * @param  bool $desc = false
     * @param  $options = SORT_REGULAR
     * @return User whereNotNull $custom_id with $with sortBy $sortBy $desc
     */
    public static function getCustomUsers(string $custom_id, string $with, string $sortBy, bool $desc = false, $options = SORT_REGULAR)
    {
       return User::whereNotNull($custom_id)->with($with)->get()->sortBy($sortBy, $options, $desc);
    }
}
