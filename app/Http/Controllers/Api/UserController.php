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

    public function profileUser()
    {
        return response()->json([
            'profileUser' => array('Recordings' => User::select('id')->has('recording')->with([
                'recording' => function($query) {
                $query->select('id', 'user_id', 'recording_time_id', 'nails_job_id');
               },
               'recording.recordingTime' => function($query) {
                $query->select('id', 'master_point_id', 'time');
               },
               'recording.recordingTime.masterPoint' => function($query) {
                $query->select('id','latitude','longitude','address', 'master_id', 'image');
               },
               'recording.nailsJobs' => function($query) {
                $query->select('id','price','image','name','description');
               }
               ])->findOrFail(Auth::user()->id), 'User' => User::select('id', 'name', 'surname' , 'lastname', 'phone_number', 'email')->find(Auth::user()->id)),
        ], 200);
    }
}
