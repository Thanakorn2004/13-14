<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Yoeunes\Toastr\Toastr;
use File;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.User.index',compact('user'));
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('User.index');
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.User.edit',compact('user'));
    }

    public function update(User $user, Request $request, $id)
    {

        $check = $user->find($id);

        if( !empty($check) ){

            $check->name = $request->name;
            $check->username = $request->username;
            $check->phone = $request->phone;
            $check->address = $request->address;
            $check->email = $request->email;

            $check->update();

            toastr('แก้ไขสำเร็จ','success');
            return redirect()->route('User.index');

        }else{
            toastr('แก้ไขไม่สำเร็จ','error');
            return redirect()->route('User.index');
        }

    }
}
