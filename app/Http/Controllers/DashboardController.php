<?php

namespace App\Http\Controllers;

use App\Models\Dashbord;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dada(){
        return view('all.home');
    }
    public function da(){
        return view('all.add');
    }
    public function from(Request $req){
        if (!is_dir(public_path('pic/new'))) {            //img start
            mkdir(public_path('pic/new'), 0777, true);
        }
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $name = $image->getClientOriginalName();
            $imageName = time() . "_" . $name;
            $image->move(public_path('pic/new'), $imageName);
            $data["image"] ='pic/new/'.  $imageName;
        }
        $data["title"] = $req->title;
        $data["subtitle"] = $req->subtitle;
        $data["Description"] = $req->Description;
        $data["status1"] = $req->status1 ? 1 : 0 ;
        $data["status2"] = $req->status2 ? 1 : 0 ;
        $data["status3"] = $req->status3 ? 1 : 0 ;
      //  $data["status"] = $req->status;

      Dashbord::create($data);
    //   dd($req->all());
     return redirect()->route('service');      
    }
    public function list(){
        $allDataList=Dashbord::get();
        return view('all.table', ['datalist'=>$allDataList]);
      }
      public function editAllData($id){
        $edit=Dashbord::where(['id'=>$id])->first();
        return view('all.edit',['storage'=>$edit]);

      }
       
      
    public function Updatelist(Request $req){
        if (!is_dir(public_path('pic/new'))) {            //img start
            mkdir(public_path('pic/new'), 0777, true);
        }
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $name = $image->getClientOriginalName();
            $imageName = time() . "_" . $name;
            $image->move(public_path('pic/new'), $imageName);
            $data["image"] ='pic/new/'.  $imageName;
        }
        $data["title"] = $req->title;
        $data["subtitle"] = $req->subtitle;
        $data["Description"] = $req->Description;
        $data["status1"] = $req->status1 ? 1 : 0 ;
        $data["status2"] = $req->status2 ? 1 : 0 ;
        $data["status3"] = $req->status3 ? 1 : 0 ;
       $data["status"] = $req->status;

      Dashbord::create($data);
    //  dd($req->all());
     return redirect()->route('service-list');      
    }
      
    
}
