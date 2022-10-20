<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudyTime;

class WebappController extends Controller
{
    public function index(Request $request)
    {
        $today = \Carbon\Carbon::now()->format('Y-m-d');
        $this_month = \Carbon\Carbon::now()->format('Y-m');
        $time = StudyTime::where('user_id', 1)->where('day', $today)->sum('time');
        $month = StudyTime::where('user_id', 1)->where('day', 'LIKE', $this_month.'%')->sum('time');
        $total = StudyTime::where('user_id', 1)->sum('time');
        return view('webapp.index', ['time' => $time, 'month' => $month, 'total' => $total]);
    }
}
