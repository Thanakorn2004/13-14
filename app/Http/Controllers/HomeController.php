<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Showservice;
use App\Models\Servicenotification;
use App\Models\Workhistory;
use App\Models\Organizers;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin(Showservice $showservice)
    {

        return view('admin.index', [

            "count_showservice" => Showservice::count(),
            "count_service_notification" => Servicenotification::count(),
            "count_workhistory" => Workhistory::count(),
            "count_organizers" => Organizers::count()

        ]);

    }

}
