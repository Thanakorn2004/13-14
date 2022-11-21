<?php

namespace App\Http\Controllers;
use App\Models\Workhistory;
use App\Models\Organizers;
use App\Models\Showservice;
use App\Models\Servicenotification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yoeunes\Toastr\Toastr;
use Image;
use File;

class IndexController extends Controller
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
        $workhistory = Workhistory::all();
        $organizers = Organizers::all();
        return view('promotepage.index',compact('workhistory','organizers'));
    }

    public function about()
    {
        $showservice = Showservice::all();
        return view('promotepage.about',compact('showservice'));
    }

    public function doctor()
    {
        return view('promotepage.doctor');
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

    public function blog()
    {
        $workhistory = Workhistory::all();
        return view('promotepage.blog',compact('workhistory'));
    }

    public function contact()
    {
        $organizers = Organizers::all();
        return view('promotepage.contact',compact('organizers'));
    }

    public function admin(){
        return view('admin.index');
    }
}
