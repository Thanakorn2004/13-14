<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicenotification;
use Illuminate\Support\Str;
use Yoeunes\Toastr\Toastr;
use Image;
use File;

class ServicenotificationController extends Controller
{
    public function index(){
        $servicenotification = Servicenotification::all();
        return view('admin.Servicenotification.index',compact('servicenotification'));
    }

    public function insert(Request $request){
        $servicenotification = new Servicenotification();
        $servicenotification->name = $request->name;
        $servicenotification->phone = $request->phone;
        $servicenotification->date = $request->date;
        $servicenotification->details = $request->details;

        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/back-end/upload/Servicenotification/',$filename);
            Image::make(public_path() . '/back-end/upload/Servicenotification/'.$filename);
            $servicenotification->image = $filename;
            }else{
                $servicenotification->image = 'Nopic.png';
            }

        $servicenotification->save();
        toastr('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('Servicenotification.index');
    }

    //public function delete($id)
    //{
    //    $servicenotification = Servicenotification::find($id);
     //   $servicenotification->delete();
    //    return redirect()->route('servicenotification.index');
    //}

    public function delete($id)
    {
        $servicenotification = Servicenotification::find($id);
        if($servicenotification->image != 'Nopic.png'){
        File::delete(public_path().'/back-end/upload/Servicenotification/'.$servicenotification->image);
    }
        $servicenotification->delete();
        return redirect()->route('Servicenotification.index');
    }

    public function edit($id)
    {
        $servicenotification = Servicenotification::find($id);
        return view('admin.Servicenotification.edit',compact('servicenotification'));
    }

    public function update(Servicenotification $servicenotification, Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $servicenotification = Servicenotification::find($id);
             // ลบรูปภาพ
            if ($servicenotification->image != 'nopic.jpg') {
                File::delete(public_path() . '/back-end/upload/Servicenotification/' . $servicenotification->image);
            }
            //เพิ่มรูปภาพ
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg
            $request->file('image')->move(public_path() . '/back-end/upload/Servicenotification/', $filename);
            Image::make(public_path() . '/back-end/upload/Servicenotification/' . $filename);
            $servicenotification->image = $filename;
            //เพิ่มฟิล์ดในกรณีที่มีรูปภาพ
            $servicenotification->name = $request->name;
            $servicenotification->phone = $request->phone;
            $servicenotification->date = $request->date;
            $servicenotification->details = $request->details;
        }

        else{
            //เพิ่มฟิล์ดในกรณีที่ไม่มีรูปภาพ
            $servicenotification = Servicenotification::find($id);
            $servicenotification->name = $request->name;
            $servicenotification->phone = $request->phone;
            $servicenotification->date = $request->date;
            $servicenotification->details = $request->details;
            $servicenotification->save();
        }

        $servicenotification->save();
        toastr('แก้ไขสำเร็จ','success');
            return redirect()->route('Servicenotification.index');
        }

    }

