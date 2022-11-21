<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Showservice;
use File;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Toastr;

class ShowserviceController extends Controller
{
    public function index()
    {
        $showservice = Showservice::all();
        return view('admin.Showservice.index',compact('showservice'));
    }

    public function createform()
    {
        return view('admin.Showservice.create');
    }

    public function insert(Request $request, Showservice $showservice)
    {

        $showservice->name = $request->name;
        $showservice->details = $request->details;
        $showservice->save();

        toastr('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('Showservice.index');

    }

    public function delete($id)
    {
        $showservice = Showservice::find($id);
        $showservice->delete();
        return redirect()->route('Showservice.index');
    }

    public function edit($id)
    {
        $showservice = Showservice::find($id);
        return view('admin.Showservice.edit',compact('showservice'));
    }

    public function update(Request $request, Showservice $showservice, $id)
    {

        $check = $showservice->find($id);

        if( !empty($check) ){

            $check->name = $request->name;
            $check->details = $request->details;
            $check->update();

            toastr('แก้ไขสำเร็จ','success');
            return redirect()->route('Showservice.index');

        }else{
            toastr('แก้ไขไม่สำเร็จ','error');
            return redirect()->route('Showservice.index');
        }

    }

}
