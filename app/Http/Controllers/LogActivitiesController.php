<?php

namespace App\Http\Controllers;

use App\Models\LogActivities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Response;

class LogActivitiesController extends Controller
{
    public function indexpengelola()
    {
        $logs = LogActivities::orderBy('action_date', 'desc')
        // ->where('updated_by', 2)
        ->paginate(10);
        return view('pengelola.logActivity.index', ['logsList'=>$logs]);
    }
    
    public function backup() {
        Artisan::queue('backup:run --only-db');

        $path = Storage::disk('public')->path("Laravel/*");

        $latest_ctime = 0;
        $latest_filename = '';

        $files = glob($path);

        foreach($files as $file){
            if(is_file($file) && filectime($file) > $latest_ctime){
                $latest_ctime = filectime($file);
                $latest_filename = $file;
            }
        }

        return Response::download($latest_filename);


    }
    
    public function indexentry()
    {
        $logs = LogActivities::orderBy('action_date', 'desc')
        // ->where('updated_by', 1)
        ->paginate(10);
        return view('entry.logActivity.index', ['logsList'=>$logs]);
    }
}
