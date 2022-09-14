<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowserviceController extends Controller
{
    public function index(){
        return view('admin.Showservice.index');
    }

    public function createform(){
        return view('admin.Showservice.create');
    }
}
