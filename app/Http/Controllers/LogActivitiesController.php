<?php

namespace App\Http\Controllers;

use App\Models\LogActivities;
use Illuminate\Http\Request;

class LogActivitiesController extends Controller
{
    public function indexpengelola()
    {
        $logs = LogActivities::orderBy('action_date', 'desc')
        // ->where('updated_by', 2)
        ->paginate(10);
        return view('pengelola.logActivity.index', ['logsList'=>$logs]);
    }
    
    public function indexentry()
    {
        $logs = LogActivities::orderBy('action_date', 'desc')
        // ->where('updated_by', 1)
        ->paginate(10);
        return view('entry.logActivity.index', ['logsList'=>$logs]);
    }
}
