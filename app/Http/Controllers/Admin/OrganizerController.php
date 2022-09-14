<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    public function index(){
        return view('admin.Organizer.index');
    }

    public function createform(){
        return view('admin.Organizer.create');
    }
}
