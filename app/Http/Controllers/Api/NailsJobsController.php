<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\NailsJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psr\Log\LoggerInterface;

// use Illuminate\Support\Facades\Log;

class NailsJobsController extends Controller
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexParser()
    {
        // Log::channel('nailsjobsloading')->info('Пользователь выгрузил NailsJobs', ['user_id' => Auth::user()->id]);
        $nailsJobs = array('NailsJob' => NailsJobs::select('id','price','image','name','description', 'address', 'master_point_id', 'latitude','longitude')->where('status', 1)->whereHas('masterPoint', function ($query) {
            $query->where('status', 1);
        })->whereHas('masterPoint.master', function ($query) {
            $query->where('status', 1);
        })->with([
            'favorite' => function($query) {
                $query->select('id', 'user_id', 'nails_jobs_id')->where('user_id', Auth::user()->id);
               },
            ])->simplePaginate(20));

        return response()->json([
            'NailsJobs' => $nailsJobs,
        ], 200);
    }

    public function indexForCard()
    {
        return response()->json([
            'NailsJobs' => array('NailsJob' => NailsJobs::select('id','price','image','name','description', 'address', 'master_point_id', 'latitude','longitude')->where('status', 1)->whereHas('masterPoint', function ($query) {
                $query->where('status', 1);
            })->whereHas('masterPoint.master', function ($query) {
                $query->where('status', 1);
            })->with([
                'favorite' => function($query) {
                    $query->select('id', 'user_id', 'nails_jobs_id')->where('user_id', Auth::user()->id);
                   },
                ])->paginate(20)),
        ], 200);
    }

    public function loggerIndex()
    {
        $this->logger->log('info', 'Пользователь выгрузил NailsJobs', [
            'type_id' => 'LoadingNailsJobs',
            'user_id' => Auth::user()->id
            ]);
    }

    public function index()
    {
        return response()->json([
            'NailsJobs' => array('NailsJob' => NailsJobs::select('id','price','image','name','description', 'master_point_id')->where('status', 1)->whereHas('masterPoint', function ($query) {
                $query->where('status', 1);
            })->whereHas('masterPoint.master', function ($query) {
                $query->where('status', 1);
            })->with([
                'masterPoint' => function($query) {
                    $query->select('id','latitude','longitude','address', 'master_id', 'image');
                   },
                'favorite' => function($query) {
                    $query->select('id', 'user_id', 'nails_jobs_id')->where('user_id', Auth::user()->id);
                   },
                ])->simplePaginate(15)),
        ], 200);
    }


    public function redirectToInstagram(\App\Http\Requests\Api\LogRedirectNailsJobsRequest $request)
    {
        // Log::channel('redirecttoinstagram')->info('Пользователь перешёл на:', [
        //     'user_id' => Auth::user()->id,
        //     'nails_jobs_id' => (int) $request->nails_jobs_id
        //     ]);
        $this->logger->log('info', 'Пользователь перешёл к профилю мастера в инстаграм', [
            'type_id' => 'RedirectToInstagram',
            'user_id' => Auth::user()->id,
            'nails_jobs_id' => (int) $request->nails_jobs_id
            ]);

        return response()->json([], 200);
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

    public function storeParser(Request $request)
    {
        if (!NailsJobs::where('instagram', $request->instagram)->exists()) {
            NailsJobs::create([
                'instagram' => $request->instagram,
                'name' => $request->instagram,
                'image' => $request->image,
                'category_nail_id' => 1,
                'master_point_id' => 1,
                'status' => 1,
                'address' => $request->address,
                'description' => $request->description,
                'latitude' => (double) $request->latitude,
                'longitude' => (double) $request->longitude
            ]);
        }


        return response()->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NailsJobs  $nailsJobs
     * @return \Illuminate\Http\Response
     */
    public function show(NailsJobs $nailsJobs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NailsJobs  $nailsJobs
     * @return \Illuminate\Http\Response
     */
    public function edit(NailsJobs $nailsJobs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NailsJobs  $nailsJobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NailsJobs $nailsJobs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NailsJobs  $nailsJobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(NailsJobs $nailsJobs)
    {
        //
    }
}
