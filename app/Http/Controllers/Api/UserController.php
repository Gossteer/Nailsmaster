<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\NailsJobs;
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
            'User' => User::select('id', 'name', 'surname' , 'lastname', 'phone_number', 'email')->find(Auth::user()->id),
        ], 200);
    }

    public function userRecordings()
    {
        return response()->json([
            'Recordings' => User::select('id')->has('recording')->with([
                'recording' => function($query) {
                $query->select('id', 'user_id', 'recording_time_id', 'nails_jobs_id');
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
            ])->findOrFail(Auth::user()->id)
        ], 200);
    }

    public function userFavoriteNailsJobs()
    {
        return response()->json([
            'Favorites' => NailsJobs::where('status', 1)->whereHas('masterPoint', function ($query) {
                $query->where('status', 1);
            })->whereHas('favorite', function($query) {
                $query->select('id', 'user_id', 'nails_jobs_id')->where('user_id', Auth::user()->id);
               })->whereHas('masterPoint.master', function ($query) {
                $query->where('status', 1);
            })->with([
                'masterPoint' => function($query) {
                    $query->select('id','latitude','longitude','address', 'master_id', 'image');
                   },
                'favorite' => function($query) {
                    $query->select('id', 'user_id', 'nails_jobs_id')->where('user_id', Auth::user()->id);
                    }
                ])->get(['id','price','image','name','description', 'master_point_id']),
        ], 200);
    }
    public function userFavoriteMaster()
    {
        return response()->json([
            'Favorites' => NailsJobs::where('status', 1)->whereHas('masterPoint', function ($query) {
                $query->where('status', 1);
            })->whereHas('favorite', function($query) {
                $query->select('id', 'user_id', 'nails_jobs_id')->where('user_id', Auth::user()->id);
               })->whereHas('masterPoint.master', function ($query) {
                $query->where('status', 1);
            })->with([
                'masterPoint' => function($query) {
                    $query->select('id','latitude','longitude','address', 'master_id', 'image');
                   },
                ])->get(['id','price','image','name','description', 'master_point_id']),
        ], 200);
    }
    public function userFavoriteMasterPoint()
    {
        return response()->json([
            'Favorites' => NailsJobs::where('status', 1)->whereHas('masterPoint', function ($query) {
                $query->where('status', 1);
            })->whereHas('favorite', function($query) {
                $query->select('id', 'user_id', 'nails_jobs_id')->where('user_id', Auth::user()->id);
               })->whereHas('masterPoint.master', function ($query) {
                $query->where('status', 1);
            })->with([
                'masterPoint' => function($query) {
                    $query->select('id','latitude','longitude','address', 'master_id', 'image');
                   },
                ])->get(['id','price','image','name','description', 'master_point_id']),
        ], 200);
    }
}
