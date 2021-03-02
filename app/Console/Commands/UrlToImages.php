<?php

namespace App\Console\Commands;

use App\NailsJobs as ModelsNailsJobs;
use Illuminate\Console\Command;

class UrlToImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'usrltoimages';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $nailsJobs = ModelsNailsJobs::all();

        foreach($nailsJobs as $key => $nailsJob)
        {
            $ch = curl_init($nailsJob->image);
            $fp = fopen('storage\app\public\images\image'.$key.'.png', 'wb');
            curl_setopt($ch, CURLOPT_FILE, $fp);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_exec($ch);
            curl_close($ch);
            fclose($fp);
            $nailsJob->image = "images/image$key.png";
            $nailsJob->save();
            // print_r($nailsJob->image);
            echo $nailsJob->id . '\n';
        }
    }
}
