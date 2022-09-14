<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkhistoryController extends Controller
{
    public function index(){
        return view('admin.Workhistory.index');
    }

    public function createform(){
        return view('admin.Workhistory.create');
    }
}
