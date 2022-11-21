<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Servicenotification;
use Illuminate\Support\Str;
use Yoeunes\Toastr\Toastr;
use Image;
use File;

class DoctorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('promotepage.doctor');
    }

    public function admin(){
        return view('admin.index');
    }

    public function insert(Request $request){
        $servicenotification = new Servicenotification();
        $servicenotification->name = $request->name;
        $servicenotification->phone = $request->phone;
        $servicenotification->date = $request->date;

        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/back-end/upload/Servicenotification/',$filename);
            Image::make(public_path() . '/back-end/upload/Servicenotification/'.$filename);
            $servicenotification->image = $filename;
            }else{
                $servicenotification->image = 'Nopic.png';
            }

        $servicenotification->details = $request->details;
        $servicenotification->save();
        //toast('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('promotepage.doctor');
    }


}
