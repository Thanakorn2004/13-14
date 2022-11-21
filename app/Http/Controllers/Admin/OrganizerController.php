<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Organizers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yoeunes\Toastr\Toastr;
use Image;
use File;

class OrganizerController extends Controller
{
    public function index()
    {
        $organizers = Organizers::all();
        return view('admin.Organizer.index',compact('organizers'));
    }

    public function createform()
    {
        return view('admin.Organizer.create');
    }

    public function insert(Request $request)
    {

        $organizers = new Organizers();
        $organizers->name = $request->name;
        $organizers->username = $request->username;
        $organizers->phone = $request->phone;
        $organizers->role = $request->role ;

        if($request->hasFile('organizer_image')){
        $filename = Str::random(10).'.'.$request->file('organizer_image')->getClientOriginalExtension();
        $request->file('organizer_image')->move(public_path() . '/back-end/upload/Organizers/',$filename);
        Image::make(public_path() . '/back-end/upload/Organizers/'.$filename);
        $organizers->organizer_image = $filename;
        }else{
            $organizers->organizer_image = 'Nopic.png';
        }
        $organizers->save();
        toastr('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('Organizer.index');
    }

    public function delete($id)
    {
        $organizers = Organizers::find($id);
        if($organizers->organizer_image != 'Nopic.png'){
        File::delete(public_path().'/back-end/upload/Organizers/'.$organizers->organizer_image);
    }
        $organizers->delete();
        return redirect()->route('Organizer.index');
    }

    public function edit($id)
    {
        $organizers = Organizers::find($id);
        return view('admin.Organizer.edit',compact('organizers'));
    }

    public function update(Organizers $organizers, Request $request, $organizer_id)
    {
        if ($request->hasFile('organizer_image')) {
            $organizers = Organizers::find($organizer_id);
             // ลบรูปภาพ
            if ($organizers->organizer_image != 'nopic.jpg') {
                File::delete(public_path() . '/back-end/upload/Organizers/' . $organizers->organizer_image);
            }
            //เพิ่มรูปภาพ
            $filename = Str::random(10) . '.' . $request->file('organizer_image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('organizer_image')->move(public_path() . '/back-end/upload/Organizers/', $filename);
            Image::make(public_path() . '/back-end/upload/Organizers/' . $filename);
            $organizers->organizer_image = $filename;
            //เพิ่มฟิล์ดในกรณีที่มีรูปภาพ
            $organizers->name = $request->name;
            $organizers->username = $request->username;
            $organizers->phone = $request->phone;
            $organizers->role = $request->role;
        }

        else{
            //เพิ่มฟิล์ดในกรณีที่ไม่มีรูปภาพ
            $organizers = Organizers::find($organizer_id);
            $organizers->name = $request->name;
            $organizers->username = $request->username;
            $organizers->phone = $request->phone;
            $organizers->role = $request->role;
            $organizers->save();
        }

        $organizers->save();
        toastr('แก้ไขสำเร็จ','success');
            return redirect()->route('Organizer.index');
        }

    }
