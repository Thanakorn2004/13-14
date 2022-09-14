<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicenotificationController extends Controller
{
    public function index(){
        return view('admin.Servicenotification.index');
    }

    public function createform(){
        return view('admin.Servicenotification.create');
    }
}
