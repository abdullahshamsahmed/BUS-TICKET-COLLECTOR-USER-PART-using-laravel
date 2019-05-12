<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Input;

use App\driver;
class AdminController extends Controller
{
    public function index(){
      if(session('type')=="admin" && session('uname')){
      return view('admin.index');
    }
}
public function driver()
{
  return view('admin.driver.adddriver');
}
public function storedriver(Request $request)
    {

      $drivers=new driver;
      if (Input::hasFile("image")){
        $files=Input::file('image');
        $name=time()."-".$files->getClientOriginalName();
        $image=$files->move(public_path().'/driver_image',$name);
        $drivers->image=$name;
      }
       $drivers->name=Input::get("name");
       $drivers->lnumber=Input::get("lnumber");

       $drivers->cc=Input::get("cc");
       $drivers->description=Input::get("description");



       $drivers->save();
       return  ("allah hu akbar");

    }
}
