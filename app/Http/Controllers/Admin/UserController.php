<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.User.index',compact('user'));
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.User.edit',compact('user'));
    }

    public function update(Request $request , $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->name = $request->username;
        $user->name = $request->phone;
        $user->name = $request->address;
        $user->name = $request->email;
        $user->save();
        return redirect()->route('User.index');

    }
}
