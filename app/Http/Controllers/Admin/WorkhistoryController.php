<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Workhistory;
use Image;
use File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Toastr;

class WorkhistoryController extends Controller
{
    public function index()
    {
        $workhistory = Workhistory::all();
        return view('admin.Workhistory.index',compact('workhistory'));
    }

    public function createform()
    {
        return view('admin.Workhistory.create');
    }

    public function insert(Request $request)
    {
        $workhistory = new Workhistory();
        $workhistory->name = $request->name;
        $workhistory->history = $request->history;

        if($request->hasFile('history_image')){
            $filename = Str::random(10).'.'.$request->file('history_image')->getClientOriginalExtension();
            $request->file('history_image')->move(public_path() . '/back-end/upload/Workhistory/',$filename);
            Image::make(public_path() . '/back-end/upload/Workhistory/'.$filename);
            $workhistory->history_image = $filename;
        }else{
            $workhistory->history_image = 'Nopic.png';
        }

        $workhistory->save();

        toastr('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('Workhistory.index');

    }

    public function delete($id)
    {
        $workhistory = Workhistory::find($id);
        if($workhistory->history_image != 'Nopic.png'){
        File::delete(public_path().'/back-end/upload/Workhistory/'.$workhistory->history_image);
    }
        $workhistory->delete();
        return redirect()->route('Workhistory.index');
    }

    public function edit($id)
    {
        $workhistory = Workhistory::find($id);
        return view('admin.Workhistory.edit',compact('workhistory'));
    }

    public function update(Workhistory $workhistory, Request $request, $id)
    {

        if ($request->hasFile('history_image')) {
            $workhistory = Workhistory::find($id);
             // ลบรูปภาพ
            if ($workhistory->history_image != 'nopic.jpg') {
                File::delete(public_path() . '/back-end/upload/Workhistory/' . $workhistory->history_image);
            }
            //เพิ่มรูปภาพ
            $filename = Str::random(10) . '.' . $request->file('history_image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('history_image')->move(public_path() . '/back-end/upload/Workhistory/', $filename);
            Image::make(public_path() . '/back-end/upload/Workhistory/' . $filename);
            $workhistory->history_image = $filename;
            //เพิ่มฟิล์ดในกรณีที่มีรูปภาพ
            $workhistory->name = $request->name;
            $workhistory->history = $request->history;
        }

        else{
            //เพิ่มฟิล์ดในกรณีที่ไม่มีรูปภาพ
            $workhistory = Workhistory::find($id);
            $workhistory->name = $request->name;
            $workhistory->history = $request->history;
            $workhistory->save();
        }

        $workhistory->save();
        toastr('แก้ไขสำเร็จ','success');
            return redirect()->route('Workhistory.index');
        }

    }
